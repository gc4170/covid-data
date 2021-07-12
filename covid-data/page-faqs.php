<div class="mb-6 image_full" style="background: #f8f6cf;">
	<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-header.png" width="" height="" alt="" style="margin-bottom: -8px;margin-top: 20px;" class="is-hidden-mobile"/>
	<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-header-mobile.png" width="" height="" alt="" style="margin-bottom: -8px;margin-top: 20px;width: 100%;" class="is-hidden-tablet"/>
</div>

<div class="container">
	<div class="columns preguntas has-text-centered pt-0-mobile mt-0-mobile p-5  pr-0-mobile pl-0-mobile">
		<div class="column info has-text-centered" >
			<h2 class="has-text-centered">¿Qué vacunas se aplican en Argentina? </h2>
			<p class="px-5 has-text-centered">En Argentina, y en el mundo, se está desarrollando un plan de vacunación sin precedentes en la historia. La velocidad del desarrollo de las vacunas y la urgencia de inmunizar a las poblaciones para combatir el virus del COVID-19 son desafíos inéditos y generan muchas preguntas. En este contexto es importante evitar la desinformación. Por eso hicimos esta guía de preguntas y respuestas.</b> </p>
		</div>
	</div>

	<div class="columns is-multiline preguntas  p-5 has-text-centered">

		<?php
		/* Start the Loop */
		global $post;
	    $args = array( 
	    	'numberposts' => -1,
	    	'post_status' => 'publish', 
	    	'orderby' => 'menu_order', 
	    	'order' => 'ASC',  
	    	'category_name' => 'especial-vacunas' 
	    );
	    $posts = get_posts( $args );
	    // var_dump($posts);
	    foreach( $posts as $post ): setup_postdata($post); 
		?>
			<div class="column is-4 p-4   card-equal-height ">
				<div class="shadow ">
					<a href="<?php the_permalink(); ?>">
					<?php echo picture_image('full', 'medium', 'medium', 'medium', 'is-16by9', 'is-bordeado');?>
					<h2 class="p-5 card-content"><?php the_title()?></h2>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="columns formulario mb-5 mt-5">
		<div class="column is-one-third p-0 pr-1" style="background: url('<?php echo get_template_directory_uri(); ?>/covid-data/img/sugerencias_bg_fodo.png') repeat-x">
			<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/sugerencias_bg.png" width="" height="" alt="" />
		</div>
		<div class="column bg_gris p-6">

			<?php
			if(isset($_POST['pregunta'])) {
				$fp = fopen(dirname(__FILE__) . '/covid-saber-mas.txt', 'a+');
				fwrite($fp, $_POST['pregunta'].PHP_EOL);
				fclose($fp);
				echo '<h2>Gracias por su participación</h2>';
			}else{ ?>
				<h2>¿Qué más te gustaría saber?</h2>
				<form method="post" action="" class="">
					<textarea name="pregunta" class="mt-5 p-5" placeholder="Ej: Datos sobre..." required="required"></textarea><br />
					<input type="submit" class="submit mt-5 button is-bg-violet" value="Enviar">
				</form>
			<?php }?>
		</div>
		
	</div>

</div>