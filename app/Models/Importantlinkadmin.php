<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class importantlinkadmin extends Sximo  {
	
	protected $table = 'important_link';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT important_link.* FROM important_link  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE important_link.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
