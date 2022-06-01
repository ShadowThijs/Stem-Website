<!DOCTYPE html> 
<head>
    <link rel="stylesheet" href="login.css">
    <title>Stem op Pulhof</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
      </script>
</head>

<body>

  <div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form action="insert.php" class="signup-form" action="" method="post">
					<input type="text" class="input" name="user_name" autocomplete="off" placeholder="Username">
					<input type="password" class="input" name="user_pass" autocomplete="off" placeholder="Password">
          <input type="password" class="input" name="pass_confirm" autocomplete="off" placeholder="Confirm password">
					<input type="submit" class="button" value="Sign Up">
				</form><!--.login-form-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="" method="post">
					<input type="text" class="input" id="user_login" autocomplete="off" placeholder="Username">
					<input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
 
  <div>
    <script src="https://cpwebassets.codepen.io/assets/common/browser_support-e442aebd85f2bb9dcd4a47cb43c7fc38efd5522ace0a675bf5e33a06413b5a28.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/everypage-f84dd91ff413b23b8d1a6f7eadc615dc53c384f74f8254e068449db735b2c8cd.js"></script>
    <script src="https://fast.appcues.com/69186.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/analytics_and_notifications-49dbf9eb3e832169ceaad20dab2e210aae9832821d457c2dbb846d10d04243c6.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-72e0d091b813ce1d57c8.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/1-48650e5327fc07d18084.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/everypage-83f7187d18fd08f012a5.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-72e0d091b813ce1d57c8.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/1-48650e5327fc07d18084.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/firebaseConnectLibs-837110d1471c78f120d3.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/vendor-72e0d091b813ce1d57c8.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/1-48650e5327fc07d18084.chunk.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/packs/js/processorRouter-df1734c658b08f9709b3.js"></script>
    <script src="https://static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/editor/global/commonLibs-9baf61da2f0b1adbfdbda1a98aa009379eddc23641e45edf6d5c41f98fe361d0.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/editor/global/codemirror-12bc3c1693e16b4384f504cf792b859212ab55b3aff5117ab4be4638dec74fb6.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/libs/emmet-codemirror-plugin-d52a9896e5f03371a6952975f3e92e5812c54903ca27e36f9c7b707444dc1e88.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/editor/pen/index-826026434e52479a176b3361e1c2c9d49b6e37f64cb5b3df6224189b6749f8aa.js"></script>
    <script src="login.js"></script>
    </div><!--Scripts imports-->
</body>