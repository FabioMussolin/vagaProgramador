<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if( ( !isset( $_SESSION['login'] ) OR ( $_SESSION['login'] == false ) )	) {
	header('Location:login.php');
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

  <title>:: Sistema de Cadastro</title>

  <link href="css/style.default.css" rel="stylesheet">

 
</head>

<body>

<!-- Preloader -->
<div id="preloader">
	<div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
	<input type="hidden" name="dia" id="dia" value="<?=date('d/m/Y');?>">
  <div class="leftpanel">
	
	<div class="logopanel">
		<h1><span>[</span> Cadastro <span>]</span></h1>
	</div><!-- logopanel -->
	
	<div class="leftpanelinner">      
	  <h5 class="sidebartitle">Navegação</h5>
	  <ul class="nav nav-pills nav-stacked nav-bracket">
		<li><a href="cadastroInscricao.php"><i class="fa fa-tasks"></i> <span>Inscricão</span></a></li>
		<li><a href="cadastroMatricula.php"><i class="fa fa-tasks"></i> <span>Matricula</span></a></li>
		<li><a href="cadastroSala.php"><i class="fa fa-tasks"></i> <span>Sala de aula</span></a></li>
		<li><a href="consultaVagas.php"><i class="fa fa-tasks"></i> <span>Consultar vagas</span></a></li>
		<li><a href="relatorios.php"><i class="fa fa-tasks"></i> <span>Relatorios</span></a></li>
		
	  </ul>
	</div>
  </div>
  
  <div class="mainpanel">    
	<div class="headerbar">      
	  <a class="menutoggle"><i class="fa fa-bars"></i></a>      
	  <div class="header-right">
		<ul class="headermenu">
		  <li>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<img src="images/photos/loggeduser.png" alt="" />
				<?=@$_SESSION['usuario'];?>
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
				<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
			  </ul>
			</div>
		  </li>
		</ul>
	  </div><!-- header-right -->
	  
	</div><!-- headerbar -->
		
	<div class="pageheader">
	  <h2><i class="fa fa-home"></i> Menu Principal <span>escolha a opção desejada...</span></h2>
	  <div class="breadcrumb-wrapper">
		<span class="label">Você está aqui:</span>
		<ol class="breadcrumb">
		  <li><a href="index.php">Menu Inicial</a></li>
		  <li class="active">Cadastro Alunos</li>
		</ol>
	  </div>
	</div>
	
	<div class="contentpanel">

    

	 <center><img width="1500px"  src="images/imagem_nova.webp" alt="" /></center>
	  
	</div>

	<div class="row">        
		
	</div>  
</section>



<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/jquery.autogrow-textarea.js"></script>
<script src="js/bootstrap-fileupload.min.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/dropzone.min.js"></script>
<script src="js/colorpicker.js"></script>
<script src="js/custom.js"></script>


<script language="javascript">
$(document).ready(function() {
	// Date Picker
	jQuery('#dia').datepicker(
	{
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior'
		}
	);
	
	getLastCalls();
	getLastFinishCalls();
	getResumoDia();
});

$("#dia").change(function() {
	getResumoDia();
});

</script>

</body>
</html>