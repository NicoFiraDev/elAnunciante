<?php $title='Place Your Ad'; include 'partials/header.php'; ?>

<?php
	$error = ""; $success = "";

	if($_POST) {
		if(!$_POST['size']){$error .= "A size option is required<br>";}
		if(!$_POST['style']){$error .= "An style option is required<br>";}
		if(!$_POST['term']){$error .= "A term option is required<br>";}
		if(!$_POST['payment']){$error .= "A payment option is required<br>";}
		if(!$_POST['design']){$error .= "A design option is required<br>";}
		if(!$_POST['email']){$error .= "An email is required<br>";}
		if(!$_POST['name']){$error .= "A name is required<br>";}

		if($error != ""){
			$error = '<div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert">
				<p><strong>There were error(s) in your form:</strong></p>'. $error .'
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		} else {
			$emailTo = "info@elanunciantefl.com";
			$subject =  $_POST['name'] . " ha solicitado un anuncio con las siguientes caracteristicas:";
			$content = '<html><body>';
			$content .= '<h1>' . $_POST['name'] . ' ha solicitado un anuncio con las siguientes caracteristicas:</h1>';
			$content .= '<p>Tamaño: ' . $_POST['size'] . '</p>';
			$content .= '<p>Estilo: ' . $_POST['style'] . '</p>';
			$content .= '<p>Duración: ' . $_POST['term'] . '</p>';
			$content .= '<p>Método de pago: ' . $_POST['payment'] . '</p>';
			$content .= '<p>Diseño de anuncio: ' . $_POST['design'] . '</p>';
			$content .= '<p>Su correo electrónico es: ' . $_POST['email'] . '</p>';
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

<section class="container-fluid">
  <div class="row mt-2">
    <div class="container-fluid text-center my-3 py-3">
      <h2 class="text-danger">Place Your Ad Here In 5 Steps</h2>
      <p class="text-muted">Or ask for our professional assistance calling or texting @ <span><a class="text-decoration-none text-danger" href="tel:+14076009214">(+1) 407-600-9214</a></span></p>
    </div>
  </div>

  <div class="row mx-auto w-auto text-center">
    <?php echo $error.$success ?>
  </div>

  <div class="row">
    <div class="col-sm-4 h-auto form-logo d-none d-md-block"></div>
    <div class="col-12 col-md-8">
      <form class="m-1 m-sm-5" method="post">

        <fieldset class="form-group my-4">
          <div class="row">
            <legend class="col-form-label col-sm-3">
              <span class="mr-3 p-4 rounded-circle float-left number">1</span>
              <strong>Size</strong>
            </legend>
            <div class="col-sm-9">
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="size" id="ad-size-full" value="Full page">
                <label class="form-ckeck-label h3 mb-0" for="ad-size-full">Full page ( 10"x14" )</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="size" id="ad-size-half" value="Half page">
                <label class="form-ckeck-label h4 mb-0" for="ad-size-half">1/2 page (10"x7")</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="size" id="ad-size-1-4" value="1/4 page">
                <label class="form-ckeck-label h5 mb-0" for="ad-size-1-4">1/4 page (10" x 3.5")(5"x7")</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="size" id="ad-size-1-8" value="1/8 page">
                <label class="form-ckeck-label h6 mb-0" for="ad-size-1-8">1/8 page (10"x3.5")(5"x3.5")(2.5"x7")</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="size" id="ad-size-1-16" value="1/16 page">
                <label class="form-ckeck-label mb-0" for="ad-size-1-16">1/16 page (2.5"x3.5")</label>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="form-group my-4">
          <div class="row">
            <legend class="col-form-label col-sm-3">
              <span class="mr-3 p-4 rounded-circle float-left number">2</span>
              <strong>Style</strong>
            </legend>
            <div class="col-sm-9">
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="style" id="ad-color" value="Color">
                <label class="form-ckeck-label mb-0" for="ad-color">Color</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="style" id="ad-b&w" value="Black & White">
                <label class="form-ckeck-label mb-0" for="ad-b&w">Black & White</label>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="form-group my-4">
          <div class="row">
            <legend class="col-form-label col-sm-3">
              <span class="mr-3 p-4 rounded-circle float-left number">3</span>
              <strong>Term</strong>
            </legend>
            <div class="col-sm-9">
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="term" id="ad-12" value="12 months">
                <label class="form-ckeck-label mb-0" for="ad-12">12 months</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="term" id="ad-6" value="6 months">
                <label class="form-ckeck-label mb-0" for="ad-6">6 months</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="term" id="ad-3" value="3 months">
                <label class="form-ckeck-label mb-0" for="ad-3">3 months</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="term" id="ad-one" value="1 month">
                <label class="form-ckeck-label mb-0" for="ad-one">Just Once</label>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="form-group my-4">
          <div class="row">
            <legend class="col-form-label col-sm-3">
              <span class="mr-3 p-4 rounded-circle float-left number">4</span>
              <strong>Payment Method</strong>
            </legend>
            <div class="col-sm-9">
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="payment" id="ad-card" value="Debit/Credit card">
                <label class="form-ckeck-label mb-0" for="ad-card">Monthly payment with debit/credit card</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="payment" id="ad-check" value="Check - advanced payment">
                <label class="form-ckeck-label mb-0" for="ad-check">Check paying 3 months in advance</label>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="form-group my-4">
          <div class="row align-items-center">
            <legend class="col-form-label col-sm-3">
              <span class="mr-3 p-4 rounded-circle float-left number">5</span>
              <strong>Design</strong>
            </legend>
            <div class="col-sm-9">
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="design" id="ad-my-design" value="Client has ad designed">
                <label class="form-ckeck-label mb-0" for="ad-my-design">I have my ad designed</label>
              </div>
              <div class="form-check form-check-inline m-2">
                <input class="form-check-input" type="radio" name="design" id="ad-free-design" value="Client needs a free ad design">
                <label class="form-ckeck-label mb-0" for="ad-free-design">I need a free design</label>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset class="form-group my-4">
          <div class="row">
            <div class="col-sm-5 px-1">
              <input type="text" class="form-control my-1" placeholder="Full name" name="name" required>
            </div>
            <div class="col-sm-5 px-1">
              <input type="email" class="form-control my-1" placeholder="Email address" name="email" required>
            </div>
            <div class="col-sm-2 px-1">
              <button type="submit" class="btn btn-outline-danger my-1">Submit</button>
            </div>
          </div>
        </fieldset>

      </form>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
