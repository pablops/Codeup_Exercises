<?php 
require_once('model.php');

class User extends Model {
// contain the overridden $table property, set to users
	protected static $table = 'contacts';
}

// echo User::getTableName() . PHP_EOL;

?>