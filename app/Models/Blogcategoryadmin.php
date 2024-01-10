<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class blogcategoryadmin extends Sximo  {
	
	protected $table = 'blog_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT blog_category.* FROM blog_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE blog_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
