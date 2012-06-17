<?php
	require_once('php5/KalturaClient.php');
	require_once('kalturaconf.php');
	$config = new KalturaConfiguration($partnerId);
	$config->serviceUrl = 'http://www.kaltura.com';
	$client = new KalturaClient($config);
	$ks = $client->generateSession($adminSecret, $userId, KalturaSessionType::ADMIN, $partnerId);
	$client->setKs($ks);

	$filter = new KalturaMediaEntryFilter();
	$pager = new KalturaFilterPager();
	
	$filteredListResult = $client->media->listAction($filter, $pager);
	
	print_r($filteredListResult->objects[0]);
?>
