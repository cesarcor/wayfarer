<article id="post-<?php the_ID(); ?>" class="post-item">

<figure class="post-item__img">
    <?php 
    if (has_post_thumbnail()):
        the_post_thumbnail('medium');
    else:
        ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpeg"/>
        <?php
    endif;
    ?>
</figure>

<div class="post-item__content">
    <ul class="post-item__taxonomies">
        <li class="post-item__post-cat">READ</li>
        <li class="post-item__post-tag">LIFE</li>
    </ul>
    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>

</article>