    <div class="card">
    <div class="card-header">
        <span class="h4">TABLEAU DES CANDIDAT

        </span>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Poste</th>
                    <th>type</th>
                    <th>Date Offre</th>
                    <th>Nombre de Candidat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listeOfferPostuler as $key => $emp) { ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?=$emp['poste'] ?></td>
                        <td><?=$emp['typeOffre'] ?></td>
                        <td><?=$emp['dateOffre'] ?></td>
                        <td><?=$emp['nb'] ?></td>
                        
                        <td><a class="btn btn-info btn-sm text-white" href="?page=infoOffre&idOffre=<?=$emp['idOffre']?>">detail</td>
                    </tr>

                <?php
                    $poste[]=$emp['poste'];
                    $n[]=$emp['nb'];
            } ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Pie Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
   Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($poste) ?>,
        datasets: [{
        data:  <?php echo json_encode($n) ?>,
        backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
        }],
    },
    });
</script>