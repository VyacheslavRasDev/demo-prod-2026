<?php require 'partials/head.php'; ?>
	<div>
		<p>Welcome!</p>
	</div>
<?php if ($_SESSION['user'] ?? false) { ?>
	<div>
		<a href="/claims">
			Show claims
		</a>
	</div>
	<div>
		<p>Hi, <?= $_SESSION['user']['name'] ?></p>
	</div>
	<form action="/session" method="post">
		<input type="hidden" name="_method" value="DELETE">
		<button type="submit">Log out</button>
	</form>
<?php } else { ?>
	<div>
		<a href="/register">
			Register
		</a>
	</div>
	<div>
		<a href="/session">
			Login
		</a>
	</div>
<?php } ?>


<?php require 'partials/footer.php'; ?>