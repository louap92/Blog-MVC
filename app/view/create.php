<div class="container-fluid">
<form action="/mvc2/?page=create" method="post" class="mt-5">

        <div class="form-group">
            <label for="title">Titre: </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="text">Description: </label>
            <textarea name="text" id="text" class="form-control" rows="5" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Catégorie: </label>
            <input type="text" name="category" id="category" class="form-control" placeholder="Catégorie"></input>
        </div>
        <div class="form-group">
            <label for="date">Date: </label>
            <input type="date" id="date" name="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-success" name="create_article" id="create_article">Ajouter l'article !</button>
        
    </form>
</div>