<?php 
$page_slug = get_page_by_path("footer");
$page_id = $page_slug->ID;
$fields = get_post_custom($page_id);
$shops = ["mermaid_beach", "north_coast", "robina_town_center"];
$weeks =["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
$map_urls = [
  '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7042.733169699774!2d153.43174077737862!3d-28.04382944141572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b9104f46ac21451%3A0xbcd4c59adb2c4938!2sMuso%20Japanese%20Ramen%20and%20Gyoza%20Bar%20Mermaid%20Beach!5e0!3m2!1sja!2sau!4v1712746641384!5m2!1sja!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
  '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3524.2173993598244!2d153.3979708773767!3d-27.956627537631793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b910f268c74fa1d%3A0x59d4586e1e6aa113!2sMuso%20Ramen%20North%20Coast!5e0!3m2!1sja!2sau!4v1712747238666!5m2!1sja!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
  '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.2176935108437!2d153.38399687737942!3d-28.07890184294087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b911cb6790e02c7%3A0xa507a22d85a79702!2sMuso%20Ramen%20And%20Gyoza%20Bar%20Robina!5e0!3m2!1sja!2sau!4v1712747332253!5m2!1sja!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
]
?>
<footer>
  


  <section class="shopinfo">
    <div class="container shopinfo_wrap">
      <div class="row">
      <?php foreach(array_map(null, $shops, $map_urls) as [$shop, $map_url]){ 
    $address = $shop . "_info_address";
    $phone_no = $shop . "_info_phone_number";
    $e_mail = $shop . "_info_e-mail";
    $insta_url = $shop . "_info_Instagram_url";
    $facebook_url = $shop . "_info_facebook_url";
    ?>

  <?php foreach($weeks as $week){
    $shop_hours[] = $shop . "_time_" . $week;
  } ?>
        <div class="col-md-4 shopinfo_child">
          <?php 
          $shop = str_replace("_", " ", $shop); 
          $shop = strtoupper($shop);
          ?>
          <h3 class="shopinfo_shopname"><?php echo $shop; ?></h3>
          <?php if(is_front_page()){ ?>
            <div class="shopcontact_wrap">
              <div class="shop-map">
                <?php echo $map_url; ?>
              </div>
              <div class="shop_address">
              <?php echo $fields[$address][0]; ?>
              </div>
              <?php if($shop !== "ROBINA TOWN CENTER"){ ?>
              <div class="shop_phonenomber">
              Call for Enquiries: <?php echo $fields[$phone_no][0]; ?>
              </div>
              <?php } ?>
              <div class="shop-email">
              <?php echo $fields[$e_mail][0]; ?>
              </div>
            </div>
          <?php } ?>
          <div class="shop_sns">
            <a href="<?php echo $fields[$insta_url][0]; ?>">
              <img src="../../../../assets/image/instagram-white-icon.webp">
            </a>
            <a href="<?php echo $fields[$facebook_url][0]; ?>">
              <img src="../../../../assets/image/sns_logo_white_facebook.png">
            </a>
          </div>
          <?php foreach (array_map(null, $shop_hours, $weeks) as [$shop_hour, $week]) { ?>
            <div class="container shophour_wrap">
              <div class="row">
                <p class="col-4 shophour_week"><?php $uppercase_str = strtoupper($week); echo $uppercase_str; ?></p>
                <?php if($fields[$shop_hour][0] == "CLOSED"){ ?>
                <p class="col-8 shophour_content close"><?php echo $fields[$shop_hour][0]; ?></p>
                <?php }else{ ?>
                <p class="col-8 shophour_content"><?php echo $fields[$shop_hour][0]; ?></p>
                <?php } ?>
              </div>
            </div>
          <?php }; ?>   
        </div>
        <?php unset($shop_hours); ?>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="footer_wrap">
    <div class="container footer_nav_wrap"; >
      <nav class="row">
        <ul class="footer_pearent_menu">
          <li class="col-sm-3 pearent_menu_content"><a href="#home">Home</a></li>
          <li class="col-sm-4 pearent_menu_content">
            <a href="/menu">Menu</a>
            <ul class="footer_child_menu">
              <li><a href="">Marmaid Beach</a></li>
              <li><a href="">Robina Toen Center</a></li>
              <li><a href="">North Coast</a></li>
            </ul>
          </li>
          <li class="col-sm-5 pearent_menu_content">
            <a href="/info">Infomation</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="caption">2019 ALL RIGHT RESERVRD. DESIGNED BY MUSO</div>
  </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>