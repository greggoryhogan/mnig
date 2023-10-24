    <div class="gray-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-0 pt-0 pb-0 pr-5 pl-5 text-center">
                    <div class="clip-text mb-3">Contact</div>
                    <p class="contactlinks">
                        <a href="" title="Call me" class="telto d-block d-sm-inline-block"><?php echo featherIcon('phone-call'); ?>&nbsp;<span class="text"></span></a>
                        <a href="" title="Email me" class="mailto ml-0 ml-sm-3 mt-2 mt-sm-0 d-block d-sm-inline-block"><?php echo featherIcon('mail'); ?>&nbsp;<span class="text"></span></a>
                        <a href="https://github.com/greggoryhogan" target="_blank" title="Github" class="ml-0 ml-sm-3 mt-2 mt-sm-0 d-block d-sm-inline-block"><?php echo featherIcon('github'); ?>&nbsp;<span class="text">@greggoryhogan</span></a>
                        <a href="https://www.linkedin.com/in/greggory-hogan" target="_blank" title="Linked In" class="ml-0 ml-sm-3 mt-2 mt-sm-0 d-block d-sm-inline-block"><?php echo featherIcon('linkedin'); ?>&nbsp;<span class="text">greggory-hogan</span></a>
                    </p>
                </div>
                <div class="col-12 mb-0 pt-3 pb-5 pr-5 pl-5 text-center">
                    <div>
                    <div class="mb-4 border-bottom"></div>
                    <div class="text-left"><?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?></div>
                </div>
                <div class="col-12 mb-0 pt-5 pb-0 text-sm-right text-center">
                    <a href="https://wpengine.com/partnerspecialoffer/?w_agcid=CScbnetN" class="d-inline-block" title="WP Engine Partner" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/wpe.png" alt="WP Engine Partner" style="width: 75px;" /></a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php wp_footer(); ?>
</body>
</html>