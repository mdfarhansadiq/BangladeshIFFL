<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class headersocialmedia extends Sximo  {
	
	protected $table = 'header_social_media';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT header_social_media.* FROM header_social_media  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE header_social_media.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
