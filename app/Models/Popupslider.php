<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class popupslider extends Sximo  {
	
	protected $table = 'vmsl_popup';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_popup.* FROM vmsl_popup  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_popup.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
