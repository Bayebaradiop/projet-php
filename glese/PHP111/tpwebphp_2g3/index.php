<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container">
<?php
    if(isset($_GET["nbr"])){
        $nombre=$_GET["nbr"];
    }
    $text="";
    if(isset($_POST["envoyer"])){
        $text=$text."<ol>";
        $cpt=0;
       foreach ($_POST as $key => $value) {
           if($key!="envoyer"){
            $text=$text."<li> $key : $value </li>";
           }
           if (strchr($value[0],'M')!=NULL && strchr($value[strlen($value)-1],'e')!=NULL){
               $cpt++;
            }
       }
       $text=$text."</ol>";
    }
?>
<div class="card col-md-6 offset-2 mt-5">
        <div class="card-header">JEUX</div>
        <div class="card-body">
            <form action="" method="GET" >
                    <label for="">Nombre de champs</label>
                    <input type="number" name="nbr"  class="form-control">
                    <br>
                    <button type="submit" class="btn btn-success" name="creer">Creer</button>
            </form>
            <br>
            <?php if(isset($_GET["nbr"])) : ?>
            <form action="" method="POST">
                <?php for ($i=1; $i <=$nombre ; $i++): ?>
               <label for="">champ<?=$i?>:</label>
                <input type="text" name="champ<?=$i?>" class="form-control">
                <br>
                <?php endfor ?>
                <br>
                <button type="submit" class="btn btn-success" name="envoyer">Envoyer</button>
                <button type="reset" class="btn btn-danger" name="annuler">Annuler</button>
            </form>
         
        
           <?php if(isset($_POST["envoyer"])){
            echo"<br>";
           echo $text; 
           echo "Le nombre de mot commencant par 'M' est ce termine par 'e' est: $cpt";
           foreach($_POST as $key => $champ){
                if($key=="champ1"){
                    $max=$champ ;
                }else{
                    if(strlen($champ)>strlen($max))
                    $max=$champ;
                }
           }
           echo"<br>";
           echo"Le mot le plus long est $max";
        }
           ?>

        </div>
</div>


 
      
</body>
</html>