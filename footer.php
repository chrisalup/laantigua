	<!-- START FOOTER -->
	<footer class="footer">
	<div class="top">
		<div class="container">	
			<div class="row">
				<?php if (is_active_sidebar('footer_left')):?>
				<div class="col-md-3 left box-footer">
					<?php dynamic_sidebar('footer_left'); ?>
				</div>
				<?php endif;?>
				<?php if (is_active_sidebar('footer_mid_left')):?>
				<div class="col-md-2 center-left box-footer">
					<?php dynamic_sidebar('footer_mid_left'); ?>
					<?php 
						/* Primary navigation */
						wp_nav_menu( array(
						'menu' => 'main-menu',
						'depth' => 1,
						'container' => false,
						'walker' => new wp_bootstrap_navwalker()));
					?>
				</div>
				<?php endif;?>
				<?php if (is_active_sidebar('footer_mid_right')):?>
				<div class="col-md-4 center-right box-footer">
					<div class="sign-up-widget">
						<?php dynamic_sidebar('footer_mid_right'); ?>
					</div>
				</div>
				<?php endif;?>
				<?php if (is_active_sidebar('footer_right')):?>
				<div class="col-md-3 right box-footer">
					<?php dynamic_sidebar('footer_right'); ?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">	
			<div class="row copy-right">
					<p><i class="fa fa-copyright"></i> La Antigua Cocina | <?php echo date('Y'); ?> All Rights Reserved.<a href="http://geekgauchos.com/#skills" target="_blank">Website design</a> by <a href="http://geekgauchos.com">GeekGauchos</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>	
	<!-- END FOOTER -->
	
<!-- The Modal OUT of Delivery Area -->
<?php if (is_active_sidebar('notfound_modal')):?>
<div id="NotFoundModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span id="botonmodal1" class="close">×</span>
    <?php dynamic_sidebar('notfound_modal'); ?>
  </div>

</div>
<?php endif;?>

<!-- The Modal IN Delivery Area -->
<?php if (is_active_sidebar('found_modal')):?>
<div id="FoundModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span id="botonmodal2" class="close">×</span>
	<?php dynamic_sidebar('found_modal'); ?>
  </div>

</div>
<script>

//Agrego atributo de cambios al campo adress para validar si esta bien o no





var element =  document.getElementById("billing_store_field");
if (typeof(element) != 'undefined' && element != null)
{
  element.setAttribute("style", "visibility:hidden");
  document.getElementById("place_order").setAttribute("disabled", "true");

    var element = document.createElement("input");
	element.setAttribute("class", "button alt");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Validar");
    element.setAttribute("name", "button_validate");
	element.setAttribute("id", "button_validate");
	element.setAttribute("style", "margin-top:10px;");
	element.setAttribute("onclick", "validate_adress()");
    document.getElementById("billing_address_1_field").appendChild(element);

	if(getCookie("state")!="--"){
	var valor=getCookie("state");
	document.getElementById('button_validate').setAttribute("style", "display:none;");
	document.getElementById("billing_address_1").removeAttribute("placeholder");
	document.getElementById("billing_address_1").setAttribute("value",valor);
	document.getElementById("place_order").removeAttribute("disabled"); 
	
	
	}
	document.getElementById("billing_address_1").setAttribute("onfocus","document.getElementById('button_validate').setAttribute('style','display:block');document.getElementById('place_order').setAttribute('disabled', 'true');");
	
}



</script>
<?php endif;?>

    <?php wp_footer();
	$var_state=false;
	?>
	
</body>
</html>   


