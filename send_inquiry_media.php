<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="height=device-height, 
                      width=device-width, initial-scale=1.0, 
                      minimum-scale=1.0, maximum-scale=1.0, 
                      user-scalable=no, target-densitydpi=device-dpi">

	<!-- Favicon links -->
	<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">

	<!-- Mailchimp css -->
	<link href="https://cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<!-- Own stylesheet -->
	<link rel="stylesheet" type="text/css" href="./css/variables.css">
	<link rel="stylesheet" type="text/css" href="./css/fonts.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/contact_us.css">
	<!-- <link rel="stylesheet" type="text/css" href="./css/tooltip.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/bootstrap_grid.css">
	

	<!-- Plugin stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	

	<script src="./js/jquery-3.3.1.js"></script>
	<script src="./js/fade_in.js"></script>
	<!-- <script src="./js/smooth_scroll.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="./js/collapsible.js"></script>
	<script>
		$(function(){
			$('#nav').load('navigation_black.html');
			$('#footer').load('./footer.html');
		});
	</script>

	<title>Pet Number ICO</title>
</head>
<?php 
	$to = "media@petnumber.io";
	$subject = 'Media inquiry from ' . $_POST['cname_media'] . $_POST['firstname_media'] . " " . $_POST['lastname_media'] .':' . $_POST['subject_media'];
	$message = $_POST['comments_media'];
	$headers = "From: " . $_POST['email_media'];
	$result  = "";

	if(mail($to, $subject, $message, $headers)){
		$result = "true";
	} else {
		$result = "false";
	}
	
?>

<body>
	<div id="nav"></div>
	

	<div class="section-container">
		<div id="send-inquiry-body">
			<h1>
				<?php if($result) {
					echo 'Your message has been sent to Pet Number Project!';
				} else {
					echo 'Something went wrong. Please try again, or directly email us to in&#102;o@p&#101;&#116;&#114;eg&#105;&#46;i&#111;';
				} ?>
			</h1>
			<h1 class="font-red font-Poppins-Light">
				<?php if($result) {
					echo 'Your opinion creates better Pet Number Project.';
				} else {
					echo '';
				} ?>
			</h1>
			<img src="./images/inquiry_connect_ok.png">
			<h2>
				<?php if($result) {
					echo 'Pet Number Project will review your message, and we will be with you shortly.';
				} else {
					echo '';
				} ?>
				<br><br>
			<span class="font-red font-Poppins-Light">*Some email services might mark our message as a spam. <br>Please whiteliest the domain '@Pet Number.io' from your spam list in advance. </span></h2>
			<p>Below are the detail of the message</p>
			<div id="message-detail-section">
				<h2>First Name:<span class="font-Poppins-Light"> <?php echo $result. $_POST['firstnam_media']; ?></span> </h2>
				<h2>Last Name: <span class="font-Poppins-Light"><?php echo $_POST['lastname_media']; ?></span></h2>
				<h2>Company Name: <span class="font-Poppins-Light"><?php echo $_POST['cname_media']; ?></span></h2>
				<h2>Email: <span class="font-Poppins-Light"><?php echo $_POST['email_media']; ?></span></h2>
				<h2>Comment: <span class="font-Poppins-Light"><?php echo $_POST['comments_media']; ?></span></h2>
			</div>

				<h2 class="font-Poppins-Light"><a href="./index.html">&rarr; Back to top page.</a></h2>
			</div>
		</div>
	
	<div id="footer"></div>

	<script type="text/javascript">
		AOS.init({
			duration: 500,
			disable: 'mobile' ,
		});

	</script>
</div>
</body>
</html>