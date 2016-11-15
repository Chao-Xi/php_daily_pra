<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Sign Up</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">.g-recaptcha{ margin-bottom: 10px; }</style>
</head>
<body>
  <div class="container">
  	 <div class="row">
        <div class="col-lg-6">
        <h3>Sign Up</h3>
        <hr/>
        <form action="signup.php" method="post" autocomplete="off">
        <div class="form-group">
           <label for="email">Email Address</label>
           <input type="email" name="email" class="form-control" id="email" placeholder="you@domain.com">
           </div>
           <div class="g-recaptcha" data-sitekey="6Lc2_AsUAAAAAFSBmMVXNDIOC-jAe06OOzfHjJyo"></div>           
           <input type="submit" value="Sign up" class="btn btn-primary">
        </div>
        </form>
     </div>
  </div>
  <script src="https://www.google.com/recaptcha/api.js"></script>

</body>
</html>