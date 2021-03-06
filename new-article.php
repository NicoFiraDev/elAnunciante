<?php
include 'partials/header.php';
$time = time();
$statusMsg = '';
$targetDir = 'resources/img/articles/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


if(isset($_POST['submit']) && !empty($_FILES["file"]["name"])){
  $allowTypes = array('jpg','png','jpeg','gif','pdf');
  if(in_array($fileType, $allowTypes)){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
      $query = "INSERT INTO articles (`date`,`section`,`image`,`image-link`,`image-path`,`headline`,`preview`,`body`,`author`)
                VALUES ($time,'".$_POST['section']."','$fileName','".$_POST['image-link']."','$targetFilePath','".$_POST['headline']."','".$_POST['preview']."','".$_POST['body']."','".$_POST['author']."')";
        if(mysqli_query($link, $query)){
          $statusMsg = "<div class='alert alert-success alert-dismissible fade show mx-auto' role='alert'>
            <p>Article and photo ".$fileName."</p>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        } else {
          $statusMsg = '<div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert">
            <p><strong>There were error(s) in your form:</strong></p>
            <p>'.mysqli_error($link).'</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
      }
    }
  }
?>
<section class="container-fluid my-5">
  <p><?php echo $statusMsg;?></p>
  <a href="all-articles.php" class="btn btn-lg btn-success m-4 mx-auto" role="button">All articles</a>
  <div class="row mb-5 px-4">
    <div class="col-12">
      <form action="new-article.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="headline">Article Headline</label>
          <input type="text" class="form-control" id="headline" name="headline" placeholder="Article headline" maxlength="100" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="section">Section</label>
          <select class="form-control" id="section" name="section">
            <option value="">Select a section</option>
            <?php $query = 'SELECT DISTINCT `section` FROM `articles` ORDER BY `section` ASC';
            if($result = mysqli_query($link, $query)){
                while ($article = mysqli_fetch_array($result)){ ?>
                  <option value="<?php echo $article['section']; ?>"><?php echo $article['section']; ?></option>
            <?php }}; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="image">Article image</label>
          <input class="form-control-file" type="file" name="file" id="image">
        </div>
        <div class="form-group">
          <label for="image-link">Article image link</label>
          <input class="form-control" type="text" name="image-link" id="image-link" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input class="form-control" type="text" value="Julieta Pinzón" name="author" id="author">
        </div>
        <div class="form-group">
          <label for="new-preview">Article Preview</label>
          <textarea type="text" class="form-control" id="new-preview" name="preview" placeholder="Article preview" maxlength="160"></textarea>
        </div>
        <div class="form-group">
          <label for="new-body">Article Body</label>
          <textarea type="text" class="form-control" id="new-body" name="body" placeholder="Article body" rows="20"></textarea>
        </div>
        <div class="form-group">
          <input class="btn btn-outline-danger w-25 shadow" type="submit" name="submit" value="Publish">
        </div>
      </form>
    </div>
  </div>
</section>
<script type="text/javascript" src="./vendors/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('new-preview');
  CKEDITOR.replace('new-body');
</script>
<?php include 'partials/footer.php'; ?>
