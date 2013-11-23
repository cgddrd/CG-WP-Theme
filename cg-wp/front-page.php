<?php get_header(); ?>

 <div id="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-post">

            <div class="blog-heading">

                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <a href="<?php the_permalink(); ?>">

                    <i class="icon-time icon-background-grey"></i> <?php the_time('l, jS F Y'); ?>

                </a>

                    <?php
                        foreach((get_the_category()) as $category) { 

                            if (!($category->cat_name == 'Uncategorized')) {

                                echo '<a href="';

                                echo the_permalink();

                                echo '"><i class="icon-folder-open icon-background-grey"></i>';

                                if (count(get_the_category()) > 1) {

                                    echo $category->cat_name . ' '; 

                                } else {

                                   echo $category->cat_name;  
                                }

                                echo '</a>';

                            }
                            
                        } 
                    ?>

            </div>

            <div class="blog-post-content">

                <?php the_excerpt(); ?>

            </div>

        </div>
    

<?php endwhile; ?>

    

        <?php include (TEMPLATEPATH . '/extra_functions.php'); ?>
        <?php if ( has_previous_posts() || has_next_posts() ) { // only show if previous or next links are needed ?>

        <div class="pnavigation">
            <hr />

                <p class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></p>
                <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></p>

            <hr />
        </div>

        <?php } //end if ?>

    
<?php else : ?>

<?php endif; ?>
   

<?php get_footer(); ?>
