<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php
get_header();
?>
<main>
    <section class="thin-container post__top-section__wrapper">
        <div class="post__top-section__image-wrapper">
            <? if(has_post_thumbnail()) :?>
                <img src="<? echo get_the_post_thumbnail_url();?>" alt="photo">
            <? endif;?>
        </div>
        <article class="post__top-section__article__wrapper">
            <h1 class="post__top-section__article__headline">
              <?php echo get_the_title(); ?>
            </h1>
            <div class="post__top-section__article__date__wrapper">
                <span>
                    <i class="fa fa-calendar-o"></i>
                  <?php echo get_the_date(); ?>
                </span>
                <span>
                    <i class="fa fa-comment"></i>
                  <?php echo get_comments_number(); ?>
                </span>
                <span>
                    <i class="fa fa-heart"></i>
14
                </span>
            </div>
          <?php
          $content = wpautop( $post->post_content );
          $added_class    =   str_replace('<p>', '<p class="post__top-section__article__paragraph">', $content);
          echo $added_class;?>
<!--            <p class="post__top-section__article__paragraph">-->
<!--Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.-->
<!--Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi-->
<!--                tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum-->
<!--                blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada-->
<!--                fames ac turpis egestas.-->
<!--            </p>-->
<!--            <p class="post__top-section__article__paragraph">-->
<!--Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.-->
<!--Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi-->
<!--                tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum-->
<!--                blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada-->
<!--                fames ac turpis egestas.-->
<!--            </p>-->
<!--            <p class="post__top-section__article__paragraph">-->
<!--Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.-->
<!--Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi-->
<!--                tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum-->
<!--                blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada-->
<!--                fames ac turpis egestas.-->
<!--            </p>-->
<!--            <p class="post__top-section__article__paragraph">-->
<!--Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.-->
<!--Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi-->
<!--                tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum-->
<!--                blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada-->
<!--                fames ac turpis egestas.-->
<!--            </p>-->
        </article>
        <ul class="post__top-section__share__wrapper">
            <li>
                <span>
share
                </span>
            </li>
            <li>
                <a href="#" class="fa fa-facebook"></a>
            </li>
            <li>
                <a href="#" class="fa fa-twitter"></a>
            </li>
            <li>
                <a href="#" class="fa fa-pinterest-p"></a>
            </li>
            <li class="post__top-section__share__refresh">
                <a href="#" class="fa fa-refresh"></a>
            </li>
        </ul>
    </section>
    <?php
    echo comments_template();
    ?>
    <section class="wide-container main-page__bottom__wrapper post__bottom-section__wrapper">
        <div class="main-page__bottom__first-container">
            <img src="img/mainpage/bottom_first_block.png" alt="photo">
            <h2 class="main-page__bottom__first-container__headline">
fashion Workshop
</h2>
            <h3 class="main-page__bottom__first-container__date">
Nov 21-23
</h3>
            <h4 class="main-page__bottom__first-container__time">
9:00am - 4:00pm
</h4>
            <button class="main-page__bottom__first-container__button">
RSVP
            </button>
        </div>
        <div class="main-page__bottom__second-container">
            <h2 class="main-page__bottom__second-container__headline">
news
            </h2>
            <?php
            $args = array( 'post_type' => 'news', 'posts_per_page' => 3 );
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
            <? endwhile;
            ?>
        </div>
        <div class="main-page__bottom__second-container post__bottom__third-container">
            <h2 class="main-page__bottom__second-container__headline">
category
            </h2>
            <ul class="post__bottom__third-container__list">
                <?
                $category_list_args = Array (
                    'title_li'           => __( '' ),
                );
                wp_list_categories( $category_list_args );?>
<!--                <li>-->
<!--                    <a href="#">-->
<!--    Fashion-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--    Collections-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--    World-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--    Photography-->
<!--                    </a>-->
<!--                </li>-->
            </ul>
        </div>
    </section>
    <ul class="wide-container partners__wrapper">
        <?php
        $args = array( 'post_type' => 'partners' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>
            <li>
                <img src="<? the_post_thumbnail_url()?>" alt="">
            </li>
<!--            <div class="main-page__bottom__second-container__item__wrapper">-->
<!--                <div class="main-page__bottom__second-container__item__image__wrapper">-->
<!--                    <img src="--><?// the_post_thumbnail_url();?><!--" alt="image">-->
<!--                </div>-->
<!--                <div class="main-page__bottom__second-container__item__text__wrapper">-->
<!--                    <h3 class="main-page__bottom__second-container__item__text__headline">-->
<!--                        --><?// echo the_title();?>
<!--                    </h3>-->
<!--                    <span class="main-page__bottom__second-container__item__text__date">-->
<!--                            --><?// echo the_date();?>
<!--                        </span>-->
<!--                    <p class="main-page__bottom__second-container__item__text__paragraph">-->
<!--                        --><?// echo get_the_excerpt();?>
<!--                        <span class="main-page__bottom__second-container__item__text__button__wrapper">-->
<!--                                <a href="--><?// echo get_permalink();?><!--">-->
<!--                                    Read More-->
<!--                                </a>-->
<!--                            </span>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
        <? endwhile;
        ?>
<!--        <li>-->
<!--            <img src="img/mainpage/phaseone_logo.png" alt="phaseone">-->
<!--        </li>-->
<!--        <li>-->
<!--            <img src="img/mainpage/manfrotto_logo.png" alt="manfrotto">-->
<!--        </li>-->
<!--        <li>-->
<!--            <img src="img/mainpage/hasselblad.png" alt="hasselblad">-->
<!--        </li>-->
<!--        <li>-->
<!--            <img src="img/mainpage/broncolor_logo.png" alt="broncolor">-->
<!--        </li>-->
    </ul>
</main>






<?php
get_footer();

