<?php setcookie("modoEscritorio", "1")?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0"/>
<meta http-equiv="expires" content="0"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>

<title><?php echo TXT_TITLE?> - DescargaVideos.TV<?php echo $seccion==""?"":" - ".$seccion?></title>

<meta property="fb:app_id" content="235486993147003"/>
<meta property="fb:admins" content="1133185967"/>

<meta name="RATING" content="GENERAL"/>

<meta name="advertising" content="ask"/>

<meta name="keywords" content="<?php echo $palabras_clave?>"/>
<meta name="description" content="<?php echo $descripcion?>"/>

<?php
if (defined('HAY_RESULTADO') && $R['MODO'] === 'BUSQUEDA') {
	echo '<meta name="robots" content="noindex">';
}

/*? y un número es para forzar la actualización del script y del css tras cambios*/ ?>

<link href="/favicon.ico" rel="icon" type="image/x-icon"/>
<link rel="stylesheet" href="/css/cssfull.min.css?30"/>
<link rel="stylesheet" href="/css/modos/<?php echo $css_modo?>.css" id="css2"/>
<script src="/js/funciones.min.js?20"></script>

<?php if (!defined('DEBUG') && !isset($_GET['webdebug'])) { ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-29252510-1', 'auto');  // Replace with your property ID.
ga('send', 'pageview');
</script>
<?php } ?>

<!--no se puede juntar por cloudflare-->
<script>
var css_user='<?php echo $css_modo?>';
var rtmpdownloader = false;
var EasyRtmpdump = false;
var jdownloader = false;
</script>



</head>
<body>


