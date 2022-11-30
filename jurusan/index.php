    <?php include('../layout/header.php'); ?>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="bd-placeholder-img bg-atas" style="background-image : url(../img/tkj.jpg);" />
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>TKJ</h1>
                            <p>Teknologi Jaringan Komputer</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="bd-placeholder-img bg-atas" style="background-image : url(../img/pplg.jpg);" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>PPLG</h1>
                            <p>Pembuat perangkat lunak dan gim</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img bg-atas" style="background-image : url(../img/multimedia.jpg);" />
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>MM</h1>
                            <p>MultiMedia</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle bg-bulat" style="background-image : url(../img/icon-tkj.webp);" />
                    <h2>TKJ</h2>
                    <p>Teknologi Komputer Jaringan adalah jurusan yang mempelajari tentang Jaringan.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle bg-bulat" style="background-image : url(../img/icon-pplg.jpg);" />
                    <h2>PPLG</h2>
                    <p>Pembuat perangkat lunak dan gim adalah jurusan yang mempelajari tentang pembuatan aplikasi dan game</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle bg-bulat" style="background-image : url(../img/icon-multimedia.webp);" />
                    <h2>Multimedia</h2>
                    <p>Multimedia adalah tempatnya belajar mendesign animasi dan video ataupun membuat gambar animasi.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
        <?php include('../layout/footer.php'); ?>