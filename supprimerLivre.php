<?php
include 'connect.php' ;
if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'] ;
    $deleteSQL = "DELETE FROM `livres` WHERE id_livre=$id " ;
    $result=@mysql_query($deleteSQL,$idcon);

    if($result){
      echo "<script type=\"text/javascript\"> alert('Livre suppprimer avec succces'); 
      window.location.href = \"gestionLivres.php\";
             </script>";
    }else {
      echo "<script type=\"text/javascript\"> alert('Erreur : ".mysql_error()."')</script>";
    }

}
?>