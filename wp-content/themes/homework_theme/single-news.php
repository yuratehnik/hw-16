<?php
get_header();
?><main class="wide-container-topmargins single-news__wrapper">
<?php
// Start the Loop.
while ( have_posts() ) : the_post();?>

    <img src="<? echo the_post_thumbnail_url(); ?>" alt="">
    <h1 class="single-news__title">
        <?php echo the_title();?>
    </h1>
    <?
    the_content();
    ?>
<?php
endwhile;
?>
</main>
<?php
get_footer();