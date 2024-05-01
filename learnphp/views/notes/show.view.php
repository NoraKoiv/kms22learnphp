<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
 Note
</h2>
<p>
    <a href="/notes">Go back...</a>
</p>
 <p><?= htmlspecialchars($note['body']) ?></p>

 <?php require base_path('views/partials/footer.php') ?>