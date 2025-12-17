<div class="container">
        <h1>Modifiez ici </h1>
    <form action="?action=editAssurance&id=<?php echo $_GET['id']?>" method="post">
        <label for="libelle"> Libellé</label>
        <input type="text" name = "libelle" class="form-control">
        <label for="montant"> Montant</label>
        <input type="number" name = "montant" class="form-control">
        <label for="bonus"> Bonus</label>
        <input type="number" name = "bonus" class="form-control"><br>
        <button type="submit"class="btn btn-primary">Soumettre</button>

    </form>
</div>