<article class="section container" data-scroll-section>
    <div class="row justify-content-center">
        
        <div class="col-md-8 col-sm-10 col-12 text-center my-3" data-scroll>
            
            <?php if( get_post_type() == 'post' ) : ?>
                <p class="m-0"><?php echo get_the_date() ?></p>
            <?php endif ?>

            <h1 class="title title--medium"><?php the_title() ?></h1>

            <?php
                if(get_post_type() == 'post') {
                    $cats = get_the_category();
                } elseif (get_post_type() == 'project') {
                    $cats = get_the_terms(get_the_ID(), 'project_category');
                }
            ?>
            <?php if($cats && count($cats) > 0) : ?>
                <ul class="list-unstyled list-category nav justify-content-center">
                    <?php foreach ($cats as $cat) : ?>
                        <li class="nav-item list-category__item">
                            <a href="<?php echo get_category_link($cat->term_id) ?>" class="nav-link list-category__link"><?php echo $cat->name ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>

        </div>

        <?php if(get_the_post_thumbnail_url(get_the_ID(), 'medium')) : ?>
            <div class="col-md-10 col-12 my-3" data-scroll>
                <div class="page__img-container">
                    <picture>
                        <source srcset="<?php the_post_thumbnail_url('medium') ?>" media="(max-width: 575.98px)">
                        <img src="<?php the_post_thumbnail_url('large') ?>" alt="<?php the_title() ?>" class="page__img">
                    </picture>
                </div>
                
            </div>
        <?php endif ?>

        <div class="col-md-8 col-sm-10 col-12 mt-3 mb-5" data-scroll>
            <div class="editor"><?php the_content() ?></div>
        </div>
    </div>
</article>