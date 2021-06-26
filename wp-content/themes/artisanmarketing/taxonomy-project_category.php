<?php get_header() ?>

<?php if(have_posts()) : ?>
    <?php get_template_part('template/archive', 'project') ?>
<?php else : ?>
    <?php get_template_part('template/content', 'none') ?>
<?php endif ?>

<?php get_footer() ?>