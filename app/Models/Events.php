<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class events extends Sximo  {
	
	protected $table = 'vmsl_news_events';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_news_events.* FROM vmsl_news_events  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_news_events.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
