<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class websitedesign extends Sximo  {
	
	protected $table = 'website_design';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT website_design.* FROM website_design  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE website_design.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
