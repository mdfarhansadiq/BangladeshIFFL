<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class websitesetting extends Sximo  {
	
	protected $table = 'website_setting';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT website_setting.* FROM website_setting  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE website_setting.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
