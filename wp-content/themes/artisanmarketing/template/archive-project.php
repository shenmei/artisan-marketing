<section class="container section my-5"  data-scroll-section>
    <div class="text-center pb-4" data-scroll>
        <h1 class="title title--medium">Projects</h1>
        <?php if(get_queried_object()->term_id) : ?>
            <p><?php echo get_queried_object()->name ?></p>
        <?php endif ?>
    </div>
    <div class="row">
        <?php while(have_posts()) : the_post(); ?>
            <div class="col-md-4 col-sm-6 col-12 py-3" data-scroll>
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
                    <div class="project-thumb__img-container">
                        <img class="project-thumb__img" src="<?php (get_the_post_thumbnail_url(get_the_ID(), 'medium')) ? the_post_thumbnail_url('medium') : am_default_img(); ?>" alt="<?php the_title() ?>">
                    </div>
                </a>
            </div>
        <?php endwhile ?>
    </div>
    <?php get_template_part('template/pagination') ?>
</section>