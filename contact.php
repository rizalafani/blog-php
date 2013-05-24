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
<div id="templatemo_header_wrapper">

	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent">
                <img src="images/logo.png" alt="Web Templates" />
                <span>calonpresident.blogspot.com</span>
            </a></h1>
        </div>
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
        
        <div class="cleaner"></div>
	</div><!-- end of header -->
    
		<div id="templatemo_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php" class="current">Contact Us</a></li>
            </ul>    	
    	</div><!-- end of templatemo_menu -->
        
        <div id="templatemo_banner">        
   			<h3>calonpresident.blogspot.com</h3>            
            <p>Blog nya jomblo beginner :)) yang tertarik dengan dunia Teknologi informasi (IT)</p>
        </div>

</div> <!-- end of header_wrapper -->

<div id="templatemo_content_wrapper_outer">
<div id="templatemo_content_wrapper_inner">
<div id="templatemo_content_wrapper">

    <div id="templatemo_content">
        <p><?php echo $setting["contact_text"]; ?>        </p>
        <div class="cleaner_h40"></div>
        
        <h4>Send us a message now!</h4>
        <div id="contact_form">
        
            <form method="post" name="contact" action="mailto:ahmadrizalafani@yahoo.com">
            
                <input type="hidden" name="post" value=" Send " />
                <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                <div class="cleaner_h10"></div>
                
                <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                <div class="cleaner_h10"></div>
                
                <label for="url">Phone:</label> <input type="text" name="url" id="url" class="input_field" />
                <div class="cleaner_h10"></div>
                
                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                <div class="cleaner_h10"></div>
                
                <input style="font-weight: bold;" type="submit" class="submit_btn" name="submit" id="submit" value=" Send " />
                <input style="font-weight: bold;" type="reset" class="submit_btn" name="reset" id="reset" value=" Reset " />            
            </form>            
        </div>        
    </div> <!-- end of templatemo_content -->
	<div class="cleaner"></div>
</div>
<div class="cleaner"></div>
</div>
</div>
        
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