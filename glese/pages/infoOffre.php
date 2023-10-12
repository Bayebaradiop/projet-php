<div class="card">
    <div class="card-header">
        <span class="h4">Detail Offre
        </span>
    </div>
    <div class="card-body">
        <div class="row  mt-2">
            <span class="fw-bold">Description : </span>
            <p ><?=$offreDetail['description']?></p>
            <span class="fw-bold">Competences : </span>
            <p><?=$offreDetail['competence']?></p>
        </div>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listeCandidatOffre as $key => $emp){ ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $emp['prenom']?></td>
                        <td><?= $emp['nom']?></td>
                        <td><?= $emp['tel']?></td>
                        <td><?= $emp['email']?></td>
                        <td><?= $emp['etatC']?></td>
                        <td>
                            <a <?=$emp['ficherCV'] != "" ? "" : "hidden"?> class="btn btn-sm btn-info text-white fw-bold" href="http://localhost/glese/public/document/<?=$emp['ficherCV']?>" >Voir CV</a>

                            <a  href="?idOffre=<?=$offreDetail['idOffre']?>&etatC=1&idUser=<?=$emp['idUser']?>" <?=$emp['ficherCV'] != "" ? "" : "hidden"?> class="btn btn-sm btn-warning text-white fw-bold" name="accepter" >Accepter</a>

                            <a   href="?idOffre=<?=$offreDetail['idOffre']?>&etatC=0&idUser=<?=$emp['idUser']?>" <?=$emp['ficherCV'] != "" ? "" : "hidden"?> class="btn btn-sm btn-danger text-white fw-bold"  name="refuser" >Refuser</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <td><a class="btn btn-info btn-sm text-white" href="?page=infoOffre&action=valider&idOffre=<?=$offreDetail['idOffre']?>">candidat valider</td>
            <td><a class="btn btn-info btn-sm text-white" href="?page=infoOffre&action=entente&idOffre=<?=$offreDetail['idOffre']?>">candidat en entente</td>
            <td><a class="btn btn-info btn-sm text-white" href="?page=infoOffre&action=refuser&idOffre=<?=$offreDetail['idOffre']?>">candidats  refuser</td>
        </table>
        </div>
    </div>
</div>