<!DOCTYPE html>

<?php 
$top_image = "../../../assets/image/Muso-2017-07-13-17-of-24-1024x683.jpeg";
$title = "INFOMATION";
$discription = "Muso Ramen information page, showing posts from Instagram.";

$instagram_seachs = ['instagram_search_mermaid', 'instagram_search_robina', 'instagram_search_northcoast'];
$instagram_accounts =["mermaid_beach", "north_coast", "robina_town_center"];



?>


<?php include 'template/meta.php'; ?>
<body>
  <?php include "template/header.php"; ?>
  <main>
    <div class="info_main">
    <div class="pankuzu"><p>Home > </p><p class="now">Shop Info</p></div>
    <div class="containar all_insta_wrap"><div class="row">
    <?php 
    foreach (array_map(null, $instagram_seachs, $instagram_accounts) as [$instagram_seach, $instagram_account]) { 
      $img = $instagram_account . "_instagram_image";
      $name = $instagram_account . "_instagram_name";
      $id = $instagram_account . "_instagram_id";
      $caption = $instagram_account . "_instagram_caption";
      if($instagram_account == "mermaid_beach"){ $shop_name = "Marmaid Beach"; }
      elseif($instagram_account == "north_coast"){ $shop_name = "North Coast"; }
      elseif($instagram_account == "robina_town_center"){ $shop_name = "Robina Toen Center"; }
    ?>
    <div class="col-xl-4">
    <section>
      <!-- プロフィール -->
      <div class="insta_wrap";>
        <div class="account_wrap">
          <div class="info_shop_name"><p><?php echo $shop_name; ?></p></div>
          <div class="profile_wrap">
            <div class="ratio-1x1 insta_icon_wrap">
              <img class="insta_icon" src="<?php the_field($img); ?>">
            </div>
            <div class="account_name_wrap">
              <p class="account_name">
              <?php the_field($name); ?>
              </p>
              <p class="account_id"><?php the_field($id); ?></p>
            </div>
          </div>
          <div class="account_intro">
            <p class="introduction">
            <?php the_field($caption); ?>
            </p>
          </div>
        </div>
        <div class="followus_wrap">
          <div>Instagram</div>
          <div class="followus_line"></div>
          <p>Pleas folow us on instagram</p>
        </div>
        <!-- 投稿一覧 -->
        <div class="posts_wrap">
          <?php 
          $insta_data = $instagram_seach(); 
          $counter = 0;

          foreach((array)$insta_data->media->data as $key => $post): 

            if(isset($post->thumbnail_url)):
              $insta_image = $post->thumbnail_url;
            elseif($post->media_url):
              $insta_image = $post->media_url;
            endif;
          
            $counter++;

            if($counter == 1){ ?>
              <div class="post_first">
                <?php #var_dump($post); ?>
                <a href="<?php echo $post->permalink; ?>" target="_blank">
                  <figure class="post_wrap">
                    <div class="ratio ratio-1x1">
                      <img class="post_topimg post_ferst" src="<?php echo $insta_image; ?>" loading="lazy">
                    </div>
                    <div class="post_discription">
                      <div class="post_discription_img">
                        <img src="<?php the_field($img); ?>" >
                      </div>
                      <p><?php the_field($name); ?></p>
                    </div>
                    <figcaption>
                      <?php if (isset($post->caption)) {echo $post->caption;} ?>
                    </figcaption>
                    <?php 
                      $post_date = $post->timestamp;
                      $now_date = new DateTime(); // 変数名を修正
                      $change_date = new DateTime($post_date); // 変数名を修正
                      $interval = $now_date->diff($change_date); // 変数名を修正
                      $days = $interval->days;
                    ?>
                    <?php if($days == 0){?>
                      <date>Today</date>
                    <?php }else{ ?>
                    <date><?php echo $days; ?>日前</date>
                  <?php } ?>
                  </figure>
                </a>
              </div>
              <div class="post_other">
                <div class="container"><div class="row">
            <?php } elseif($counter >= 2 && $counter <= 7 ) { ?>
                  <div class="col-6">
                    <a href="<?php echo $post->permalink; ?>" target="_blank">
                      <figure class="post_wrap">
                        <div class="ratio ratio-1x1">
                          <img class="post_topimg" src="<?php echo $insta_image; ?>" loading="lazy">
                        </div>
                      </figure>
                    </a>
                  </div>
            <?php } ?>
          <?php endforeach; ?>
          </div></div><!-- ブートストラップ -->
          </div><!-- post_other -->
        </div><!-- post_wrap -->
      </div><!-- insta_wrap -->
    </section>
    </div><!-- ブートストラップ -->
    <?php } ?>
    </div></div><!-- ブートストラップ -->
  </div><!-- info_main -->
  </main>
  <?php include "template/footer.php"; ?>
</body>