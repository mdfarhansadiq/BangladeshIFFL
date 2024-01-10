<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourcareers extends Sximo  {
	
	protected $table = 'vmsl_vacancy_announcement';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT vmsl_vacancy_announcement.* FROM vmsl_vacancy_announcement  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE vmsl_vacancy_announcement.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
