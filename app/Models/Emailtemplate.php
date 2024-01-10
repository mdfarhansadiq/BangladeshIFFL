<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class emailtemplate extends Sximo  {
	
	protected $table = 'vmsl_email_template';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_email_template.* FROM vmsl_email_template  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_email_template.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
