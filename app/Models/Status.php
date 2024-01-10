<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class status extends Sximo  {
	
	protected $table = 'vmsl_status';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_status.* FROM vmsl_status  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_status.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
