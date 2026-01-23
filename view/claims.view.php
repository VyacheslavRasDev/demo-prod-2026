<?php require 'partials/head.php'; ?>
	<div>
		<ul>
			<?php foreach ($claims as $claim) { ?>
				<li>
					<a href="/claim?id=<?=$claim['id']?>">
						<?= $claim['payment_method']; ?>
					</a>
				</li>
			<?php } ?>
		</ul>
	</div>
<?php require 'partials/footer.php'; ?>