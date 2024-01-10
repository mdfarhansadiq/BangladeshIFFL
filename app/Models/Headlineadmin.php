<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class headlineadmin extends Sximo  {
	
	protected $table = 'vmsl_headline';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_headline.* FROM vmsl_headline  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_headline.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
