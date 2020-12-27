<?php

/* @var $this yii\web\View */

use backend\models\Segment;
use frontend\assets\SellingAsset;
use yii\helpers\Url;
use yii\web\YiiAsset;

$selling = SellingAsset::register($this);
$this->title = 'Voca Beauty Store';
$bannerCount = count($banners) - 1;
$belanja = Segment::find()->where(['status' => 1, 'seq' => 0, 'title' => 'Cara Berbelanja'])->one();
$whyVoca = Segment::find()->where(['status' => 1, 'seq' => 0 , 'title' => 'Kenapa Voca'])->one();
$whyVocaComponents = Segment::find()->where(['status' => 1, 'seq' => 1, 'segment_id' => $whyVoca->id])->all();
$promo = Segment::find()->where(['status' => 1, 'seq' => 0, 'title' => 'PROMO SPESIAL'])->one();
?>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php for($i = 0; $i <= $bannerCount; $i++) { 
      echo '<li data-target="#carouselExampleIndicators" data-slide-to="' .  $i . ($i == 0 ? '" class="active"' : '"') . '></li>';
    }?>
    
  </ol>
  <div class="carousel-inner">  
    <?php for($j = 0; $j <= $bannerCount; $j++): ?>
    <div class="carousel-item <?= ($j == 0 ? "active" : "") ?>">
    <div class="site-blocks-cover overlay" style="background-image: url('<?= Yii::$app->params['banner-images'] . $banners[$j]->image ?>');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-8">
                <h1># Beauty is Yours</h1>
                <p class="mb-5 lead">VOCA merupakan skin care brand lokal yang menggunakan bahan baku premium dengan harga terjangkau</p>
                <div>
                  <a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#belanja-section" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>
                  <?php
                if(Yii::$app->user->isGuest):
                ?>
                  <a href="<?= Url::to(['/site/login']) ?>" class="btn btn-white py-3 px-5 rounded-0 d-block d-sm-inline-block">Club Membership</a>
                <?php else:
                  endif;
                ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
        <div class="row mb-5">
        
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div>
              <div>
                <h3>Partner Resmi Voca</h3>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-backspace"></span></div>
              <div>
                <h3>Bebas Ongkos Kirim</h3>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-av_timer"></span></div>
              <div>
                <h3>Gratis membership tanpa daftar lagi</h3>
                
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-beenhere"></span></div>
              <div>
                <h3>Kemasan Aman Bebas Biaya</h3>
                
              </div>
            </div>
          </div>

        </div>
      </div>



      <div class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">The Reasons</h3>
            <h2 class="section-title mb-3"><?= $whyVoca->title ?></h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($whyVocaComponents as $whyVocaComponent): ?>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="<?= Yii::$app->params['segment-images'] . $whyVocaComponent->image ?>" alt="Image" class="img-fluid rounded w-75 mb-3" style="width:240px; height:240px;">
              <h3><?= $whyVocaComponent->title ?></h3>
              <p class="mb-4"><?= $whyVocaComponent->content ?></p>
              
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Sekilas Tentang</h3>
            <h2 class="section-title mb-3">Produk Voca</h2>
            <p>Serum Voca diproduksi dengan menggunakan teknologi terkini dengan memperhatikan kehigienisan dan keamanan produk bagi pelanggan tercinta.</p>
          </div>
        </div>
        <?php foreach ($products as $product): ?>
        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0 <?= ($product->id % 2 == 0 ? "order-1 order-md-2" : "") ?>">
            <div id="carouselExampleIndicators<?= ($product->id + 1) ?>" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php for($i = 0; $i <= 2; $i++) { 
    echo '<li data-target="#carouselExampleIndicators' . ($product->id + 1) . '" data-slide-to="' . $i . ($i == 0 ? '" class="active"' : '"') . '></li>';
    }
    ?>
  </ol>
  <div class="carousel-inner">
    <?php for($j = 0; $j <= 2; $j++): ?>
    <div class="carousel-item <?= ($j == 0 ? "active" : "") ?>">
      <img src="<?= Yii::$app->params['product-images'] . $product['photo' . ($j == 0 ? '' : '_' . ($j+1))] ?>" class="d-block w-100 h-100" alt="..." style="width:250px;height:250px;">
    </div>
    <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators<?= ($product->id + 1) ?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators<?= ($product->id + 1) ?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
           
            <div class="col-md-5 ml-auto product-title-wrap <?= ($product->id % 2 == 0 ? "order-2 order-md-1" : "") ?>">
              <h3 class="text-black mb-4 font-weight-bold"><?= $product->name ?></h3>
              <p class="mb-4"><?= $product->description ?></p>
              
              <div class="mb-4"> 
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price">IDR <?= number_format($product->price) ?></div>
              </div>
              <p>
                <a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#belanja-section" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Beli</a>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>

    <div class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">People Says</h3>
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
        <?php foreach ($reviews as $review): ?>
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;<?= $review->review ?>&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong><?= $review->user->name ?></strong></p>

              
            </div>
          </div>
          <?php endforeach; ?>
          

          

        </div>
    </div>
    



    <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url(images/hero_2.jpg); background-attachment: fixed; background-position: top;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center pb-4 pt-3">
          <div class="col-md-8 text-center">
            <h3 class="section-sub-title">Special For You</h3>
            <h3 class="section-title text-white mb-3"><?= $promo->title ?></h3>
            <p class="mb-2 lead"><?= $promo->content ?></p>
            
            <div id="date-countdowns">
            <span class="countdown-block"><span class="label" id="block-days"></span> days </span>
            <span class="countdown-block"><span class="label" id="block-hours"></span> hours </span>
            <span class="countdown-block"><span class="label" id="block-mins"></span> mins </span>
            <span class="countdown-block"><span class="label" id="block-secs"></span> secs </span>
            <br><br>
            <p><a href="<?= (Yii::$app->request->url == Url::to(['/site/index']) ? '' : Url::to(['/site/index'])) ?>#belanja-section" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
            </div>

            
          </div>
        </div>

      </div>
    </div><br>
    <br>
    <br>
    <br>
    <br>

    <div id="belanja-section" class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-color: gray;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center pb-4 pt-4">
          <div class="col-md-8">
            <h2><?= $belanja->title ?></h2>
            <p><?= $belanja->content ?></p>
            <div class="btn-group">
  <button type="button" class="btn btn-voca">Link Belanja</button>
  <button type="button" class="btn btn-voca dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" target="_blank" href="https://www.tokopedia.com/vocaofficial">Tokopedia</a>
    <a class="dropdown-item" target="_blank" href="https://shopee.co.id/vocaofficial">Shopee</a>
    <a class="dropdown-item" target="_blank" href="https://api.whatsapp.com/send?phone=62818596813&text=Halo%20Kak, saya%20mau%20memesan%20produk%20VOCA.">WhatsApp</a>
  </div>
