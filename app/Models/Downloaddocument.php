<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class downloaddocument extends Sximo  {
	
	protected $table = 'vsml_download';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vsml_download.* FROM vsml_download  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vsml_download.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
