<?php get_header() ?>

<?php //opening ?>
<section class="opening d-flex align-items-center container" data-scroll-section>
    <div class="row flex-md-row flex-column-reverse justify-content-between align-items-center section">
        <div class="col-lg-5 col-md-6 col-12" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">
            <?php if(get_field('opening_title_small')) : ?>
                <span class="titlesub titlesub--grey"><?php the_field('opening_title_small') ?></span>
            <?php endif ?>
            <h1 class="title title--large highlight--tosca highlight--underline"><?php the_field('opening_title') ?></h1>
            <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('opening_desc') ?></div>
        </div>
        <div class="col-lg-6 col-md-5 col-sm-6 col-12 text-center pt-4 pb-md-0 pb-4" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">
            <div class="opening__img-container">
                <img src="<?php am_img_asset('opening-img.png') ?>" alt="" class="opening__img">
            </div>
        </div>
    </div>
    <div class="text-center scroll-down" data-scroll>
        <a href="#feature" class="btn scroll-down__btn" data-scroll-to data-scroll-offset="150">
            <span class="titlesub titlesub--grey mb-2">Scroll Down</span>
            <span class="scroll-down__icon-container">
                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down.svg" alt="" class="scroll-down__icon">
            </span>
        </a>
    </div>
</section>
<?php //opening end ?>

<?php //feature ?>
<div class="feature" id="feature" data-scroll-section>
    <div class="container section">
        <div class="row justify-content-center feature__row">
            <section class="col-lg-5 col-md-6 col-sm-8 col-12 pb-5 pt-5 pt-md-0 mt-5 mt-sm-0 text-center" data-scroll data-scroll-speed="1" data-scroll-target="#feature">
                <span class="feature__number text-outline text-outline--large">01</span>
                <?php if(get_field('feature1_title_small')) : ?>
                    <span class="titlesub titlesub--grey"><?php the_field('feature1_title_small') ?></span>
                <?php endif ?>
                <h2 class="title title--medium highlight--tosca"><?php the_field('feature1_title') ?></h2>
                <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('feature1_desc') ?></div>
                <div class="feature-img__mobile1-holder d-block d-md-none">
                    <div class="feature-img__mobile1-container">
                        <img src="<?php am_img_asset('feature1-mobile.png') ?>" alt="" class="feature-img__mobile1">
                    </div>
                </div>
            </section>

            <div class="feature-img__desktop1-holder d-none d-md-block" data-scroll data-scroll-speed="1" data-scroll-delay="0.05" data-scroll-target="#feature">
                <div class="feature-img__desktop1-container">
                    <img src="<?php am_img_asset('feature1-desktop.png') ?>" alt="" class="feature-img__desktop1">
                </div>
            </div>
            
        </div>
        <div class="row justify-md-content-between justify-content-center feature__row">
            <section class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 py-5 mt-5 mt-sm-0" data-scroll data-scroll-speed="1">
                <span class="feature__number text-outline text-outline--large">02</span>
                <?php if(get_field('feature2_title_small')) : ?>
                    <span class="titlesub titlesub--grey"><?php the_field('feature2_title_small') ?></span>
                <?php endif ?>
                <h2 class="title title--medium highlight--lightblue"><?php the_field('feature2_title') ?></h2>
                <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('feature2_desc') ?></div>
                <div class="feature-img__mobile2-holder d-block d-md-none">
                    <div class="feature-img__mobile2-container">
                        <img src="<?php am_img_asset('feature2-mobile.png') ?>" alt="" class="feature-img__mobile2">
                    </div>
                </div>
            </section>
            <div class="col-2 pt-3 d-none d-lg-block" data-scroll>
                <div class="feature__ornament-container">
                    <img src="<?php am_img_asset('ornament.png') ?>" alt="" class="feature__ornament">
                </div>
            </div>
            <section class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 text-right text-md-left py-5 mt-5 mt-sm-0" data-scroll data-scroll-speed="1" data-scroll-delay="0.08">
                <span class="feature__number text-outline text-outline--large">03</span>
                <?php if(get_field('feature3_title_small')) : ?>
                    <span class="titlesub titlesub--grey"><?php the_field('feature3_title_small') ?></span>
                <?php endif ?>
                <h2 class="title title--medium highlight--blue"><?php the_field('feature3_title') ?></h2>
                <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('feature3_desc') ?></div>
                <div class="feature-img__mobile3-holder d-block d-md-none">
                    <div class="feature-img__mobile3-container">
                        <img src="<?php am_img_asset('feature3-mobile.png') ?>" alt="" class="feature-img__mobile3">
                    </div>
                </div>
            </section>

            <div class="feature-img__desktop3-holder d-none d-md-block" data-scroll data-scroll-speed="2" data-scroll-delay="0.1" data-scroll-target="#feature">
                <div class="feature-img__desktop3-container">
                    <img src="<?php am_img_asset('feature3-desktop.png') ?>" alt="" class="feature-img__desktop3">
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php //feature end ?>

<?php //product dev ?>
<section class="container section" data-scroll-section>
    <div class="row flex-column-reverse flex-md-row justify-content-between">
        <div class="col-lg-5 col-md-6 col-12 align-self-center" data-scroll data-scroll-speed="3">
            <?php if(get_field('prodev_title_small')) : ?>
                <span class="titlesub titlesub--grey"><?php the_field('prodev_title_small') ?></span>
            <?php endif ?>
            <h2 class="title title--medium highlight--tosca"><?php the_field('prodev_title') ?></h2>
            <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('prodev_desc') ?></div>
        </div>
        <div class="col-lg-6 col-md-5 col-12 py-4 py-md-0" data-scroll data-scroll-speed="1">
            <div class="prodev__img-holder">
                <div class="prodev__img-container">
                    <img src="<?php echo get_field('prodev_img')['sizes']['medium'] ?>" alt="" class="prodev__img">
                </div>
            </div>
        </div>
    </div>
