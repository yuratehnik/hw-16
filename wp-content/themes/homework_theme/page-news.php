<?php
/*Template Name: All News Page*/
get_header();
?>
    <main class="wide-container-topmargins">
        <?php if ( have_posts() ) :
            the_posts_pagination( array( 'mid_size'  => 2 ) );
            ?>

        <?php $args = array( 'post_type' => 'news'/*, 'posts_per_page' => 3 */);
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="main-page__bottom__second-container__item__wrapper">
                <div class="main-page__bottom__second-container__item__image__wrapper">
                    <img src="<? the_post_thumbnail_url();?>" alt="image">
                </div>
                <div class="main-page__bottom__second-container__item__text__wrapper">
                    <h3 class="main-page__bottom__second-container__item__text__headline">
                        <? echo the_title();?>
                    </h3>
                    <span class="main-page__bottom__second-container__item__text__date">
                            <? echo the_date();?>
                        </span>
                    <p class="main-page__bottom__second-container__item__text__paragraph">
                        <? echo get_the_excerpt();?>
                        <span class="main-page__bottom__second-container__item__text__button__wrapper">
                                <a href="<? echo get_permalink();?>">
                                    Read More
                                </a>
                            </span>
                    </p>
                </div>
            </div>
            <!--//                the_title();-->
            <!--//                echo '<div class="entry-content">';-->
            <!--//                the_content();-->
            <!--//                echo '</div>';-->
        <?
        endwhile;
        ?>
        <? endif;?>
    </main>
<? get_footer();
