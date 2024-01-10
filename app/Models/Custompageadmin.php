<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class custompageadmin extends Sximo  {
	
	protected $table = 'custom_page';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT custom_page.* FROM custom_page  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE custom_page.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
