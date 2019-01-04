
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
          <!-- Fetch main articles to display in the carousel -->
          <?php
            $counter = 1;
    				$query = 'SELECT * FROM `articles` WHERE section = "Inmigración" ORDER BY `articles`.`id`  DESC LIMIT 3';
      				if ($result = mysqli_query($link, $query)){
      					while ($article = mysqli_fetch_array($result)){ ?>
          <!-- First article -->
          <article class="carousel-item<?php if($counter <= 1){echo ' active'; } ?>">
            <img src="./resources/img/articles/<?php echo $article['img'];?>" class="d-block w-100" alt="<?php echo $article['headline'];?>">
            <div class="carousel-caption d-none d-md-block p-3 text-justify">
              <h5><?php echo $article['headline']; ?></h5>
              <p><?php echo substr($article['body'], 0, 120); ?>...</p>
            </div>
          </article>
          <?php $counter++; }} ?>
        </div>
        <!-- Carousel controls -->
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

        <?php $query = 'SELECT * FROM `articles`  WHERE section != "Inmigración" ORDER BY `articles`.`id`  DESC ';
        if($result = mysqli_query($link, $query)){
            while ($article = mysqli_fetch_array($result)){ ?>
        <!-- Single article item -->
        <article class="container-fluid  my-4 py-1 px-3 bg-light rounded shadow-sm h-auto" itemscope itemtype="https://schema.org/NewsArticle">
          <div class="row p-2 my-2 h-auto" itemtype="https://schema.org/NewsArticle">
            <figure class="figure float-left article__img d-inline-block my-0 h-auto">
              <a href="#" itemprop="image" itemscope itemtype="https://schema.org/image"><img class="figure-img img-fluid rounded shadow d-block w-100 small-img" src="./resources/img/articles/<?php echo $article['img']; ?>" alt="<?php echo $article['headline'];?>"></a>
              <figcaption class="figure-caption"><cite><small><a class="text-muted text-decoration-none" href="#">Link de la imagen</a></small></cite></figcaption>
            </figure>
            <div class="article__text--sm d-inline-block flex-column container">
              <a class="text-decoration-none" href="#"><h5 class="text-body mb-1"><?php echo $article['headline']; ?></h5></a>
              <a class="text-decoration-none" href="#"><p class="text-muted mb-2 mx-0"><span class="ml-1"><small>Fecha</small></span> - <?php echo $article['section']; ?></p></a>
              <p><?php echo substr($article['body'], 0, 160); ?>...</p>
              <a class="btn btn-danger btn-lg w-50 shadow" href="#">Leer más</a>
            </div>
          </div>
        </article>
        <?php }}; ?>
      </div>

      <div class="col-md-3 col-sm-4 pl-0">
        <!-- Ads carousel -->
        <div id="carouselAds" class="carousel slide mt-4 mr-2 mx-auto" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="#"><img src="./resources/img/ads/carmenza_realtor.jpg" class="ad-img d-block w-100 rounded shadow" alt="..."></a>
            </div>
            <div class="carousel-item">
              <a href="#"><img src="./resources/img/ads/dms.png" class="ad-img d-block w-100 rounded shadow" alt="..."></a>
            </div>
            <div class="carousel-item">
              <a href="#"><img src="./resources/img/ads/coupon.png" class="ad-img d-block w-100 rounded shadow" alt="..."></a>
            </div>
          </div>
        </div>
        <!-- Ads carousel -->
      </div>
    </div>
</div>
<?php include "partials/footer.php"; ?>
