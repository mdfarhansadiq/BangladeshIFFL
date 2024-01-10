<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class imagegallerycontroller extends Sximo  {
	
	protected $table = 'image_gallery';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT image_gallery.* FROM image_gallery  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE image_gallery.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
