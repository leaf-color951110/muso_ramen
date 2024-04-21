<?php 
$top_sliders = (get_field('top-slider'));
$top_sliders_sp = (get_field('top-slider-sp'))
?>
<header>
  <section>
    <?php if(is_front_page()){ ?>
      <div class="header_wrap" style="height: 100vh; min-height: 640px; margin-bottom: 50px;">
    <?php } else { ?>
      <div class="header_wrap">
    <?php } ?>
      <div class="nav_wrap"; >
        <nav>
          <ul class="pearent_menu">
            <li><a href="/">Home</a></li>
            <li>
              <a><P class="nav_menu_btn">Menu</P></a>
              <ul class="child_menu">
                <li><a href="/menu/mermaid_beach/">Marmaid Beach</a></li>
                <li><a href="/menu/robina_town_center/">Robina Town Center</a></li>
                <li><a href="/menu/north_coast/">North Coast</a></li>
              </ul>
            </li>
            <li><a href="/info">Shop Info</a></li>
          </ul>
        </nav>
      </div>
      <?php if(is_front_page()) { ?>
      <div class="slider_wrap">
        <div class="slider_pc">
          <ul class="slider01">
            <?php if($top_sliders){ 
              foreach( $top_sliders as $top_slider){?>
              <li class="slider01-item"><img src="<?php echo $top_slider; ?>" style="min-height: 640px;"></li>
              <?php }
            } ?>
          </ul>
        </div>
        <div class="slider_sp">
          <ul class="slider01">
            <?php if($top_sliders_sp){ 
              foreach( $top_sliders_sp as $top_slider_sp){?>
              <li class="slider01-item"><img src="<?php echo $top_slider_sp; ?>" style="min-height: 640px;"></li>
              <?php }
            } ?>
          </ul>
        </div>
      </div>
      <?php } else { ?>
      <p class="top_image"></p>
      <?php } ?>
      <?php if(is_front_page()==false){ ?>
      <a href="/">
      <div class="top_logo_wrap_small">
        <img src="../../../../assets/image/muso.png">
        <p>MUSO RAMEN + GYOZA BAR</p>
      </div>
      </a>
      <?php } ?>
      <div class="openbtn"><span></span><span></span><span></span></div>
      <nav id="g-nav">
        <div class="nav_wrap">
          <div class="nav_content"><a href="/">Home</a></div> 
          <div class="nav_content"><a href="/menu">Memu</a>
            <ul>
              <li><a class="child_menu_wrap" href="/menu/mermaid_beach/">Marmaid Beach</a></li>
              <li><a class="child_menu_wrap" href="/menu/robina_town_center/">Robina Town Center</a></li>
              <li><a class="child_menu_wrap" href="/menu/north_coast/">North Coast</a></li>
            </ul>
          </div>
          <div class="nav_content"><a href="/info">Shop Info</a></div> 
        </div>
      </nav>
      <div class="top_content_wrap"; >
        <?php if(is_front_page()){ ?>
        <div class="top_logo_wrap">
          <img src="../../../../assets/image/muso.png">
        </div>
        <div class="top_logo_wrap_front">
          <img src="../../../../assets/image/muso.png">
        </div>
        <div class="top_content_child">
          <div class="top_title_wrap">
            <?php echo $top_title; ?>
          </div>
          <p class="top_coment">WELCOME TO THE SOUL OF JAPAN ...</p>
          <div class="book_wrap2">
            <a href="https://booking.washokulovers.com/client/musoramen/?ref=website">
              <div class="bookchild_wrap">
                <img class="book_img book_1" src="../../../../assets/image/Mermaid-book.PNG">
                <img class="book_img book_3" src="../../../../assets/image/mermaid_book_hover.PNG">
              </div>
            </a>
            <a href="https://booking.washokulovers.com/client/musoramennc/?ref=homepage">
              <div class="bookchild_wrap">
                <img class="book_img book_2" src="../../../../assets/image/north_book.PNG">
                <img class="book_img book_4" src="../../../../assets/image/north_book_hover.PNG">
              </div>
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
</header>