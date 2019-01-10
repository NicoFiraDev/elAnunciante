<?php include 'partials/header.php';
  $id = $_GET['article'];
  if(filter_var($id, FILTER_VALIDATE_INT) === false){
    die("No valid ID");
  }

  $query = "SELECT * FROM `articles` WHERE `id` = ".$id;
  if($result = mysqli_query($link, $query)){
    $article = mysqli_fetch_array($result);
  }?>
<section class="container-fluid my-5">
  <p><?php echo $statusMsg;?></p>
  <a href="all-articles.php" class="btn btn-lg btn-success m-4 mx-auto" role="button">All articles</a>
  <div class="row my-5 px-4">
    <div class="col-12">
      <form action="edit.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $article['id'];?>">
        <div class="form-group">
          <label for="headline">Article Headline</label>
          <input type="text" class="form-control" id="headline" name="headline" value='<?php echo $article["headline"];?>' maxlength="100" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="section">Section</label>
          <select class="form-control" id="section" name="section">
            <option value='<?php echo $article["section"];?>'><?php echo $article['section'];?></option>
            <?php $sectionQuery = 'SELECT DISTINCT `section` FROM `articles` ORDER BY `section` ASC';
            if($result = mysqli_query($link, $sectionQuery)){
                while ($sections = mysqli_fetch_array($result)){ ?>
                  <option value='<?php echo $article["section"];?>'><?php echo $sections['section']; ?></option>
            <?php }}; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="image">Article image</label>
          <input class="form-control-file" type="file" name="file" id="image">
        </div>
        <div class="form-group">
          <label for="image-link">Article image link</label>
          <input class="form-control" type="text" value='<?php echo $article["image-link"];?>' name="image-link" id="image-link" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input class="form-control" type="text" value='<?php echo $article["author"];?>' name="author" id="author" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="preview">Article Preview</label>
          <textarea type="text" class="form-control" id="preview" name="preview" maxlength="160"><?php echo $article["preview"];?></textarea>
        </div>
        <div class="form-group">
          <label for="body">Article Body</label>
          <textarea type="text" class="form-control" id="body" name="body"><?php echo $article["body"];?></textarea>
        </div>
        <div class="form-group">
          <input class="btn btn-outline-info w-25 shadow" type="submit" name="submit" value="Update">
        </div>
      </form>
    </div>
  </div>
</section>
<script type="text/javascript" src="./vendors/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('preview');
  CKEDITOR.replace('body');
</script>
<?php include 'partials/footer.php'; ?>
