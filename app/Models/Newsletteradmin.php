<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class newsletteradmin extends Sximo  {
	
	protected $table = 'vmsl_newslatter';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_newslatter.* FROM vmsl_newslatter  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_newslatter.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
