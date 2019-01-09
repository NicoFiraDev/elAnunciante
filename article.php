<?php $title = $article['headline']; include 'partials/header.php'; ?>
  <?php
  	$id = $_GET['article'];
  	if(filter_var($id, FILTER_VALIDATE_INT) === false){
  		die("No valid ID");
  	}

  	$query = 'SELECT * FROM `articles` WHERE id = '.$id. ' LIMIT 1';
  	if ($result = mysqli_query($link, $query)){
  		$article = mysqli_fetch_array($result); } ?>
<div class="container-fluid">
  <div class="row mt-2">
    <section class="col-sm-8 col-md-9">
      <article class="my-4" itemscope itemtype="https://schema.org/NewsArticle">
        <div class="" itemtype="https://schema.org/NewsArticle">
          <figure>
            <img class="single-article__img figure-img rounded shadow w-100" src="./resources/img/articles/<?php echo $article['image']; ?>" alt="<?php echo $article['headline']; ?>" itemprop="image" itemscope itemtype="https://schema.org/image">
            <figcaptionclass="figure-caption">
              <cite>
                <small>
                  <a class="text-muted text-decoration-none ml-2" href="#"><?php echo $article['image-link'];?></a>
                </small>
              </cite>
            </figcaption>
          </figure>
          <div class="container-fluid">
            <h2 class="text-body mb-1" itemprop="headline"><?php echo $article['headline']; ?></h2>
            <a class="text-decoration-none" href="#">
              <p class="text-muted mb-2 mx-0"><?php echo $article['section']; ?>
                -
                <span class="ml-1">
                  <small><?php echo date('F Y', $article['date']);?></small>
                </span>
              </p>
            </a>
            <p class="text-justify my-4 p-1"><?php echo $article['body']; ?></p>
          </div>
        </div>
      </article>
      <div class="row justify-content-center my-5">
				<?php $query = 'SELECT * FROM articles WHERE id!= '.$id.' ORDER BY rand() LIMIT 9';
					if ($result = mysqli_query($link, $query)){
						while ( $article = mysqli_fetch_array($result)){ ?>
							<article class="article-previews m-1 rounded m-1 shadow">
								<a href="article.php?article=<?php echo $article['id'];?>">
                  <img src="resources/img/articles/<?php echo $article['image']; ?>" alt="<?php echo $article['headline'] ?>" class="article-previews__img w-100 h-100 shadow rounded">
                </a>
								<h4 class="article-previews__text rounded-bottom m-0 p-2 w-100"><?php echo $article['headline'] ?></h4>
							</article>
				<?php }};?>
			</div>
    </section>
    <div class="col-sm-4 col-md-3">
      <?php include 'partials/main-ads.php'; ?>
    </div>
  </div>
</div>
<?php include 'partials/footer.php'; ?>
