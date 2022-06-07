<?php
session_start();

if( isset( $_REQUEST['usuario'] ) and !empty( $_REQUEST['usuario'] ) ) {
	if( ( $_REQUEST['usuario'] == 'fabio' ) and ( $_REQUEST['senha'] == '15011987' ) ) {
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = 'fabio';
		$_SESSION['limeira'] = false;
		$_SESSION['santos'] = false;
		header('Location:index.php');
	} 
	if( ( $_REQUEST['usuario'] == 'unitau' ) and ( $_REQUEST['senha'] == 'PaternoUnitau' ) ) {
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = 'unitau';
		$_SESSION['unitau'] = true;
		$_SESSION['santos'] = false;
		header('Location:relatorios.php');
	} 
	if( ( $_REQUEST['usuario'] == 'santos' ) and ( $_REQUEST['senha'] == 'PaternoSantos@2018' ) ) {
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = 'santos';
		$_SESSION['limeira'] = false;
		$_SESSION['santos'] = true;
		header('Location:relatorios.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>:: Invest Partner</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> Invest Partner <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Bem-vindo ao sistema de Inventário!</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Cadastro de Colaboradores</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Cadastro de Equipamentos</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Relatórios</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> e muito mais...</li>
                    </ul>
                    <div class="mb20"></div>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="login.php">
                    <h4 class="nomargin">Login</h4>
                    <p class="mt5 mb20">Faça o login para acessar o sistema.</p>
                
                    <input type="text" name="usuario" class="form-control uname" placeholder="Usuário" />
                    <input type="password" name="senha" class="form-control pword" placeholder="Senha" />
                    <button class="btn btn-success btn-block">Login</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2021. Todos direitos reservados.
            </div>
            <div class="pull-right">
                Criador por: <a href="mailto:fabiomussolin@gmail.com" target="_blank">Fábio Mattos Mussolin</a>
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>
