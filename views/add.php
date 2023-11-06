<?php include "header.php"; ?>

<h1 class="mt-5">Ajouter une procédures</h1>
<form method="post" action="../controllers/demande.php">
    <input type="hidden" name="action" value="add">
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" name="title" class="form-control" id="title">
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
        <label for="description">Description</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php  include "footer.php"; ?>
