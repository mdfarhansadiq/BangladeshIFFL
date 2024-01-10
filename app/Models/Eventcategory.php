<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class eventcategory extends Sximo  {
	
	protected $table = 'vmsl_event_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_event_category.* FROM vmsl_event_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_event_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
