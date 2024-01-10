<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class custompageslider extends Sximo  {
	
	protected $table = 'custom_page_slider';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT custom_page_slider.* FROM custom_page_slider  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE custom_page_slider.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
