<?php require 'partials/head.php'; ?>

	<div class="container">
		<form action="/claim-create" class="form-container" method="post">
			<label for="description">Описание</label>
			<textarea name="description" id="" cols="30" rows="10" placeholder="put you`re description there"><?= $_POST['description'] ?? '' ?></textarea>
			<?php if (isset($errors['description'])) { ?>
				<p style="color: red">
					<?= $errors['description'] ?>
				</p>
			<?php } ?>
			<button class="submit">Отправить</button>
		</form>
	</div>
<?php require 'partials/footer.php'; ?>