<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class websitetext extends Sximo  {
	
	protected $table = 'website_text';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT website_text.* FROM website_text  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE website_text.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
