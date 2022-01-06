<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<div class="white-bg mt-5 pt-5">
    <div class="container mt-3 pt-3">
        <div class="row">
            <div class="col-12 mt-1 mb-0 pt-0 pb-0 pr-sm-5 pl-sm-5 text-center">
                <div class="clip-text mb-3"><?php echo $term->name; ?></div>
            </div>
            <div class="col-lg-8 offset-lg-2 pt-3 pb-0 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                <div class="mb-4 border-bottom"></div>
            </div>
            <div class="col-12 pr-sm-5 pl-sm-5 main-content" data-aos="fade-up" data-aos-offset="10">
                <?php if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        echo '<h2 class="clip-text mb-3 text-center d-block mt-4">'.get_the_title().'</h2>';
                        the_content();
                        if ($wp_query->current_post +1 != $wp_query->post_count) {
                            echo '<div class="mt-4 pt-4"></div>';
                            echo '<div class="border-bottom"></div>';
                            echo '<div class="mt-3 pt-3"></div>';
                        }
                        
                    endwhile;
                else :
                    _e( 'Hmmm, nothing here.', 'textdomain' );
                endif; ?>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-5 pb-5 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                <div class="mt-4 border-top"></div>
            </div>
        
            <?php 
            if(is_single() && get_post_type() == 'project') {

                $categories = get_the_terms(get_the_ID(),'project-category');
                if($categories) {
                    foreach($categories as $category) {
                        $primary = $category->slug;
                        $name = $category->name;
                        break;
                    }
                }
                ?>
                <div class="col-12 mt-5 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                    <div class="clip-text smaller mb-3">More <?php echo $name; ?></div>
                </div>
                <div class="col-lg-8 offset-lg-2 mb-1 pt-0 pr-5 pl-5 text-center">
                    <div class="mb-4 border-bottom"></div>
                </div>
                <div class="col-12 mt-0 mb-4 pt-0 pb-5 mb-5 text-center">
                    <?php gregg_portfolio($primary,3); ?>
                </div><?php 
            }?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>