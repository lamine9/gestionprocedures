<?php
session_start();
$demandes = $_SESSION['demandes'];
unset($_SESSION['demandes']);

include "header.php";
?>
    <h1 class="mt-5">Liste des procédures</h1>
    <a href="../controllers/demande.php?action=add" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
    </a>
<table id="myTable" class="display">
    <thead>
    <tr>
        <th>Titre</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($demandes as $demande): ?>
        <tr>
            <td> <?= $demande->title ?> </td>
            <td> <?= $demande->description ?> </td>
            <td>Modifier / Supprimer</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php
include "footer.php";
?>
