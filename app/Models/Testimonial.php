<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Sximo  {
	
	protected $table = 'vmsl_testimonial';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_testimonial.* FROM vmsl_testimonial  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_testimonial.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
