<?php
  include 'db/dbConfig.php';
  $id = $_GET['article'];
  if(filter_var($id, FILTER_VALIDATE_INT) === false){
    die("No valid ID");
  }

  $deleteQuery = "SELECT `image-path` FROM `articles` WHERE `id` = ".$id;
  if($result = mysqli_query($link, $deleteQuery)){
    if($image = mysqli_fetch_array($result)){
      $myFile = $image['image-path'];
      unlink($myFile);
    }
  }
  
  $query = "DELETE FROM `articles` WHERE `id` = ".$id;
  if(mysqli_query($link, $query)){ ?>
    <script type="text/javascript">
      window.location.replace('all-articles.php');
    </script>
  <?php } else { ?>
    <script type="text/javascript">
      alert('There was an error deleting article, please try again');
      window.location.replace('all-articles.php');
    </script>
<?php } ?>
