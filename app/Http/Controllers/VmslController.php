<?php

namespace App\Http\Controllers;

use App\Models\DepositRequest;
use App\Models\Loanrequest;
use Illuminate\Http\Request;
use App\Models\Vmsl;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Spatie\Sitemap\SitemapGenerator;
use DataTables;
use App\Helpers\Helper;
use Carbon\Carbon;
use Auth;
use Hash;
use Mail;
use URL;
use Validator;

class VmslController extends Controller{

	
	public function loanPage(){
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['title']	= 'Loan';
		$data['loans']	= Vmsl::getAllLoan();
		return view('layouts.vmsl.loan.loans')->with($data);
	}

	public function loans($slug){
	    $data['title']	= 'Loan';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['allData'] = \DB::table('vmsl_loan')->where('interest_rate', $slug)->get();
		

		return view('layouts.vmsl.loan.index')->with($data);
	}

	public function CategoryWiseLoan($slug){
	    $data['title']	= 'Loan';
		$data['website_setting']	= \DB::table('website_setting')->first();
		
		$category = DB::table('vmsl_loan_category')->where('priority', 'LIKE', "%$slug%")->first();
		
		if($category){
		    $data['loans'] = DB::table('vmsl_loan')->where('category', $category->id)->where('status', 1)->paginate(12);
		}else{
		    $data['loans'] = null;
		}
	
		
		$data['categoryTitle'] = $category->name;

		return view('layouts.vmsl.loan.categoryWiseLoan')->with($data);
	}


	public function achievementPage(){
	    $data['achievement'] = \DB::table('vmsl_achievement')->orderBy('id', 'desc')->where('status', 1)->get();
		$data['website_setting']	= \DB::table('website_setting')->first();
	    $data['title']	= 'Achievement';
		return view('layouts.vmsl.page.achievement')->with($data);
	}
	
	public function achievementDetails($id){
	    $achievementDetails = \DB::table('vmsl_achievement')->where('id', $id)->first();
	    
	    $data['title'] = $achievementDetails->title;
	    $data['description'] = $achievementDetails->description;
	    $data['institution'] = $achievementDetails->institution;
	    $data['providoor'] = $achievementDetails->providoor;
	    $data['date'] = $achievementDetails->date;
		return $data;
	}
	
	public function memberDetails($id){
	    $member = \DB::table('vmsl_management_team')->where('id', $id)->first();
	    if($member){
	        if($member->message){
	            $data['description'] = $member->message;
	        }else{
	            $data['description'] = 'Description not found.';
	        }
    	    
	    }else{
    	    $data['description'] = 'Description not found.';
	    }

		return $data;
	}
	
	public function deposits(Request $req ){

		if($req->any == 'all'){
			$data = Vmsl::getAllDeposit();
			return view('layouts.vmsl.deposit.index')->with("allData",$data);
		}else{
			$data = Vmsl::getSingleDeposit($req->any);
			return view('layouts.vmsl.deposit.view')->with("allData",$data);
		}


	}

	public function directors(Request $req ){
			$data = Vmsl::getSingleDirectors($req->any);
			$this->data['title'] = 'Bord of Directors';
			return view('layouts.vmsl.directors.index')->with("allData",$data);
	}

	public function faq(){
		$data['title'] = 'FAQ';
		$data['website_setting'] = \DB::table('website_setting')->first();
		$data['data'] =[]; 
		$data['category'] = \DB::table('vmsl_faq_category')->where('status', 1)->orderBy('add_info1', 'asc')->get();
		return view('layouts.vmsl.faq.index')->with($data);
	}
	
	public function corporateGovernance($slug){
		$data['title'] = 'Corporate Governance';
		$data['website_setting'] = \DB::table('website_setting')->first();
		
		
		$cat = \DB::table('vmsl_team_type')->where('image', $slug)->first();
		
		$data['type_title'] = $cat->name;
		
		$data['teams'] = \DB::table('vmsl_management_team')->orderBy('priority', 'asc')->where('type', $cat->id)->where('status', 1)->get();
		
		return view('layouts.vmsl.page.singleTeam')->with($data);
	}	
	
	public function categoryWiseGuidelines($category_slug){
		$data['title'] = 'Policy And Guidelines';
		$data['website_setting'] = \DB::table('website_setting')->first();
		$data['category'] = \DB::table('vsml_guidelines_category')->where('description', $category_slug)->first();
		return view('layouts.vmsl.page.guidelines')->with($data);
	}
	
	
	
