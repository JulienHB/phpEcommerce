<?php 
    include 'include/tabs.php';
    include 'include/function.php';
    
    $categories2=AjoutCat($categories2,"test","bla bla bla","img/trop cool !!");

    $basket=addBasket($produits,"0","5");
    $basket=addBasket($produits,"1","4");
    $basket=addBasket($produits,"2","3");
    var_dump($basket);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>TD 1</title>
</head>
<body>
  
    <div class="container-fluid">
        <div class="row">
            <?php $longueur=count($categories2);
            for($key=0; $key<$longueur; $key++){
            ?><div class="col-2">
            <h2><a href="index.php?id=<?php echo($categories2[$key]['id']) ?>"><?php echo $categories2[$key]["nom"]?></a></h2>
            <p><?php echo($categories2[$key]["Description"]);?></p>
            <img src="<?php echo($categories2[$key]["image"]); ?>" class="img-fluid" alt="<?php echo($categories2[$key]["nom"]);?>">
            </div><?php    
            }?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php //creation produit par cat
                if(!empty($_GET)){                
                    foreach ($produits as $key => $value) {
                        if($value['fk2']==$_GET["id"]){
                        ?><div class="col-3">
                            <h2><?php echo strtoupper($value["designation"]);?></h2>
                            <p><?php echo $value["description"];?></p>
                            <p>Prix : <?php echo TVA($value["prixHT"],$value["TVA"])?>€ TTC</p>
                            <img src="<?php echo $value["image"]; ?>" class="img-fluid" alt="<?php echo($value['categorie']['principale']);?>">
                        </div><?php  
                        }                                
                    }
                }?>
        </div>
    </div>



<?php /*
    <div class="container-fluid mt-5">
        <div class="row">         
            <?php
            foreach ($produits as $key => $value) {
                ?><div class="col-3">
                    <h2><?php echo strtoupper($value["designation"]);?></h2>
                    <a href="index.php?id=<?php echo($value['fk2']) ?>">Afficher tous <?php echo($value['categorie']['secondaire']) ?></a>
                    <p><?php echo $value["description"];;?></p>
                    <p>Prix : <?php echo TVA($value["prixHT"],$value["TVA"])?>€ TTC</p>
                    <img src="<?php echo $value["image"]; ?>" class="img-fluid" alt="<?php echo($value['categorie']['principale']);?>">
                  </div><?php              
            }?>
        </div>
    </div>

 */?>   

</body>
</html>