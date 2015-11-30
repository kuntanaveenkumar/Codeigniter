
  <!-- Slider -->
  <div id="slider" class="loading has-parallax">
    <div class="container">
      <div id="NewsBlock">
        <section id="quick-summary" class="clearfix">
          <header>
            <h2><a href='<?php echo base_url();?>pages_list'>News</a></h2>
          </header>
          <article id="news">
		  <?php if($this->cache_fragment->start(60)){ ?>
           <?php
		   if(count($pages)>0)
		   {
		   foreach($pages as $k=>$v){		
			?>
			<div class='news small'> <a href='<?php echo base_url();?>page_details/<?php echo $v['id']?>'><div class='news-image'>
			 <?php 	if($v['news_image']!=''){?>
			<img alt='' src='<?php echo base_url();?>admin/uploads/page/small/<?php echo $v['news_image']?>'>
			<?php }else{?>
			<img alt='' src='<?php echo base_url();?>assets/images/no-image.PNG'>
			<?php }?>
			 </div></a><div class='info'> <a href='<?php echo base_url();?>news_details/<?php echo $v['id']?>'><h4><?php echo $v['title']?></h4></a><figure style='width:160px;height:50px;'><?php echo $v['desc']?></figure></div></div>
			<?php }?>
           <?php }
			}$this->cache_fragment->end();?>
          </article>
        </section>
	
        <!-- /#quick-summary --> 
        
      </div>
    </div>

 