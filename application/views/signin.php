<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>听说后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- CSS -->
		<link href="/resources/assets/css/bootstrap.css" rel="stylesheet">	
		<link href="/resources/css/combine_fonts.css" rel="stylesheet">	
		<link href="/resources/css/buttons.css" rel="stylesheet">
		<link href="/resources/style.css" rel="stylesheet">

		<!-- color style -->
		<link href="/resources/css/dark.css" rel="stylesheet">

		<link href="/resources/assets/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="plugins/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="well" style="width:40%;margin:auto auto;">
					<div class="navbar navbar-static navbar_as_heading">
						<div class="navbar-inner">
							<div class="container" style="width: auto;">
								<a class="brand">听说后台管理系统</a>
							</div>
						</div>
					</div>
					<form action="/welcome/index" method="post">
						<fieldset>
						<div class="control-group">
						<label class="control-label" for="prependedInput">内部邮箱:</label>
						<div class="controls">
						<div class="input-prepend">
						<span class="add-on"><i class="icon-large icon-user-1"></i></span><input class="input-xlarge-fluid" id="username" size="16" type="text" value="">
						</div>
						</div>
						</div>

						<div class="control-group">
						<label class="control-label" for="prependedInput">密码:</label>
						<div class="controls">
						<div class="input-prepend">
						<span class="add-on"><i class="icon-large icon-lock-1"></i></span><input class="input-xlarge-fluid" id="password" size="16" type="password" value="">
						</div>
						</div>
						</div>

						<div>
						<button type="submit" class="btn btn-large btn-primary">登陆</button>
						</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<script src="/resources/assets/js/jquery.js"></script>
		<script src="/resources/assets/js/bootstrap.js"></script>	
	</body>
</html>
