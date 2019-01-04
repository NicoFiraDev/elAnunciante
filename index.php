<!-- PHP Header -->
<?php $title="Home"; include "partials/header.php"; ?>

<div class="container-fluid pb-4 px-2">
  <!-- Main article row -->
  <div class="row">
    <div class="col-12 pb-2">
      <!-- Carousel -->
      <div id="carouselArticle" class="carousel slide carousel-fade mt-4 shadow" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselArticle" data-slide-to="0" class="active"></li>
          <li data-target="#carouselArticle" data-slide-to="1"></li>
          <li data-target="#carouselArticle" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner rounded">
          <!-- First article -->
          <div class="carousel-item active">
            <img src="./resources/img/articles/article-example.jpg" class="d-block w-100" alt="Article Example">
            <div class="carousel-caption d-none d-md-block p-3 text-justify">
              <h5>Titular noticia</h5>
              <p>En Twitter, Trump dió detalles de un plan migratorio que la Casa Blanca elabora para enviarlo al Congreso e incluirlo en el debate de lo que resta...</p>
            </div>
          </div>
          <!-- Second article -->
          <div class="carousel-item">
            <img src="./resources/img/articles/article-example-2.jpg" class="d-block w-100" alt="Article Example 2">
            <div class="carousel-caption d-none d-md-block p-3 text-justify">
              <h5>Titular noticia</h5>
              <p>En Twitter, Trump dió detalles de un plan migratorio que la Casa Blanca elabora para enviarlo al Congreso e incluirlo en el debate de lo que resta...</p>
            </div>
          </div>
          <!-- Third article -->
          <div class="carousel-item">
            <img src="./resources/img/articles/article-example-3.jpg" class="d-block w-100" alt="Article Example 3">
            <div class="carousel-caption d-none d-md-block p-3 text-justify">
              <h5>Titular noticia</h5>
              <p>En Twitter, Trump dió detalles de un plan migratorio que la Casa Blanca elabora para enviarlo al Congreso e incluirlo en el debate de lo que resta...</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselArticlee" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselArticle" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
    <!-- Small articles row -->
    <div class="row">
      <div class="col-md-9 col-sm-8">
        <!-- Single article item -->
        <div class="container-fluid  my-4 py-1 px-3 bg-light rounded shadow-sm">
          <div class="row p-2 my-2">
            <figure class="figure float-left article__img d-inline-block my-0">
                <img class="figure-img img-fluid rounded shadow d-block" src="./resources/img/articles/article-example.jpg" alt="Articles Small">
                <figcaption class="figure-caption">Link de la imagen</figcaption>
            </figure>
            <div class="article__text--sm d-inline-block flex-column container">
              <h5 class="">Title small article</h5>
              <p class="">En Twitter, Trump dió detalles de un plan migratorio que la Casa Blanca elabora para enviarlo al Congreso e incluirlo en el debate de lo que resta...</p>
              <a class="btn btn-danger btn-lg w-50 shadow" href="#">Leer más</a>
            </div>
          </div>
        </div>
        <!-- Single article item -->
        <!-- Single article item -->
        <div class="container-fluid  my-4 py-1 px-3 bg-light rounded shadow-sm">
          <div class="row p-2 my-2">
            <figure class="figure float-left article__img d-inline-block my-0">
                <img class="figure-img img-fluid rounded shadow d-block" src="./resources/img/articles/article-example-2.jpg" alt="Articles Small">
                <figcaption class="figure-caption">Link de la imagen</figcaption>
            </figure>
            <div class="article__text--sm d-inline-block flex-column container">
              <h5 class="">Title small article</h5>
              <p class="">En Twitter, Trump dió detalles de un plan migratorio que la Casa Blanca elabora para enviarlo al Congreso e incluirlo en el debate de lo que resta...</p>
              <a class="btn btn-danger btn-lg w-50 shadow" href="#">Leer más</a>
            </div>
          </div>
        </div>
        <!-- Single article item -->
      </div>
      <div class="col-md-3 col-sm-4 pl-0">
        <!-- Ads carousel -->
        <div id="carouselAds" class="carousel slide mt-4 mr-2 mx-auto" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./resources/img/ads/carmenza_realtor.jpg" class="ad-img d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./resources/img/ads/dms.png" class="ad-img d-block w-100 rounded border" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./resources/img/ads/coupon.png" class="ad-img d-block w-100 rounded border" alt="...">
            </div>
          </div>
        </div>
        <!-- Ads carousel -->
      </div>
    </div>
</div>
<?php include "partials/footer.php"; ?>
