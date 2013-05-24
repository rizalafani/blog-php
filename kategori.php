<?php 
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("blog");
	$hasil = mysql_query("select * from kategori");
?>
<div id="templatemo_sidebar">
           	<div id="news_section">                
                <h2>Blog Kategori</h2>   
                <?php while($data = mysql_fetch_array($hasil)){ ?>
                <div class="news_box" style="height:15px;">
                    <p><a href="index.php?page=kategori&kode=<?php echo $data["kode_kategori"]; ?>" style="text-decoration:none;">
					<?php echo $data["judul_kategori"]; ?></a></p>
                </div>    
                <?php } ?>            
                <div class="cleaner"></div>                     
            </div>            
            <div class="section_rss_twitter">        
                <div class="rss_twitter twitter">
                <a href="https://twitter.com/Rizal_Afani92" target="_blank">FOLLOW ME <span>on Twitter</span></a>
                </div>                
                <div class="margin_bottom_20"></div>                
                <div class="rss_twitter rss">
                <a href="javascript:void(0)">SUBSCRIBE <span>rss feeds</span></a>
                </div>            
            </div>        
            <div class="cleaner"></div>
        </div> <!-- end of sidebar -->
<?php mysql_close($koneksi); ?>