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
