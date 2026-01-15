<div class="container">
        <h1>Modifiez ici </h1>
    <form action="?action=editAssurance" method="post">
        <input type="number" name="id" value ="<?= $assurance['id'] ?>" hidden>
        <label for="libelle"> Libellé</label>
        <input type="text" name = "libelle" class="form-control" value ="<?= $assurance['libelle'] ?>">
        <label for="montant"> Montant</label>
        <input type="number" name = "montant" class="form-control" value ="<?= $assurance['montant'] ?>">
        <label for="bonus"> Bonus</label>
        <input type="number" name = "bonus" class="form-control" value ="<?= $assurance['bonus'] ?>"><br>
        <button type="submit"class="btn btn-primary">Soumettre</button>

    </form>
</div>