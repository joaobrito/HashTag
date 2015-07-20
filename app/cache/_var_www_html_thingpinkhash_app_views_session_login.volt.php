
<div class='center'>
	

	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tbody>
					<tr>
						<?php echo $this->tag->form(array('login')); ?>
						<td><?php echo $form->render('username'); ?>
						<?php echo $form->render('password'); ?>
						<?php echo $form->render('submit'); ?></td>
						<?php echo $this->tag->endform(); ?>
					</tr>
					<tr><td><a href=<?php echo $fbUrl; ?>>Login with Facebook</a></td></tr>
					<tr><td><a href=<?php echo $instaUrl; ?>>Login with Instagram</a></td></tr>
				</tbody>
			</table>
		</div>
	</div>


