<?php get_header(); ?>

<section class="a">
	<?php if (is_active_sidebar('home_a_top')):?>
	<div class="a-top">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('home_a_top'); ?>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php if (is_active_sidebar('home_a_bottom')):?>
	<div class="a-bottom">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('home_a_bottom'); ?>
			</div>
		</div>
	</div>
	<?php endif;?>
</section>
<?php if (is_active_sidebar('home_b')):?>
<div class="b">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar('home_b'); ?>
		</div>
	</div>
</div>
<?php endif;?>
<section class="c">
	<div class="container">
		<div class="row">
			<h2><span>¡Agrega lo que mas te guste y programa tu pedido ahora!</span></h2>
			<?php if (is_active_sidebar('home_c')):?>
			<div class="col-sm-8">
				<div class="menu-info">
				 <ul class="nav-menu-info">
				  <li><a href="#menu">Menu</a></li>
				  <li><a href="#informacion">Información</a></li>
				  <li><a href="#comments">Comentarios</a></li>
				 </ul>
				 <div class="content-menu-info">
				  <div id="menu">
				  
				  <!-- Nav tabs 
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#comidas" aria-controls="comidas" role="tab" data-toggle="tab">Menú</a></li>
				    <li role="presentation"><a href="#informacion" aria-controls="information" role="tab" data-toggle="tab">Información</a></li>
				  </ul>-->

				  <!-- Tab panes
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="comidas">-->
				    	<form action="#">
				    		<select name="tipos" id="tipos">
				    			<option value="Seleccione">Seleccione</option>
								<option value="#todos">Todos los Productos</option>
				    			<option value="#pizzas">Pizzas</option>
				    			<option value="#calzones">Calzones</option>
								<option value="#empanadas">Empanadas</option>
								<option value="#faina">Fainá</option>
								<option value="#bebidas">Bebidas</option>
				    		</select>
				    	</form>
				    	<div class="banner-wrap">
				    		<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="carne">
				    	</div>
						<?php dynamic_sidebar('home_c'); ?>
				    </div>
					<div id="informacion">
				    <!--<div role="tabpanel" class="tab-pane fade" id="informacion">-->
						<?php dynamic_sidebar('home_c_bottom'); ?>
					
				    	<!--<iframe src="https://www.google.com/maps/d/embed?mid=zsCsjL6Qp13w.koLG4_KRGKn8" width="640" height="480"></iframe>-->
				    </div>
				    <div id="comments">
					<?php dynamic_sidebar('home_cm_bottom'); ?>

				     </div>
				     
				  </div>

				</div>
			</div>
			<?php endif; ?>
			<div class="col-sm-4 right">
				<?php if (is_active_sidebar('sidebar')):?>
				<div class="useful-info">
					<?php dynamic_sidebar('sidebar'); ?>
				</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('cart')):?>
				<div class="pedidos">
					<?php dynamic_sidebar('cart'); ?>
				</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('share_this')):?>
				<div class="social">
					<?php dynamic_sidebar('share_this'); ?>
				</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('sidebar_banner')):?>
				<div class="promos">
					<?php dynamic_sidebar('sidebar_banner'); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
	

<?php get_footer(); ?>
