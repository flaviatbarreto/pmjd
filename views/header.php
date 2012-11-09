<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><html>
	<title>PMJD</title>
	
	<link rel="stylesheet" href="<?php echo URL;?>css/index.css" />
	<?php
		if(isset($this->css)){
			foreach($this->css as $css){
				echo '<link rel="stylesheet" href="'.URL.'views/'.$css.'" />';
			}
		}
	?>
	
	<script type="text/javascript" src="<?php echo URL;?>scripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>scripts/easySlider1.7.js"></script>
	<?php
		if(isset($this->js)){
			foreach($this->js as $js){
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
	<script>
      $(document).ready(function(){	
         $("#slider").easySlider({
            controlsShow: false,
            firstShow: false,
            lastShow: false,
            speed: 2000,
            auto:	true,
            pause: 7000,
            continuous: true, 
            numeric: false
         });
      });
	</script>
</head>

<body>
<div id="wrap">
<div id="header_backgroud">
<div id="header">
	<div id="logo_prefeitura">
	</div>
   <div id="slider">
      <ul>				
         <li><img src="<?php echo URL;?>css/images/banner1.jpg" width="740" height="160"/></li>
         <li><img src="<?php echo URL;?>css/images/banner2.jpg" width="740" height="160"/></li>
         <li><img src="<?php echo URL;?>css/images/banner3.jpg" width="740" height="160"/></li>
      </ul>
   </div>
	<div id="frase">
		<p>Nunca se fez tanto em tão pouco tempo</p>
	</div>
</div>
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