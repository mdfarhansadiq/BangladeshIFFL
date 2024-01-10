<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class locations extends Sximo  {
	
	protected $table = 'vmsl_locations';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_locations.* FROM vmsl_locations  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_locations.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
