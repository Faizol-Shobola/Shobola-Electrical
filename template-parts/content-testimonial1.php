<?php $query_args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => 6,
    'order' => 'rand',
);

$query = new WP_Query( $query_args );
if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<!-- testimonials -->
<div class="testimonials ttm-testimonial-box-view-style2">
    <div class="testimonial-avatar">
        <div class="testimonial-img">
          <?php if(has_post_thumbnail()):?>
            <img class="img-center" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
          <?php endif;?>
        </div>
    </div>
    <div class="testimonial-content">
        <blockquote><?php the_content(); ?></blockquote>
        <div class="testimonial-caption">
            <h5><?php the_title(); ?></h5>
            <label><?php the_field('job_title'); ?></label>
        </div>
    </div>
</div>
<!-- testimonials end -->

<?php endwhile; else: endif; ?>
