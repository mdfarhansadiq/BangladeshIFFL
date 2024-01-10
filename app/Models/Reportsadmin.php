<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class reportsadmin extends Sximo  {
	
	protected $table = 'vsml_reports';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_reports.* FROM vsml_reports  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_reports.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
