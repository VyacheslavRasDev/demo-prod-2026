<?php require 'view/partials/head.php'; ?>
	<div>
		<ul>
			<?php foreach ($claims as $claim) { ?>
				<li>
					<a href="/claim?id=<?=$claim['id']?>">
						<?= htmlspecialchars($claim['description']); ?>
					</a>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div>
		<a href="/claims/create">
			Create new claim
		</a>
	</div>
<div>
	<a href="/">On main page</a>
</div>
<?php require 'view/partials/footer.php'; ?>