    public function guidelinesData(Request $request, $id){
        if ($request->ajax()) {
            $data = \DB::table('vsml_guidelines')->where('category', $id)->orderBy('id', 'desc')->where('status', 1)->get();
			foreach ($data as $d) {
				$d->category_title =  \DB::table('vsml_guidelines_category')->where('id', $id)->first()->title;
			}


            return Datatables::of($data)
                    ->addIndexColumn()

                    ->addColumn('title', function($row){  return $row->title; })
                    ->addColumn('category_title', function($row){  return  $row->category_title; })


                    ->addColumn('action', function($row){
                        if($row->document){
                           $btn = '<a target="__blank" href="/uploads/images/guidelines/'.$row->document.'" class="edit btn btn-primary btn-sm mr-2">View</a> <a href="/uploads/images/guidelines/'.$row->document.'" download class="edit btn btn-primary btn-sm downlaod_btn">Download</a>';
                            return $btn; 
                        }else{
                            return '';
                        }
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('layouts.vmsl.page.guidelines');
    }
	
	public function categoryWiseReport($category_slug){
		$data['title'] = 'Report';
		$data['website_setting'] = \DB::table('website_setting')->first();
		$data['category'] = \DB::table('vsml_report_category')->where('image', $category_slug)->first();
		return view('layouts.vmsl.page.report')->with($data);
	}
	
	
	
    public function ReportData(Request $request, $id){
        if ($request->ajax()) {
            $data = \DB::table('vsml_reports')->where('category', $id)->orderBy('id', 'desc')->get();
			foreach ($data as $d) {
				$d->category_title =  \DB::table('vsml_report_category')->where('id', $id)->first()->title;
			}


            return Datatables::of($data)
                    ->addIndexColumn()

                    ->addColumn('title', function($row){  return $row->title; })
                    ->addColumn('category_title', function($row){  return  $row->category_title; })


                    ->addColumn('action', function($row){
                        if($row->document){
                           $btn = '<a target="__blank" href="/uploads/images/reports/'.$row->document.'" class="edit btn btn-primary btn-sm mr-2">View</a> <a href="/uploads/images/reports/'.$row->document.'" download class="edit btn btn-primary btn-sm downlaod_btn">Download</a>';
                            return $btn; 
                        }else{
                            return '';
                        }
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('layouts.vmsl.page.report');
    }
	
	
	
	
	public function calculator(){
		$data['title'] = 'Financial Calculator';
		$data['website_setting'] = \DB::table('website_setting')->first();
		$data['data'] =[]; 
		return view('layouts.vmsl.calculator.loan')->with($data);
	}
	public function downloads(){
		$data['title'] = 'Downloads';
		$data['website_setting'] = \DB::table('website_setting')->first();
		return view('layouts.vmsl.downloads.index')->with($data);
	}
	
	
	
	public function strategic_partners(){
		$data = Vmsl::strategic_partners();
		return view('layouts.vmsl.strategic_partners.index')->with("allData",$data);
	}
	public function regulatory_disclosures(){
		$data = Vmsl::documents(3);
		return view('layouts.vmsl.regulatory_disclosures.index')->with("allData",$data);
	}

	public function files_info($id){
		$data['doc'] = Vmsl::documents($id);

		$data['title'] = DB::table('vmsl_document_type')->where('id',$id)->first()->name;
		return view('layouts.vmsl.files.index')->with("allData",$data);
	}
	
	public function getEventCategoryImgae($id){
		$data = DB::table('vmsl_event_category')->where('id',$id)->first();
		if($data->image){
		    return $data->image;
		}else{
		    return null;
		}
	}
	



	public function news_bulletin(){
		$data = Vmsl::documents(4);
		return view('layouts.vmsl.news_bulletin.index')->with("allData",$data);
	}

	public function vacancy_announcement(){
		$data['title'] = 'Career';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['circular'] = DB::table('vmsl_vacancy_announcement')->where('status',1)->whereDate('end_date', '>=', date("Y-m-d"))->orderBy('id', 'desc')->get();
		return view('layouts.vmsl.vacancy_announcement.index')->with($data);
	}
	
	

	
	public function complainCell(){
		$data['title'] = 'Complain Cell';
		$data['website_setting']	= \DB::table('website_setting')->first();
		
		$data['category'] = \DB::table('vmsl_complain_cell_category')->where('status', 1)->orderBy('id', 'DESC')->get();

		return view('layouts.vmsl.page.complainCell')->with($data);
	}
	
	public function projectPage($category_slug){
		$data['title'] = 'Projects';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$category = \DB::table('vsml_project_category')->where('image', $category_slug)->first();
		$data['category'] = $category;
		
        $data['project'] = \DB::table('vsml_project')->where('category', $category->id)->first();
        
		return view('layouts.vmsl.page.project')->with($data);
	}
	
	
	
	
	public function careerWithUs($slug){
		$data['title'] = 'Career';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['singleJob'] = DB::table('vmsl_vacancy_announcement')->where('add_info1', $slug)->first();
		return view('layouts.vmsl.vacancy_announcement.joinform')->with($data);
	}
	



	public function financial_report(){
		$data = [];
		$data['annualFinance'] = Vmsl::documents(5);
		$data['annualReport'] = Vmsl::documents(6);
		$data['halfQuater'] = Vmsl::documents(7);
		return view('layouts.vmsl.financial_report.index')->with("allData",$data);
	}


	public function whynhfc(){
	    $data = [];
		return view('layouts.vmsl.page.whynhfc')->with("allData",$data);
	}
	public function location(){
	    $data = Vmsl::getAllLocation();
		return view('layouts.vmsl.page.location')->with("allData",$data);
	}
	public function news(){
	    $data = Vmsl::getAllNews();
		return view('layouts.vmsl.page.news')->with("allData",$data);
	}
	public function csr(){
		$csr_id = \DB::table('blog_category')->where('status', 1)->where('title', 'LIKE', "%csr%")->first();
		$csr = \DB::table('blog')->where('status', 1)->where('category', $csr_id->id)->paginate(6);
		foreach($csr as $data) {
			$data->category = Helper::get_blog_category_by_id($data->category);
			$data->user = Helper::get_user_by_id($data->add_info);
		}
		//return view('layouts.vmsl.page.csr')->with($csr);
		return view('layouts.default.blog.csr')->with($csr);
	}


	public function complain_cell(){
		return view('layouts.vmsl.page.complain_cell');
	}
	public function shareholding_structure(){
		return view('layouts.vmsl.page.shareholding_structure');
	}

	public function featured_program(){
	    $data = [];
		return view('layouts.vmsl.page.featured_program')->with("allData",$data);
	}

	public function management_team(){
	    $data = [];
	    $data['team'] = Vmsl::managementTeam();
	    $data['teamType'] = Vmsl::managementTeamType();
	    return view('layouts.vmsl.page.management_team')->with('allData', $data);

	}

	public function news_details($id)
    {
        $data = Vmsl::getAllNews();
        $news = Vmsl::getSingleNews($id);

        return view('layouts.vmsl.page.news_details')->with('allData', $data)->with('news', $news);


    }

    public function loan_request(Request $request){

      	$this->validate($request,[
      	    'first_name' => 'required',
      	    'last_name' => 'required',
    		'email' => 'email|required',
    		'phone' => 'required',
    		'organization' => 'required',
    		'designation' => 'required',
    		'message' => 'required',
    		'loan_type' => 'required',
    		'g-recaptcha-response' => 'required|captcha',
    	]);
        

		
		
        $loanRequest['name'] = $request->first_name;
        $loanRequest['address']= $request->last_name;
        $loanRequest['loan_type'] = $request->loan_type;
        $loanRequest['company_name'] = $request->organization ?? '';
        $loanRequest['company_designation'] = $request->designation ?? '';
        $loanRequest['email'] = $request->email ?? '';
        $loanRequest['contact_number'] = $request->phone ?? '';
        $loanRequest['business_experience'] = $request->message;
        $loanRequest['status'] = 1;
        
		$id = DB::table('vmsl_loan_request')->insertGetId($loanRequest);
		
		if($id){
			return back()->with('success', 'Loan application sent successfully !');
		}else{
			return back()->with('error', 'Something went wrong !');
		}
    }
    
    
    








    public function deposit_request(Request $request)
    {
        $depositRequest = new DepositRequest;

        $depositRequest->deposit_type = $request->deposit_type;
        $depositRequest->name = $request->name;
        $depositRequest->address= $request->address;
        $depositRequest->business_name = $request->business_name ?? '';
        $depositRequest->business_address = $request->business_address ?? '';
        $depositRequest->business_sector = $request->business_sector ?? '';
        $depositRequest->business_experience = $request->business_experience ?? '';
        $depositRequest->district = $request->district;
        $depositRequest->contact_number = $request->contact_number;
        $depositRequest->email = $request->email;
        $depositRequest->status = 1;
        $depositRequest->company_name = $request->company_name ?? '';
        $depositRequest->company_address = $request->company_address ?? '';
        $depositRequest->company_designation = $request->company_designation ?? '';

        $depositRequest->save();

        return redirect()->back()->with('msg', 'Deposit application sent successfully!');
    }

    public function sitemap(){
		$data['title'] = 'Sitemap';
		$data['website_setting']	= \DB::table('website_setting')->first();
        return \view('layouts.vmsl.page.sitemap', $data);
    }

	public function contactMessage(Request $request){
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			//'email' => 'required|email',
			'phone' => 'required',
			//'subject' => 'required',
			'message' => 'required',
			//'g_recaptcha_response' => 'required|captcha',
		]);

    //     if($request->email){
    // 		$validator = Validator::make($request->all(), [
    // 			'email' => 'email',
    // 		]);
    //     }
        
        
        
		if ($validator->fails()) {
			$data['status'] = 0;
			$data['message'] = $validator->errors();
			return response()->json($data, 200);
		}

		$data['name'] = $request->name;
// 		$data['email'] = $request->email;
		
		$data['email'] = env('ALL_MAIL_FROM_ADDRESS');
		$data['phone'] = $request->phone;
		$data['subject'] = $request->subject;
		$data['message'] = $request->message;

    	$id = DB::table('contacts')->insertGetId($data);


        $dynamic_mail_form_general_setting = trim(config('sximo.cnf_email')."\r\n");
        // var_dump(env('MAIL_FROM_ADDRESS'));
        // var_dump($dynamic_mail_form_general_setting);
       // exit;
        
        //$email         = $request->email;
        $email         = env('ALL_MAIL_FROM_ADDRESS');
        $subject       =$request->subject??null;
        $from          ='BIFFL';
	    $template      ='contact';
	    $message       ='message';
        $data['phone'] = $request->phone;
        $data['name']  =  $request->name;
        $data['email'] = $email;
        
        
        
		Mail::send('emails.'.$template, ['data' => $data], function ($message) use ($email,$subject) {
			$message->from($email ,$from);
			$message->to(env('CONTACT_US_MAIL'))->subject($subject);
		});
		
		if($id){
		    return 1;
		}else{
		    return 2;
		}
		
	}




	public function eventSingle($slug){
		$data['title'] = 'News and Events';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['eventSingle'] = DB::table('vmsl_news_events')->where('add_info', $slug)->first();
		$data['latest'] = DB::table('vmsl_news_events')->where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
		
		return view('layouts.vmsl.page.eventSingle', $data);
	}
	
	public function serviceSignlePage($slug){
		$data['title'] = 'Services';
		$data['website_setting'] = \DB::table('website_setting')->first();
		
		$data['signleservice'] = DB::table('vmsl_services')->where('add_info1', $slug)->first();

		
		return view('layouts.vmsl.page.signleservice', $data);
	}	
	
	
	
	public function events(){
		$data['title'] = 'News and Event';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['latest'] = DB::table('vmsl_news_events')->where('status', 1)->orderBy('date_time', 'DESC')->paginate(12);
		return view('layouts.vmsl.page.event', $data);
	}
	
	public function financialLiteracy(){
		$data['title'] = 'Financial Literacy';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['latest'] = DB::table('blog')->where('status', 1)->where('category', 5)->orderBy('created_at', 'DESC')->paginate(12);
		return view('layouts.vmsl.page.financialLiteracy', $data);
	}	

	
	
	public function bongobondhu_corner(){
		$data['title'] = 'Bongobondhu Corner';
		$data['website_setting']	= \DB::table('website_setting')->first();
	    $category = DB::table('vmsl_event_category')->where('title', 'LIKE', "%Bangabandhu Corner%")->first();
	    if($category){
    		$data['latest'] = DB::table('vmsl_news_events')->where('category', $category->id)->where('status', 1)->orderBy('id', 'DESC')->paginate(12);
    		return view('layouts.vmsl.page.bongobondhu', $data);
	    }else{
	        return view('layouts.default.notfound')->with($data);
	    }

	}

	
	
	
	
	
	public function contactPage(){
		$data['title'] = 'Contact Us';
		$data['website_setting']	= \DB::table('website_setting')->first();
		return view('layouts.vmsl.page.contact', $data);
	}
	
	public function grsPage(){
		$data['title'] = 'Grievance Redress Service (GRS)';
		$data['website_setting']	= \DB::table('website_setting')->first();
		return view('layouts.vmsl.page.grs', $data);
	}
	
	public function grsPagesubmit(Request $request){
		$validator = Validator::make($request->all(), [
			'Grievance_Title' => 'required',
			'Project_Involved' => 'required',
			'Adverse_Impact' => 'required',
			'Submitted_By' => 'required',
			'Submission_For' => 'required',
			
			'Cell_No' => 'required',
			'Email' => 'required|email',
			'Address' => 'required',
		]);


        
        


		$data['Grievance_Title'] = $request->Grievance_Title;
		$data['Project_Involved'] = $request->Project_Involved;
		$data['Adverse_Impact'] = $request->Adverse_Impact;
		$data['Submitted_By'] = $request->Submitted_By;
		$data['Submission_For'] = $request->Submission_For;
        $data['Cell_No'] = $request->Submission_For;
        $data['Email'] = $request->Submission_For;
        $data['Address'] = $request->Submission_For;
        
        if($request->Relevant_Document){
            $imageName = uniqid().'.'.$request->Relevant_Document->getClientOriginalExtension();
            $request->Relevant_Document->move(public_path('uploads/images/grs'), $imageName);
			$data['Relevant_Document'] = $imageName; 
			$email_data['Relevant_Document'] = $request->server->get('SERVER_NAME').'/uploads/images/grs/'.$imageName; 
        }
        
        
        //Send Mail
        //$email         = $request->Email;
         $email         = env('ALL_MAIL_FROM_ADDRESS');
        
        $subject       = 'Grievance Redress Service (GRS)';
        $from          ='BIFFL';
	    $template      ='grs';
	    $message       ='message';
        $email_data['phone'] = $request->Cell_No;
        $email_data['name']  =  $request->Grievance_Title;
        //$email_data['email'] = $request->Email;
        $email_data['email'] = env('ALL_MAIL_FROM_ADDRESS');
        $email_data['Project_Involved'] = $request->Project_Involved;
        $email_data['Adverse_Impact'] = $request->Adverse_Impact;
        $email_data['Submitted_By'] = $request->Submitted_By;
        $email_data['Submission_For'] = $request->Submission_For;
        $email_data['Address'] = $request->Address;
        
        
        $website_text = DB::table('website_text')->where('slug', 'LIKE', "%grievance-redress-service%")->first();
        if($website_text && $website_text->description){
            $send_email = $website_text->description;
        }else{
            $send_email = null;
        }
         
     
         
        //$send_email2 = 'arifindex22@gmail.com';
         
        if($send_email){
    		Mail::send('emails.'.$template, ['data' => $email_data], function ($message) use ($email,$subject) {
    			$message->from($email ,$from);
    			$message->to(env('GRS_MAIL'))->subject($subject);
    		});
        }

        
        DB::table('grs_form')->insert($data);
		return redirect()->back()->with('success', 'Grievance Redress Service Request successfull !');
	}	
	
	

	public function etenderPage(){
		$data['title'] = 'E-Tender';
		$data['website_setting']	= \DB::table('website_setting')->first();
		return view('layouts.vmsl.page.etender', $data);
	}


    public function etenderPagedata(Request $request){
        if ($request->ajax()) {
            $data = DB::table('vsml_e_tender')->where('status', 1)->orderBy('id', 'desc')->get(); 
			foreach ($data as $d) {
				$d->category_title =  Helper::get_tender_category_by_id($d->category);
			}


            return Datatables::of($data)
                    ->addIndexColumn()

                    ->addColumn('title', function($row){  return $row->title; })
                    ->addColumn('category_title', function($row){  return $row->category_title; })
                    ->addColumn('start_date', function($row){  return $row->btn_text; })
                    ->addColumn('end_date', function($row){  return $row->btn_link; })
                    ->addColumn('action', function($row){
                        
                        $fdate = $row->btn_text;
                        $tdate = $row->btn_link;
                        $datetime1 = strtotime($fdate); //start date
                        $datetime2 = strtotime($tdate); // end date
                        //$days = (int)(($datetime2 - $datetime1)/86400);
                        $now =  strtotime(Carbon::today()->format('Y-m-d'));
                  
                                                
                        
                        if($datetime1 <= $now && $now <= $datetime2){
                            $btn = '<a target="__blank" href="/uploads/etender/'.$row->document.'" class="edit btn btn-primary btn-sm mr-2">View</a> <a href="/uploads/etender/'.$row->document.'" download class="edit btn btn-primary btn-sm downlaod_btn">Download</a>';
                            return $btn;
                        }else{
                            $btn = 'Not Available';
                            return $btn;
                        }
                        
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('layouts.vmsl.page.etender');
    }

    public function downlaoddata(Request $request){
 
            if ($request->ajax()) {
                $data = DB::table('vsml_download')->where('status', 1)->orderBy('id', 'desc')->get(); 
    			foreach ($data as $d) {
    				$d->category_title =  Helper::get_download_cat_by_id($d->category);
    			}
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('title', function($row){  return $row->title; })
                        ->addColumn('category_title', function($row){  return  $row->category_title; })
                        ->addColumn('action', function($row){
                            if($row->document){
                                  $btn = '<a target="__blank" href="/uploads/download/'.$row->document.'" class="edit btn btn-primary btn-sm mr-2">View</a> <a href="/uploads/download/'.$row->document.'" download class="edit btn btn-primary btn-sm downlaod_btn">Download</a>';
                                    return $btn; 
    
                            }else{
                                return '';
                            }
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
    
    }

    // public function downlaoddata(Request $request){
    //     if(Auth::check()){
    //         if ($request->ajax()) {
    //             $data = DB::table('vsml_download')->where('status', 1)->orderBy('id', 'desc')->get(); 
    // 			foreach ($data as $d) {
    // 				$d->category_title =  Helper::get_download_cat_by_id($d->category);
    // 			}
    //             return Datatables::of($data)
    //                     ->addIndexColumn()
    //                     ->addColumn('title', function($row){  return $row->title; })
    //                     ->addColumn('category_title', function($row){  return  $row->category_title; })
    //                     ->addColumn('action', function($row){
    //                         if($row->document){
    //                               $btn = '<a target="__blank" href="/uploads/download/'.$row->document.'" class="edit btn btn-primary btn-sm mr-2">View</a> <a href="/uploads/download/'.$row->document.'" download class="edit btn btn-primary btn-sm downlaod_btn">Download</a>';
    //                                 return $btn; 
    
    //                         }else{
    //                             return '';
    //                         }
    //                     })
    //                     ->rawColumns(['action'])
    //                     ->make(true);
    //         }
    //     }else{
    //         if ($request->ajax()) {
    //             $data = DB::table('vsml_download')->where('status', 1)->orderBy('id', 'desc')->get(); 
    // 			foreach ($data as $d) {
    // 				$d->category_title =  Helper::get_download_cat_by_id($d->category);
    // 			}
    //             return Datatables::of($data)
    //                     ->addIndexColumn()
    //                     ->addColumn('title', function($row){  return $row->title; })
    //                     ->addColumn('category_title', function($row){  return  $row->category_title; })
    //                     ->addColumn('action', function($row){
    //                         if($row->document){
    //                               $btn = '<a href="/user/login">Login</a> to access this file.';
    //                                 return $btn; 
    
    //                         }else{
    //                             return '';
    //                         }
    //                     })
    //                     ->rawColumns(['action'])
    //                     ->make(true);
    //         }
    //     }
    //     return view('layouts.vmsl.page.etender');
    // }


	public function aboutPage(){
		$data['title'] = 'About Us';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['about_biffl'] = DB::table('about_biffl')->where('id', 1)->first();
		return view('layouts.vmsl.page.about', $data);
	}



	public function careerRequestSubmit(Request $request){
		$this->validate($request,[
			'name' => 'required',
			'email' => 'email|required',
			'mobile' => 'required',
			'photo' => 'required',
			'cv' => 'required',
			'job' => 'required',
			'g-recaptcha-response' => 'required|captcha',
		]);



		$already = DB::table('vmsl_careernewrequest')->where('phone', $request->mobile)->where('job', $request->job)->first();
		if($already){
		    
			return back()->with('error', 'Sorry..! You already requested.');
		}

		$data['add_info1'] = $request->name;
		//$data['email'] = $request->email;
		$data['email'] =env('ALL_MAIL_FROM_ADDRESS');
		$data['phone'] = $request->mobile;
		$data['note'] = $request->note;
		$data['job'] = $request->job;
		$data['status'] = 4;


		if($request->photo){
            $imageName = uniqid().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('uploads/files/'), $imageName);
			$data['photo'] = $imageName;  
        }
		if($request->cv){
            $imageName = uniqid().'.'.$request->cv->getClientOriginalExtension();
            $request->cv->move(public_path('uploads/files/'), $imageName);
			$data['cv'] = $imageName;  
        }
		$id = DB::table('vmsl_careernewrequest')->insertGetId($data);
		if($id){
			return back()->with('success', 'Join request send successfully !');
		}else{
			return back()->with('error', 'Something went wrong !');
		}
	}
	
	
	
	public function newsletter(Request $request){
		$this->validate($request,[
			'email' => 'email|required|unique:vmsl_newslatter,email',
		]);

		$already = DB::table('vmsl_career_rewquest')->where('mobile', $request->mobile)->where('job_post_id', $request->job_post_id)->first();
		if($already){
			return back()->with('error', 'Sorry..! You already requested.');
		}

		$data['name'] = $request->name;
		//$data['email'] = $request->email;
		$data['email'] = env('ALL_MAIL_FROM_ADDRESS');
        $data['ip_address'] = $request->ip();


	
		$id = DB::table('vmsl_newslatter')->insertGetId($data);
		if($id){
			return back()->with('success2', 'Thank you for subscription !');
		}else{
			return back()->with('error2', 'Something went wrong !');
		}
	}	
	
	
	
	public function disclosurePage(){
		$data['title'] = 'Disclosure';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['disclosures'] = DB::table('vsml_disclosure')->where('type', 'preview')->where('status', 1)->orderBy('serial', 'asc')->get(); 
		return view('layouts.vmsl.page.disclosure', $data);
	}	
	
	
	
	public function greenOffice(){
		$data['title'] = 'Green Office';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['green_office'] = DB::table('green_office')->where('status', 1)->orderBy('id', 'desc')->get(); 
		return view('layouts.vmsl.page.greenoffice', $data);

	}		

	
	
	
    public function disclosureData(Request $request){
        if ($request->ajax()) {
            $data = DB::table('vsml_disclosure')->where('type', 'list')->orderBy('serial', 'asc')->where('status', 1)->get(); 
			foreach ($data as $d) {
				$d->category_title =  Helper::get_disclosure_cat_by_id($d->category);
			}


            return Datatables::of($data)
                    ->addIndexColumn()

                    ->addColumn('title', function($row){  
                        return $row->title; 
                        
                    })
                    ->addColumn('category_title', function($row){  return  $row->category_title; })
                    ->addColumn('updated_at', function($row){    
                     $d =  date('j F, Y', strtotime($row->updated_at));
                        return $d;
                    })

                    ->addColumn('action', function($row){
                        if($row->document){
                           $btn = '<a target="__blank" href="/uploads/disclosure/'.$row->document.'" class="edit btn btn-primary btn-sm mr-2">View</a> <a href="/uploads/disclosure/'.$row->document.'" download class="edit btn btn-primary btn-sm downlaod_btn">Download</a>';
                            return $btn; 
                        }else{
                            return '';
                        }
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('layouts.vmsl.page.disclosure');
    }
    
	public function companyExecutives(){
		$data['title'] = 'Company Executives';
		$data['website_setting'] = \DB::table('website_setting')->first();
		$types = DB::table('vmsl_team_type')->where('name', 'LIKE', "%Company Executives%")->first();
		$data['category'] = $types;
		if($types){
		    $data['companyExecutives'] = DB::table('vmsl_company_executives')->where('category', $types->id)->orderBy('serial', 'asc')->where('status', 1)->get();
		}else{
		    $data['companyExecutives'] = null;
		}
		return view('layouts.vmsl.page.companyExecutives', $data);
	}
    
	public function committees($category_slug){
		$data['title'] = 'Committees';
		$data['website_setting'] = \DB::table('website_setting')->first();
		$types = DB::table('vmsl_team_type')->where('image', $category_slug)->first();
		$data['category'] = $types;
		if($types){
		    
		    $data['companyExecutives'] = DB::table('vmsl_company_executives')->where('category', $types->id)->orderBy('serial', 'asc')->where('status', 1)->get();
		}else{
		    $data['companyExecutives'] = null;
		}
		return view('layouts.vmsl.page.committees', $data);
	}

	public function getSearchContent(Request $request){

	    $content = $request->content;
	    if($content){
	        $loans = DB::table('vmsl_loan')->where('name', 'LIKE', "%$content%")->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
	        if(count($loans) < 1){
	            $loans_categories = DB::table('vmsl_loan_category')->where('name', 'LIKE', "%$content%")->where('status', 1)->orderBy('id', 'desc')->get();
	            $categories = [];
	            foreach($loans_categories as $cat){
	                $categories[] = $cat->id;
	            }
	            
	            if(count($categories) > 0){
	                $loans = DB::table('vmsl_loan')->whereIn('category', $categories)->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
	            }else{
	                $loans = null;
	            }
	        }
	        $services = DB::table('vmsl_services')->where('title', 'LIKE', "%$content%")->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
		    $careers = DB::table('vmsl_vacancy_announcement')->where('status',1)->whereDate('end_date', '>=', date("Y-m-d"))->where('title', 'LIKE', "%$content%")->orderBy('id', 'desc')->get();
		    $events = DB::table('vmsl_news_events')->where('title', 'LIKE', "%$content%")->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
		    $projects = DB::table('vsml_project')->where('title', 'LIKE', "%$content%")->where('status', 1)->orderBy('id', 'desc')->get();
		    $reports = DB::table('vsml_reports')->where('title', 'LIKE', "%$content%")->select('title','category')->where('status', 1)->orderBy('id', 'desc')->get();
		    $guidelines = DB::table('vsml_guidelines')->where('title', 'LIKE', "%$content%")->select('title','category')->where('status', 1)->orderBy('id', 'desc')->get();
		    $leadership = DB::table('vmsl_team_type')->where('name', 'LIKE', "%$content%")->where('status', 1)->orderBy('id', 'desc')->get();
		    
	    }else{
	        $loans = null;
	        $services = null;
	        $careers = null;
	        $events = null;
	        $projects = null;
	        $reports = null;
	        $guidelines = null;
	        $leadership = null;
	    }
	    foreach($loans as $d){
	        $cat = DB::table('vmsl_loan_category')->where('id', $d->category)->first();
	        $d->category_title = $cat->name; 
	    }
	    
	    

	    if(count($loans) > 0){
	        $data['laon_status'] = 1;
	    }else{
	         $data['laon_status'] = 0;
	    }
	    if(count($services) > 0){
	        $data['service_status'] = 1;
	    }else{
	         $data['service_status'] = 0;
	    }
	    if(count($careers) > 0){
	        $data['career_status'] = 1;
	    }else{
	        $data['career_status'] = 0;
	    }
	    if(count($events) > 0){
	        $data['event_status'] = 1;
	    }else{
	        $data['event_status'] = 0;
	    }
	    if(count($projects) > 0){
	        $data['project_status'] = 1;
	    }else{
	        $data['project_status'] = 0;
	    }
	    if(count($reports) > 0){
	        $data['report_status'] = 1;
	    }else{
	        $data['report_status'] = 0;
	    }
	    if(count($guidelines) > 0){
	        $data['guideline_status'] = 1;
	    }else{
	        $data['guideline_status'] = 0;
	    }
	    if(count($leadership) > 0){
	        $data['leadership_status'] = 1;
	    }else{
	        $data['leadership_status'] = 0;
	    }  
	    
	    
	    
	    
	   $html = '<div class="full_serach">';
	   $html .= '<div class="row">';
	   
	    if($data['laon_status'] > 0){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Our Loans</h4> <hr></div>';
    	    foreach($loans as $loan){
    	        $html .= '<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <div class="full_box">
                            <img src="/loan/'.$loan->icon.'" alt="loan image" class="full_box_image">
                            <div class="middle_box">
                                <a href="/loans/'.$loan->interest_rate.'"> <div class="middle_text">Read More</div></a>
                            </div>
                            <div class="event_details loan_details">
                                <ul>
                                    <li>  <i class="fa fa-caret-right" aria-hidden="true"></i><span>'.$loan->category_title.'</span></li>
                                </ul>
                                <b> '.$loan->name.' </b>
                            </div>
                        </div>
                    </div>
                    ';
    	    }
	    }
	    
	    
	    if($data['service_status'] > 0){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Our Services</h4> <hr></div>';
    	    foreach($services as $service){
    	        $html .= '<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <div class="full_box">
                            <img src="/uploads/images/services/'.$service->image.'" alt="loan image" class="full_box_image">
                            <div class="middle_box">
                                <a href="/service/'.$service->add_info1.'"> <div class="middle_text">Read More</div></a>
                            </div>
                            <div class="event_details loan_details">
                                <b> '.$service->title.' </b>
                            </div>
                        </div>
                    </div>
                    ';
    	    }
	    }
	    
	    
	    
	    if($data['event_status'] == 1){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Events and News</h4> <hr></div>';
             foreach($events as $singleEvent){
    	        $html .= '<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                        <div class="full_box">
                            <img src="/uploads/images/event/'.$singleEvent->image.'" alt="loan image" class="full_box_image">
                            <div class="middle_box">
                                <a href="/event/single/'.$singleEvent->add_info.'"> <div class="middle_text">Read More</div></a>
                            </div>
                            <div class="event_details loan_details">
                                <ul>
                                    <li>  <i class="fa fa-caret-right" aria-hidden="true"></i><span>'.$singleEvent->location.'</span></li>
                                </ul>
                                <b> '.\Illuminate\Support\Str::limit($singleEvent->title, 45, $end='..').' </b>
                            </div>
                        </div>
                    </div>
                    ';
             }
	    }
	    
	    
	    if($data['career_status'] > 0){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Careers</h4> <hr></div>';
    	    foreach($careers as $key => $c){
    	        $html .= '<div class="job_item" id="search_jobitem">
				<div class="row">
						<div class="col-3 col-sm-2 col-md-2 col-lg-2">
							<p class="text-center"><span class="serial_text">'. ($key+1).'</span></p>
						</div>
						<div class="col-9 col-sm-6 col-md-6 col-lg-6">
							<p class="post_title text-uppercase"> <b>'.strtoupper($c->title).'</b></p>
							<ul class="career_date">
								<li> <b>Post Date:</b> '. date('d M, Y', strtotime($c->post_date)) .' </li>
								<li> <b>End Date:</b> '. date('d M, Y', strtotime($c->end_date)) .'</li>
							</ul>
							
						</div>
						<div class="col-6 col-sm-2 col-md-2 col-lg-2 text-right pr-0">
							<a class="apply_button button" href="'.asset('uploads/files/'.$c->circular_file).'"><span>View circular</span></a>
						</div>
						<div class="col-6 col-sm-2 col-md-2 col-lg-2">
						<a target="__blank" class="apply_button button" href="'. $c->add_info2.'"><span>apply now</span></a>
						</div>
					</div>
			   </div>
                    ';
    	    }
		
	    }
	    
	    if($data['project_status'] == 1){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Our Projects</h4> <hr></div>';
             foreach($projects as $project){
                $category = \DB::table('vsml_project_category')->where('id', $project->category)->select('image')->first();
    	        $html .= '<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 search_page_link">
                        <a href="/projects/'.$category->image.'">'.$project->title.'</a>
                    </div>
                    ';
             }
	    }
	    
	    if($data['report_status'] == 1){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Our Reports</h4> <hr></div>';
             foreach($reports as $report){
                $category = \DB::table('vsml_report_category')->where('id', $report->category)->select('image')->first();
    	        $html .= '<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-4 search_page_link">
                        <a href="/reports/'.$category->image.'">'.$report->title.'</a>
                    </div>
                    ';
             }
	    }
	    
	    if($data['guideline_status'] == 1){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Policy and  guidelines</h4> <hr></div>';
             foreach($guidelines as $guideline){
                $category = \DB::table('vsml_guidelines_category')->where('id', $guideline->category)->select('description')->first();
    	        $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 search_page_link">
                        <a href="/policy-and-guidelines/'.$category->description.'">'.$guideline->title.'</a>
                    </div>
                    ';
             }
	    }
	    if($data['leadership_status'] == 1){
             $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12"><h4 class="m-0">Leadership and Committees</h4> <hr></div>';
             foreach($leadership as $leader){
                if($leader->image == 'company-executives'){
        	        $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 search_page_link">
                            <a href="/company-executives">'.$leader->name.'</a>
                        </div>
                        ';
                }elseif($leader->image == 'advisory-board' || $leader->image == 'board-of-directors'){
        	        $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 search_page_link">
                            <a href="/corporate-governance/'.$leader->image.'">'.$leader->name.'</a>
                        </div>
                        ';
                }else{
        	        $html .= '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 search_page_link">
                            <a href="/committees/'.$leader->image.'">'.$leader->name.'</a>
                        </div>
                        ';
                }
                    
                
             }
	    }
	    
	    
	    
	    
	    
	    
	    $html .='</div></div>';
	    $data['haveData'] = $data['laon_status'] + $data['service_status'] + $data['career_status'] + $data['event_status'] + $data['project_status'] + $data['report_status'] + $data['guideline_status'] + $data['leadership_status'];
	    $data['html'] = $html;
	    return $data;
	    
	    
	}
	
	
	public function getSearchPage(Request $request){
	    
	    $content = $request->content;
	    if($content){
	        $data['loans'] = DB::table('vmsl_loan')->where('name', 'LIKE', "%$content%")->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
	        if(count($loans) < 1){
	            $loans_categories = DB::table('vmsl_loan_category')->where('name', 'LIKE', "%$content%")->where('status', 1)->orderBy('id', 'desc')->get();
	            $categories = [];
	            foreach($loans_categories as $cat){
	                $categories[] = $cat->id;
	            }
	            if(count($categories) > 0){
	                $data['loans'] = DB::table('vmsl_loan')->whereIn('category', $categories)->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
	            }else{
	                $data['loans'] = null;
	            }
	        }
	        $data['services'] = DB::table('vmsl_services')->where('title', 'LIKE', "%$content%")->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
		    $data['careers'] = DB::table('vmsl_vacancy_announcement')->where('status',1)->whereDate('end_date', '>=', date("Y-m-d"))->where('title', 'LIKE', "%$content%")->orderBy('id', 'desc')->get();
		    $data['events'] = DB::table('vmsl_news_events')->where('title', 'LIKE', "%$content%")->where('status', 1)->limit(6)->orderBy('id', 'desc')->get();
		    $data['projects'] = DB::table('vsml_project')->where('title', 'LIKE', "%$content%")->where('status', 1)->orderBy('id', 'desc')->get();
		    $data['reports'] = DB::table('vsml_reports')->where('title', 'LIKE', "%$content%")->select('title','category')->where('status', 1)->orderBy('id', 'desc')->get();
		    $data['guidelines'] = DB::table('vsml_guidelines')->where('title', 'LIKE', "%$content%")->select('title','category')->where('status', 1)->orderBy('id', 'desc')->get();
		    $data['leadership'] = DB::table('vmsl_team_type')->where('name', 'LIKE', "%$content%")->where('status', 1)->orderBy('id', 'desc')->get();
		    
	    }else{
	        $data['loans'] = null;
	        $data['services'] = null;
	        $data['careers'] = null;
	        $data['events'] = null;
	        $data['projects'] = null;
	        $data['reports'] = null;
	        $data['guidelines'] = null;
	        $data['leadership'] = null;
	    }
	    foreach($loans as $d){
	        $cat = DB::table('vmsl_loan_category')->where('id', $d->category)->first();
	        $d->category_title = $cat->name; 
	    }
	    
		$data['title'] = 'Search';
		$data['website_setting']	= \DB::table('website_setting')->first();
		$data['haveData'] = count($data['loans'])+count($data['services'])+count($data['careers'])+count($data['events'])+count($data['projects'])+count($data['reports'])+count($data['guidelines'])+count($data['leadership']);
	    return view('layouts.default.template.search')->with($data);
	}
	
	
	
	
	
	
	
	
	public function callfor(Request $request){
	    $request_status = $request->call_id;
	    $ids = $request->ids;
	    
	    $candidates = DB::table('vmsl_careernewrequest')->whereIn('id', $ids)->orderBy('id', 'desc')->get();
	    
	    
	   foreach($candidates as $candidate){
    	    if($request_status == 7){
                $email= $candidate->email;
                $subject='Final Selected';
                $from='BIFFL';
        	    $template='selected';
        	    $message='message';
                $data['date'] = date('M j, Y', strtotime($request->calldate));
                $data['time'] = date('h:s a', strtotime($request->calldate));
                $data['phone'] = $candidate->phone;
                $data['name'] = $candidate->add_info1;
                $data['email'] = $candidate->email;
                $data['job'] = Helper::get_job_by_id($candidate->job)->title;
                $data['mail_for'] = 'Selected';
        		Mail::send('emails.'.$template, ['data' => $data], function ($message) use ($email,$subject) {
        			$message->from(env('MAIL_FROM_ADDRESS'),$from);
        			$message->to($email)->subject($subject);
        		});
    	    }elseif($request_status == 5){
    	        $call_for = 'Written';
                $email= $candidate->email;
                $subject='Written';
                $from='BIFFL';
        	    $template='written';
        	    $message='message';
                $data['date'] = date('M j, Y', strtotime($request->calldate));
                $data['time'] = date('h:s a', strtotime($request->calldate));
                $data['phone'] = $candidate->phone;
                $data['name'] = $candidate->add_info1;
                $data['email'] = $candidate->email;
                $data['job'] = Helper::get_job_by_id($candidate->job)->title;
                $data['mail_for'] = $call_for;
        		Mail::send('emails.'.$template, ['data' => $data], function ($message) use ($email,$subject) {
        			$message->from(env('MAIL_FROM_ADDRESS'),$from);
        			$message->to($email)->subject($subject);
        		}); 
        		
    	    }elseif($request_status == 6){
    	        $call_for = 'Interview';
                $email= $candidate->email;
                $subject='Interview';
                $from='BIFFL';
        	    $template='interview';
        	    $message='message';
                $data['date'] = date('M j, Y', strtotime($request->calldate));
                $data['time'] = date('h:s a', strtotime($request->calldate));
                $data['phone'] = $candidate->phone;
                $data['name'] = $candidate->add_info1;
                $data['email'] = $candidate->email;
                $data['job'] = Helper::get_job_by_id($candidate->job)->title;
                $data['mail_for'] = $call_for;
        		Mail::send('emails.'.$template, ['data' => $data], function ($message) use ($email,$subject) {
        			$message->from(env('MAIL_FROM_ADDRESS'),$from);
        			$message->to($email)->subject($subject);
        		});
    	    }
        	DB::table('vmsl_careernewrequest')->where('id', $candidate->id)->update(['status' => $request_status]);    	    
	   }
	    return back()->with('status', 'success')->with('message','Success ! Send mail to selected person.');
	}
	
	
	
	
	
	
	
	public function custom_page($slug){
	    
		$data['website_setting']	= \DB::table('website_setting')->first();
		$page = \DB::table('custom_page')->where('slug', 'LIKE', "%$slug%")->first();
		if($page){
		    $sliders = \DB::table('custom_page_slider')->where('page', $page->id)->get();
		    $page->sliders = $sliders;
		}else{
		    $data['title']	= 'Not found';
		    return view('layouts.default.notfound')->with($data);
		}
		
		$data['page'] = $page;
		$data['title']	= $page->title;
		
		return view('layouts.default.template.page_custom')->with($data);
	}
	

}

?>
