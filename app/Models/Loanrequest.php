<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class loanrequest extends Sximo  {
	
	protected $table = 'vmsl_loan_request';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_loan_request.* FROM vmsl_loan_request  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_loan_request.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
