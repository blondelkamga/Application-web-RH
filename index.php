<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RH</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="stylesheet" href="css/style1.css" />
        <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/jquery-1.7.min.js"></script>
        <script type="text/javascript">
    
    $(document).ready(function(){
        $("#login").click(function(){
            
            var action = $("#lg-form").attr('action');
            var form_data = {
                login: $("#login").val(),
                password: $("#password").val(),
                is_ajax: 1
            };
            
            $.ajax({
                type: "POST",
                url: action,
                data: form_data,
                success: function(response)
                {
                    if(response == "success")
                        $("#lg-form").slideUp('slow', function(){
                            $("#message").html('<p class="success">You have logged in successfully!</p><p>Redirecting....</p>');
                        });
                    else
                        $("#message").html('<p class="error">ERROR: Invalid username and/or password.</p>');
                }   
            });
            return false;
        });
    });
    </script>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>RH</strong> Plateform</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Veillez vous Connecter</h3>
                            		<p>Entrer votre identifiant et votre Mot de passe</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="valider.php" method="post" class="login-form" name="lg-form" id="lg-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Identifiant</label>
			                        	<input type="text" name="login" placeholder="Identifiant" class="form-username form-control" id="login">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Mot de passe</label>
			                        	<input type="password" name="pass" placeholder="mot de passe" class="form-password form-control" id="pass">
			                        </div>
                                    <button type="submit" class="btn" id="login">Valider</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>