<?php get_header(); ?>

<div class="white-bg">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 mt-5 mb-0 pt-5 pb-0 pr-5 pl-5 text-center">
                <div class="clip-text mb-3">Web Development</div>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-5 pt-3 pb-5 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                <div >
                <div class="mb-4 border-bottom"></div>
                <p>Since 2008 I have been building and maintaining WordPress websites, <br>most recently under the dba <a href="https://fragmentwebworks.com/" style="color:#f92746;">Fragment Web Works</a>.<br>From theme development to custom plugins, automation, and security, I provide modern websites and web tools that can alleviate [some] of your daily stress.</p>
                <a href="<?php echo get_bloginfo('url');?>/web-development/" class="orange-hover btn btn-primary primary-bg text-white pl-4 pr-4 mb-2" title="View Web Development Process">Learn More</a>
                <a href="https://fragmentwebworks.com/" class="orange-hover btn btn-primary primary-bg text-white pl-4 pr-4 mb-2" title="Visit Fragment Web Works">Visit Fragment Web Works</a>
                <div class="mt-4 border-top"></div>
            </div>
        </div>
    </div>
</div>

<div class="white-bg" id="recentwork">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-1 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                <div class="clip-text mb-2">Recent Work</div>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-1 pb-4 pr-5 pl-5 text-center aos-init aos-animate" data-aos="fade-up" data-aos-offset="10">
                <div class="mt-4 border-top"></div>
            </div>

            <div class="col-12 mb-5 mt-0 text-center aos-init aos-animate" data-aos="fade-up" data-aos-offset="10">
               <?php gregg_portfolio('web-development',3); ?>
                
            </div>
        </div>
    </div>
</div>


<div class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                <div class="clip-text mb-3">Consulting</div>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-5 pt-3 pb-5 pr-5 pl-5 text-center" data-aos="fade-up">
                <div>
                <div class="mb-4 border-bottom"></div>
                <p>Identifying bottlenecks and insecurities can save your company thousands in development costs, never mind hours of headaches. Working alongside your in-house development team, we can improve the performance and security of your WordPress website.</p>
                <div class="mt-4 border-top"></div>
            </div>
        </div>
    </div>
</div>

<div class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-1 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                <div class="clip-text mb-3">Creative</div>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-5 pt-3 pb-5 pr-5 pl-5 text-center" data-aos="fade-up" data-aos-offset="10">
                <div>
                <div class="mb-4 border-bottom"></div>
                <p>In a world outside of computers (it does exist!) I spend my time building things. What things? Anything! Working with wood, metal, paints and mixed media, I can build anything your brain can come up with. Some of my latest projects include cornhole sets and signs for interior decoration.</p>
                <div class="mt-4 border-top"></div>
            </div>
        </div>
    </div>
</div>

<div class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-1 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                <div class="clip-text mb-2">Recent Projects</div>
            </div>
            <div class="col-lg-8 offset-lg-2 mb-1 pb-4 pr-5 pl-5 text-center aos-init aos-animate" data-aos="fade-up" data-aos-offset="10">
                <div class="mt-4 border-top"></div>
            </div>

            <div class="col-12 mb-4 mt-0 text-center aos-init aos-animate" data-aos="fade-up" data-aos-offset="10">
               <?php gregg_portfolio('creative-projects',3); ?>
                
            </div>

        </div>
    </div>
</div>
<div class="mt-5 mb-2 pt-2"></div>
<?php get_footer(); ?>