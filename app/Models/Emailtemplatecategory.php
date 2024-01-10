<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class emailtemplatecategory extends Sximo  {
	
	protected $table = 'vmsl_email_template_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_email_template_category.* FROM vmsl_email_template_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_email_template_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
