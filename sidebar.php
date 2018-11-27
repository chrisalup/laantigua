                            
<!-- SIDEBAR CONTENT -->
<?php if (is_active_sidebar('sidebar')):?>
		<div class="inner-nav"> 
		<?php 
			/* inner navigation */
			wp_nav_menu( array(
			'menu' => 'main-menu',
			'depth' => 3,
			'container' => false,
			'menu_class' => 'menu'));
		?>
		</div>
        <?php dynamic_sidebar('sidebar'); ?>
<?php endif;?> 
<!-- END SIDEBAR CONTENT -->
<?php if (is_active_sidebar('sidebar_news')):?>
	<div class="sidebar-a">
		<?php dynamic_sidebar('sidebar_news'); ?>
	</div>
<?php endif;?>		
<?php if (is_active_sidebar('sidebar_events')):?>
	<div class="sidebar-b">
		<div class="sidebar-b">
			<div class="content-event">
				<?php dynamic_sidebar('sidebar_events'); ?>
			</div>
		</div>
	</div>
<?php endif;?>	
