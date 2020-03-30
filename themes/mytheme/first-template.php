<?php
/*
Template Name: footer page
*/
get_header();
?>
    <?php
        if(have_posts()) :
            while(have_posts()) : the_post(); ?>
                <article class="post page">
                    <h2><?php the_title(); ?></h2>
                    <div class="info-box">
                        <h4> Do you need help? </h4>
                        <p>Lorem ipsum dolor sit amet, ut labore et dolore magna aliqua.
                          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
                    </div>
                    <?php the_content(); ?>
                </article>
      <?php endwhile;
        else :
            echo 'oops there is no post yet.';
        endif;

     ?>
 <?php get_footer(); ?>