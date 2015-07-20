
<div class='center'>
	

	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tbody>
					<tr>
						{{ form('login') }}
						<td>{{ form.render('username') }}
						{{ form.render('password') }}
						{{ form.render('submit') }}</td>
						{{ endform() }}
					</tr>
					<tr><td><a href={{fbUrl}}>Login with Facebook</a></td></tr>
					<tr><td><a href={{instaUrl}}>Login with Instagram</a></td></tr>
				</tbody>
			</table>
		</div>
	</div>


