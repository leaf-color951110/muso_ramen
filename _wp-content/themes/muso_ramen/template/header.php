<header>
  <section>
    <div class="header_wrap">
      <div class="nav_wrap"; >
        <nav>
          <ul class="pearent_menu">
            <li><a href="#home">Home</a></li>
            <li>
              <a href="/menu">Menu</a></li>
              <ul class="child_menu">
                <li><a href="">Marmaid Beach</a></li>
                <li><a href="">Robina Toen Center</a></li>
                <li><a href="">North Coast</a></li>
              </ul>
            <li>
              <a href="/info">Infomation</a>
              <ul class="child_menu">
                <li><a href="">All</a></li>
                <li><a href="">Marmaid Beach</a></li>
                <li><a href="">Robina Toen Center</a></li>
                <li><a href="">North Coast</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <img src="<?php echo $top_image; ?>" class="top_image">
      <div class="top_content_wrap"; >
        <div class="top_logo_wrap">
          <img src="../../../../assets/image/muso.png">
        </div>
        <div class="top_title_wrap">
          <?php echo $top_title; ?>
        </div>
        <?php if(is_front_page() ){ ?>
          <p class="top_discription">WELCOME TO THE SOUL OF JAPAN ...</p>
          <div class="book_wrap">
            <div class="book_child">
              <p class="book_now">Book Now<br></p><p class="book_shop">Marmaid Beach</p>
            </div>
            <div class="book_child">
              <p class="book_now">Book Now<br></p><p class="book_shop">North Coast</p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
</header>