<!doctype html>
<html lang="en">

<head>
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

	<main role="main" class="container">
		<div class="jumbotron">
			<h1>Email Gateway</h1>
			<p class="lead">Digunakan untuk mengirim informasi promo dan event.</p>
			<form class="form-group" method="post" action="template/module/emailgateway/testemail.php">
				<div class="form-group">
					<label>Subject Email</label>
					<input class="form-control" name="subjek" required />
				</div>
				<div class="form-group">
					<label>Isi Pesan</label>
					<td><textarea class="form-control" name="pesan" cols="32" rows="5" required /> </textarea></td>
				</div>
				<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=a2ejttzrhha82pctej9grrrur846etltwrzxbfpn0nvrozrn"></script>
				<script>
					tinymce.init({
						selector: 'textarea'
					});
				</script>
				<input type="submit" class="btn btn-success" value="Send Emails" name="send">
			</form>
		</div>
	</main>
</body>

</html>
