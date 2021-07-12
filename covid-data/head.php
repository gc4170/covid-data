
<div class="columns has-text-centered">
	<div class="column ">
		<div class="especial ">COVID 19</div>
		<h1 class=" mb-4-mobile has-text-centered"><?php the_title()?></h1>
		<p class=" has-text-centered">Lo que necesitás saber sobre la vacunación en <b>AM 750</b></p>
	</div>
</div>

<?php global $wp; 


if(isset($_GET["sec"])){
	$section = $_GET['sec'];
}else{
	$section = "datos";
}
?>

<div class="covid-menu tabs is-centered">
  <ul>
  	<li class="<?php if($section=='vacunas'){echo 'is-active';}?> menu-items">
    	<a href="<?php echo home_url( $wp->request )?>?sec=vacunas" class="has-text-centered" >
	   	 	<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_3.png" width="80" height="" alt="" style="" class=""/>
			Tipos de vacunas
	  	</a>
    </li>
    <li class="<?php if($section=='datos'){echo 'is-active';}?> menu-items">
		<a href="<?php echo home_url( $wp->request )?>?sec=datos" class="has-text-centered">
			<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_1.png" width="80" height="" alt="" style="" class=""/>
			Datos
	  	</a>
    </li>
    <li class="<?php if($section=='preguntas'){echo 'is-active';}?> menu-items">
    	<a href="<?php echo home_url( $wp->request )?>?sec=preguntas" class="has-text-centered" >
	   	 	<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-btn_2.png" width="80" height="" alt="" style="" class=""/>
			Preguntas<br/>Frecuentes
	  	</a>
    </li>
    
  </ul>
</div>

	