<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class careernewrequest extends Sximo  {
	
	protected $table = 'vmsl_careernewrequest';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_careernewrequest.* FROM vmsl_careernewrequest  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_careernewrequest.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
