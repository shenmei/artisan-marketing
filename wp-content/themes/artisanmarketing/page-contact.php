<?php 

/*

Template Name: Page Contact

*/

 get_header()

?>

<section class="container section my-3" data-scroll-section>
    <div class="row justify-content-between pt-md-5 pb-5">
        <div class="col-lg-5 col-12" data-scroll data-scroll-speed="3">
            <?php if(get_field('contact_title_small')) : ?>
                <span class="titlesub titlesub--grey"><?php the_field('contact_title_small') ?></span>
            <?php endif ?>
            <h1 class="title title--medium highlight--lightblue highlight--underline"><?php the_field('contact_title') ?></h1>
            <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('contact_desc') ?></div>
        </div>
        <div class="col-lg-6 col-12 pt-4 pt-lg-0" data-scroll data-scroll-speed="1">
            <?php echo do_shortcode('[contact-form-7 id="10" title="Contact Form"]') ?>
        </div>
    </div>
</section>

<?php get_footer() ?>