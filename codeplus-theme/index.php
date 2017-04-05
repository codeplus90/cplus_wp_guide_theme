<?php
get_header();
?>
<div class="front-image"/>
  <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/02/nome-immagine.formato" >
</div>
<section id="chi-siamo" class="section-home">
  <div class="container">
    <h2 class="text-center">Chi Siamo</h2>
    <div class="col-sm-5">
      <img src="/wp-content/uploads/2016/02/chi-siamo.jpg">
    </div>
    <div class="col-sm-7">
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
            Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
    </div>
  </div>
</section>
<?php get_template_part('news-section'); ?>
<?php get_footer(); ?>
