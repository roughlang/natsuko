@extends('layouts.app')

@section('title'){{ config('app.name') }}@endsection
@section('description', '天然染料で染める、2週間で消えるボディアートジャグアタトゥー&ヘナタトゥー。東京・JR国分寺駅徒歩1分。2週間で消えるジャグアタトゥーとは？')
@section('canonical'){{ config('app.url') }}@endsection

@section('content_block')
<div class="p-3 p-sm-5 mb-4 border-top big-banner-top" id="big-banner-top">
  <div class="container">
    <div class="big-banner-top-title">
      <h1 class="top-title">Natural body art 208</h1>
    </div>
    <div class="big-banner-top-lead">
      <h2 class="top-lead">
        <span class="num">2</span><span class="text">週間で消える</span><br>
        Jagua tattoo<br>◎<br>Henna tattoo
      </h2>
    </div>
  </div>
</div>

<div class="p-3 p-sm-5 mb-4 jagua_tattoo-menu">
  <h2 class="h2-208-sp mb20">東京・国分寺駅徒歩１分</h2>
  <div class="menu-block">
    <div class="menu term">
      <a href="#menu">Menu</a>
    </div>
    <div class="price term">
      <a href="#price">Price</a>
    </div>
    <div class="reservation term">
      <a href="#reservation">Reservation</a>
    </div>
    <div class="access term">
      <a href="/ac/access/">Access</a>
    </div>
  </div>
</div><!-- menu end -->

<!-- sns -->
<div class="container top-block-01 top-sns mb30">
  <div class="row">
    <div class="col-md-12">
      <div class="sns-link">
        <a href="https://www.instagram.com/natsuko208/" target="_blank"><img src="/assets/img/top/sns-instagram-icon.png"></a>
        <a href="https://twitter.com/Mehndi208" target="_blank"><img src="/assets/img/top/sns-twitter-icon.png"></a>
      </div>
    </div>
  </div>
</div><!-- top-sns end -->


<a name="menu"></a>
<div class="p-3 p-sm-5 mb-4 n208-title-menu" id="n208-title-menu">
  <h2>Menu</h2>
</div>
<div class="container top-block-02 n208t-menu">
  <div class="row">
    <div class="col-md-12 col-lg-6 n208-block">
      <div class="container">
        <div class="row">
          <div class="col-12 price-img">
            <a data-bs-toggle="modal" data-bs-target="#modalid_jagua" class="modal-link">
              <img src="/assets/img/menu/jagua.jpg" class="price-image menu-image" alt="ジャグアタトゥー">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_jagua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/menu/jagua.jpg" width="100%" alt="ジャグアタトゥー">
              <p class="price-caption">ジャグアタトゥー</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 n208-block">
      <h3 class="mt30">ジャグアタトゥー</h3>
      <p class="mt10">
        <ul>
          <li>ジャグアタトゥーは紺に近い青色に染まります。</li>
          <li>色持ちは1～3週間ほど(部位差、個人差があります。)新陳代謝の早い人ほど早く色が落ちていきます。</li>
          <li>施術してから実際に発色するまでに２４～４８時間ほどかかります。
          旅行やイベントなどでご利用の際には２～３日前の施術をお勧めします。</li>
          <li>施術時間は10×10㎝サイズで１時間半ほどです。</li>
        </ul>
        <button id="more_jagua_menu_button" type="button" class="btn btn-light mb20">more detail</button>
        <ul id="more_jagua_menu_content" class="mb60">
          <li>施術後は1〜8時間後（季節や施術部位により異なります）にご自身で施術部位をシャワーなどで洗い流していただく工程があります。そのようなご予定でご予約ください。</li>
          <li>施術後は洗い流すまでの1〜7時間の間は汗をかかないように、また濡らさないように注意してください。</li>
          <li>施術後は保護テープを貼ってお帰り頂くため衣服への色移りなどはありませんが、できるだけ施術部位を締め付けない服装でお越し下さい。</li>
          <li> イチゴやナッツなどのバラ科、種子類のアレルギーがある方はアレルギー反応（痒み、腫れなど）を起こす可能性があるため施術が行えません。また敏感肌の方などは添加物の成分に刺激され赤くなる場合があります。</li>
          <li>ジャグアタトゥーに使うインクの成分は以下のようになります。
          成分/ゲニパアメリカーナ(天然染料)、キタサンガム、植物性油、エチルアルコール</li>
          <li>染まった時の色の濃さには個人差があります。やや薄く染まる方もいれば、くっきり濃く染まる方もいます。また、同じ人でもその時の肌の状態によって色の出方が変わる場合があります。肌が乾燥気味だったり冷たかったりした場合、またその方の肌質によっては染まりにくい場合があります。</li>
        </ul>
      </p>
    </div>
  </div>
