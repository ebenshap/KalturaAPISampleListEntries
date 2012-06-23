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
<object 
  id="2" 
  name="2" 
  type="application/x-shockwave-flash" 
  height="500" 
  width="600" 
  allowFullScreen="true" 
  allowNetworking="all" 
  allowScriptAccess="always" 
  data=" http://www.kaltura.com/kwidget/wid/_725102/uiconf_id/0/entry_id/0_41hdz0yw" 
  xmlns:dc="http://purl.org/dc/terms/" 
  xmlns:media="http://search.yahoo.com/searchmonkey/media/" 
  rel="media:video" 
  resource=" http://www.kaltura.com/kwidget/wid/_725102/uiconf_id/0/entry_id/0_41hdz0yw">
  <param name="allowFullScreen" value="true" />
  <param name="allowNetworking" value="all" />
  <param name="allowScriptAccess" value="always" />
  <param name="bgcolor" value="#000000" />
  <param name="flashVars" value="" />
  <param name="movie" value=" http://www.kaltura.com/kwidget/wid/_725102/uiconf_id/0/entry_id/0_41hdz0yw" />
<!--You can enter alternate content here. -->



</object>


<script type="text/javascript" src="http://www.kaltura.com/p/725102/sp/72510200/embedIframeJs/uiconf_id/8145862/partner_id/725102"></script>
<object id="kaltura_player_1339966245" name="kaltura_player_1339966245" type="application/x-shockwave-flash" allowFullScreen="true" allowNetworking="all" allowScriptAccess="always" height="333" width="400" bgcolor="#000000" xmlns:dc="http://purl.org/dc/terms/" xmlns:media="http://search.yahoo.com/searchmonkey/media/" rel="media:video" resource="http://www.kaltura.com/index.php/kwidget/cache_st/1339966245/wid/_725102/uiconf_id/8145862/entry_id/0_aeblklpy" data="http://www.kaltura.com/index.php/kwidget/cache_st/1339966245/wid/_725102/uiconf_id/8145862/entry_id/0_aeblklpy"><param name="allowFullScreen" value="true" /><param name="allowNetworking" value="all" /><param name="allowScriptAccess" value="always" /><param name="bgcolor" value="#000000" /><param name="flashVars" value="&{FLAVOR}" /><param name="movie" value="http://www.kaltura.com/index.php/kwidget/cache_st/1339966245/wid/_725102/uiconf_id/8145862/entry_id/0_aeblklpy" /><a href="http://corp.kaltura.com/products/video-platform-features">Video Platform</a> <a href="http://corp.kaltura.com/Products/Features/Video-Management">Video Management</a> <a href="http://corp.kaltura.com/Video-Solutions">Video Solutions</a> <a href="http://corp.kaltura.com/Products/Features/Video-Player">Video Player</a> <a rel="media:thumbnail" href="http://cdnbakmi.kaltura.com/p/725102/sp/72510200/thumbnail/entry_id/0_aeblklpy/width/120/height/90/bgcolor/000000/type/2"></a> <span property="dc:description" content="Kaltura logo"></span><span property="media:title" content="Sample Kaltura Logo"></span> <span property="media:width" content="400"></span><span property="media:height" content="333"></span> <span property="media:type" content="application/x-shockwave-flash"></span> </object>


<div id="kdp_shim"></div>
		<script src="http://cdn.kaltura.org/apis/seo/flashembed.js"></script>
		<script src="http://cdn.kaltura.org/apis/seo/kdp_embed.js"></script>
		<script>
			/*** CONFIGURATION OPTIONS ***/
			kdp_embed.uiconf_id = 		1913582;
			kdp_embed.partner_id = 	725102; 
			kdp_embed.fallback_entry = 	"0_41hdz0yw",
			kdp_embed.placeholder_id =	"kdp_shim";
			kdp_embed.height =		"342";
			kdp_embed.width = 		"608";
			kdp_embed.url_param_name = 	"entryId";
		</script>

		<script>
			// Embed the player:
			kdp_embed.doKdpEmbed();
		</script>


