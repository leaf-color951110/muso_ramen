<!DOCTYPE html>
<?php
  $top_title = "MUSO RAMEN  + GYOZA BAR";
  $description = "Muso Ramen website. We serve ramen on the Gold Coast.";
  $line_sliders= (get_field('line-slider'))
?>
<?php include 'template/meta.php'; ?>
  <?php include 'template/header.php'; ?>
  <main>
    <div class="front_main"; ?>
    <section>
      <div class="about_wrap">
        <div class="about_title">
          <span><?php echo get_field('content_title'); ?></span>
        </div>
        <div class="container about_content_wrap">
          <div class="row">
            <div class="col-md-4 about_img">
              <img src="<?php echo get_field('top_img_01'); ?>">
            </div>
            <div class="col-md-8 about_content">
              <p><?php echo get_field('top_maincntent'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="discription_wrap">
      <div class="discription_line01"></div>
      <div class="container top_discription_wrap">
        <div class="row">
          <div class="col-md-7 top_discription_content">
            <p><?php echo get_field('top_subcntent'); ?></p>
          </div>
          
          <div class="col-md-5 top_discription_img">
            <img src="<?php echo get_field('top_img_02'); ?>">
          </div>
        </div>
      </div>
      <div class="discription_line02"></div>
    </section>

    <section>
      <div class="slider02">
        <ul class="slider02">
        <?php if($line_sliders){ 
          foreach( $line_sliders as $line_slider ){?>
          <li><img src="<?php echo $line_slider; ?>"></li>
          <?php }
        } ?>
        </ul>
      </div>
    </section>
  </div>
  </main>
  <?php include 'template/footer.php'; ?>
</body>