</div>

<div class="container top-block-02">
  <div class="row">
    <div class="col-md-12 col-lg-6 n208-block">
      <div class="container">
        <div class="row">
          <div class="col-12 price-img">
            <a data-bs-toggle="modal" data-bs-target="#modalid_hena" class="modal-link">
              <img src="/assets/img/menu/hena.jpg" class="price-image" alt="ヘナタトゥー">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_hena" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/menu/hena.jpg" width="100%" alt="ヘナタトゥー">
              <p class="price-caption">ヘナタトゥー</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 n208-block">
    <h3 class="mt30">ヘナタトゥー</h3>
      <p class="mt10">
        <ul>
          <li>ヘナタトゥーはオレンジ〜茶色に染まります。施術してから1〜2日後は鮮やかなオレンジ色になり、3日目くらいから徐々に褐色に色が変化していきます。</li>
          <li>色持ちは1～2週間ほど(部位差、個人差があります。)新陳代謝の早い人ほど早く色が落ちていきます。</li>
          <li>施術してから一番濃く発色するまでに3日ほどかかります。
          旅行やイベントなどでご利用の際には２～３日前の施術をお勧めします。</li>
          <li>施術時間は10×10㎝サイズで1時間ほどです。</li>
        </ul>
        <button id="more_henna_menu_button" type="button" class="btn btn-light mb20">more detail</button>
        <ul id="more_henna_menu_content" class="mb60">
          <li>ヘナタトゥーは描けるデザインが限定されるため、デザインについてはご相談ください。また、使用するヘナペーストの作成に時間がかかるため3日以上前のご予約をお願いいたします。</li>
          <li>ヘナタトゥーは発色が強い肘下、膝下への施術をお勧めします。それ以外の部位は色が極端に薄くなる場合があります。</li>
          <li>施術後は保護テープを貼ってお帰り頂きます。その後汗をかかないように注意しながら5〜8時間ほど放置してください。その後ご自身でテープをはがしヘナのペーストを取り除いて頂く工程があります。そのようなご予定でご予約ください。</li>
          <li>成分/ヘナパウダー、水、砂糖、ユーカリオイル</li>
        </ul>
      </p>
    </div>
  </div>
</div>

<a name="price"></a>
<div class="p-3 p-sm-5 mb-4 n208-title-menu" id="n208-title-menu">
  <h2>Price</h2>
