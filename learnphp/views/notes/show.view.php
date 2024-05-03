<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<h2>
 Note
</h2>
<p>
    <a href="/notes">Go back...</a>
</p>
 <p><?= htmlspecialchars($note['body']) ?></p>

 <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button type="button" class="btn btn-danger">Delete</button>
        </form>

 <?php require base_path('views/partials/footer.php') ?>