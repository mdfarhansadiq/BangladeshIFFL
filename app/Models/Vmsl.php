<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helper;


class Vmsl extends Model {


  public static function getSingleLoan($id){
    $value = DB::table('vmsl_loan')->where('id', $id)->get();
    return $value;
  }


  public static function getSingleDeposit($id){
    $value = DB::table('vmsl_deposit')->where('id', $id)->get();
    return $value;
  }
  public static function getAllDeposit(){
    $value = DB::table('vmsl_deposit')->where('status', 1)->get();
    return $value;
  }
    public static function getAllLoan(){
        $value = DB::table('vmsl_loan')->where('status', 1)->paginate(12);
        foreach ($value as $data){
          $data->category_title =  Helper::get_loan_category_by_id($data->category);
        }

        return $value;
    }
  public static function getAllLocation(){
    $value = DB::table('vmsl_locations')->where('status', 1)->get();
    return $value;
  }
  public static function getAllNews(){
    $value = DB::table('vmsl_news_events')->where('status', 1)->orderBy('date_time', 'DESC')->get();
    return $value;
  }

    public static function getSingleNews($id){
        $value = DB::table('vmsl_news_events')->where('id', $id)->where('status', 1)->first();
        return $value;
    }

  public static function getAllCsr(){
    $value = DB::table('vmsl_csr')->where('status', 1)->get();
    return $value;
  }

  public static function getSingleDirectors($id){
    $value = DB::table('vmsl_management_team')->where('id', $id)->get();
    return $value;
  }

    public static function managementTeam(){
        $value = DB::table('vmsl_management_team')->where('status', 1)->orderBy('priority', 'ASC')->get();
        return $value;
    }
    public static function managementTeamType(){
        $value = DB::table('vmsl_team_type')->get();
        return $value;
    }

    public static function documents($document_type){
      $value = DB::table('vmsl_documents')->where('document_type',$document_type)->orderBy('month','desc')->get();
      return $value;
  }
  public static function strategic_partners(){
    $value = DB::table('vmsl_strategic_partners')->get();
    return $value;
  }












}