</div>
<!-- 1-8 -->
<div class="container top-block-02 n208t-price">
  <div class="row">
    <div class="col-md-12 col-lg-6 n208-block">
      <div class="container">
        <div class="row">
          <div class="col-4 price-img">
            <span class="img-num">①</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_01" class="modal-link">
              <img src="/assets/img/price/image-01.jpg#01" class="price-image" alt="料金 ① 3cm × 3cm以内（2個）">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">②</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_02" class="modal-link">
              <img src="/assets/img/price/image-02.jpg#02" class="price-image" alt="料金 ②	5cm × 5cm	¥3,300">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">③</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_03" class="modal-link">
              <img src="/assets/img/price/image-03.jpg#03" class="price-image" alt="料金 5cm × 10cm	¥4,400">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">④</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_04" class="modal-link">
              <img src="/assets/img/price/image-04.jpg" class="price-image" alt="料金 8cm × 8cm ¥4,400">
            </a>
          </div>
          <div class="col-4 price-img price-center-block">
            <img src="/assets/img/nba208_sq.png" class="price-image" alt="Natural body art 208">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑤</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_05" class="modal-link">
              <img src="/assets/img/price/image-05.jpg" class="price-image" alt="料金 8cm × 20cm ¥8,800">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑥</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_07" class="modal-link">
              <img src="/assets/img/price/image-06.jpg" class="price-image" alt="料金 10cm × 10cm ¥5,500">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑦</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_08" class="modal-link">
              <img src="/assets/img/price/image-07.jpg" class="price-image" alt="jagua-image">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑧</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_09" class="modal-link">
              <img src="/assets/img/price/image-08.jpg" class="price-image" alt="jagua-image">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-01.jpg" width="100%" alt="料金 3cm × 3cm以内（2個）">
              <p class="price-caption">① 3cm × 3cm以内（2個）¥3,300</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-02.jpg" width="100%" alt="料金 5cm × 5cm ¥3,300">
              <p class="price-caption">② 5cm × 5cm ¥4,400</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-03.jpg" width="100%" alt="料金  5cm × 10cm ¥4,400">
              <p class="price-caption">③ 5cm × 10cm ¥5,500</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-04.jpg" width="100%" alt="料金  5cm × 10cm ¥4,400">
              <p class="price-caption">④ 8cm × 8cm	¥5,500</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-05.jpg" width="100%" alt="料金 8cm × 20cm	¥8,800">
              <p class="price-caption">⑤ 8cm × 20cm ¥11,000</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-06.jpg" width="100%" alt="料金 8cm × 20cm	¥8,800">
              <p class="price-caption">⑥ 10cm × 10cm ¥7,700</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-07.jpg" width="100%" alt="料金 10cm × 20cm ¥9,900">
              <p class="price-caption">⑦ 10cm × 20cm ¥13,200</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-08.jpg" width="100%" alt="料金 背中大きめサイズ ¥14,300〜19,800">
              <p class="price-caption">⑧ 背中大きめサイズ ¥16,500〜22,000</p>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-lg-6 price1 n208-block">
      <table class="mt20 mb30 price-table">
        <tr>
          <th> </th>
          <th>size</th>
          <th>price</th>
        </tr>
        <tr><td>①</td><td>3cm × 3cm以内（2個）</td><td>¥3,300</td></tr>
        <tr><td>②</td><td>5cm × 5cm</td><td>¥4,400</td></tr>
        <tr><td>③</td><td>5cm × 10cm</td><td>¥5,500</td></tr>
        <tr><td>④</td><td>8cm × 8cm</td><td>¥5,500</td></tr>
        <tr><td>⑤</td><td>8cm × 20cm</td><td>¥11,000</td></tr>
        <tr><td>⑥</td><td>10cm × 10cm</td><td>¥7,700</td></tr>
        <tr><td>⑦</td><td>10cm × 20cm</td><td>¥13,200</td></tr>
        <tr><td>⑧</td><td>背中大きめ</td><td>¥16,500〜22,000</td></tr>
      </table>
      <ul>
        <li>価格は税込です。</li>
        <li>①はお二人で分けて頂いてもOKです。</li>
        <li>塗り潰しの多いデザインや緻密なデザインは値段が高くなることがあります。</li>
        <li>サイズや料金についてのお問い合わせはお気軽にどうぞ！その際、サイズ感がイメージに近いタトゥー画像など送って頂けるとスムーズです。</li>
      </ul>
      <p class="mt10 mb40">
        <button id="more_price_button" type="button" class="btn btn-secondary">もっと料金をみる</button>
      </p>
    </div>
  </div>
