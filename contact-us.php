<?php $title='Contact Us'; include 'partials/header.php'; ?>
<?php
  $error = ""; $success = "";

  if($_POST) {
    if(!$_POST['name']){$error .= "Your name is required<br>";}
    if(!$_POST['email']){$error .= "An email is required<br>";}
    if(!$_POST['message']){	$error .= "The message is required<br>";}

    if($error != ""){
      $error = '<div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert">
        <p><strong>There were error(s) in your form:</strong></p>'. $error .'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    } else {

      $emailTo = "info@elanunciantefl.com";
      $subject =  $_POST['name'] . " ha preguntado:";
      $content = '<html><body>';
      $content .= '<h1>Tienes un mensaje de contacto de: ' . $_POST['name'] . '</h1>';
      $content .= '<p>Información de contacto : ' . $_POST['email'] . ' - ' . $_POST['phone'] . '</p>';
      $content .= '<p>' . $_POST['message'] . '</p>';
      $content .= '</body></html>';
      $header = "Reply-To: info@elanunciantefl.com\r\n";
      $header .= "Return-Path: info@elanunciantefl.com\r\n";
      $header .= "From: info@elanunciantefl.com\r\n";
      $header .= "Organization: El Anunciante FL";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-Type: text/html; charset=utf-8\r\n";
      $header .= "X-Priority: 1\r\n";
      $header .= "X-Mailer: PHP/". phpversion() ."\r\n";

      if(mail($emailTo, $subject, $content, $header)) {
        $success = "<div class='alert alert-success alert-dismissible fade show mx-auto' role='alert'>
          <p>Your message was send, we'll get back to you ASAP!</p>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
      }
    }
  }
?>
<div class="container-fluid">
  <div class="row align-items-center my-4 flex-column flex-md-row">
    <section class="col-12 col-md-6 px-2">
      <div class="row align-items-center my-4 pl-2 ml-1 justify-content-center">
  			<div class="col-sm-5 m-2 mt-4 p-2">
    			<table class="mx-auto">
    				<tbody>
    					<tr>
    						<td><b>Contact name: </b></td>
    						<td>Carmenza</td>
    					</tr>
    					<tr>
    						<td><b>Phone: </b></td>
    						<td>
                  <a class="text-decoration-none text-body" href="tel:+18006003515">800-600-3515</a>
                  <br>
                  <a class="text-decoration-none text-body" href="tel:+13520001234">352-000-1234</a>
                </td>
    					</tr>
    					<tr>
    						<td><b>Address: </b></td>
    						<td>Ocala, Florida</td>
    					</tr>
    				</tbody>
    			</table>
  			</div>
  			<div class="col-sm-6 m-2 mt-4 p-2 border-sm-left pl-3">
  				<table class="mx-auto">
  					<thead>
  						<tr>
  							<th class="text-center" colspan="2">Working hours</th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<td>Monday: </td>
  							<td><span>9:00 AM</span> - <span>5:00 PM</-span></td>
  						</tr>
  						<tr>
  							<td>Tuesday: </td>
  							<td><span>9:00 AM</span> - <span>5:00 PM</-span></td>
  						</tr>
  						<tr>
  							<td>Wednesday: </td>
  							<td><span>9:00 AM</span> - <span>5:00 PM</-span></td>
  						</tr>
  						<tr>
  							<td>Thursday: </td>
  							<td><span>9:00 AM</span> - <span>5:00 PM</-span></td>
  						</tr>
  						<tr>
  							<td>Friday: </td>
  							<td><span>9:00 AM</span> - <span>5:00 PM</-span></td>
  						</tr>
  					</tbody>
  				</table>
  			</div>
      </div>
  		<div class="row justify-content-center my-4">
  			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111477.85084099123!2d-82.22684847046195!3d29.174017069669265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e62b541cba3ce5%3A0xf5f53be4b1380536!2sOcala%2C+Florida%2C+EE.+UU.!5e0!3m2!1ses-419!2sco!4v1540410560930" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen class="shadow"></iframe>
  		</div>
    </section>
    <section class="col-12 col-md-6">
      <div class="row mx-auto w-auto text-center">
        <?php echo $error.$success ?>
      </div>
      <div class="row my-4">
        <div class="title-h2 rounded w-100 mx-3 mb-4 shadow">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="row">
        <form class="w-100 p-2 m-1" method="post">
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Full name" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="phone" placeholder="Phone number (optional)">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-danger w-25">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>


<?php include 'partials/footer.php'; ?>
