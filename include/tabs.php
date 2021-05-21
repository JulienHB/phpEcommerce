<?php
$categories=["croquettes","produits","sanitaires","accessoires","jouets","scaphandres"];
    //print_r($categories);
    $categories2=array(
        array('nom'=>"croquettes",'Description'=>"Trucs secs qui se mangent avec des odeurs plus ou moins agréables",'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.ooreka.fr%2Fpublic%2Fimage%2Fcroquette-chien-main-12595107.jpg&f=1&nofb=1"),
        array('nom'=>"produits sanitaires",'Description'=>"Il semblerait que l'hygiène soit utile...",'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fshop-cdn-m.shpp.ext.zooplus.io%2Fbilder%2Fdentifrice%2Fbeaphar%2Fpour%2Fchien%2Fet%2Fchat%2F0%2F400%2F46320_pla_beaphar_zahnpasta_hs_01_0.jpg&f=1&nofb=1"),
        array('nom'=>"accessoires",'Description'=>"Tout ce qui peut être utile et plus encore",'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fdogetcat.fr%2F45-large_default%2F1m50-laisse-pour-chien-en-nylon-reglable-de-haute-qualite-reflechissant-150cm-pour-grands-ou-moyens-chiens.jpg&f=1&nofb=1"),
        array('nom'=>"jouets",'Description'=>"Quelque soit vos activités tous vos souhaits seront exaucés",'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.9Mhr0o61l152aiZoRtQTygAAAA%26pid%3DApi&f=1"),
        array('nom'=>"scaphandres",'Description'=>"Très utile pour explorer la stratosphère ou le fond de la piscine",'image'=>"https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fi76.servimg.com%2Fu%2Ff76%2F18%2F12%2F74%2F92%2Fchien_11.jpg&f=1&nofb=1")
    );
    $produits=array(
        array('designation'=>"croquettes au poulet",'prixHT'=>19.98,'description'=>"Trucs sec qui se mangent au pollo!!",'TVA'=>1.2,'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.8QNeS1wJ9jrNey3a18AWmAHaE8%26pid%3DApi&f=1"),
        array('designation'=>"croquettes au saumon",'prixHT'=>48.10,'description'=>"Mon préféré :D",'TVA'=>"",'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.rqzw_tsntvKA94vUW-CbVgHaF9%26pid%3DApi&f=1"),
        array('designation'=>"croquettes au sézame",'prixHT'=>27.43,'description'=>"Bein ui meme chez les ienchs y a des veggies :'(",'TVA'=>1.2,'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.-SwpYnje5TjegbitEgHwEQHaE8%26pid%3DApi&f=1"),
        array('designation'=>"croquettes banales",'prixHT'=>34.12,'description'=>"Auncun interet, passez votre chemin",'TVA'=>1.1,'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.mFXvNf-IBcpmV_WIDjd6DQHaD2%26pid%3DApi&f=1"),
        array('designation'=>"croquettes communiste",'prixHT'=>16.47,'description'=>"La moins cher au nord de Caracas mais avec une TVA de tarba oblige #premiersdecordée",'TVA'=>1.5,'image'=>"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.2cCJad23o9EO6HqPSNEDUAHaEK%26pid%3DApi&f=1"),
    );
//var_dump($produits);

//modif tableau produits pour ajout categories
$produits[0]['categorie']=array('principale'=>"croquettes", 'secondaire'=>"jouets");
$produits[1]['categorie']=array('principale'=>"croquettes", 'secondaire'=>"accessoires");
$produits[2]['categorie']=array('principale'=>"croquettes", 'secondaire'=>"produits sanitaires");
$produits[3]['categorie']=array('principale'=>"croquettes", 'secondaire'=>"jouets");
$produits[4]['categorie']=array('principale'=>"croquettes", 'secondaire'=>"scaphandres");
//var_dump($produits);

//création du tableau panier
$basket=[];


//ajout id sur tableau catégories 2

foreach ($categories2 as $key => $value) {
    $categories2[$key]['id']="id$key";
}

//ajout id tab catégorie dans tab produits
foreach ($produits as $keyProduits => $valueProduits) {
   foreach ($categories2 as $keyCategorie => $valueCategorie) {    
       if($valueProduits['categorie']['principale']==$valueCategorie['nom']){
        $produits[$keyProduits]['fk1']=$valueCategorie['id'];
       }
       if($valueProduits['categorie']['secondaire']==$valueCategorie['nom']){
        $produits[$keyProduits]['fk2']=$valueCategorie['id'];
       }
   }
}