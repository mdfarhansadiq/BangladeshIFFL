<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class downloadcategory extends Sximo  {
	
	protected $table = 'vsml_download_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_download_category.* FROM vsml_download_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_download_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
