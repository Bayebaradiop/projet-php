<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php
if (isset($_GET['age'])) {
    $age=$_GET["age"];
    $cp=$_GET["cp"];
    $ci=$_GET["ci"];
    $tab=[];
    for ($i=$age; $i <=1000 ; $i++) { 
        $cpt=0;
        for ($j=1; $j <=$i ; $j++) { 
            if($i%$j==0){
                $cpt++;
            }
        }
        if($cpt==2){
            $tab[]=$i;
        }
    }
    $nombreLigne=intval(count($tab)/10);
    $restant=count($tab)%10;
    var_dump($tab);
}
    unset($_GET['envoyer']);
  
?>
<div class="card col-md-6 offset-3 mt-5">
        <div class="card-header">Formulaire D'inscription</div>
        <div class="card-body">
            <form action="" method="GET" >
                <label for="">Nom:</label>
                <input type="text" class="form-control" name="nom" value="<?=  isset($_GET['nom'])? $_GET['nom']: ''?>">
                <br>
                <label for="">Prenom:</label>
                <input type="text" class="form-control"  name="prenom" value="<?=  isset($_GET['prenom'])? $_GET['prenom']: ''?>">
                <br>
                <label for="">Age:</label>
                <input type="text" class="form-control" name="age" value="<?=  isset($_GET['age'])? $_GET['age']: ''?>" >
                <br>
                <label for="">Couleur Paire:</label>
                <select name="cp" id="" class="form-control">
                    <option value="green" selected>Vert</option>
                    <option value="red">Rouge</option>
                    <option value="orange">Orange</option>
                </select>
                <br>
                <label for="">Couleur Impaire:</label>
                <select name="ci" id="" class="form-control">
                    <option value="green">Vert</option>
                    <option value="red" selected>Rouge</option>
                    <option value="orange">Orange</option>
                </select>
                <br>
                <label for="">Choix:</label>
                <input type="radio" name=choix value="ligne"> Ligne
                <input type="radio" name=choix value="colone">Colone
                <br>
                <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
                <button type="reset" class="btn btn-danger" name="annuler">Annuler</button>
            </form>
        </div>
</div>

<ul>
    <?php foreach ($_GET as $key => $value): ?>
    <li><?php  echo $key.":".$value  ?></li>
    <?php  endforeach ?> 
</ul>
        <?php if (isset($_GET['age'])):?>
            <table class="table table-striped">
                <?php
                $cpt=0;
                for ($i=0; $i < $nombreLigne ; $i++) :   ?>
                    <tr style="background-color:<?php 
                    
                    
                    ?>">    
                            <?php for ($j=0; $j < 10 ; $j++) :   ?>
                                <td style="background-color:<?php echo ($j%2==0)?$cp:$ci ?>"> <?= $tab[$cpt] ; $cpt++; ?></td>
                            <?php endfor ?>
                    </tr>
                <?php endfor ?>
                <tr>
                    <?php for ($j=0; $j < $restant ; $j++) :   ?>
                    <td style="background-color:<?php echo ($j%2==0)?$cp:$ci ?>"> <?php echo $tab[$cpt] ; $cpt++; ?></td>
                    <?php endfor ?>           
                </tr>
            </table>
      <?php endif ?>
</body>
</html>