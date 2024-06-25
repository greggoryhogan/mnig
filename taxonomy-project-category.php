<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<div class="white-bg mt-5 pt-4">
    <div class="container mt-3 pt-3">
        <div class="row">
            <div class="col-12 mt-1 mb-0 pt-0 pb-0 pr-sm-5 pl-sm-5 text-center">
                <div class="clip-text mb-3"><?php echo $term->name; ?></div>
            </div>
            <div class="col-lg-8 offset-lg-2 pt-3 pb-0 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                <div class="mb-4 border-bottom"></div>
            </div>
            <div class="col-12 pr-sm-5 pl-sm-5 main-content" data-aos="fade-up" data-aos-offset="10">
                <?php echo gregg_portfolio($term->slug, -1, false); ?>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-5 pb-5 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                <div class="mt-4"></div>
            </div>
        
            
            
        </div>
    </div>
</div>
<?php get_footer(); ?>