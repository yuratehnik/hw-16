
<?php
/* Template Name: blog page */
get_header();
?>
<?
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( array(
    'posts_per_page' => 6,
    'paged'          => $paged,

) );
if ( $query->have_posts() ) :?>
    <main>
    <ul class="wide-container blog__list__wrapper">
    <?while ( $query->have_posts() ) :
        $query->the_post();?>
                <li class="blog__list__item">
                    <div class="blog__list__image__wrapper">
                        <? if(has_post_thumbnail()) :?>
                        <img src="<? echo get_the_post_thumbnail_url();?>" alt="photo">
                        <? endif;?>
                    </div>
                    <h2 class="blog__list__item__headline">
                        <? echo get_the_title();?>
                    </h2>
                    <p class="blog__list__item__paragraph">
                        <? echo get_the_excerpt();?>
                    </p>
                    <a href="<? echo get_permalink();?>" class="blog__list__item__read-button">
                        read more
                    </a>
                    <div class="blog__list__item__bottom__wrapper">
                        <p>
                            <i class="fa fa-calendar"></i>
                            <? echo get_the_date();?>
                        </p>
                        <p>
                            <i class="fa fa-comment"></i>
                            <? echo get_comments_number();?>
                        </p>
                    </div>
                    <div class="blog__list__item__bottom__sepparator"></div>
                </li>

<? wp_reset_postdata();
    endwhile; ?>
    <?
    else: echo "Sorry, there is no posts";

    endif;?>
    </ul>


        <nav class="navigation pagination navigation_pagination" role="navigation">
            <?php $big = 999999999; // уникальное число

            echo paginate_links( array(
                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'  => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total'   => $query->max_num_pages,
                'end_size'     => 1,
                'mid_size'     => 2,
                'prev_next'    => True,

            ) ); ?>

        </nav>



    </main>

