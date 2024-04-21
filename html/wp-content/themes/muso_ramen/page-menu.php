<!DOCTYPE html>
<?php
  $top_image = "../../../assets/image/Final-1st-page-image-top.jpeg";
  $top_title = "";
?>
<?php include 'template/meta.php'; ?>
<body>
  <?php include 'template/header.php'; ?>
  <main>
    <div class="pankuzu"><p>Home >  </p><p class="now">Menu</p></div>
      <section>
        <div class="allmenu_wrap">
        <a href="/menu/mermaid_beach/"><div class="allmenu_child">Mermaid Beach<p>▶︎</p></div></a>
        <a href="/menu/north_coast/"><div class="allmenu_child">North Coast<p>▶︎</p></div></a>
        <a href="/menu/robina_town_center/"><div class="allmenu_child">Robina Town Center<p>▶︎</p></div></a>
        </div>
      </section>
    </div>
    <canvas id="waveCanvas"></canvas>
  </main>
  <?php include 'template/footer.php'; ?>
</body>