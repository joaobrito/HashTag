
<div class="jumbotron">
	<div class="row">
		<div class="col-md-6">
			<h2>{{post.getUser().getUsername()}}</h2>
			<h4>{{post.getCaption().getText()}}</h4>
			<img src={{post.getImage().getLowResolution()}}>
		</div>
		<div class="col-md-6">
			<h2>Comments - [{{post.getCommentCount()}}]</h2>
			{% for comment in post.getComments() %}
				<p>{{comment.getUser().getUsername() ~ " said: " ~ comment.getText() }}</p>
			{% endfor %}
		</div>
	</div>
</div>

