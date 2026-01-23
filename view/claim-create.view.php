<?php require 'partials/head.php'; ?>

	<div class="container">
		<form action="/claim-create" class="form-container" method="post">
			<label for="payment_method">Описание</label>
			<textarea name="payment_method" id="" cols="30" rows="10"></textarea>
			<button class="submit">Отправить</button>
		</form>
	</div>
<?php require 'partials/footer.php'; ?>