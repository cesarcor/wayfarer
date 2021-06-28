<div class="carousel slide mobile-post-carousel" data-ride="carousel">

<ol class="carousel-indicators">
    <li data-target="#mobile-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#mobile-carousel" data-slide-to="1"></li>
  </ol>
            <div class="carousel-inner">

                <?php
                if (have_posts()):

                    $active_counter = 0;
                    
                    while (have_posts()) : the_post();
                ?>
                
                    <article class="carousel-item carousel-post-item <?php echo $active_counter < 1 ? 'active' : '' ?>">
                        <div class="carousel-post-item__container">
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('medium', ['class' => 'd-block w-100']);
                            else:
                            ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpeg"/>
                            <?php
                            endif;
                            ?>

                            <div class="">
                                <ul class="post-item__taxonomies">
                                        <li class="post-item__post-cat">READ</li>
                                        <li class="post-item__post-tag">LIFE</li>
                                </ul>

                                <h2 class="carousel-post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>

                        </div>
                    </article>

                <?php
                    $active_counter++;

                    endwhile;

                endif;
                ?>

            </div>
</div>