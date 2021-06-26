<?php get_header() ?>

<div class="py-5 container my-5" data-scroll-section>
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-10 col-12 text-center" data-scroll>
            <div class="error__img-container">
                <img src="<?php am_img_asset('404.svg') ?>" alt="" class="error__img">
            </div>
            <h1 class="title title--small mt-5 mb-3">Page not Found</h1>
            <a class="btn btn__block--blue" href="<?php echo home_url() ?>">Back to Home</a>
        </div>
    </div>
</div>

<?php get_footer() ?>