<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class bifflservices extends Sximo  {
	
	protected $table = 'vmsl_services';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_services.* FROM vmsl_services  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_services.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
