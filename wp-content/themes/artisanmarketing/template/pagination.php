<?php

echo paginate_links(array(
    'type' => 'list',
    'prev_text'  => __('<i class="fa fa-angle-left" aria-hidden="true"></i><span class="sr-only">Previous Page</span>'),
    'next_text'  => __('<i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next Page</span>'),
));