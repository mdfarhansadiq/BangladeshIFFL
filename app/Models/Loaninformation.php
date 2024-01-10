<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class loaninformation extends Sximo  {
	
	protected $table = 'vmsl_loan';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT vmsl_loan.* FROM vmsl_loan ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE vmsl_loan.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
