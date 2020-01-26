<form action="/mvc2/?page=edit" method="post" class="mt-5">

<input type="hidden" name="id" id="id" value="<?= $article[0]["id"] ?>">

<div class="form-group">
    <label for="title">Titre: </label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" required value="<?= $article[0]["title"] ?>">
</div>
<div class="form-group">
    <label for="text">Description: </label>
    <textarea name="text" id="text" class="form-control" rows="5" placeholder="Description" required><?= $article[0]["text"] ?></textarea>
</div>

<div class="form-group">
    <label for="category">Catégorie: </label>
    <input type="text" name="category" id="category" class="form-control" placeholder="Catégorie"
    required value="<?= $article[0]["category"] ?>"></input>
</div>

<div class="form-group">
    <label for="date">Date: </label>
    <input type="date" id="date" name="date" class="form-control" required value="<?= $article[0]["date"] ?>">
</div>

<button type="submit" class="btn btn-success" name="update_article" id="update_article">Modifier l'article !</button>

</form>