</div>
<!-- 9-13 -->
<div class="container top-block-02 close" id="more_price_content">
  <div class="row">
    <div class="col-md-12 col-lg-6 n208-block">
      <div class="container">
        <div class="row">
          <div class="col-4 price-img">
            <span class="img-num">⑨</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_09" class="modal-link">
              <img src="/assets/img/price/image-09.jpg#09" class="price-image" alt="料金 ⑨ 7cm × 15cm ¥5,500">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑩</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_10" class="modal-link">
              <img src="/assets/img/price/image-10.jpg#10" class="price-image" alt="料金 ⑩ 7cm × 5cm ¥5,500">
            </a>
          </div>
          <div class="col-4 price-img price-center-block">
            <img src="/assets/img/nba208_sq.png" class="price-image" alt="Natural body art 208">
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑪</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_11" class="modal-link">
              <img src="/assets/img/price/image-11.jpg" class="price-image" alt="料金 8cm × 8cm ¥4,400">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑫</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_12" class="modal-link">
              <img src="/assets/img/price/image-12.jpg" class="price-image" alt="料金 3cm × 10cm ¥3,300">
            </a>
          </div>
          <div class="col-4 price-img">
            <span class="img-num">⑬</span>
            <a data-bs-toggle="modal" data-bs-target="#modalid_13" class="modal-link">
              <img src="/assets/img/price/image-13.jpg" class="price-image" alt="料金 1cm × 1cm（オプションのみ） ¥550">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-09.jpg" width="100%" alt="料金 ⑨ 7cm × 15cm ¥5,500">
              <p class="price-caption">⑨ 7cm × 15cm ¥5,500</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-10.jpg" width="100%" alt="料金 ⑩ 7cm × 5cm ¥5,500">
              <p class="price-caption">⑩ 7cm × 5cm ¥5,500</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-11.jpg" width="100%" alt="料金 ⑪ 3cm × 手首一周 ¥4,400">
              <p class="price-caption">⑪ 3cm × 手首一周 ¥4,400</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-12.jpg" width="100%" alt="料金 ⑫ 3cm × 10cm ¥3,300">
              <p class="price-caption">⑫ 3cm × 10cm ¥3,300</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-13.jpg" width="100%" alt="料金 8cm × 20cm	¥8,800">
              <p class="price-caption">⑬ 1cm × 1cm（オプションのみ） ¥550</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-07.jpg" width="100%" alt="料金 8cm × 20cm	¥8,800">
              <p class="price-caption">⑥ 10cm × 10cm ¥5,500</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-08.jpg" width="100%" alt="料金 10cm × 20cm ¥9,900">
              <p class="price-caption">⑦ 10cm × 20cm ¥9,900</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/price/image-09.jpg" width="100%" alt="料金 背中大きめサイズ ¥14,300〜19,800">
              <p class="price-caption">⑧ 背中大きめサイズ ¥14,300〜19,800</p>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-lg-6 price1 n208-block">
      <table class="mt20 mb30 price-table">
        <tr>
          <th> </th>
          <th>size</th>
          <th>price</th>
        </tr>
        <tr><td>⑨</td><td>6cm程度の細めデザインは3×3と同じ扱いになります</td><td>¥3,300</td></tr>
        <tr><td>⑩</td><td>7cm × 15cm</td><td>¥7,700</td></tr>
        <tr><td>⑪</td><td>3cm × 手首一周</td><td>¥6,050</td></tr>
        <tr><td>⑫</td><td>3cm × 10cm</td><td>¥4,950</td></tr>
        <tr><td>⑬</td><td>1cm × 1cm（オプションのみ）</td><td>¥1,100</td></tr>
        <tr><td>⑭</td><td>3cm × 3cm（一個オプションのみ）</td><td>¥1,650</td></tr>
        <tr><td>⑮</td><td>片腕全体的に</td><td>¥16,500〜¥22,000</td></tr>
        <tr><td>⑯</td><td>片脚全体的に</td><td>¥16,500〜¥22,000</td></tr>
      </table>
      <ul>
        <li>価格は税込です。</li>
        <li>⑬⑭はオプションメニューです。単体ではお受けできません。</li>
        <li>塗り潰しの多いデザインや緻密なデザインは値段が高くなることがあります。</li>
        <li>サイズや料金についてのお問い合わせはお気軽にどうぞ！その際、サイズ感がイメージに近いタトゥー画像など送って頂けるとスムーズです。</li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <h3>アフターケアについて</h3>
    <div class="col-md-12 col-lg-6">
      <ul class="nlist">
        <li>ジャグアタトゥー、ヘナタトゥーともに施術後の1〜8時間の間は汗をかかないように注意してください。汗をかくとテープの下でインクが滲み、汚く染まってしまいます。</li>
        <li>ヘナタトゥーは施術してから24時間はできるだけ水に触れないようにしてください。色の定着を妨げることがあります。</li>
        <li>染まった後のジャグアタトゥー、ヘナタトゥーには、ワセリンや重めのクリームなどは塗らないようにしてください。発色が弱くなる可能性があります。施術後３日目以降は植物性のオイル、乳液、日焼け止めのクリームなどは塗ってもOKです。</li>
      </ul>
    </div>
    <button id="more_aftercare_menu_button" type="button" class="btn btn-light mb30">more detail</button>
    <div id="more_aftercare_menu_content" class="col-md-12 col-lg-6 mb60">
      <ul>
        <li>ジャグアタトゥー、ヘナタトゥーは皮膚の一番上の角質層に着色してますので、皮膚の新陳代謝とともに退色していきます。あまり擦らないように気をつけて頂くと長持ちします。</li>
        <li>ジャグアタトゥー、ヘナタトゥーは紫外線から肌を守る働きがありますので、施術した部分だけが日焼けしません。日焼けした場合、施術したデザインのまま白抜きになってしまうことがあるので、タトゥーが消えるまでは日焼けしないように気をつけてください。施術後3日目以降でしたら日焼け止めを塗ってもOKです。</li>
        <li>染色後のジャグアタトゥー、ヘナタトゥーの上には、タトゥー隠しシールや絆創膏などのテープ類を貼らないようにしてください。剥がす時に角質が剥がれ、デザインが一部消えてしまうことがあります。 </li>
      </ul>
    </div>
  </div>
</div>

<a name="reservation"></a>
<div class="p-3 p-sm-5 mb-4 n208-title-menu" id="n208-title-menu">
  <h2>Reservation</h2>
