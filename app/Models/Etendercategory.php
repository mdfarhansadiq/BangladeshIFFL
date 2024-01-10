<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class etendercategory extends Sximo  {
	
	protected $table = 'vsml_e_tender_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_e_tender_category.* FROM vsml_e_tender_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_e_tender_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
