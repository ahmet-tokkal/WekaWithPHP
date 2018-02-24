<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Protein Analysis</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<content>
		<div class="container">
			<div class="jumbotron">
				<form id="form1" method="post">
					<div class="row">
						<div class="col">
							<div class="form-group">
								<label for="hpSequence">HP Sequence</label>
								<textarea class="form-control" id="hpSequence" rows="3"></textarea>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="ppSequence">PP Sequence</label>
								<textarea class="form-control" id="ppSequence" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<select class="form-control" id="encoding">
								<option>AAC</option>
								<option>AAP</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control" id="model">
								<option>Naive Bayes</option>
								<option>Bayes Net</option>
								<option>Random Forest</option>
							</select>
						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-primary btn-block" onclick="start()">Start</button>
						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-dark btn-block" onclick="resetForm()">Reset</button>
						</div>
					</div>
				</form>
				<div class="row sonuc">
					<div class="col">
						<div class="alert invisible" id="sonucPozitif" role="alert">
						</div>
						<!--
						<div class="alert alert-danger invisible" id="sonucNegatif" role="alert">
							There isn't interaction !
						</div>
					-->
					</div>
				</div>
			</div>
		</div>
	</content>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>