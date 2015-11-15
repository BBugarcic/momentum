<?php include('./view/header.php'); ?>
	
	<body>
		<!-- modal window sign up form  OVo ti je u stari ono sto se popupuje? da A onda gdje bi trebalo da ti uradi redirekciju?-->
		<div class="modal fade" id="signupForm"> 
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
						<h4 class="modal=title">Sign up</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class = "form-group">
								<label class="col-md-4 com-md-offset-1">Username</label>
								<div class="col-md-5">
									<input id="username" type="text" class="form-control input-sm" required>
								</div>
							</div>
							<div class = "form-group">
								<label class="col-md-4 com-md-offset-1">Email address</label>
								<div class="col-md-5">
									<input id="email" type="email" class="form-control input-sm" required>
								</div>
							</div>
							<div class = "form-group">
								<label class="col-md-4 com-md-offset-1">Password</label>
								<div class="col-md-5">
									<input id="pass" type="password" class="form-control input-sm" required>
								</div>
							</div>
							<div class = "form-group">
								<label class="col-md-4 com-md-offset-1">Confirm password</label>
								<div class="col-md-5">
									<input id="conf" type="password" class="form-control input-sm" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-5">
									<input id="subBtn1"  type="submit" class="btn btn-success" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- modal window log in form -->
		<div class="modal fade" id="loginForm">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
						<h4 class="modal=title">Log in</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class = "form-group">
								<label class="col-md-4 com-md-offset-1">Username</label>
								<div class="col-md-5">
									<input id="userLog" type="text" class="form-control input-sm" required>
								</div>
							</div>
							<div class = "form-group">
								<label class="col-md-4 com-md-offset-1">Password</label>
								<div class="col-md-5">
									<input id="passLog" type="password" class="form-control input-sm" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-5">
									<input id="subBtn" type="submit" class="btn btn-success" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
 	<!-- navigation bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
			
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Momentum</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <!--    <li class="hidden">
                        <a href="#page-top"></a>
                    </li> -->
                    <li>
                        <a href="#loginForm" role="button" data-toggle="modal">Log in</a>
                    </li>
                    <li>
                        <a href="#signupForm" role="button" data-toggle="modal">Sign up</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
	<!--background picture -->
	<div class="wide_jpg"></div>
	
	<!-- main div with informations --> 
	<div class="container">
		<div class="col-xs-12 text-center">
			<h1>MOMENTUM</h1>
			<a class="btn btn-default" href="#signupForm" role="button" data-toggle="modal">Sign up</a>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h2>Build it</h2>
				<p>Use simple to-do lists to achive your yearly, monthly and daily goals.</p>
			</div>
			<div class="col-md-4">
				<h2>Maintain it</h2>
				<p>Developing momentum is just a beginning. Make it a lifestyle.</p>
			</div>
			<div class="col-md-4">
				<h2>Increase it</h2>
				<p>Love your momentum, your action and your move. Analyze, improve, press harder.</p>
			</div>
		</div>
	</div>



<?php include('./view/footer.php'); ?>
	
	
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="includes/js/bootstrap.min.js"></script>
		<script src="jsControllers/signUp.js"></script>
			
	
	</body>
</html>