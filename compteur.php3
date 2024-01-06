<?

//   P A R T I E     A D M I N I S T R A T I O N

/* */  /* */  /* */ /* */ /* */
/* */                    /* */
/* */ $temps="5";       /* Temps où le visiteur ne peut actualiser le compteur en secondes */
/* */ $type="c";    /* Type de compteur */
/* */ $dossier="images";/* Dossier où se trouvent les images*/
/* */                /* */
/* */  /* */  /* */  //
/* */ /* */ /* */ /* */ 


//   C O P Y R I G H T

//--------------------------------
//----- 123 compteur --------------
//---- par Mikael Chelli -----------
//---- Copyright 2001 ---------------
//--Si vous utilisez ce script -------
//--Merci d'adresser un mail à --------
//-----Mikael@zarma.net-----------------
//---------------------------------------



if($COMPTEURSIMPLE == "")

  {

  // Création d'un cookie

  @setcookie("COMPTEURSIMPLE", "oui", time()+$temps);

  // Ajouter 1 au compteur


  $fp = fopen("compteur.txt","r+"); // 1.On ouvre le fichier en lecture/écriture
  $nb = fgets($fp,11);       // 2.On récupère le nombre dans le fichier
  $nb++;                     // 3.On incrémente le nombre de visites (+1)
  fseek($fp,0);                     // 4.On se place en début de fichier
  fputs($fp,$nb);            // 5.On écrit dans le fichier le nouveau nb
  fclose($fp);                      // 6.On ferme le fichier

  // Afficher le résultat graphiquement

     // Nombres du compteur

  $n1=substr("$nb", 0,1);
  $n2=substr("$nb", 1,1);
  $n3=substr("$nb", 2,1);
  $n4=substr("$nb", 3,1);
  $n5=substr("$nb", 4,1);
  $n6=substr("$nb", 5,1);
  $n7=substr("$nb", 6,1);
  $n8=substr("$nb", 7,1);

     // Affichage de l'image


    $affichage="<img src=\"$dossier/$type$n1.gif\"><img src=\"$dossier/$type$n2.gif\"><img src=\"$dossier/$type$n3.gif\"><img src=\"$dossier/$type$n4.gif\"><img src=\"$dossier/$type$n5.gif\"><img src=\"$dossier/$type$n6.gif\">";


    echo"$affichage";

    }




    else


    //           P  A  S       D  E       C  O  O  K  I  E  S


    // Si le cookie existe on affiche simplement le résultat

    {

  // Récupération des données

    $fp = fopen("compteur.txt","r");  // (1)
    $nb = fgets($fp,11);     // (2)
    fclose($fp);                  // (3)


  // Afficher le résultat graphiquement

     // Nombres du compteur

  $n1=substr("$nb", 0,1);
  $n2=substr("$nb", 1,1);
  $n3=substr("$nb", 2,1);
  $n4=substr("$nb", 3,1);
  $n5=substr("$nb", 4,1);
  $n6=substr("$nb", 5,1);
  $n7=substr("$nb", 6,1);
  $n8=substr("$nb", 7,1);

     // Affichage de l'image


    $affichage="<img src=\"$dossier/$type$n1.gif\"><img src=\"$dossier/$type$n2.gif\"><img src=\"$dossier/$type$n3.gif\"><img src=\"$dossier/$type$n4.gif\"><img src=\"$dossier/$type$n5.gif\"><img src=\"$dossier/$type$n6.gif\">";


    echo"$affichage";

    }

?>
