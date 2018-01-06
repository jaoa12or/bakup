<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name ="viewport" content="width=device-width">
	<title>My blog</title>
	<link rel="stylesheet" type="text/css" href="<?php  bloginfo('stylesheet_url')?>"><!-- incluye la hoja de estilos principal-->
	<link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_url')?>/css/responsive.css"><!--incluye cualquier archivo sea css o js-->
	<link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_url')?>/css/reset.css">
	<script src= "https://code.jquery.com/jquery-latest.min.js"></script>
	
	<script src="<?php  bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script>
    $(function(){
      $("#slideshow").slidesjs({
       height: 300,
       navigation: false
      });
    });
  </script>
  <?php wp_head();?>
</head>
<body>


    <header>
        
        <div id="logo">
            <p>Mi tema</p>
            <span>por Alejo</span>
        </div>
        <nav>
           <!-- se elimina el código estático del menú para convertirlo en un menú dinámico-->
            <?php wp_nav_menu(
            array(
            'container' => false,
            'items_wrap' => '<ul id = "menu-top">%3$s</ul>',
            'theme_location' => 'menu'
            
            ));
            
            
            
            ?>
        </nav>        
        </header>
        
       
      
     
    
   
  
 


























