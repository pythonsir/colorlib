<?php
/*
YARPP Template: Simple
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>
<div class="recent_post">
    <span>猜您喜欢的文章</span>
    <div class="row">
        <?php if (have_posts()):?>

           <?php while (have_posts()) : the_post(); ?>

        <div class="col-md-4">
            <a href="<?php the_permalink() ?>" target="_blank"><img class="img-responsive" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url();?>"></a>
            <div class="rece">
                <a href="<?php the_permalink() ?>" target="_blank" ><strong><?php the_title(); ?></strong></a>
                <p><?php echo mb_strimwidth(strip_tags(get_the_excerpt()), 0, 100,"......"); ?></p>
            </div>
        </div>

           <?php endwhile;
           ?>

        <?php else:
        query_posts("orderby=rand&order=asc&limit=1");
        the_post();?>
            <div class="col-md-4">
                <a href="<?php the_permalink() ?>" target="_blank"><img class="img-responsive " alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url();?>"></a>
                <div class="rece">
                    <a href="<?php the_permalink() ?>" target="_blank"><strong><?php the_title(); ?></strong></a>
                    <p><?php echo mb_strimwidth(strip_tags(get_the_excerpt()), 0, 100,"......"); ?></p>
                </div>
            </div>
        <?php endif; ?>


    </div>
</div>