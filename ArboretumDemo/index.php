<?php get_header(); ?>


<?php 

while(have_posts()){
    the_post();
    echo"hi<br>";
    ?>

    <a href="<?php the_permalink(); ?>">
    <h3><?php the_title();?></h3>
    </a>
    <?php the_excerpt();?>
   <?php 
}

?>

<?php get_footer(); ?>