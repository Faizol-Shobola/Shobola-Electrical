<?php $query_args = array(
        'post_type' => 'client',
        // 'posts_per_page' => ,
        'order' => 'DESC',
    );

    $query = new WP_Query( $query_args ); ?>

<?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post();?>

<div class="col-lg-12">
    <div class="client-box style1">
        <div class="client-thumbnail">
        <?php if(has_post_thumbnail()):?>                           
            <img class="img-fluid auto_size" width="160" height="98" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
        <?php endif;?>
        </div>
    </div>
</div>


<?php endwhile; else: endif; ?>