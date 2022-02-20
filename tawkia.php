
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
<title>resgin</title>
<link rel="stylesheet" href="css/framework7.ios.min.css">
<link rel="stylesheet" href="css/framework7.ios.colors.min.css">
        <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/my-app.css">

<script type="text/javascript" src="js/framework7.min.js"></script>
 
</head>
<body id="body" onload="init();" style="">
<div class="statusbar-overlay"></div>
<div class="views tabs navbar-through toolbar-through">



<div class="pages navbar-fixed">
<div data-page="index-4" class="page4">
<div class="page-content pull-to-refresh-content" data-ptr-distance="55">
<div class="pull-to-refresh-layer">
<div class="preloader"></div>
</div>
<div class="content-block" style="margin-top:-24px;">
<h1 class="header" style="margin-top:0px; margin-bottom:0px;">🚀 أداة التوقيع</h1>

</div>
    <hr>
<div class="list-block media-list list-block-search searchbar-found">
    
    
    
    
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
        
       <div class="container-login100">
                        <div class="wrap-login100">
			    					<form method="post">



					<span class="login100-form-title p-b-34 p-t-27">الصق رابط التطبيق الذي تريد توقيعه</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input name="url" size="50" placeholder="الصق الرابط الذي تريد توقيعه" class="input100" required>
						<span class="focus-input100" data-placeholder="🚀"></span>
					</div>
					<div class="container-login100-form-btn">

						<input name="submit" type="submit" value="🚀	وقّع" class="login100-form-btn">

					</div>
				</form>

  <div class="app-card-2">
<div class="content-block" style="margin-top:0px; margin-bottom:0px; padding-top:10px; padding-bottom:10px;">
<h4 style="margin:0px;">-</h4>
<h2 class="header" style="margin:0px;">عمليات التوقيع الاخيره</h2>
</div>
<div class="list-block media-list">
<ul>
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

<div class="item-content">
<div class="item-media"><img class="app-icon" src="<?=$icon?>"></div>
<div class="item-inner">
<div class="item-title-row">
<div class="item-title"><?=$app_name?></div>
<div class="item-after">
<a href="#" onclick="window.location='itms-services://?action=download-manifest&url=<?=$link?>';" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a>
</div>
</div>
<div class="item-subtitle">Version:<?=$bundle_version?></div>
</div>
</div>
    
<?php
}
} else {
?>

<?php
}
?>

</ul>
</div>
<br>
</div>
                            <?php
    // maximum execution time in seconds
    // set_time_limit (24 * 60 * 60);
    if (!isset($_POST['submit'])) die();
    // folder to save downloaded files to. must end with slash
    $destination_folder = 'rsn/files/';
    $url = $_POST['url'];
    $newfname = $destination_folder . basename($url);
   // old script
    $file = fopen ($url, "rb");
    if ($file) { $newf = fopen ($newfname, "wb");
      if ($newf)
      while(!feof($file)) { fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 ); }
    }
    if ($file) { fclose($file); }
    if ($newf) { fclose($newf); }
    
$output = shell_exec('chmod +x /Applications/MAMP/htdocs/app4bd/app4bd/rsn/sgin.sh ');
$output = shell_exec('/Applications/MAMP/htdocs/app4bd/app4bd/rsn/sgin.sh ');
                            
                            

?>
                            


                        </div>
           
                        </div>
        

    </div>
    
    
    

    
    
    
    
    
</div>
    
</div>
</div>
</div>
</div>
<script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/inobounce/0.1.5/inobounce.min.js"></script>


</body></html>