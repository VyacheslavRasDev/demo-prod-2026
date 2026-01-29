<?php require 'view/partials/head.php'; ?>
	<div>
		<form action="/register" method="post" class="form-container">
			<label for="name">Name</label>
			<input type="text" name="name" required>
			<p style="color: red">
				<?= $errors['name'] ?? '' ?>
			</p>
			<label for="age">Age</label>
			<input type="text" name="age" required>
			<p style="color: red">
				<?= $errors['age'] ?? '' ?>
			</p>
			<label for="email">Email</label>
			<input type="email" name="email" required>
			<p style="color: red">
				<?= $errors['email'] ?? '' ?>
			</p>
			<label for="password">Password</label>
			<input type="password" name="password" required>
			<p style="color: red">
				<?= $errors['password'] ?? '' ?>
			</p>
			<button type="submit">Create</button>
		</form>
	</div>
	<div>
		<a href="/">Back to main page</a>
	</div>

<?php require 'view/partials/footer.php'; ?>