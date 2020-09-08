<?php

/* @var $this yii\web\View */

use backend\models\Segment;
use frontend\assets\SellingAsset;
use yii\helpers\Url;

$selling = SellingAsset::register($this);
$this->title = 'Voca Beauty Store';
$bannerCount = count($banners) - 1;
$belanja = Segment::find()->where(['status' => 1, 'seq' => 0, 'title' => 'Cara Berbelanja'])->one();
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
              <div class="col-md-7">
                <h1><?= $banners[$j]->title ?></h1>
                <p class="mb-5 lead"><?= $banners[$j]->description ?></p>
                
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
            <h2 class="section-title mb-3">Kenapa Voca</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>John Rooster</h3>
              <p class="position text-muted">Co-Founder, President</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Tom Sharp</h3>
              <p class="position text-muted">Co-Founder, COO</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Winston Hodson</h3>
              <p class="position text-muted">Marketing</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Popular Products</h3>
            <h2 class="section-title mb-3">Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="row">
            <?php
            foreach ($products as $product):
            ?>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="<?= Yii::$app->params['product-images'] . $product->photo ?>" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#"><?= $product->name ?></a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a><?= ($product->ratings() > 0 ? number_format($product->ratings(), 2) : 0) ?></span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4"><?= $product->description ?></p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>

          </div>
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

        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h3 class="section-sub-title">Special Promo</h3>
            <h3 class="section-title text-white mb-4">Summer Sale</h3>
            <p class="mb-5 lead">Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
            
            <div id="date-countdown" class="mb-5"></div>

            <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
          </div>
        </div>

      </div>
    </div><br>
    <br>
    <br>
    <br>
    <br>

    <div id="belanja-section" class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-color: gray; background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <h2><?= $belanja->title ?></h2>
            <p><?= $belanja->content ?></p>
        </div>
        <div class="col-md-4">
        <a href="#" target="_blank">
              <img src="<?= $selling->baseUrl ?>/img/tokopedia.png" style="width:150px;height:50px;" alt="">
              </a>
            </div>
            <div class="col-md-4">
              <a href="#" target="_blank">
              <img src="<?= $selling->baseUrl ?>/img/shopee.png" style="width:150px;height:50px;" alt="">
              </a>
            </div>
            <div class="col-md-4">
              <a href="https://wa.me/6281232999913" target="_blank">
              <img src="<?= $selling->baseUrl ?>/img/whatsapp.png" style="width:150px;height:50px;" alt="">
              </a>
            </div>
        </div>
      </div>
    </div>
    
</div>