<?php
get_header();
while(have_posts()){
	
the_post();
?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg');?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>wil be coverd next videos.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
<?php
  $the_parent=wp_get_post_parent_ID(get_the_ID());
  if($the_parent){?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($the_parent);?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($the_parent);?></a> <span class="metabox__main"><?php the_title();?></span></p>
    </div>
    <?php }?>
    <?php
    $test_array =get_pages(array('child_of'=> get_the_ID()));
    if( $the_parent or $test_array){?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink(); ?>"><?php 
      echo get_the_title($the_parent);
      
      } ?></a></h2>
      <ul class="min-list">
      <?php
      if($the_parent){
      	$the_child=$the_parent;
      }
      else{
      	$the_child=get_the_ID();
      }
      wp_list_pages(array(
      	'title_li'=> NULL,
      	'child_of'=> $the_child,
      	'sort_column'=> 'menu_order'
      ));

      ?>
  </ul>
    </div>
<?php }?>
    <div class="generic-content">
      <?php  the_content(); ?>
    </div>
</div>
<?php
get_footer();
?>