
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
          <?php $counter = 1; $query = "SELECT * FROM `articles` WHERE `section` = 'Inmigración' ORDER BY `articles`.`id`  DESC LIMIT 3";
      				  if ($result = mysqli_query($link, $query)){
      					while ($article = mysqli_fetch_array($result)){?>
          <!-- article -->
          <a class="carousel-item<?php if($counter <= 1){echo ' active'; } ?> d-block" href="article.php?article=<?php echo $article['id']; ?>">
          <article>
            <img src="./resources/img/articles/<?php echo $article['image'];?>" class="d-block w-100 h-100 carousel-img" alt="<?php echo $article['headline'];?>">
            <div class="carousel-caption d-none d-md-block p-3 text-justify">
              <h5 class="text-center"><?php echo $article['headline']; ?></h5>
              <p><?php echo $article['preview']; ?></p>
            </div>
          </article>
          </a>
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
  <div class="row flex-column-reverse flex-md-row">
    <section class="col-md-9 col-sm-10 mx-sm-auto">
      <?php $query = 'SELECT * FROM `articles`  WHERE section != "Inmigración" ORDER BY `articles`.`id`  DESC ';
      if($result = mysqli_query($link, $query)){
          while ($article = mysqli_fetch_array($result)){ ?>
      <!-- Single article item -->
      <article class="container-fluid my-4 py-1 px-3 bg-light rounded shadow-sm h-auto" itemscope itemtype="https://schema.org/NewsArticle">
        <div class="row p-2 my-2 h-auto flex-md-row flex-sm-column" itemtype="https://schema.org/NewsArticle">
          <figure class="figure float-left article__img d-inline-block my-sm-2 my-md-0 h-auto">
            <a href="article.php?article=<?php echo $article['id']; ?>" itemprop="image" itemscope itemtype="https://schema.org/image">
              <img class="figure-img img-fluid rounded shadow d-block w-100 small-img" src="./resources/img/articles/<?php echo $article['image']; ?>" alt="<?php echo $article['headline'];?>">
            </a>
            <figcaption class="figure-caption w-100">
              <a class="image-link text-muted text-decoration-none" href="<?php echo $article['image-link'];?>" target="_blank">
                <cite>
                  <small>
                    <?php echo $article['image-link'];?>
                  </small>
                </cite>
              </a>
            </figcaption>
          </figure>
          <div class="article__text--sm d-inline-block container-fluid px-sm-1 px-md-3 mt-sm-3 mt-md-0">
            <a class="text-decoration-none" href="article.php?article=<?php echo $article['id']; ?>">
              <h4 class="text-body mb-1" itemprop="headline"><?php echo $article['headline']; ?></h4>
            </a>
            <p class="text-muted mb-2 mx-0"><?php echo $article['section']; ?>
              -
              <span class="ml-1">
                <small><?php echo date('F Y', $article['date']);?></small>
              </span>
            </p>
            <div class="text-justify"><?php echo $article['preview'];?></div>
            <a class="btn btn-danger btn-lg w-50 rounded-pill shadow" href="article.php?article=<?php echo $article['id']; ?>">Leer más</a>
          </div>
        </div>
      </article>
      <?php }}; ?>
    </section>
    <section class="col-8 col-sm-6 col-md-3 pl-0 mx-auto">
      <?php include 'partials/main-ads.php'; ?>
    </section>
  </div>
</div>
<?php include "partials/footer.php"; ?>
