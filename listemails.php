<?php foreach($users as $user): ?>
<p>
	<?php echo htmlspecialchars($user, ENT_QUOTES, 'UTF-8'); ?>
</p>
<?php endforeach; ?>
