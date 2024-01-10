<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class faqmain extends Sximo  {
	
	protected $table = 'vmsl_faq';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_faq.* FROM vmsl_faq  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_faq.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