</div>
<div class="container top-block-02 n208t-reservation">
  <div class="row">
    <div class="col-md-12 col-lg-6 n208-block">
      <div class="container">
        <div class="row">
          <div class="col-12 price-img">
            <img src="/assets/img/top/top-banner_sm.png" class="price-image menu-image" alt="ジャグアタトゥー">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 n208-block">
      <p class="mt10">
        <p class="tcntr">ご予約はメールかLINEでお願いします。</p>
        <p class="tcntr">
          
          <a href="mailto:n.room208@gmail.com" target="_blank">n.room208@gmail.com</a>
        </p>
        <p class="tcntr"><img src="/assets/img/reservation/line.jpg" class="price-image menu-image" alt="ジャグアタトゥー"></p>
        <h3>注意事項</h3>
        <ul>
          <li>ジャグアタトゥー、ヘナタトゥーの発色の濃さには個人差があります。</li>
          <li>当日は施術時に施術部位を露出しやすい服装でおこしください。</li>
          <li>施術部位の体毛が濃い場合は前日までに剃っておいてください。また、発色の色ムラ防止のためクリームなどは塗らないでお越しください。</li>
          <li>蕁麻疹が出ている等、傷口や怪我の上からは施術できません。傷跡を隠すための施術についてはご相談ください。</li>
          <li>日焼けしているお肌に施術すると、皮がむけるのと同時にジャグアタトゥーも剥がれる可能性がある為、強く日焼けをしているお肌への施術はおすすめしておりません。</li>
          <li>施術後の1〜8時間の間は汗をかかないように注意してください。汗をかくとテープの下でインクが滲み、汚く染まってしまいます。</li>
          <li>ジャグアタトゥー施術後は1〜8時間後（季節や施術部位により異なります）にご自身で施術部位をシャワーなどで洗い流していただく工程があります。そのようなご予定でご予約ください。</li>
        </ul>
      </p>
    </div>
  </div>
</div>

<a name="access"></a>
<div class="p-3 p-sm-5 mb-4 n208-title-menu" id="n208-title-menu">
  <h2>Access</h2>
</div>
<div class="container top-block-02 n208t-price">
  <div class="row">
    <div class="col-md-12 col-lg-6 n208-block">
      <div class="container">
        <div class="row">
          <div class="col-6 price-img">
            <a data-bs-toggle="modal" data-bs-target="#modalid_access_1" class="modal-link">
              <img src="/assets/img/access/access_1.jpg" class="price-image" alt="料金 ① 3cm × 3cm以内（2個）">
            </a>
          </div>
          <div class="col-6 price-img">
            <a data-bs-toggle="modal" data-bs-target="#modalid_access_2" class="modal-link">
              <img src="/assets/img/access/access_2.jpg" class="price-image" alt="料金 ②	5cm × 5cm	¥3,300">
            </a>
          </div>
          <div class="col-6 price-img price-center-block">
            <img src="/assets/img/nba208_sq.png" class="price-image" alt="Natural body art 208">
          </div>
          <div class="col-6 price-img">
            <a data-bs-toggle="modal" data-bs-target="#modalid_access_3" class="modal-link">
              <img src="/assets/img/access/access_3.jpg" class="price-image" alt="料金 8cm × 8cm ¥4,400">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_access_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/access/access_1.jpg" width="100%" alt="なんかコピーライト">
              <p class="price-caption">なんかコピーライト</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_access_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/access/access_2.jpg" width="100%" alt="なんかコピーライト">
              <p class="price-caption">なんかコピーライト</p>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalid_access_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              <img src="/assets/img/access/access_3.jpg" width="100%" alt="なんかコピーライト">
              <p class="price-caption">なんかコピーライト</p>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-lg-6 price1">
      <p class="mt30 price-attention">
      所在地●東京都国分寺市本町3-6-12-ふらっと瀬村206<br>
      （西武・JR国分寺駅北口から徒歩1分）</p>
      <p class="price-attention">
      営業時間●11:00-21:00不定休、完全予約制
      </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2489.734868126137!2d139.47677427369248!3d35.70170826933123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018e436fd8d615f%3A0x2a1fc8cd70c45acd!2z44CSMTg1LTAwMTIg5p2x5Lqs6YO95Zu95YiG5a-65biC5pys55S677yT5LiB55uu77yW4oiS77yR77ySIOOBteOCieOBo-OBqOeArOadkeODkeODvOODiO-8kQ!5e0!3m2!1sja!2sjp!4v1644739808162!5m2!1sja!2sjp" style="width:100%;" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
@endsection