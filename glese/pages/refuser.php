
<div class="card">
    <div class="card-header">
        <span class="h4">Listes des candidat refuser</span>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Profil</th>
                    <th>Action</th>
                    <th>poste refuser</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($refuser as $key => $emp) { ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?=$emp['prenom'] ?></td>
                        <td><?=$emp['nom'] ?></td>
                        <td><?=$emp['tel'] ?></td>
                        <td><?=$emp['email'] ?></td>
                        <td><?=$emp['poste'] ?></td>
                        <td><?=$emp['nomProfil'] ?></td>
                        <td><?=$emp['poste'] ?></td>

                        <td>
                        <a <?=$emp['ficherCV'] != "" ? "" : "hidden"?> target="_blank" class="btn btn-sm btn-info text-white fw-bold" href="http://localhost/glese/public/document/<?=$emp['ficherCV']?>" >Voir CV</a> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>