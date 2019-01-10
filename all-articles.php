<?php include 'partials/header.php'; ?>
<div class="container-fluid">
  <p><?php echo $id;?></p>
  <div class="row">
    <a href="new-article.php" class="btn btn-lg btn-success m-4 mx-auto" role="button">New article</a>
    <section class="col-12">
      <?php $query = 'SELECT * FROM `articles` ORDER BY `articles`.`id`  DESC ';
      if($result = mysqli_query($link, $query)){
          while ($article = mysqli_fetch_array($result)){ ?>
      <!-- Single article item -->
      <article class="container-fluid  my-4 py-1 px-3 bg-light rounded shadow-sm h-auto" itemscope itemtype="https://schema.org/NewsArticle">
        <div class="row p-2 my-2 h-auto" itemtype="https://schema.org/NewsArticle">
          <figure class="figure float-left article__img d-inline-block my-0 h-auto">
            <a href="article.php?article=<?php echo $article['id'];?>" itemprop="image" itemscope itemtype="https://schema.org/image">
              <img class="figure-img img-fluid rounded shadow d-block w-100 small-img" src="./resources/img/articles/<?php echo $article['image'];?>" alt="<?php echo $article['headline'];?>">
            </a>
            <figcaption class="figure-caption">
              <cite>
                <small>
                  <a class="text-muted text-decoration-none" href="<?php echo $article['image-link'];?>" target="_blank"><?php echo $article['image-link'];?></a>
                </small>
              </cite>
            </figcaption>
          </figure>
          <div class="article__text--sm d-inline-block flex-column container-fluid">
            <a class="text-decoration-none" href="article.php?article=<?php echo $article['id'];?>">
              <h5 class="text-body mb-1" itemprop="headline"><?php echo $article['headline'];?></h5>
            </a>
            <a class="text-decoration-none" href="article.php?article=<?php echo $article['id'];?>">
              <p class="text-muted mb-2 mx-0"><?php echo $article['section'];?>
                -
                <span class="ml-1">
                  <small><?php echo date('F Y', $article['date']);?></small>
                </span>
              </p>
            </a>
            <p><?php echo $article['preview'];?></p>
            <div class="btn-group shadow" role="group" aria-label="Basic example">
              <a class="btn btn-primary" href="article.php?article=<?php echo $article['id'];?>" role="button">Reed more</a>
              <a class="btn btn-info" href="edit-articles.php?article=<?php echo $article['id'];?>" role="button">Edit</a>
              <a class="btn btn-danger" href="delete-articles.php?article=<?php echo $article['id'];?>" role="button">Delete</a>
            </div>
          </div>
        </div>
      </article>
      <?php }}; ?>
    </section>
  </div>
</div>
<?php include 'partials/footer.php'; ?>
