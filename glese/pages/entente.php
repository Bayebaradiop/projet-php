<div class="card">
    <div class="card-header">
        <span class="h4">Liste des candidat en entente
        </span>
    </div>
    <div class="card-body">
        <div class="row mt-2">
            <h4>Listes des Candidat</h4>
            <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Etat</th>
                    <th>Poste e entente</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($entente as $key => $emp){ ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $emp['prenom']?></td>
                        <td><?= $emp['nom']?></td>
                        <td><?= $emp['tel']?></td>
                        <td><?= $emp['email']?></td>
                        <td><?= $emp['poste']?></td>
                        <td><?= $emp['etatC']?></td>
                        <td>
                            <a <?=$emp['ficherCV'] != "" ? "" : "hidden"?> target="_blank" class="btn btn-sm btn-info text-white fw-bold" href="http://localhost/glese/public/document/<?=$emp['ficherCV']?>" >Voir CV</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>