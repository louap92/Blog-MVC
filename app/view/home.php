<?php $title = "Blog - Accueil" ?>

<div class="container-fluid">
    <h1>Accueil</h1>
    <a href="/mvc2/?page=create" class="btn btn-success">Créer un nouvel article!</a>
    <br>

    <?php foreach ($articles as $article): ?>
    <h2><?= $article["title"] ?></h2>
    <p><?= $article["text"]?></p>
    <p style="font-size:8px;">Crée le <?= $article["date"]?></p>
    <a href="/mvc2/?page=show&id=<?= $article["id"] ?>" class="btn btn-info">Développez =></a>
    <a href="/mvc2/?page=edit&id=<?= $article["id"] ?>" class="btn btn-secondary">Modifier =></a>
    <a href="/mvc2/?page=delete&id=<?= $article["id"] ?>" class="btn btn-danger">Supprimer l'article =></a>
    <hr>
    <?php endforeach; ?>    
</div>