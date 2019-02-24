<?php get_header();
?>


<?php
$catPost = get_posts(get_cat_ID("NameOfTheCategory")); //change this
foreach ($catPost as $post) : setup_postdata($post); ?>
    <div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_content(); ?></p>
    </div>
<?php  endforeach;?>



<p>Category:<?php single_cat_title();?></p>
<?php
get_footer();?>