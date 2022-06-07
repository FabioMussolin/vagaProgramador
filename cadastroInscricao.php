<?php
session_start();
if( $_SESSION['login'] == false ) {
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
  <link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
  <link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
  <link rel="stylesheet" href="css/jquery.tagsinput.css" />
  <link rel="stylesheet" href="css/colorpicker.css" />
  <link rel="stylesheet" href="css/dropzone.css" />
  <link href="css/jquery.datatables.css" rel="stylesheet">

	<style type="text/css">
		.target {
		  border: solid 1px #aaa;
		  min-height: 200px;
		  width: 50%;
		  margin-top: 0em;
		  margin-left: 1em;
		  border-radius: 5px;
		  cursor: pointer;
		  transition: 300ms all;
		  position: relative;
		}

		.contain {
		  background-size: cover;
		  position: relative;
		  z-index: 10;
		  top: 0px;
		  left: 0px;
		}
		textarea {
		  background-color: white;
		}
		.active2 {
		  box-shadow: 0px 0px 10px 10px rgba(0,0,255,.4);
		}
		
		#audio-preview {
		  background: #ffffff;
		  width: auto;
		  padding: 10px;
		  display: inline-block;
		}

		#audio-upload {
		  cursor: pointer;
		  background-color: #bdc3c7;
		  color: #ecf0f1;
		  padding: 10px;
		  font-size: 12px;
		  text-transform: uppercase;
		}
	</style>
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
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
	  <h2><i class="fa fa-home"></i> Cadastro Inscrição <span>Adicione um novo cadastro...</span></h2>
	  <div class="breadcrumb-wrapper">
		<span class="label">Você está aqui:</span>
		<ol class="breadcrumb">
		  <li><a href="cadastroIncricao.php">Cadastro Inscrição</a></li>
		  <li class="active">Cadastro Inscrição</li>
		</ol>
	  </div>
	</div>
    	
		<!-- form enctype='multipart/form-data' onSubmit="return: false;" -->
		<div id="conteudo" class="panel">
		<br><br>

		     <div class="form-group col-md-2">
				  <label>Data: </label>
				  <input type="date" class="form-control"  id="data" />
				</div>
				
			 <div class="form-group col-md-6">
				  <label>Nome Completo: </label>
				  <input type="text" class="form-control"  id="nome" placeholder="Nome da Criança" />
				</div>
			
			 <div class="form-group col-md-2">
				  <label>Data de nascimento: </label>
				  <input type="date" class="form-control"  id="data" />
				</div><br><br><br><br><br>
				
			 <div class="form-group col-md-1">
				  <label>Idade: </label>
				  <input type="text" class="form-control"  id="idade" placeholder="Idade da Criança" />
				</div>	
			
			<div class="form-group col-md-1">	
			<label>Nível: </label>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="B1">
			  <label class="form-check-label" for="inlineCheckbox1">B1</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="B2">
			  <label class="form-check-label" for="inlineCheckbox2">B2</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="M1">
			  <label class="form-check-label" for="inlineCheckbox3">M1</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="M2">
			  <label class="form-check-label" for="inlineCheckbox3">M2</label>
			</div>
            </div> 
			<button class="btn btn-primary" id="salvar">Salvar</button>
					
				</div>
	
		
		<!-- /form -->
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<span id="relatorio"></span>
			</div>
		</div>
	</div>
</section>

<script src="js/jquery-1.10.2.min.js"></script>
<!-- script src="js/jquery-3.2.1.min.js"></script -->
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/toggles.min.js"></script>
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

<script src="js/jquery.datatables.min.js"></script>

<script src="js/custom.js"></script>

<script src="js/html2canvas.min.js"></script>
<script src="js/jquery.uploadPreview.min.js"></script>
<script src="js/jquery.form.min.js"></script>

<script language="javascript">

$(document).ready(function() {	

getGrupos();	
	
});

function getGrupos() {
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: 'ajax/cadastroFuncionarios.php',
		data: {acao:'getGrupos'},
		async: true,
		success: function(response) {
			var options = '';
			options += '<option value="0">selecione um grupo...</option>';
			$.each(response.area, function(key, value){
				options += '<option value="'+key+'">&nbsp;'+value+'</option>';
			});
			$("#area").html(options);
		}
	});
}	

$("#salvar").click(function() {
	salvarArea();
});
	
	function salvarArea() {	
	var nome = $("#nome").val();
	var acao = 'salvarArea';
			$.ajax({
			type: 'POST',
			dataType: 'text',
			url: 'ajax/cadastroFuncionarios.php',
			data: {nome:nome,acao:acao},
			async: true,
			success: function(response) {
			   	alert('Gravado com Sucesso!'); 
				$("#nome").val('');
			}
		});
	};
	


</script>

</body>
</html>