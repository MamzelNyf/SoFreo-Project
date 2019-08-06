<?php 
$postData = $statusMsg = ''; 
$status = 'error'; 

//Google reCAPTCHA API Key config
$siteKey="6LcwH60UAAAAAHUvGgOMzjZt63mCpvPxE0vP5JV0";
$secretKey = '6LcwH60UAAAAAIMeTEtrcgwK5AkoVyYbGjF53fNE'; 
// If the form is submitted 
if(isset($_POST['submit'])){ 
    $postData = $_POST; 
    
    // Validate form fields 
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){ 
        
        // Validate reCAPTCHA box 
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 

            
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
            
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
            
            // If reCAPTCHA response is valid 
            if($responseData->success){ 
                // Posted form data 
                $name = !empty($_POST['name'])?$_POST['name']:''; 
                $email = !empty($_POST['email'])?$_POST['email']:''; 
                $subject = !empty($_POST['subject'])?$_POST['subject']:'';
                $message = !empty($_POST['message'])?$_POST['message']:''; 
                
                
                // Send email notification to the site admin 
                $to = 'info@sofreo.com.au'; 
                $htmlContent = " 
                    <h1>Contact request details from SoFreo website</h1> 
                    <p><b>Name: </b>".$name."</p> 
                    <p><b>Email: </b>".$email."</p> 
                    <p><b>Subject: </b>".$subject."</p> 
                    <p><b>Message: </b>".$message."</p> 
                "; 
                
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                // More headers 
                $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 
                
                // Send email 
                @mail($to,$subject,$htmlContent,$headers); 
                
                $status = 'success'; 
                $statusMsg = '
                <div class="col text-white">
                <p>We have received your message and would like to thank you for writing to us.</p>
                <p>We will reply by email as soon as possible.</p>
                <d>Talk to you soon,</>
                <p><em>Fanny &amp; Alex</em></p></div>'; 
                $postData = '';
            }else{ 
                $statusMsg = 'Robot verification failed, please try again.'; 
            } 
        }else{ 
            $statusMsg = 'Please check on the reCAPTCHA box.'; 
        } 
    }else{ 
        $statusMsg = 'Please fill all the mandatory fields.'; 
    } 
} 
?>
<!doctype html>
<html lang="en">
	<head>
		<title>So Freo - Contact us</title>
		<?php 
		$meta = 'You need information on So Freo Cuisine? Contact us! ';
		include 'includes/meta.php';
		?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <?php 
        include 'includes/nav.php';
        ?>
        <main>
            <div class="pic">
                <h1>Some feedback?</h1> 
                <div class="bold">
                    <br> 
                    <p>We always want to hear from you, for some ideas, to improve our products or simply to say Hello! </p>
                    <p>You want to sell our products in your shop or use it in your cafe? <br>Contact us, we will be happy to give you more information! </p>
                </div> 
            </div>
            <br class="clearfloat">
            <div class="container">
                <section class="row text-center">
                    <div class="col">
                        <?php if(!empty($statusMsg)){ ?>
                            <p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        <?php } ?>
                        <form action="" method="post" id="theForm">
                            <fieldset><h3>Feel free to contact us</h3>
                                <div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label text-white" for="name">Name*</label><div class="col-sm-5"><input type="text" class="form-control" name="name" id="name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Your name" required></div></div>
                                <div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label text-white" for="email">Email*</label><div class="col-sm-5"><input type="email" class="form-control" name="email" id="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="name@address.com" required></div></div classclass="col-sm-2 col-form-label">
                                <div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label text-white"for="subject">Subject</label><div class="col-sm-5"><input type="text" class="form-control" name="subject" id="subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>"></div></div>
                                <div class="form-group row justify-content-center"><label class="col-sm-2 col-form-label text-white"for="message">Message*</label><div class="col-sm-5"><textarea class="form-control" name="message" id="message" rows="5" required><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea></div></div>
                                <!-- Google Recaptcha box -->
                                <div class="row justify-content-center"><div class=col-sm-2></div><div class="col-sm-5"><div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div></div></div>
                                <div class="row justify-content-center"><div class=col-sm-2></div><div class="col-sm-5 "><input id="submit" class="btn" type="submit" name="submit" value="Send"></div></div>
                            </fieldset>
                        </form>
                </section>
            </div>
        <?php include 'includes/footer.php'; ?>