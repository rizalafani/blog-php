<?php 
	$kode_content = $_GET["kode"];
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("blog");
	$hasil = mysql_query("select * from content where kode_content = '".$kode_content."';");
?>
<div id="templatemo_banner">            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">                        
                            <div class="cs_article">                            	
                                <div class="left">
                                    <h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                    <p>Aliquam erat volutpat. Maecenas eget nisl id nisi consequat ultrices et  eu nunc. Praesent ac leo vel dolor rutrum egestas. Aliquam suscipit  vulputate arcu, quis congue ipsum laoreet sed.</p>
                                    
                                    <div class="button"><a href="#">Read more</a></div>
                               	</div>
                                <div class="right">
                               <a href="http://www.templatemo.com/page/1" target="_parent"><img src="images/slider/templatemo_slide02.jpg" alt="Template 1" /></a>
								</div>
                                                                
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                    <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                                    
                                    <div class="button"><a href="#">Read more</a></div>
                               	</div>
                                <div class="right">
                                <a href="http://www.templatemo.com/page/2" target="_parent"><img src="images/slider/templatemo_slide01.jpg" alt="Template 2" /></a>
                                </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                    <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                                    
                                    <div class="button"><a href="#">Read more</a></div>
                               	</div>
                                <div class="right">
                                <a href="http://www.templatemo.com/page/3" target="_parent"><img src="images/slider/templatemo_slide03.jpg" alt="Template 3" /></a>
                                </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                    <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                                    
                                    <div class="button"><a href="#">Read more</a></div>
                               	</div>
                                <div class="right">
                                <a href="http://www.templatemo.com/page/4" target="_parent"><img src="images/slider/templatemo_slide04.jpg" alt="Template 4" /></a>
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

    <div id="templatemo_content" style="width:100%; text-align:justify;">
    	<?php while($data = mysql_fetch_array($hasil)){ ?>
    	<div class="post_section">
           <h2><a href="index.php?page=full&kode=<?php echo $data["kode_content"]; ?>" style="text-decoration:none;">
		   <?php echo $data["judul_content"]; ?></a></h2>            
            <?php echo $data["tanggal"]; ?> by <a href="http://www.templatemo.com" target="_parent"><?php echo $data["penulis"]; ?></a>            
            <div class="post_content">                
                <div class="right" style="float:left; width:100%;">
                	<?php echo $data["content"]; ?>
                    <!--<a href="#">Continue reading...</a> | <a href="#">Comments (60)</a>-->
                </div>                
                <div class="cleaner"></div>
            </div>            
        </div> 
        <?php } ?>  
    </div> <!-- end of templatemo_content -->
        <?php mysql_close($koneksi); ?>
	<div class="cleaner"></div>
</div>
</div>
</div> 
