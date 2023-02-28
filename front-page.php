<?php get_header(); ?>

    <?php 
                    $blogPosts = new WP_Query(array(
                        'post_type' => 'reviews',
                        'posts_per_page' => 1
                    )); 
                    
                    while($blogPosts->have_posts()) {
                        $blogPosts->the_post()?> 

<section class="hero" style="background-image: url(<?php the_post_thumbnail_url('extra-large');?>">
        <div class="container px-5 px-md-3" style="height: inherit;">
            <div class="row" style="height: inherit;">
                <div class="col-12 col-md-10 d-flex align-items-end pb-5" style="height: inherit;">
                        <div>
                        <small class="text-light text-uppercase"><?php echo get_the_author_nickname(); ?> | <?php echo get_the_date(); ?></small>
                            <h2 class="display-6">
                            <a class="text-white yellowBG" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </div>
                </div>             
                <div class="col-12 col-md-4">
                </div>  
            </div>
        </div>
</section>
<?php } ?>

<section class="container my-5">
    <div class="row">
        <div class="col-12 col-lg-9">
            <div class="tag-stripe mb-4">
                <h2 class="tag">
                    TODAY'S PICKS
                </h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 mb-4">
                <?php 
                    $blogPosts = new WP_Query(array(
                        'post_type' => 'test',
                        'posts_per_page' => 1
                    )); 
                    
                    while($blogPosts->have_posts()) {
                        $blogPosts->the_post()?> 
                        <div class="card">
                            <?php the_post_thumbnail('rectangle')?>
                            <div class="card-body p-3 dark">
                                <h5 class="card-title featured text-light"><a class="text-light yellowBG" href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text text-light"><?php echo wp_trim_words(get_the_content(), 10, '...');?></p>
                            </div>
                        </div>
                <?php } ?>
                </div>
                <div class="col-12 col-md-4 col-lg-4 ">
                <?php 
                    $blogPosts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 2
                    )); 
                    
                    while($blogPosts->have_posts()) {
                        $blogPosts->the_post()?> 
                        <div class="card bottom-stripe mb-4">
                        <?php the_post_thumbnail('rectangle')?>
                            <div class="card-body">
                                
                                <h5 class="card-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <small class="text-muted text-uppercase card-text">
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">
                                        <?php the_author_nickname(); ?>
                                    </a>
                                </small>
                            </div>
                            <!-- <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div> -->
                        </div>
                <?php } ?>
                     
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="tag-stripe mb-4">
                <h2 class="tag">
                    MOST RECENT
                </h2>
            </div>
            <div class="row">
            <?php 
                    $blogPosts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 5
                    )); 
                    
                    while($blogPosts->have_posts()) {
                        $blogPosts->the_post()?> 
                <div class="pb-3 col-12 col-sm-6 col-lg-12">
                    <div class="card bottom-stripe">
                        <div class="row card-body">
                            <div class="col-8">
                                <h5 class="card-title most-recent"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <small class="text-muted text-uppercase card-text">
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">
                                        <?php the_author_nickname(); ?>
                                    </a>
                                </small>
                            </div>
                            <div class="col-4"><?php the_post_thumbnail('rectangle')?></div>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</section>



<section id="reviews" class="container my-5">
    <div class="tag-stripe mb-4">
        <h2 class="tag">
            REVIEWS
        </h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
    <?php 
        $reviewPosts = new WP_Query(array(
            'post_type' => 'reviews',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'ASC',
        )); 

        
        while($reviewPosts->have_posts()) {
            $reviewPosts->the_post()?> 
    
        <div class="col-12 col-sm-6 col-lg-3 pb-4">
            <div class="card h-100">
            <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('rectangle')?></a>
                <div class="card-body">
                    <small class="text-uppercase"><?php echo $post->post_type; ?></small>
                    <h5 class="card-title mb-1"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 10, '...');?></p>
                    <small class="text-muted text-uppercase card-text">
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">
                                        <?php the_author_nickname(); ?>
                                    </a>
                                </small>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
        </div>
        </div>
</section>

<section id="gallery" class="container-fluid p-4">
    <div class="container">
<div class="tag-stripe mb-4" style="background:none; border-bottom:1px solid white">
    <h2 class="tag text-bg-light">
        FEATURED GALLERY
    </h2>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <?php 
        $reviewPosts = new WP_Query(array(
            'cat' => 12,
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        )); 
        while($reviewPosts->have_posts()) {
            $reviewPosts->the_post()?> 

    <div class="carousel-item">
        <?php the_post_thumbnail('gallery')?>
        <div class="carousel-caption d-none d-md-block">
            <h2 class="display-7"><?php echo get_the_title();?></h2>
           <p><?php echo wp_trim_words(get_the_content(), 10, '...');?></p>
        </div>
    </div>
    <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>








<!-- LONG READS --> 
<section id="long-reads" class="container my-5">
    <div class="tag-stripe mb-4">
        <h2 class="tag">
            TEST DRIVES
        </h2>
    </div>
    <div class="row" class="bottom-stripe">
    <?php 
        $testPosts = new WP_Query(array(
            'post_type' => 'test',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'ASC',
        )); 

        
        while($testPosts->have_posts()) {
            $testPosts->the_post()?> 
        <div class="col-12 col-md-7 col-lg-8">
        <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('rectangle')?></a>
        </div>
        <div class="col-12 col-md-5 col-lg-4">
            <h2 class="display-7">
                <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="d-md-none d-lg-block">
                Some renderings will always be confined to the screen, simply serving the purpose of fueling our dreams. This wildy-modified Volkswagen Golf GTI pixel painting is not one of them, though. "blueprints" for a future build.
            </p>
        </div>
        <?php } ?>
    </div>
    <div class="row py-3">
        
        <?php 
        $testPosts = new WP_Query(array(
            'post_type' => 'test',
            'posts_per_page' => 4
        )); 

        
        while($testPosts->have_posts()) {
            $testPosts->the_post()?> 
            <div class="col-12 col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-4 pb-3">
                        <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('square')?></a>
                    </div>
                    <div class="col-8 pb-3">
                        <h2 class="test-drives">
                        <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        </h2>
                        <small class="text-uppercase"> <?php echo get_the_author_nickname(); ?></small>
                    </div>
                </div>       
            </div>
            <?php } ?> 
    </div>
</section>

<!-- Events -->
<section id="newsletterSignup" class="container-fluid">
    <div class="container py-5"> 
    <h2 class="text-white text-center mb-5">UPCOMING EVENTS</h2>          
        <div class="row">
            <?php 
            $today = date('F j, Y');
            $events = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                    'key' => 'event_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                    )
                )
            )); 
            
            while($events->have_posts()) {
                $events->the_post(); ?>

                    <div class="mb-3 p-3 col-sm-6 col-lg-3 align-self-stretch">
                        <div class="p-4 bg-white h-100">
                            <h4 class="display-7 text-uppercase"><?php 
                                $eventDate = new DateTime(get_field('event_date'));
                            echo $eventDate->format('M d');?>
                            </h4>
                            <hr>
                            <h4 class="card-text">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo wp_trim_words(get_the_title(), 8, '...');?>
                                </a>
                            </h4>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>      
</section>


<section id="categories" class="container my-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-4 mb-5">
                    <div class="tag-stripe mb-4">
                        <h2 class="tag">
                            MERCEDES
                        </h2>
                    </div>
                    <?php
                        $category_query = new WP_Query(array(
                            'cat' => 10,
                            'posts_per_page' => -1,
                            'post_type' =>  'post'
                        )); 
                        $postNumber = 1;
                        while($category_query->have_posts()) {
                            $category_query->the_post()?> 
                            
                            <?php 
                            if($postNumber<=1){
                                the_post_thumbnail('rectangle');
                                $postNumber++;
                            }?>
                    <div class="bottom-stripe">
                        <h5 class="pt-3 card-title">
                         <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                        
                        </h5>
                    </div> 
                    <?php } ?>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class="tag-stripe mb-4">
                        <h2 class="tag">
                            BMW
                        </h2>
                    </div>
                    <?php
                        $category_query = new WP_Query(array(
                            'cat' => 9,
                            'posts_per_page' => -1,
                            'post_type' =>  'post'
                        )); 
                        $postNumber = 1;
                        while($category_query->have_posts()) {
                            $category_query->the_post()?> 
                            
                            <?php 
                            if($postNumber<=1){
                                the_post_thumbnail('rectangle');
                                $postNumber++;
                            }?>
                    <div class="bottom-stripe">
                        <h5 class="pt-3 card-title">
                         <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                        
                        </h5>
                    </div> 
                    <?php } ?>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class="tag-stripe mb-4">
                        <h2 class="tag">
                            SUBARU
                        </h2>
                    </div>
                    <?php
                        $category_query = new WP_Query(array(
                            'cat' => 11,
                            'posts_per_page' => -1,
                            'post_type' =>  'post'
                        )); 
                        $postNumber = 1;
                        while($category_query->have_posts()) {
                            $category_query->the_post()?> 
                            
                            <?php 
                            if($postNumber<=1){
                                the_post_thumbnail('rectangle');
                                $postNumber++;
                            }?>
                    <div class="bottom-stripe">
                        <h5 class="pt-3 card-title">
                         <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                        
                        </h5>
                    </div> 
                    <?php } ?>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class="tag-stripe mb-4">
                        <h2 class="tag">
                            TOYOTA
                        </h2>
                    </div>
                    <?php
                        $category_query = new WP_Query(array(
                            'cat' => 12,
                            'posts_per_page' => -1,
                            'post_type' =>  'post'
                        )); 
                        $postNumber = 1;
                        while($category_query->have_posts()) {
                            $category_query->the_post()?> 
                            
                            <?php 
                            if($postNumber<=1){
                                the_post_thumbnail('rectangle');
                                $postNumber++;
                            }?>
                    <div class="bottom-stripe">
                        <h5 class="pt-3 card-title">
                         <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                        
                        </h5>
                    </div> 
                    <?php } ?>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class="tag-stripe mb-4">
                        <h2 class="tag">
                            HONDA
                        </h2>
                    </div>
                    <?php
                        $category_query = new WP_Query(array(
                            'cat' => 7,
                            'posts_per_page' => -1,
                            'post_type' =>  'post'
                        )); 
                        $postNumber = 1;
                        while($category_query->have_posts()) {
                            $category_query->the_post()?> 
                            
                            <?php 
                            if($postNumber<=1){
                                the_post_thumbnail('rectangle');
                                $postNumber++;
                            }?>
                    <div class="bottom-stripe">
                        <h5 class="pt-3 card-title">
                         <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                        
                        </h5>
                    </div> 
                    <?php } ?>
                </div>
                <div class="col-6 col-lg-4 mb-5">
                    <div class="tag-stripe mb-4">
                        <h2 class="tag">
                            VOLKSWAGEN
                        </h2>
                    </div>
                    <?php
                        $category_query = new WP_Query(array(
                            'cat' => 8,
                            'posts_per_page' => -1,
                            'post_type' =>  'post'
                        )); 
                        $postNumber = 1;
                        while($category_query->have_posts()) {
                            $category_query->the_post()?> 
                            
                            <?php 
                            if($postNumber<=1){
                                the_post_thumbnail('rectangle');
                                $postNumber++;
                            }?>
                    <div class="bottom-stripe">
                        <h5 class="pt-3 card-title">
                         <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                        
                        </h5>
                    </div> 
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 d-none d-lg-block">
            <img src="/wp-content/uploads/2023/02/car.jpg" alt="">
        </div>
    </div>
</section>


</div>



<?php get_footer(); ?>
