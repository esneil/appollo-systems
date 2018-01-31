<?php
/**
 * Created by PhpStorm.
 * User: Esneil
 * Date: 1/8/2018
 * Time: 2:39 AM
 */

get_header(); ?>

    <div id="page-title-background-image">
        <h3 id="page-title"><?php the_title(); ?></h3>
    </div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>