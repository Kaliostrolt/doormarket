<?php

/* Template Name: Services page template*/

get_header();

$uslugi = get_posts(
    array(
        'posts_per_page' => -1,
        'post_type' => 'services',
    )
);

?>



    <div class="content">
        <div class="container_12">
            <div class="grid_12">
                <h3>Наши<strong>услуги</strong></h3>
            </div>
            <div class="clear"></div>
            <div class="services">
                <?php

                $counter = 1;

                foreach ($uslugi as $usluga) {

                    $thumbnail = get_the_post_thumbnail($usluga->ID, 'plitka');

                    echo " <div class='grid_4'>
                              <div class='serv'>
                               ".$thumbnail."
                                <div class='abs_dark'>
                                  <p>".$usluga->post_excerpt."</p>
                                    </div>
                              </div>
                              <a href='".home_url()."/services/".$usluga->post_name."' class='btn'>".$usluga->post_title."</a>
                            </div>";

                    if($counter % 3 == 0){
                        echo "<div class='clear'></div>";
                    }

                    $counter++;

                }

                ?>
            </div>
        </div>
        <div class="container_12">
            <div class="grid_4 prefix_4">
                <a class="services_button" href="/wp-content/uploads/2015/09/Prajs-list-minsk.doc">СКАЧАТЬ ПРАЙС</a>
            </div>
        </div>
    </div>





<?php get_footer(); ?>
