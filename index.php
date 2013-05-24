<?php
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("blog");
	$setting = mysql_query("select * from setting");
	$setting = mysql_fetch_array($setting);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $setting["title"]; ?></title>
<meta name="keywords" content="<?php echo $setting["keyword"]; ?>" />
<meta name="description" content="<?php echo $setting["deskripsi"]; ?>" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<?php mysql_close($koneksi); ?>
<body>
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">    
    	<div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent">
                <img src="images/logo.png" alt="Web Templates" />
                <span>calonpresident.blogspot.com</span>
            </a></h1>
        </div>
        
        <div id="search_box">
            <form action="index.php" method="get">
                <input type="text" value="" name="txt" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
            <div style="width:100%; margin-top:3%; float:left; text-align:right;">
            <a href="javascript:void(0)" onclick="alert('masi gak ada halaman adminnya :D')" style="margin-right:3%; text-decoration:none;">Login</a>
            </div>
        </div>        
        <div class="cleaner"></div>
	</div><!-- end of header -->

    	<div id="templatemo_menu">
            <ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>    	
    	</div><!-- end of templatemo_menu -->
		<?php 
			if(!isset($_GET["page"]) || $_GET["page"] == "home"){
				if(isset($_GET["txt"])){
					include "search.php";
				}else{
					include "content.php";
				}				 
			}else if($_GET["page"] == "kategori" && $_GET["kode"]){
				include "content_kategori.php"; 
			}else if($_GET["page"] == "full" && $_GET["kode"]){
				include "content_full.php"; 
			}else{}
		?>
        <div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

        <ul class="footer_menu">
            <li><a href="index.php">Home</a></li>
            <li class="last_menu"><a href="contact.php">Contact</a></li>
        </ul>    
        Copyright © 2013 <a href="https://calonpresident.blogspot.com" target="_blank">Ahmad Rizal Afani</a> | 
        Designed by <a href="http://www.templatemo.com" target="_blank">Free Website Templates</a>   
	</div> <!-- end of footer -->
</div> <!-- end of footer_wrapper -->

</body>
</html>