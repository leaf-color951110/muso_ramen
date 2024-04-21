<!DOCTYPE html>
<?php
  $top_image = "../../../assets/image/1st-page-backup.jpeg";
  $top_title = "MUSO RAMEN  + GYOZA BAR";

?>

<?php include 'template/meta.php'; ?>
<body>
  <?php include 'template/header.php'; ?>
  <main>
    <section>
      <div class="about_wrap">
        <div class="about_title">
          <span><?php the_field('title'); ?></span>
        </div>
        <div class="about_content_wrap">
          <div class="about_img">
            <img src="<?php the_field('left_image');?>">
          </div>
          <div class="about_content">
            <p><?php the_field('content'); ?></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="slider">
        <p class="aaa">スライドショーjs組み込みエリア</p>
      </div>
    </section>
    <section>
      <div class="top_discription_wrap">
        <div class="top_discription_content">
          <p>Akira and his staff are pleased to welcome you to their restaurant to experience the joy of Ramen…</p>
        </div>
        <div class="top_discription_img">
          <img src="../../../assets/image/Muso-01-1-1.5-300x200.jpg">
        </div>
      </div>
    </section>
  </main>

</body>