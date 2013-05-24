<?php 
	$kode_content = $_GET["txt"];
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("blog");
	$hasil = mysql_query("select * from content where judul_content like '%".$kode_content."%' order by kode_content desc;");
?>
<div id="templatemo_banner">            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">                        
                            <div class="cs_article">                            	
                                <div class="left">
                                    <h2>Aplikasi Database sederhana dengan PHP</h2>
                                    <p>Aplikasi database sederhana yang membahas seputar create, read, update, delete (crud) PHP - Mysql. Diupload dengan contoh program yang bisa didownload gratisssss ..... :D</p>
                                    
                                    <div class="button">
                                    <a href="http://calonpresident.blogspot.com/2013/01/aplikasi-crud-php-koneksi-php-mysql.html" target="_blank">Read more</a></div>
                               	</div>
                                <div class="right">
                               <a href="http://calonpresident.blogspot.com/2013/01/aplikasi-crud-php-koneksi-php-mysql.html" target="_blank"><img src="images/slider/templatemo_slide02.jpg" alt="Template 1" /></a>
								</div>
                                                                
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Object Oriented Programming PHP</h2>
                                    <p>Tutorial PHP dengan konsep object oriented programming, membahas, inheritance, encapsulation, pholymorphisme, constructor, interface, abstract class dll .... </p>
                                    
                                    <div class="button"><a href="http://calonpresident.blogspot.com/search/label/PHP" target="_blank">Read more</a></div>
                               	</div>
                                <div class="right">
                                <a href="http://calonpresident.blogspot.com/search/label/PHP" target="_parent"><img src="images/slider/templatemo_slide01.jpg" alt="Template 2" /></a>
                                </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Aplikasi Java Database sederhana</h2>
                                    <p>Membahas koneksi database antara java dan mysql dan manipulasi data... create, read, update, delete.. dengan contoh program yang bisa di download... </p>                                   
                                    <div class="button"><a href="http://calonpresident.blogspot.com/2013/01/contoh-aplikasi-java-sederhana.html" target="_blank">Read more</a></div>
                               	</div>
                                <div class="right">
                                <a href="http://calonpresident.blogspot.com/2013/01/contoh-aplikasi-java-sederhana.html" target="_blank"><img src="images/slider/templatemo_slide04.jpg" alt="Template 4" /></a>
                                </div>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '920px',
                    height : '200px',
                    speed : 800,
                    easing : 'easeInOutBack'
                    });
                    });
                </script>
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
   
        </div>

</div> <!-- end of header_wrapper -->

<div id="templatemo_content_wrapper_outer">
<div id="templatemo_content_wrapper_inner">
<div id="templatemo_content_wrapper">

    <div id="templatemo_content">
    	<?php while($data = mysql_fetch_array($hasil)){ ?>
    	<div class="post_section">
           <h2><a href="index.php?page=full&kode=<?php echo $data["kode_content"]; ?>" style="text-decoration:none;">
		   <?php echo $data["judul_content"]; ?></a></h2>            
            <?php echo $data["tanggal"]; ?> by <a href="#" target="_blank"><?php echo $data["penulis"]; ?></a>            
            <div class="post_content">                
                <div class="right" style="float:left; text-align:justify; width:100%;">
                	<?php echo implode(array_slice(explode(" ",$data["content"]),0,75)," ")."....."; ?><br /><br />
                    <a href="index.php?page=full&kode=<?php echo $data["kode_content"]; ?>">Continue reading...</a> <!--| <a href="#">Comments (60)</a>-->
                </div>                
                <div class="cleaner"></div>
            </div>            
        </div> 
        <?php } ?>  
    </div> <!-- end of templatemo_content -->
        <?php mysql_close($koneksi); ?>
        <?php include "kategori.php"; ?>

	<div class="cleaner"></div>
</div>
</div>
</div> 
