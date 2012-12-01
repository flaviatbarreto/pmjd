<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><html>
	<title>PMJD</title>
	
	<link rel="stylesheet" href="<?php echo URL;?>css/index.css" />
	<link rel="stylesheet" href="<?php echo URL;?>css/jquery.popeye.css" />
	<link rel="stylesheet" href="<?php echo URL;?>css/jquery.popeye.style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/style2.css" />
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>


	<?php
		if(isset($this->css)){
			foreach($this->css as $css){
				echo '<link rel="stylesheet" href="'.URL.'views/'.$css.'" />';
			}
		}
	?>
	
	<script type="text/javascript" src="<?php echo URL;?>scripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>scripts/easySlider1.7.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>scripts/jquery.popeye-2.1.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>scripts/jquery.popeye-2.1.min.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo URL;?>/scripts/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo URL;?>/scripts/jquery.easing.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo URL;?>/scripts/script.js"></script>
	<?php
		if(isset($this->js)){
			foreach($this->js as $js){
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>

<!-- Inicio Obras -->
	<link rel="stylesheet" href="<?php echo URL;?>css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo URL;?>css/default.css" type="text/css" media="screen" />
	
    <script type="text/javascript" src="<?php echo URL;?>/scripts/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
	
<!-- Fim Obras -->

	<script type="text/javascript">
		$(document).ready( function(){	
			var buttons = { previous:$('#jslidernews2 .button-previous') ,
						next:$('#jslidernews2 .button-next') };			 
			$('#jslidernews2').lofJSidernews( { interval:5000,
											 	easing:'easeInOutQuad',
												duration:1200,
												auto:true,
												mainWidth:684,
												mainHeight:300,
												navigatorHeight		: 100,
												navigatorWidth		: 310,
												maxItemDisplay:3,
												buttons:buttons } );						
	});
	</script>
	
	<!-- [example js] begin -->
<script type="text/javascript">
    <!--//<![CDATA[
    
    $(document).ready(function () {
        var options1 = {
        }
        var options2 = {
            caption:    false,
            navigation: 'permanent',
            direction:  'left'
        }
        var options3 = {
            caption:    'permanent',
            opacity:    1
        }
    
        $('#ppy1').popeye(options1);
        $('#ppy2').popeye(options2);
        $('#ppy3').popeye(options3);
    });
    
    //]]>-->
</script>
</head>

<body>
<div id="wrap">

<div id="header">
	<a href="<?php echo URL;?>index"><div id="logo_prefeitura"></div></a>
	<div id="barra_header">
		<div id="icons_header">
			<a href="https://www.facebook.com/prefeitura.municipaldejoaodourado?fref=ts" target="blank">
				<img src="<?php echo URL;?>/css/images/icon_twitter.png" />
			</a>
			<a href="https://www.facebook.com/prefeitura.municipaldejoaodourado?fref=ts" target="blank">
				<img src="<?php echo URL;?>/css/images/icon_facebook.png" />
			</a>
			<a href="http://www.youtube.com/channel/UCNA0ZoqqqDk9Lym1BC59oYA" target="blank">
				<img src="<?php echo URL;?>/css/images/icon_youtube.png" />
			</a>
		</div>	
	</div>
	<div id=busca>
		<input type="text" id="busca_texto" value="Digite sua pesquisa aqui" onfocus="this.value=''"/>
		<div id="busca_ok"></div>
	</div>
	<div id="foto_header"></div>
	<div id="barra_inferior_header"></div>   
</div>

<div id="all">

<div id="main">
<div id="menu">
	<ul id="sliding-navigation">
      <li class="sliding-element"><a href="<?php echo URL;?>index">Home</a></li>
      <li class="sliding-element"><a href="<?php echo URL;?>noticias">Noticias</a></li>
      <li class="sliding-element"><a href="<?php echo URL;?>obras">Obras</a></li>
      <li class="sliding-element"><a href="<?php echo URL;?>ouvidoria">Ouvidoria</a></li>
		<li class="sliding-element"><a href="<?php echo URL;?>cidade">A cidade</a>
         <ul id="sliding-navigation-adm">
				<li class="sliding-element-adm"><a href="<?php echo URL;?>cidade/historia">Historia</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>cidade/localizacao">Localização</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>cidade/economia">Economia</a></li>
			</ul>
      </li>
      <li class="sliding-element"><a href="<?php echo URL;?>administracao">Administração</a>
			<ul id="sliding-navigation-adm">
				<li class="sliding-element-adm"><a href="<?php echo URL;?>administracao/gabinete">Gabinete do Prefeito</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>administracao/equipe">Equipe de Governo</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>administracao/secretarias">Secretarias</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>administracao/parcerias">Parcerias</a></li>
			</ul>
		</li>
		<li class="sliding-element"><a href="<?php echo URL;?>acontece">PMJD Acontece</a>
         <ul id="sliding-navigation-adm">
				<li class="sliding-element-adm"><a href="<?php echo URL;?>acontece/fotos">Fotos</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>acontece/videos">Vídeos</a></li>
				<li class="sliding-element-adm"><a href="<?php echo URL;?>acontece/radio">Radio</a></li>
            <li class="sliding-element-adm"><a href="<?php echo URL;?>acontece/espaco_cultural">Espaço Cultural</a></li>
            <li class="sliding-element-adm"><a href="<?php echo URL;?>acontece/simbolos">Símbolos oficiais</a></li>
			</ul>
      </li>
		<li class="sliding-element"><a href="<?php echo URL;?>publicacoes">Publicações</a>
         <ul id="sliding-navigation-adm">
            <li class="sliding-element-adm"><a href="<?php echo URL;?>publicacoes/concursos">Concursos</a></li>
            <li class="sliding-element-adm"><a href="<?php echo URL;?>publicacoes/documentacao">Documentação Legal</a></li>
            <li class="sliding-element-adm"><a href="<?php echo URL;?>publicacoes/transparencia">Transparência</a></li>
         </ul>
      </li>
	</ul>
</div>

<div id="content">
<!--
<?php 
	//Session::init();
	//if(Session::get('loggedIn')){
?>
	<a href="<?php echo URL;?>dashboard/logout">Logout</a>
<?php 
	//}else{
?>
	<a href="<?php echo URL;?>login">Login</a>
<?php 
	//}
?>
-->