</div>
        </div>
        </div>
      </div>
  </div>

  <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <!-- <h3 class="section-sub-title">Popular Products</h3> -->
            <h2 class="section-title mb-3">Apa Saja Produk Voca</h2>
            <p>Kami menawarkan produk Voca dalam dua macam kemasan yaitu botol penuh (30 mL) dan <i>share in jar</i> (5 mL)</p>
          </div>
        </div>
        <div class="row">
            <?php
            foreach ($products as $product):
            ?>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?= Yii::$app->params['product-images'] . $product->photo ?>" alt="Image" class="img-fluid" style="width:200px;height:200px;">
              </figure>
              <div class="px-4">
                <h3><?= $product->name ?></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3">IDR <?= number_format($product->price) ?></span>
                </div>
                <!-- <p class="mb-4">< $product->description ?></p> -->
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>

          </div>
      </div>
    </div>
        
  <a href="https://wa.me/62818596813" class="floats" target="_blank">
<i class="fa fa-whatsapp my-floats"></i>
</a>
<?php
$this->registerJs('
  var countDownDate = new Date("' . date("Y-m-d", strtotime($promo->attr1)) . '").getTime();
  var x = setInterval(function() {

    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
      
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
    
    document.getElementById("block-days").innerHTML = days;
    document.getElementById("block-hours").innerHTML = hours;
    document.getElementById("block-mins").innerHTML = minutes;
    document.getElementById("block-secs").innerHTML = seconds;
      
    // If the count down is over, write some text 
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
');
?>