<?php get_header(); ?>
        <?php if( have_posts() ) the_post(); ?>
  <section class="hero article" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.95)), url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <div class="container" style="height: inherit"><div class="row" style="height: inherit">
        <div class="col-12 d-flex align-items-end pb-4">
                  <div><h2 class="display-7" style="text-transform: capitalize;">
                      <?php echo get_the_title();?>
                      
                    </h2>
                  <small class="text-light text-uppercase">BY: <?php echo get_the_author_nickname(); ?> | <?php echo get_the_date(); ?></small></div>
                    
                  </div>
            </div>
          </div>              
          </div>
  </section>
    <div class="container my-5">
      <div class="row">
        <div class="col-10 mx-auto">
          <div class="row">
          <div class="col-12 col-lg-7 me-auto">
                <div class="col-12">
                <?php the_content(); ?>
                </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="tag-stripe mb-4">
                <h2 class="tag">
                    MOST RECENT
                </h2>
            </div>
            <div class="row">
            <?php 
                    $blogPosts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 4
                    )); 
                    
                    while($blogPosts->have_posts()) {
                        $blogPosts->the_post()?> 
                <div class="pb-3 col-12 col-sm-6 col-lg-12">
                    <div class="card bottom-stripe">
                        <div class="row card-body">
                            <div class="col-8">
                                <h5 class="card-title most-recent"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <small class="text-muted text-uppercase card-text"><a href="<?php get_the_author_link(); ?>"><?php echo get_the_author_nickname();?></a></small>
                            </div>
                            <div class="col-4"><?php the_post_thumbnail('rectangle')?></div>
                        </div>
                    </div>
                </div>
            <?php }?>
             <img class="img-fluid d-none d-lg-block" src="/wp-content/uploads/2023/02/car.jpg" alt="">
          
            </div>
        </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>



