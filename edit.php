<?php
  include 'db/dbConfig.php';
  $id = $_POST['id'];
  $section = $_POST['section'];
  $imageLink = $_POST['image-link'];
  $headline = $_POST['headline'];
  $preview = $_POST['preview'];
  $body = $_POST['body'];
  $author = $_POST['author'];
  $targetDir = 'resources/img/articles/';
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


  if(empty($_FILES["file"]["name"])){
    $updateQuery = "UPDATE `articles`
    SET `section`='$section',`image-link`='$imageLink',`headline`='$headline',`preview`='$preview',`body`='$body',`author`='$author'
    WHERE `id` = ".$id;

      if(mysqli_query($link, $updateQuery)){ ?>
        <script type="text/javascript">
          window.location.replace('all-articles.php');
        </script>
      <?php } else { ?>
        <script type="text/javascript">
          alert('There was a problem updating the article');
          window.location.replace('all-articles.php');
        </script>
<?php }

  } else {
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
      if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        $updateQuery = "UPDATE `articles`
        SET `section`='$section',`image`='$fileName',`image-link`='$imageLink',`image-path`='$targetFilePath',`headline`='$headline',`preview`='$preview',`body`='$body',`author`='$author'
        WHERE `id` = ".$id;
        if(mysqli_query($link, $updateQuery)){ ?>
          <script type="text/javascript">
            window.location.replace('all-articles.php');
          </script>
        <?php } else { ?>
          <script type="text/javascript">
            alert('There was a problem updating the article');
            window.location.replace('all-articles.php');
          </script>
  <?php }
      }
    }

  }
?>
