
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="hero-post-masonry">
    <div class="hero-post-masonry__col">
        <?php
        global $wp_query;

        $args = array_merge($wp_query->query_vars, ['posts_per_page' => 1]);
        query_posts($args);

        ?>
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>

                <article <?php post_class( 'masonry-post-item masonry-left-col-item' ); ?> onclick="window.location='<?php the_permalink(); ?>'">
                    <figure class="masonry-post-item__img">
                            <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('medium', ['class' => 'd-block w-100']);
                                else:
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpeg"/>
                                <?php
                                endif;
                            ?>
                    </figure>
                    <div class="masonry-post-item__content">
                        <h3 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h3>
                    </div>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>

    <div class="hero-post-masonry__col">
        <?php
        $args = array_merge($wp_query->query_vars, ['posts_per_page' => 4]);
        query_posts($args);
        ?>
        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
                <article <?php post_class( 'masonry-post-item masonry-right-col-items' ); ?>>
                    <figure class="masonry-post-item__img">
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('medium', ['class' => 'd-block w-100']);
                            endif;
                            ?>
                    </figure>
                    <div class="masonry-post-item__content">
                        <h3 class="post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h3>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>

</div>

</div>
</div>
</div>