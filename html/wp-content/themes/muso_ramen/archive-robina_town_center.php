<!DOCTYPE html>
<?php
  $top_image = "../../../assets/image/Final-1st-page-image-top.jpeg";
  $title = "MENU";
  $description = "Muso ramen Robina Town Center menu page.";
  $args = array(
    'post_type' => 'robina_town_center',
    'posts_per_page' => -1 //表示件数（-1で全ての記事を表示）
  );
  $the_query = get_posts( $args );
?>
<?php include 'template/meta.php'; ?>
<body>
  <?php include 'template/header.php'; ?>
  <main>
    <div class="menu_main">
    <div class="pankuzu"><p>Home > Menu > </p><p class="now">Robina Town Center</p></div>
      <section>
        <div class="menu_wrap">
        <?php 
          if ( $the_query ) :
          foreach ( $the_query as $post ) : setup_postdata( $post ); ?>

          <div class="menu_img_wrap">
            <img src="<?php the_field("menu_img"); ?>" class="menu_img">
          </div>
        <?php endforeach;
          wp_reset_postdata();
          else:
              echo 'データがありません。';
          endif; ?>
        </div>
      </section>
    </div>
    <canvas id="waveCanvas"></canvas>
  </main>
  <?php include 'template/footer.php'; ?>
</body>