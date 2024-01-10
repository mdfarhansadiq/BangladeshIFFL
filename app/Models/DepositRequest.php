<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class DepositRequest extends Sximo  {

	protected $table = 'vmsl_deposit_request';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();

	}

	public static function querySelect(  ){

		return "  SELECT vmsl_deposit_request.* FROM vmsl_deposit_request  ";
	}

	public static function queryWhere(  ){

		return "  WHERE vmsl_deposit_request.id IS NOT NULL ";
	}

	public static function queryGroup(){
		return "  ";
	}


}
