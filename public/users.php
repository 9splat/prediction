<?php
	require_once '../vendor/autoload.php';

	$userObj = new App\User();
	$users = $userObj->getAll();

?>
<html>
	<head>
		<title>User List</title>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>User List</h1>
				<table class="table">
					<tr>
						<td>Id</td>
						<td>First Name</td>
						<td>Last Name</td>
					</tr>
					<?php foreach($users as $user){ ?>
					<tr>
						<td><?php echo $user->getId(); ?></td>
						<td><?php echo $user->getFirstName(); ?></td>
						<td><?php echo $user->getLastName(); ?></td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</body>
</html>