<section id="news" class="section-home">
    <div class="container">
        <h2 class="text-center">Ultime News
         <?php if ( have_posts() ) :
                   while ( have_posts() ) : the_post(); ?>
                  <div class="col-md-4">
                      <div class="container-news">
                        <a href="">
                            <h2 class="text-center">

                           <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                           <img class="image-news" src="" alt=""/>
                        </a>
                      </div>
                   </div>
                   <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
