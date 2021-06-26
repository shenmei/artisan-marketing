<section class="container section my-5" data-scroll-section>
    <div class="text-center pb-4" data-scroll>
        <h1 class="title title--medium"><?php echo get_the_title( get_option('page_for_posts', true) ) ?></h1>
        <?php if(get_queried_object()->term_id) : ?>
            <p><?php echo get_queried_object()->name ?></p>
        <?php endif ?>
    </div>
    <div class="row">
        <?php while(have_posts()) : the_post(); ?>
            <div class="col-md-4 col-sm-6 col-12 py-4" data-scroll>
                <div class="card border-0">
                    <div class="post__img-container">
                        <img src="<?php (get_the_post_thumbnail_url(get_the_ID(), 'medium')) ? the_post_thumbnail_url('medium') : am_default_img(); ?>" class="post__img" alt="<?php the_title() ?>">
                    </div>
                    <div class="card-body px-0">
                        <h3 class="title title--xs"><?php the_title() ?></h3>
                        <p class="card-text"><?php echo get_the_date() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn px-0 stretched-link">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
    <?php get_template_part('template/pagination') ?>
</section>