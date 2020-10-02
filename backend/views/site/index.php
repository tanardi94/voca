<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="container">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully login to Voca Beauty Store Admin Website.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Product</h2>

                <p>Anda bisa membuat produk dan diharapkan untuk melengkapi semua form yang ada saat membuat produk dalam tab folder. Karena semua atribut tersebut diperlukan agar tampilan pada website utama tidak rusak.
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Segment</h2>

                <p>Pada bagian tab segment harap untuk tidak menambah segmen baru karena tidak akan berpengaruh pada website utama. Selain itu juga dilarang untuk mengganti title yang telah disediakan developer karena itu sangat signifikan untuk website utama agar tidak terjadi error yang tidak diinginkan. Anda bisa mengedit segmen yang anda ingin edit di website utama. Title segmen sudah disesuaikan untuk segmen tertentu pada website utama</p>
            </div>
            <div class="col-lg-4">
                <h2>Information dan Blog</h2>

                <p>Tab Information digunakan untuk mengatur FAQ pada website utama, sedangkan Blog digunakan untuk mengatur Blog pada website utama. Pada bagian blog, anda bisa mengatur menggunakan fitur WYSIWYG</p>

                <p><a class="btn btn-default" href="http://vocabeautystore.com/site/blog" target="_blank">Preview Blog &raquo;</a></p>
                <p><a class="btn btn-default" href="http://vocabeautystore.com/home/faq" target="_blank">Preview FAQ &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
