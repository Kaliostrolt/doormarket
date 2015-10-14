<?php

/* Template Name: Main page template*/


get_header();

$args = array(
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'post_type' => 'services',
            'taxonomy' => 'services_cat',
            'field' => 'slug',
            'terms' => array(
                'uslugi-na-glavnoj'
            ),
        )
    )
);

$services = query_posts( $args );

$choose_us = get_posts(
    array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'category_name' => 'akkordeon-na-glavnoj'
    )
);

?>

    <!--=======content================================-->
    <div class="content page1">
        <div class="slide_shadow">

            <?php



                      echo " <div class='container_12'>";

                          for($g4_counter = 0; $g4_counter < count($services)/2; $g4_counter++){

                              $thumbnail = get_the_post_thumbnail($services[$g4_counter]->ID, 'main-service');

                              $datas = get_post_custom($services[$g4_counter]->ID);

                              echo "<div class='grid_4'>
                                        <div class='box'>
                                            ".$thumbnail."
                                            <div class='pad1 maxheight'>
                                                <h3>".$datas['title_1'][0]." <strong>".$datas['title_2'][0]."</strong></h3>".$datas['mini_excerpt'][0]."
                                                <a href='".home_url()."/services/".$services[$g4_counter]->post_name."' class='abs_corn'></a>
                                            </div>
                                        </div>
                                    </div>";

                          }

                      echo "</div>";

            echo " <div class='container_12'>";

            for(count($services)/2; $g4_counter < count($services); $g4_counter++){

                $thumbnail = get_the_post_thumbnail($services[$g4_counter]->ID, 'main-service');

				 $datas = get_post_custom($services[$g4_counter]->ID);

                echo "<div class='grid_4'>
                                        <div class='box'>
                                            ".$thumbnail."
                                            <div class='pad1 maxheight'>
                                                <h3>".$datas['title_1'][0]." <strong>".$datas['title_2'][0]."</strong></h3>".$datas['mini_excerpt'][0]."
                                                <a href='".home_url()."/services/".$services[$g4_counter]->post_name."' class='abs_corn'></a>
                                            </div>
                                        </div>
                                    </div>";

            }

            echo "</div>";


            ?>

        </div>
        <div class="container_12">
            <div class="grid_4 prefix_4">
                <a class="services_button" href="/uslugi">ВСЕ УСЛУГИ</a>
            </div>
        </div>
        <div class="container_12">
            <div class="grid_4">
                <?php
                $the_slug = 'dom-i-dvor-dobro-pozhalovat';
                $args = array(
                'name'        => $the_slug,
                'post_type'   => 'post',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $my_post = get_posts($args);

                echo $my_post[0]->post_content;

                ?>
                <a href="/domidvor/o-nas" class="btn">Далее...</a>
            </div>


            <div class="grid_4 grid_center">
                <h3>Последние <strong>Проекты</strong></h3>
                <ul class="list">
                    <li><a href="#">Проект "Аура"</a></li>
                    <li><a href="#">Дом в "Лесном"</a></li>
                    <li><a href="#">Венский дворик</a></li>
                    <li><a href="#">Проект "Леруа"</a></li>
                    <li><a href="#">Паркет "Венеция"</a></li>
                </ul>
                <a href="/domidvor/proekty" class="btn">Смотреть все...</a>
            </div>
            <div class="grid_4">
                <h3>Почему<strong>Мы ?</strong></h3>
                <dl id="accordion">

                    <?php

                        foreach ($choose_us as $punkt) {

                            echo " <dt><a href='#'>".$punkt->post_title."</a></dt>";
                            
                            echo "<dd>
                                    <div class='extra_wrapper'>
                                        ".$punkt->post_content."
                                    </div>
                                </dd>";

                        }

                    ?>

                </dl></div>
        </div>
    </div>

<?php
wp_reset_query();
get_footer();
