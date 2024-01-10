<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class loancategory extends Sximo  {
	
	protected $table = 'vmsl_loan_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_loan_category.* FROM vmsl_loan_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_loan_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
