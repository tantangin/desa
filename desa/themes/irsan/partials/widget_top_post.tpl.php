<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
                          <div  class="widget widget_tt_popular_post">
                            <div class="tt-popular-post border-bottom-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true"> 5 Artikel Terbaru</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- latest post tab -->
                                    <div id="tt-popular-post-tab1" class="tab-pane fade active in">
                                    	<?php
					      					$SQLArticleNew = "SELECT * FROM artikel WHERE enabled='1' ORDER BY tgl_upload DESC LIMIT 5";
					      		          	$articleNew = $this->db->query($SQLArticleNew); 
					      					foreach($articleNew->result() as $num => $rows): 
					      						if($data['gambar']!='' && is_file(LOKASI_FOTO_ARTIKEL."sedang_".$data['gambar']) ){
							              			$gmbr = AmbilFotoArtikel($rows->gambar,'sedang');
							              		}else{
							              			$gmbr = THEMES_PATH.$this->theme_folder.'/'.$this->theme.'/'."assets/img/blog/blog-12.jpg";
							              		}
					      				?>
	                                    <div class="media">
	                                        <a class="media-left" href="#">
	                                          <img src="<?php echo $gmbr; ?>" alt="">
	                                        </a>

	                                        <div class="media-body">
	                                          <h4><a href="<?php echo site_url('home/artikel').'/'.$rows->id; ?>"><?php echo $rows->judul ?></a></h4>
	                                        </div> <!-- /.media-body -->
	                                    </div> <!-- /.media -->
	                                <?php endforeach; ?>

                                    </div>

                                </div><!-- /.tab-content -->
                            </div><!-- /.tt-popular-post -->
                          </div><!-- /.widget_tt_popular_post -->