<!--    <main>-->
<!--        <ul class="wide-container blog__list__wrapper">-->
<!--            <li class="blog__list__item">-->
<!--                <div class="blog__list__image__wrapper">-->
<!--                    <img src="img/blog/photo1.png" alt="photo">-->
<!--                </div>-->
<!--                <h2 class="blog__list__item__headline">-->
<!--                    Daniel Jackson Shoots-->
<!--                    New Yorkers for i-D-->
<!--                </h2>-->
<!--                <p class="blog__list__item__paragraph">-->
<!--                    Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by-->
<!--                    Yadim,  Francelle and Hannah Murray,-->
<!--                    casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.-->
<!--                </p>-->
<!--                <button class="blog__list__item__read-button">-->
<!--                    read more-->
<!--                </button>-->
<!--                <div class="blog__list__item__bottom__wrapper">-->
<!--                    <p>-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        25.08.2014-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="fa fa-comment"></i>-->
<!--                        24-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="blog__list__item__bottom__sepparator"></div>-->
<!--            </li>-->
<!--            <li class="blog__list__item">-->
<!--                <div class="blog__list__image__wrapper">-->
<!--                    <img src="img/blog/photo1.png" alt="photo">-->
<!--                </div>-->
<!--                <h2 class="blog__list__item__headline">-->
<!--                    Daniel Jackson Shoots-->
<!--                    New Yorkers for i-D-->
<!--                </h2>-->
<!--                <p class="blog__list__item__paragraph">-->
<!--                    Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by-->
<!--                    Yadim,  Francelle and Hannah Murray,-->
<!--                    casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.-->
<!--                </p>-->
<!--                <button class="blog__list__item__read-button">-->
<!--                    read more-->
<!--                </button>-->
<!--                <div class="blog__list__item__bottom__wrapper">-->
<!--                    <p>-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        25.08.2014-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="fa fa-comment"></i>-->
<!--                        24-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="blog__list__item__bottom__sepparator"></div>-->
<!--            </li>-->
<!--            <li class="blog__list__item">-->
<!--                <div class="blog__list__image__wrapper">-->
<!--                    <img src="img/blog/photo1.png" alt="photo">-->
<!--                </div>-->
<!--                <h2 class="blog__list__item__headline">-->
<!--                    Daniel Jackson Shoots-->
<!--                    New Yorkers for i-D-->
<!--                </h2>-->
<!--                <p class="blog__list__item__paragraph">-->
<!--                    Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by-->
<!--                    Yadim,  Francelle and Hannah Murray,-->
<!--                    casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.-->
<!--                </p>-->
<!--                <button class="blog__list__item__read-button">-->
<!--                    read more-->
<!--                </button>-->
<!--                <div class="blog__list__item__bottom__wrapper">-->
<!--                    <p>-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        25.08.2014-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="fa fa-comment"></i>-->
<!--                        24-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="blog__list__item__bottom__sepparator"></div>-->
<!--            </li>-->
<!--            <li class="blog__list__item">-->
<!--                <div class="blog__list__image__wrapper">-->
<!--                    <img src="img/blog/photo1.png" alt="photo">-->
<!--                </div>-->
<!--                <h2 class="blog__list__item__headline">-->
<!--                    Daniel Jackson Shoots-->
<!--                    New Yorkers for i-D-->
<!--                </h2>-->
<!--                <p class="blog__list__item__paragraph">-->
<!--                    Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by-->
<!--                    Yadim,  Francelle and Hannah Murray,-->
<!--                    casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.-->
<!--                </p>-->
<!--                <button class="blog__list__item__read-button">-->
<!--                    read more-->
<!--                </button>-->
<!--                <div class="blog__list__item__bottom__wrapper">-->
<!--                    <p>-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        25.08.2014-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="fa fa-comment"></i>-->
<!--                        24-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="blog__list__item__bottom__sepparator"></div>-->
<!--            </li>-->
<!--            <li class="blog__list__item">-->
<!--                <div class="blog__list__image__wrapper">-->
<!--                    <img src="img/blog/photo1.png" alt="photo">-->
<!--                </div>-->
<!--                <h2 class="blog__list__item__headline">-->
<!--                    Daniel Jackson Shoots-->
<!--                    New Yorkers for i-D-->
<!--                </h2>-->
<!--                <p class="blog__list__item__paragraph">-->
<!--                    Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by-->
<!--                    Yadim,  Francelle and Hannah Murray,-->
<!--                    casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.-->
<!--                </p>-->
<!--                <button class="blog__list__item__read-button">-->
<!--                    read more-->
<!--                </button>-->
<!--                <div class="blog__list__item__bottom__wrapper">-->
<!--                    <p>-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        25.08.2014-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="fa fa-comment"></i>-->
<!--                        24-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="blog__list__item__bottom__sepparator"></div>-->
<!--            </li>-->
<!--            <li class="blog__list__item">-->
<!--                <div class="blog__list__image__wrapper">-->
<!--                    <img src="img/blog/photo1.png" alt="photo">-->
<!--                </div>-->
<!--                <h2 class="blog__list__item__headline">-->
<!--                    Daniel Jackson Shoots-->
<!--                    New Yorkers for i-D-->
<!--                </h2>-->
<!--                <p class="blog__list__item__paragraph">-->
<!--                    Photography Daniel Jackson,  styling by Alastair McKimm, hair by Shon  and Esther Langham, make-up by-->
<!--                    Yadim,  Francelle and Hannah Murray,-->
<!--                    casting by AM casting. Production  by Nikki Stromberg and Matthew Youmans at M.A.P New York.-->
<!--                </p>-->
<!--                <button class="blog__list__item__read-button">-->
<!--                    read more-->
<!--                </button>-->
<!--                <div class="blog__list__item__bottom__wrapper">-->
<!--                    <p>-->
<!--                        <i class="fa fa-calendar"></i>-->
<!--                        25.08.2014-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="fa fa-comment"></i>-->
<!--                        24-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="blog__list__item__bottom__sepparator"></div>-->
<!--            </li>-->
<!--        </ul>-->
<!---->
<!---->
<!--        <!--NEEDS FOR INTEGRATION INTO WORDPRESS!!!!!!!!!!!!!!!!!!! -->
<!--        <nav class="navigation pagination" role="navigation">-->
<!--            <img src="img/blog/17-layers.png" alt="" title="GAG For WP!!!">-->
<!--            <!--gaggle for wordpress pagination-->
<!--        </nav>-->
<!---->
<!---->
<!---->
<!--    </main>-->
<?php
get_footer();
