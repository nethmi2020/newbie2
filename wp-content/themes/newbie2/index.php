<?php


get_header(); ?>

<div class="home-page">
    <h2>Welcome NewBie</h2>
            
            <?php
                if(have_posts()) :

                    while(have_posts()): the_post();
            ?>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                <p><?php the_content() ?></p>

            <?php 
            endwhile;

            else: 
                echo '<p>No contend found</p>';?>
          <?php  endif;
            ?>
   
    
    
</div>
