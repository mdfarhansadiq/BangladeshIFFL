<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class disclosurecategory extends Sximo  {
	
	protected $table = 'vsml_disclosure_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_disclosure_category.* FROM vsml_disclosure_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_disclosure_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