</section>
<?php //product dev end ?>

<?php //director ?>
<section class="container section" data-scroll-section>
    <div class="row flex-md-row-reverse flex-column-reverse justify-content-between">
        <div class="col-lg-5 col-md-6 col-12 pt-4 pt-md-0 align-self-center" data-scroll data-scroll-speed="3">
            <?php if(get_field('dir_title_small')) : ?>
                <span class="titlesub titlesub--lightblue"><?php the_field('dir_title_small') ?></span>
            <?php endif ?>
            <h2 class="title title--small"><?php the_field('dir_title') ?></h2>
            <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('dir_desc') ?></div>
            <?php if(get_field('dir_linkedin')) : ?>
                <a href="<?php the_field('dir_linkedin') ?>" target="_blank" rel="noreferrer" class="btn btn__link mt-3"><span class="btn__link-icon"><i class="fab fa-linkedin-in"></i></span>LinkedIn<span class="btn__link-arrow"><i class="fas fa-long-arrow-alt-right"></i></span></a>
            <?php endif ?>
        </div>
        <div class="col-lg-6 col-md-5 col-12 py-4 py-md-0" data-scroll data-scroll-speed="1">
            <div class="director__img-container">
                <img src="<?php echo get_field('dir_img')['sizes']['medium'] ?>" alt="" class="director__img">
            </div>
        </div>
    </div>
</section>
<?php //director ?>

<?php //project ?>
<?php
    $projectQuery = new WP_Query(array(
        'post_type'      => 'project',
        'post_status'    => 'publish',
        'posts_per_page' => 8,
        'order'          => 'DESC',
        'orderby'        => 'date',
    ));
    
    $idx = 0;
?>
<?php if($projectQuery->found_posts >= 8) : ?>
    <section class="section project" data-scroll-section>
        <div class="project__title-holder mb-3" data-scroll>
            <h2 class="text-outline text-outline--medium marquee-text js-marquee-text">
                <div><span class="text">Realisations</span></div>
            </h2>
        </div>
        <div class="container position-relative">
            <?php 
                $projectCat = get_terms(array(
                    'taxonomy' => 'project_category',
                    'hide_empty' => true,
                ));
            ?>
            <ul class="list-unstyled project-cat nav justify-content-center mb-3" data-scroll>
                <li class="nav-item project-cat__item">
                    <a href="<?php echo get_post_type_archive_link('project') ?>" class="nav-link project-cat__link">All</a>
                </li>
                <?php if(count($projectCat) > 0) : ?>
                    <?php foreach ($projectCat as $cat) : ?>
                        <li class="nav-item project-cat__item">
                            <a href="<?php echo get_category_link($cat->term_id) ?>" class="nav-link project-cat__link"><?php echo $cat->name ?></a>
                        </li>
                    <?php endforeach ?>
                <?php endif ?>
            </ul>

            <div class="project__grid" data-scroll>
                <?php while($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
                    <div class="project__item--<?php echo $idx ?>">
                        <a href="<?php the_permalink() ?>" class="project-thumb d-block">
                            <div class="project-thumb__text-holder">
                                <div class="project-thumb__text">
                                    <h3 class="titlesub titlesub--white project-thumb__title mb-0"><?php the_title() ?></h3>
                                    <?php $terms = get_the_terms(get_the_ID(), 'project_category'); ?>

                                    <?php if( count($terms) > 0 ) : ?>
                                        <div class="project-thumb__cat-holder">
                                            <?php foreach ($terms as $term) : ?>
                                                    <span class="project-thumb__cat"><?php echo $term->name ?></span>
                                            <?php endforeach ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="project-<?php echo $idx ?>__img-container">
                                <img class="project-<?php echo $idx ?>__img" src="<?php (get_the_post_thumbnail_url(get_the_ID(), 'medium')) ? the_post_thumbnail_url('medium') : am_default_img(); ?>" alt="<?php the_title() ?>">
                            </div>
                        </a>
                    </div>
                <?php $idx++; endwhile; wp_reset_postdata(); ?>
            </div>

            <div class="project-ornament-1 d-none d-md-block">
                <div class="project-ornament-1__img-container" data-scroll data-scroll-speed="3">
                    <img src="<?php am_img_asset('tosca-circle.png') ?>" alt="" class="project-ornament-1__img">
                </div>
            </div>
            <div class="project-ornament-2">
                <div class="project-ornament-2__img-container" data-scroll data-scroll-speed="2">
                    <img src="<?php am_img_asset('gradient-donuts.png') ?>" alt="" class="project-ornament-2__img">
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<?php //project end ?>

<?php //contact ?>
<section class="container pb-5" data-scroll-section>
    <div class="row justify-content-between pt-md-5 pb-5">
        <div class="col-lg-5 col-12" data-scroll data-scroll-speed="3">
            <?php if(get_field('contact_title_small')) : ?>
                <span class="titlesub titlesub--grey"><?php the_field('contact_title_small') ?></span>
            <?php endif ?>
            <h2 class="title title--medium highlight--lightblue highlight--underline"><?php the_field('contact_title') ?></h2>
            <div class="mt-3 mt-md-4 pt-md-2"><?php the_field('contact_desc') ?></div>
        </div>
        <div class="col-lg-6 col-12 pt-4 pt-lg-0" data-scroll data-scroll-speed="1">
            <?php echo do_shortcode('[contact-form-7 id="10" title="Contact Form"]') ?>
        </div>
    </div>
</section>
<?php //contact ?>

<?php get_footer() ?>