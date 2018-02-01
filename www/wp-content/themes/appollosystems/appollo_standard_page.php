<?php
/*
 Template Name: Appollo Standard Name
 */

get_header();
?>

    <div id="page-title-background-image">
        <h3 id="page-title"><?php the_title(); ?></h3>
    </div>
    <div id="appollo_standard_page" class="container">
        <div class="row">
            <?php
            $pages = get_pages();
            foreach ($pages as $page) {
                if ($page->ID == get_the_ID()) {
                    echo $page->post_content;
                }
            }
            ?>
        </div>
    </div>
<?php
get_footer();
?>