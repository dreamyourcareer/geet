<?php
/**
 * Template Name: Home Page
*/

get_header(); ?>

<!-- Banner Part Start-->

<article class="banner-section" style="background:url(<?php echo esc_url( get_theme_mod( 'ict_home_banner' ) ); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
                <div class="banner-heading">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h3><?php bloginfo('description'); ?></h3>
                    <h4>EXPORTING OUTSTANDING CUSTOMER CARE</h4>
                </div>
                
                <div class="banner-logo">
                	
 
 
 
 <img src="<?php echo esc_url( get_theme_mod( 'ict_home_banner_logo' ) ); ?>" alt="" />





 
                </div>
                


			</div>
		</div>
	</div>
</article>

<!-- Banner Part End-->

<article class="weekly-coffee">

		<div id="content" class="site-content" role="main">
<div class="row">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		
						<?php the_content(); ?>
					
						
			<?php endwhile; ?>
</div><!--row-->
		</div><!-- #content -->


</article>

<!-- Coffee Weekly Part Start-->

<article class="weekly-coffee">
	<div class="container">
		<div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                	<div class="weekly-cof-section-one">
                    	<h2>Coffee</h2>
                    	<h5>of the Week</h5>
                    	<img src="<?php bloginfo('template_directory'); ?>/img/under-grass-line.png" alt="">
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum ha Lorem Ipsum is simply dummy text of the printing...</p>
                    
                    	<div class="read-button">
                       		<a href="#">read more
                        	<span class="fa fa-play"></span>
                       		</a>
                    	</div>
                    
                    </div>            	
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                	<div class="weekly-cof-section-one-map">
           		    <img src="<?php bloginfo('template_directory'); ?>/img/map-img.png" alt=""> </div>            	
                </div>


		</div>
	</div>
</article>

<!-- Coffee Weekly Part End-->

<!-- About Part Start-->

<article class="about-section">
	<div class="container">
		<div class="row">
        	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        		<div class="about-full-part">	
                	<div class="about-part-left">
                    	<h2 class="about-heading">about us</h2>
                    		<div class="text-underline"><img src="<?php bloginfo('template_directory'); ?>/img/under-line.png" alt=""></div>
                    		<p class="about-des">ICT believes in importing exceptional coffees and exporting outstanding customer care. It’s as simple as that. That’s why we spend significant energy visiting, studying and connecting with producers from around the world. Not only to experience their crops and techniques at seed level, but also to forge relationships that are entrenched in an implicit understanding of ICT product expectations.</p>
                  </div>
              
              <div class="about-read-button">
                       		<a href="#">read more
                        	<span class="fa fa-play"></span>
                       		</a>
              </div>       
        
			</div></div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        		
              <div class="about-part-right">
           	  <img src="<?php bloginfo('template_directory'); ?>/img/fruit-img.png" alt=""> </div>
                      
			</div>
            
        	
		</div>
	</div>
</article>
<!-- About Part End-->

<!-- Latest Blog Part Start-->

