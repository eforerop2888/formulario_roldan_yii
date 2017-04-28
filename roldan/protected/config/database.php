<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'class' => 'CDbConnection',
	'connectionString' => 'mysql:host=localhost;dbname=innclod_roldan',
	'emulatePrepare' => true,
	'username' => 'innclod_roldan',
	'password' => 'roldan2015%',
	'charset' => 'utf8',
	
);