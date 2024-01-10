<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class companyexecutives extends Sximo  {
	
	protected $table = 'vmsl_company_executives';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_company_executives.* FROM vmsl_company_executives  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_company_executives.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