<article>
	<div class="container">
		<div class="row">
       	  <div class="latest-head-part">
            	<h2>latest blog</h2>
            	<img src="<?php bloginfo('template_directory'); ?>/img/under-line.png" alt=""> 
		  </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<div class="latest-blog-part">
                        	<img src="<?php bloginfo('template_directory'); ?>/img/blog-img-one.png" alt=""> 
                            	<div class="latest-blog-date-part">                        
                                	<h2>21</h2>
                                	<h4>Jan</h4>
                                </div>
							</div>
                        
                            <div class="latest-blog-description-heading">                        
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        
                                <div class="latest-blog-comment-part">                        
                                    <span>Posted By Admin</span>
                                    <span>/ 15 Comments</span>
                                </div>
                        
                                    <div class="latest-blog-desc-part">                        
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum ha[...]</p>
                                    </div>
                        
                                        <div class="latest-blog-desc-read-more">                        
                                            <a href="#">Read More</a>
                                        </div>
                	</div>
            
            
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="col-lg-12 no-pad-res">                    	
   		<div class="row">
       		<div class="col-lg-5">
            	<figure class="blog-help-figure">
              		<img src="<?php bloginfo('template_directory'); ?>/img/blog-small-img-one.png" alt="">
                  		<div class="latest-blog-date-part-right">                        
                    		<h2>21</h2>
                    		<h4>Jan</h4>
                  		</div> 
            				</figure>
			</div> 
            
            <div class="col-lg-7">
            <figure class="blog-help-figure-two">
              <div class="latest-blog-description-heading-right">                        
              	<p>Lorem Ipsum is simply dummy text of</p>
              </div>
              
              <div class="latest-blog-comment-part-right">                        
              	<span>Posted By Admin</span>
                <span>/ 15 Comments</span>
              </div>
              
              <div class="latest-blog-desc-read-more">                        
              	<a href="#">Read More</a>
              </div>
              
            </figure>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div class="line-part"></div>
            </div>


<div class="col-lg-5">
	<figure class="blog-help-figure">
    <img src="<?php bloginfo('template_directory'); ?>/img/blog-small-img-two.png" alt="">
    <div class="latest-blog-date-part-right">                        
    <h2>21</h2>
    <h4>Jan</h4>
    </div> 
    </figure>
</div>

<div class="col-lg-7">
	<figure class="blog-help-figure-two">
    <div class="latest-blog-description-heading-right">                        
    <p>Lorem Ipsum is simply dummy text of</p>
    </div>
    <div class="latest-blog-comment-part-right">                        
    <span>Posted By Admin</span>
    <span>/ 15 Comments</span>
    </div>
	<div class="latest-blog-desc-read-more">                        
    <a href="#">Read More</a>
    </div>
	</figure>
</div>
                            

		</div>
	</div>                           
</div>           
            
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="about-read-button-blog">
    <a href="#">View All</a>
    </div>
</div>           
            
            
		</div>
	</div>
</article>

<!-- Latest Blog Part End-->


<!-- roaster resources part start -->

<article class="roaster-part">
	<div class="container">
		<div class="row">
        
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="roaster-head">
                <h2>roaster resources</h2>
                <img src="<?php bloginfo('template_directory'); ?>/img/under-line-white.png" alt="">
                <p class="roaster-tag-line"> Morbi vestibulum neque dolor, sed facilisis nulla rhoncus at. Sed interdum dui ac risus tincidunt, </p> 
                </div>
			</div>
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<div class="grid-section-one">
                <div class="roaster-round-part"><img src="<?php bloginfo('template_directory'); ?>/img/icon-tree.png" alt=""></div>
                <h2>10 giant plantations</h2>
                <p class="roaster-tag-line">  Morbi vestibulum neque dolor, sed facilisis nulla rhoncus at. </p> 
                </div>
			</div>
            
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<div class="grid-section-one">
                <div class="roaster-round-part"><img src="<?php bloginfo('template_directory'); ?>/img/icon-coffee.png" alt=""></div>
                <h2>245 varieties</h2>
                <p class="roaster-tag-line">  Morbi vestibulum neque dolor, sed facilisis nulla rhoncus at. </p> 
                </div>
			</div>
            
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<div class="grid-section-one">
                <div class="roaster-round-part"><img src="<?php bloginfo('template_directory'); ?>/img/icon-earth.png" alt=""></div>
                <h2>get it anywhere</h2>
                <p class="roaster-tag-line">  Morbi vestibulum neque dolor, sed facilisis nulla rhoncus at. </p> 
                </div>
			</div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                <div class="roaster-end-butn-part">
                <a href="#">read more</a>
                </div>
                
			</div>
	
		</div>
	</div>
</article>

<!-- roaster resources part end -->

<?php get_footer(); ?>

