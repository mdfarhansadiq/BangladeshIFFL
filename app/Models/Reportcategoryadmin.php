<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class reportcategoryadmin extends Sximo  {
	
	protected $table = 'vsml_report_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_report_category.* FROM vsml_report_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_report_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
