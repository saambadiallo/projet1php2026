<div class="container">
        <a href="?action=addAssurance" class="btn btn-primary">Ajouter</a>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Libellé</th>
            <th>Montant</th>
            <th>Bonus</th>
            <th>Option1</th>
            <th>Option2</th>
        </tr>
        <?php foreach($liste as $a){?>
                <tr>
                    <td> <?php echo $a['id']?></td>
                    <td> <?php echo $a['libelle']?></td>
                    <td> <?php echo $a['montant']?></td>
                    <td> <?php echo $a['bonus']?></td>
                    <td><a href="?action=delete&id=<?php echo $a['id']?>"class="btn btn-danger">Supprimer</a> </td>           
                    <td><a href="?action=edit&id=<?= $a['id']?>"class="btn btn-primary">Modifier</a> </td>           
                </tr>
            
        <?php }?>
    </table>
</div>