<div class="pages">
    <div data-page="settings" class="page">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
                <div class="center sliding">اداة التوقيع</div>
            </div>
        </div>
        <div class="page-content">



         
         
         
         
         
         
         
         
         
         
<p style="width: 70%;margin: auto;margin-top: 5%;font-size:larger;text-align:center">
Download a file from any URL</p>
<form method="post" style="width: 70%;margin: auto;margin-top: 10%;">
<input name="url" size="50" placeholder="Source URL" style="width: 100%;height: 10%;font-size: 1.5em;padding:10px" required>
<input name="submit" type="submit" value="Download" style="width: 30%;height: 10%;margin: 5% auto; display: block;">
<p style="width: 70%;margin: auto;margin-top: 10%;font-size:larger;text-align:center">
To <?php echo getcwd(); ?></p>

</form>
<?php
    // maximum execution time in seconds
    // set_time_limit (24 * 60 * 60);
    if (!isset($_POST['submit'])) die();
    // folder to save downloaded files to. must end with slash
    $destination_folder = 'go/in/';
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
    
    file_put_contents( $newfname, fopen($url, 'r'));
?>

          
        </div>
    </div>
</div>
