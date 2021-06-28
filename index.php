<?php get_header(); ?>

<main class="site-main">

<?php get_template_part('template-parts/content/content', 'masonry'); ?>      

<div class="container">

    <div class="row">
        <div class="col-12">
            <?php 
                get_template_part('template-parts/content/content', 'carousel');
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="post-list-contain">
                <?php
                    if (have_posts()) :

                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content/content');
                        endwhile;

                    endif;
                ?>
            </div>
        </div>

        <div class="col-12 col-lg-4 sidebar-container">
            
        </div>
    </div>

</div>
    
</main>


<?php get_footer(); ?>