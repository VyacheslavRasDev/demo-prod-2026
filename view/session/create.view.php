<?php require 'view/partials/head.php'; ?>
	<div>
		<form action="/session" method="post" class="form-container">
			<label for="email">Email</label>
			<input type="email" name="email" value="<?= $email ?? '' ?>" >
			<label for="password">Password</label>
			<input type="password" name="password" >
			<button type="submit">Log In</button>
			<?php if (isset($errors['email'])) { ?>
				<p><?= $errors['email'] ?></p>
			<?php } ?>

			<?php if (isset($errors['password'])) { ?>
				<p><?= $errors['password'] ?></p>
			<?php } ?>
		</form>
	</div>
	<div>
		<a href="/">Back to main page</a>
	</div>

<?php require 'view/partials/footer.php'; ?>