<?php
require_once("ipaDistrubution.php");
$folder = "";
if( isset( $_REQUEST['f'] ) )
	$folder = $_REQUEST['f'] . "/";
?>
<html class="pixel-ratio-2 retina ios ios-11 ios-11-0 ios-gt-10 ios-gt-9 ios-gt-8 ios-gt-7 ios-gt-6 watch-active-state"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>app4bd</title>
<link rel="stylesheet" href="css/framework7.ios.min.css">
<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
<link rel="stylesheet" href="css/my-app.css">
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/framework7.min.js"></script>
</head>
<body id="body" onload="init();" class="layout-white framework7-root" style="">
<div class="statusbar-overlay"></div>
<div class="views tabs navbar-through toolbar-through">
<div id="tab-1" class="view view-main tab active" data-page="index">
<div class="pages">
<div data-page="index" class="page">
<div class="page-content pull-to-refresh-content" data-ptr-distance="55">
<div class="pull-to-refresh-layer">
<div class="preloader"></div>
</div>
<div class="content-block">
<h5 style="margin-bottom:0px;margin-top:-48px;">
Tuesday, June 12th </h5>
<h1 class="header" style="margin-top:0px; margin-bottom:0px;">Today</h1>
<div style="margin-top: -58px; width:100%; text-align:right;">
Dark
<form id="my-form" class="store-data">
<label class="label-switch">
<input type="checkbox" name="switch">
<div class="checkbox" onclick="toggleTheme();"></div>
</label>
</form>
</div>

<div class="content-block" style="max-width:414px; margin: 16px; margin-left: -16px;">


<?php
$plists = glob( 'ipa/' . $folder . "*.ipa");
if( is_array( $plists ) && count( $plists ) > 0 ) {
foreach( $plists as $plist_path ) {
$ipa = new ipaDistrubution( $plist_path, $folder );

$link = $ipa->applink;
$provision_profile = $ipa->mobileprovision;
$icon = $ipa->appicon;
$app_name = $ipa->appname;
$bundle_version = $ipa->bundleversion;

?>
      <div data-reactroot="">
	
	<div class="card">
	<div class="shadow">
		
	<div class="shadowImage" style="background-image: url(<?=$icon?>);">
	</div>
	</div>
	<div class="image" style="background-image: url(<?=$icon?>);">
		
		<img class="appImage" src="<?=$icon?>" width="55">
		
	<div id="text" class="noFlicker">
      <span><?=$app_name?></span>
		
		<div id="name" class="noFlicker">
      <span id="first">  </span>
      <br>
      <span id="second" class="noFlicker">Version:<?=$bundle_version?></span>
      		<a href="#" onclick="window.location='itms-services://?action=download-manifest&url=<?=$link?>';" class="get">GET</a>

    </div>
		

		
    </div>
	</div>

</div>



</div>

        <?php
}
} else {
?>

<?php
}
?>



<!--addcode-->



</div>
<br>
</div>
</div>
</div>
</div>
</div>


</div>
<script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/inobounce/0.1.5/inobounce.min.js"></script>
<script type="text/javascript" src="js/appvalley.js"></script>


</body></html>