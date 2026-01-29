<?php require 'partials/head.php'; ?>

	<div>
		<p>Welcome!</p>
		<a href="/claims">
			Show claims
		</a>
	</div>
<?php if ($_SESSION['user'] ?? false) { ?>
	<div>
		<a href="/login">
			Login
		</a>
	</div>
<?php } else { ?>
	<div>
		<a href="/register">
			Create account!
		</a>
	</div>
<?php }  ?>


<?php require 'partials/footer.php'; ?>