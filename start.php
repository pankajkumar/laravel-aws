<?php

require path('base').DS.'vendor'.DS.'autoload.php';
use AmazonSES as SESClientV1;

Laravel\IoC::singleton('ses', function()
{
	
	// Create a service building using shared credentials for each service
	$ses = SESClientV1::factory(array(
		'key'    => Config::get('aws.key'),
		'secret' => Config::get('aws.secret'),
		'region' => Config::get('aws.region')
	));

	return $ses;
});