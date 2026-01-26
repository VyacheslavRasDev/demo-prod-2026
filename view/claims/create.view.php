<?php require 'view/partials/head.php'; ?>

	<div class="container">
		<form action="/claims" class="form-container" method="post">
			<label for="description">Описание</label>
			<textarea name="description" id="" cols="30" rows="10" placeholder="put you`re description there" ><?= $_POST['description'] ?? '' ?></textarea>
			<?php if (isset($errors['description'])) { ?>
				<p style="color: red">
					<?= $errors['description'] ?>
				</p>
			<?php } ?>
			<button class="submit">Отправить</button>
		</form>
		<div>
			<a href="/claims">Back to claims</a>
		</div>
	</div>
<?php require 'view/partials/footer.php'; ?>