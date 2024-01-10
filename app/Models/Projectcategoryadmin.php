<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class projectcategoryadmin extends Sximo  {
	
	protected $table = 'vsml_project_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_project_category.* FROM vsml_project_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_project_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
