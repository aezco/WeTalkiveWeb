<?php
    require('../libaries/recaptcha-master/src/autoload.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>WeTalkive - Coming Soon</title>
	<meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, 
         initial-scale = 1">

    <meta name="description" content="WeTalkive - Coming Soon!">
    <meta name="keywords" content="WeTalkive;">
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/styles.css" rel="stylesheet">
</head>
<body>

<!--Header-->
<div class="weHeader">
    <div class="weHeader-navbar">
        <p class="weTitle header">Talkive Password Recovery</p>
    </div>
</div>


<form id="comment_form" action="form.php" method="post">
      <input type="email" placeholder="Type your email" size="40"><br><br>
      <textarea name="comment" rows="8" cols="39"></textarea><br><br>
      <input type="submit" name="submit" value="Post comment"><br><br>
      <div class="g-recaptcha" data-sitekey="=== Your site key ==="></div>
    </form>


<!--Content-->
<div class="weContent">
    <div class="weContent-section">
        <div class="weCenter-section">
            <p class="weTitle">Forgot your password?</p>
            <p class="weDescription">Enter your email address and we'll help you reset your password.</p>
            <p class="weDescription">
                <form role="form" action="pRecoveryValid.php" method="post" id="passwordresetForm">
                    <div class="form-group">
                        <label class="sr-only" for="contact-subject">Password</label>
                        <input type="password" name="password" placeholder="Password" class="contact-subject form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="contact-message">Password confirmation</label>
                        <input type="password" name="passwordConfirm" placeholder="Password confirmation" class="contact-subject form-control" id="passwordConfirm">
                    </div>
                    <button type="submit" id="passwordreset-submit" class="btn">Confirm</button>
                    <div class="g-recaptcha" data-sitekey=""></div>
                </form>
            </p>
        </div>
    </div>
</div>

<!--Footer-->
<div class="weFooter">
</div>

</body>
</html>




