<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class policyandguidelinescategory extends Sximo  {
	
	protected $table = 'vsml_guidelines_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_guidelines_category.* FROM vsml_guidelines_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_guidelines_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
