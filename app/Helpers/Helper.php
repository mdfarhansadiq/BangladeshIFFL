<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vmsl;

class Helper
{
	
    public static function getHomepageLoans(){
        $value = DB::table('vmsl_loan')->where('show_home_page', 1)->orderBy('priority', 'DESC')->get();
		return $value;
    }
    public static function getHomepageDeposits(){
        $value = DB::table('vmsl_deposit')->where('show_home_page', 1)->orderBy('id', 'DESC')->get();
		return $value;
    }
    
    
    public static function getLoanCategory(){
        $value = DB::table('vmsl_loan')->where('status', 1)->groupby('name')->orderBy('id', 'DESC')->get();
		return $value;
    }

    public static function getLoanCategory_byID($any){
        $value = DB::table('vmsl_loan')->where('id', $any)->get();
		return $value;
    }


    public static function getDepositCategory(){
        $value = DB::table('vmsl_deposit')->where('status', 1)->groupby('name')->orderBy('id', 'DESC')->get();
		return $value;
    }
    
    public static function getDistrict(){
        $value = DB::table('vmsl_district')->orderBy('name', 'ASC')->get();
		return $value;
    }

    public static function getDocumentsByname($name){
        $value = DB::table('vmsl_documents')->where('name', $name)->first();
		return '/uploads/files/'.$value->pdf_link;
    }

 
    public static function getDepositName($id){
        return DB::table('vmsl_deposit')->where('category', $id)->orderby('priority','asc')->get();
    }
    public static function getLoanName($id){
        return DB::table('vmsl_loan')->where('category', $id)->orderby('priority','asc')->get();
    }
    public static function getAllCsr(){
        return DB::table('vmsl_csr')->groupby('type')->get();
    }

    public static function getLoanCat(){
        return DB::table('vmsl_loan_category')->where('status', 1)->orderby('priority','asc')->get();
    }

    public static function getDepositCat(){
        return DB::table('vmsl_deposit_category')->where('status', 1)->orderby('priority','asc')->get();
    }
    public static function getJobName($id){
        return DB::table('vmsl_vacancy_announcement')->where('id', $id)->first()->title;
    }
    
    public static function get_category_by_id($id){
        return DB::table('tb_categories')->where('cid', $id)->first()->name;
    }
    
    public static function get_blog_category_by_id($id){
        $data = DB::table('blog_category')->where('id', $id)->first();
        if($data->title){
            return $data->title;
        }else{
            return null;
        }
    }
    
    public static function get_user_by_id($id){
        $user = DB::table('tb_users')->where('id', $id)->first();
        if($user){
            return $user;
        }else{
            return null;
        }
    }   

    public static function get_portfolio_category_by_id($id){
        $category = DB::table('vmsl_portfolio_category')->where('id', $id)->first();
        if($category){
            return $category->title;
        }else{
            return null;
        }
    }  

    public static function get_loan_category_by_id($id){
        $category = DB::table('vmsl_loan_category')->where('id', $id)->first();
        if($category){
            return $category->name;
        }else{
            return null;
        }
    }  


    public static function get_tender_category_by_id($id){
        $category = DB::table('vsml_e_tender_category')->where('id', $id)->first();
        if($category){
            return $category->title;
        }else{
            return null;
        }
    }  

    public static function get_complain_member_by_id($id){
        $member = DB::table('vmsl_complain_cell')->where('id', $id)->orderBy('id', 'DESC')->get();
        if($member){
            return $member;
        }else{
            return null;
        }
    }  
    
    public static function get_download_cat_by_id($id){
        $category = DB::table('vsml_download_category')->where('id', $id)->first();
        if($category){
            return $category->title;
        }else{
            return null;
        }
    }  
    public static function get_disclosure_cat_by_id($id){
        $category = DB::table('vsml_disclosure_category')->where('id', $id)->first();
        if($category){
            return $category->title;
        }else{
            return null;
        }
    } 
    public static function get_job_by_id($id){
        $job = DB::table('vmsl_vacancy_announcement')->where('id', $id)->first();
        if($job){
            return $job;
        }else{
            return null;
        }
    } 

    public static function get_status_by_id($id){
        $status = DB::table('vmsl_status')->where('id', $id)->first();
        if($status){
            return $status;
        }else{
            return null;
        }
    }
	
	
}