<div class="todo">
	<div class="cabecera <?php if(defined('HAY_RESULTADO')) echo "conresultado";?>" id="cabecera">
		<div class="minHeight">
			<a href="/" title="Ir al inicio"><h1>DescargaVideos<span class="tv">.TV</span></h1></a>
			<h2><?php echo TXT_SUBTITULO_CABECERA?></h2>
	
			<div id="esquina" class="esquina">
				<div class="interior_esquina"><div>
					<a href="/cambiaCabecera.php?modo=1" id="prevpic1" ><span class="m1 img"></span></a><a
					href="/cambiaCabecera.php?modo=2"    id="prevpic2" ><span class="m2 img"></span></a><a
					href="/cambiaCabecera.php?modo=3"    id="prevpic3" ><span class="m3 img"></span></a><a
					href="/cambiaCabecera.php?modo=4"    id="prevpic4" ><span class="m4 img"></span></a></div><div><a
					href="/cambiaCabecera.php?modo=5"    id="prevpic5" ><span class="m5 img"></span></a><a
					href="/cambiaCabecera.php?modo=6"    id="prevpic6" ><span class="m6 img"></span></a><a
					href="/cambiaCabecera.php?modo=7"    id="prevpic7" ><span class="m7 img"></span></a></div><div><a
					href="/cambiaCabecera.php?modo=8"    id="prevpic8" ><span class="m8 img"></span></a><a
					href="/cambiaCabecera.php?modo=9"    id="prevpic9" ><span class="m9 img"></span></a></div><div><a
					href="/cambiaCabecera.php?modo=10"   id="prevpic10"><span class="m10 img"></span></a>
				</div></div>
			</div>
	
			<div class="centro">
				<form action="/" method="post" name="formCalculador" id="formCalculador">
					<div class="fondo_input_web">
						<input type="text" name="web" id="web" class="entrada" placeholder="Pega la URL del vídeo..." value="<?php if(isset($web) && $web!="")echo htmlentities2($web)?>" title="URL a obtener">
					</div>
					<input type="submit" id="submitBtn" value=" " class="boton">
	
					<div id="ayuda1" class="letra_ayuda">
						<div class="flechaIzq"></div>
						<span id="ayuda1txt"><?php echo TXT_COPIA_URL_VIDEO?></span>
					</div>
	
					<div id="ayuda2" class="letra_ayuda invisible">
						<div class="flechaDer"></div>
						<span id="ayuda2txt"><?php echo TXT_BUSCA_URL_VIDEO?></span>
					</div>
				</form>
				
				<div id="resultado">
					<?php include_once 'plantillaResultado.php';?>
				</div>
				
				<?php if (ADS) { ?>
				<div id="publi_cabecera">
					<center>
						<span>
							<?php echo getPubliJS(300, 250, true)?>
						</span>
						<span>
							<?php echo getPubliJS(300, 250, true)?>
						</span>
					</center>
				</div>
				<?php } ?>
			</div>
	
			<div class="social">
				<div class="elem">
					<a target="_blank" class="tt" href="https://twitter.com/descargavids"></a>
				</div>
	
				<div class="elem">
					<a target="_blank" class="fb" href="https://www.facebook.com/descargavids"></a>
				</div>
				
				<div class="elem">
					<a target="_blank" class="gplus" href="https://plus.google.com/share?url=http://www.descargavideos.tv/"></a>
				</div>
			</div>
		</div>
	</div>

	<div id="subir">Subir</div>

	<div id="contenido">
		<div class="menu_hueco">
			<div class="menu" id="menu_scroll">
				<a href="/" class="inicio"><?php echo TXT_MENU_INICIO?></a><a
				href="/faq#contenido" class="preguntas_frecuentes"><?php echo TXT_MENU_FAQ?></a><a
				target="_blank" href="http://descargavid.blogspot.com.es/" class="blog"><?php echo TXT_MENU_BLOG?></a><a
				href="/lab#contenido" class="lab"><?php echo TXT_MENU_LAB?></a><a
				href="/changelog#contenido" class="changelog"><?php echo TXT_MENU_CHANGELOG?></a><a
				href="/agradecimientos#contenido" class="agradecimientos"><?php echo TXT_MENU_AGRADECIMIENTOS?></a><a
				href="https://github.com/forestrf/Descargavideos" class="github">GitHub</a><a
				href="/contacta#contenido" class="contacta"><?php echo TXT_MENU_CONTACTA?></a>
			</div>
		</div>
		<div class="wrapp">
			<div class="interior">
				<?php imprimePagina($pag)?>
			</div>
		</div>
	</div>


	<div class="hueco_pie"></div>

	<div id="pie">
		Descargavideos.tv | 
		Code by <a target="_blank" href="http://andresleone.uni.me/"><b>Forest</b></a> - Design by <a target="_blank" href="http://www.fsdesign.es/"><b>FSdesign</b></a>
		
		<div class="derecha">
			<a href="/aviso_legal#contenido"><?php echo TXT_AVISO_LEGAL?></a>
		</div>
	</div>
</div>



<div id="preloader"></div>



<script src="/js/ordenes.min.js?10"></script>



<script>
setModoPic('<?php echo $modo?>');
function setModoPic(d){if(d==1){D.g('web').placeholder="<?php echo TXT_PEGA_URL_VIDEO?>";D.g('ayuda1txt').innerHTML="<?php echo TXT_COPIA_URL_VIDEO?>";D.g('ayuda2txt').innerHTML="<?php echo TXT_BUSCA_URL_VIDEO?>";}else{D.g('web').placeholder="<?php echo TXT_BUSCAR_CANCION?>";D.g('ayuda1txt').innerHTML="<?php echo TXT_ESCRIBE_NOMBRE_CANCION?>";D.g('ayuda2txt').innerHTML="<?php echo TXT_BUSCA_CANCION?>";}}

<?php if(defined('HAY_RESULTADO')){ ?>
	scrollTo(D.g('formCalculador'), 20);
<?php } ?>

ga('send', 'event', "Interfaz modo","<?php echo $css_modo_cookie;?>");
var adblock=true;
</script>
<script src="/advertisement.js"></script>
<script>ga('send', 'event', "Adblock escritorio", adblock?"Con Adblock":"Sin Adblock");</script>



</body>
</html>