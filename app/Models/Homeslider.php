<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class homeslider extends Sximo  {
	
	protected $table = 'vmsl_slider';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_slider.* FROM vmsl_slider  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_slider.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
