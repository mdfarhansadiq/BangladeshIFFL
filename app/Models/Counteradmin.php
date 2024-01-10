<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class counteradmin extends Sximo  {
	
	protected $table = 'couter_option';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT couter_option.* FROM couter_option  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE couter_option.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
