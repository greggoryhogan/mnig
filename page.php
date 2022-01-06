<?php get_header(); ?>
<div class="white-bg mt-5 pt-5">
    <div class="container mt-3 pt-3">
        <div class="row">
            <div class="col-12 mt-1 mb-0 pt-0 pb-0 pr-sm-5 pl-sm-5 text-center">
                <div class="clip-text mb-3"><?php the_title(); ?></div>
            </div>
            <?php $teaser = get_post_meta($post->ID,'post-teaser',true);
            if($teaser !== '') { ?>
                <div class="col-lg-8 offset-lg-2 pt-3 pb-0 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                    <div class="mb-4 border-bottom"></div>
                </div>
                <div class="col-12 pr-sm-5 pl-sm-5 text-center" data-aos="fade-up" data-aos-offset="10">
                    <?php echo $teaser; ?>
                </div>
                <div class="col-lg-8 offset-lg-2 mb-2 pb-5 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                    <div class="mt-4 border-top"></div>
                </div>
            <?php } ?>
            <div class="col-12 pr-sm-5 pl-sm-5 mb-3 main-content">
                <?php if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else :
                    _e( 'Hmmm, nothing here.', 'textdomain' );
                endif; ?>
            </div>
            
            <?php 
            if(is_page('web-development')) { ?>
                <div class="col-12 mt-5 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                    <div class="clip-text smaller mb-3">Recent Work</div>
                </div>
                <div class="col-lg-8 offset-lg-2 mb-1 pt-0 pr-5 pl-5 text-center">
                    <div class="mb-4 border-bottom"></div>
                </div>
                <div class="col-12 mt-0 mb-4 pt-0 pb-5 mb-5 text-center">
                    <?php gregg_portfolio('web-development',-1); ?>
                </div><?php 
            }?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>