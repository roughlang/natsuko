<?php include("inc/html_header.php"); ?>
<body>

<?php include("inc/nav.php"); ?>
<div class="p-3 p-sm-5 mb-4 border-top big-banner-top" id="big-banner-top">
  <div class="container">
    <h1 class="display-4">Natural body art 208</h1>
    <p class="lead">天然染料で染める、2週間で消えるボディアートジャグアタトゥー &ヘナタトゥー<br>東京・JR国分寺駅から徒歩1分</p>
    <hr class="my-4">
    <p><!--東京・JR国分寺駅から徒歩1分--></p>
    <a class="btn btn-secondary btn-lg reservation-btn" href="#" role="button">Reservation</a>
  </div>
</div>

<div class="container top-block-01 jagua_tattoo">
  <div class="row">
    <div class="col-md-6 mb-5 jagua_tattoo_img">
      <h2 class="h2-208 what">２週間で消えるジャグアタトゥとは？</h2>
      <img src="/assets/img/top/top_jagua_tattoo.jpg" alt="Jagua-tattoo" class="top_jagua_tattoo mx-auto d-block">    
    </div>
    <div class="col-md-6 mb-5">
      <ul>
        <li>紺色〜青色に染まります</li>
        <li>色持ちは1〜3週間（個人差アリ）</li>
        <li>5×10㎝サイズで所要時間は約1時間</li>
        <li>施術してから実際に発色するまでに24～48時間ほどかかります。旅行やイベントなどでご利用の際には2～3日前の施術をお勧めします。</li>
        <li>施術後お帰りになってから1～8時間後にお客様自身でシャワーなどでインクを洗い流して頂く工程があります。そのようなご予定でご予約ください。</li>
      </ul>
    </div>
  </div>
</div>

<div class="container top-block-02 mt30">
  <div class="row">
    <div class="col-md-12 col-lg-6 price price2">
      <div class="container">
        <div class="row">
          <div class="col-4 price-img">
            <span class="img-num">①</span>
            <img src="/assets/img/top/price/image-01.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">②</span>
            <img src="/assets/img/top/price/image-02.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">③</span>
            <img src="/assets/img/top/price/image-03.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">④</span>
            <img src="/assets/img/top/price/image-04.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img price-center-block">
            Natural body art 208
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑤</span>
            <img src="/assets/img/top/price/image-05.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑥</span>
            <img src="/assets/img/top/price/image-07.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑦</span>
            <img src="/assets/img/top/price/image-08.jpg" class="price-image" alt="jagua-image">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑧</span>
            <img src="/assets/img/top/price/image-09.jpg" class="price-image" alt="jagua-image">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 price price1">
      <a name="top-price"></a>
      <h2 class="h2-208 mb20" >施術料金</h2>

      <p class="mt10">ご予約の最低金額は¥3300円になります。<br>
      サイズはお二人で分けて頂いてもOKです！</p>

      <table class="mt20 mb30 price-table">
        <tr>
          <th> </th>
          <th>size</th>
          <th>price</th>
        </tr>
        <tr><td>①</td><td>3cm×3cm以内（2個）</td><td>¥3,300</td></tr>
        <tr><td>②</td><td>5cm×5cm</td><td>¥3,300</td></tr>
        <tr><td>③</td><td>5cm×10cm</td><td>¥4,400</td></tr>
        <tr><td>④</td><td>8cm×8cm</td><td>¥4,400</td></tr>
        <tr><td>⑤</td><td>8cm×20cm</td><td>¥8,800</td></tr>
        <tr><td>⑥</td><td>10cm×10cm</td><td>¥5,500</td></tr>
        <tr><td>⑦</td><td>10cm×20cm</td><td>¥9,900</td></tr>
        <tr><td>⑧</td><td>背中大きめサイズ</td><td>¥14,300〜19,800</td></tr>
      </table>

      価格は税込みです。
      大きめサイズはお気軽にご相談ください。お値段のお問い合わせは、大体で良いのでご希望のデザインやサイズ感が近いタトゥー画像などを送って頂けるとたすかります！
    </div>
  </div>
</div>
    
<div class="container top-block-blog mt50">
  <div class="row">
    <div class="col-sm-6">
      <h2>Blog</h2>
      <!--wordpress loop-->
      <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else: ?>
        <!-- 投稿データが取得できない場合の処理 -->
      <?php endif; ?>
    </div>
    <div class="col-sm-6">
      foo
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h4>Menu</h4>
        <ul>
          <li><a href="/ac/#top-price">Price</a></li>
          <li><a href="http://naturalhigh208.blogspot.jp/">Gallery</a></li>
          <li><a href="http://www.mehndi.jp/">Contact</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
      <h4>SNS</h4>
        <ul>
          <li><a href="https://twitter.com/Mehndi208">Twitetr</a></li>
          <li><a href="https://www.instagram.com/natsuko208/?hl=ja">Instagram</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
      <div class="col-sm-4"> 
      <h4>Link</h4>
        <ul>
          <li><a href="http://mehendi208.blog137.fc2.com/">メヘンディ２０８</a></li>
          <li><a href="http://naturalhigh208.blogspot.jp/">Natural high</a></li>
          <li><a href="http://www.mehndi.jp/">ハート＊フール</a></li>
        </ul>
      </div>
    </div>
  </div>
  <p class="copy-right">Copyright (c) Natural Body Art 208 東京 All Rights Reserved.</p>
</footer>
</body>
</html>