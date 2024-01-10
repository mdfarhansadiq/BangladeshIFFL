<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class filegallery extends Sximo  {
	
	protected $table = 'file_gallery';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT file_gallery.* FROM file_gallery  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE file_gallery.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
