<?php
$base = mysql_connect('localhost','root','');
mysql_select_db('minisouk', $base) ;

if (isset($_POST['register'])){
        $email=$_POST['email'];  //On récupère les valeurs entrées par l'utilisateur :
        $password1=$_POST['password1'];
        $password1=$_POST['password2'];
        $sql = "INSERT INTO client('email','password1','password2')VALUES('','$email','$password1','$password2')";  //On prépare la commande sql d'insertion
        mysql_query ($sql,$base) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
		mysql_close($base);
      }

      if (isset($_POST['modifier']))

                                         if($idc=='' || $email=='' ||$password1==''   )
               {

               echo '<body onLoad="alert('fair une recherch avant la modification ou verifiez les champs                                               obligatoire...')">';
                                        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
               }
               else
               {
                $rqt="update t_client set idc='$idc',email='$email',password='$password1', where idc ='$rech'";
             mysql_query($rqt);
               echo '<body onLoad="alert('Modification effectuée...')">';
               echo '<meta http-equiv="refresh" content="0;URL=index.php">';
             mysql_close();
              }
            elseif(isset($_POST['supprimer']))
              {

              $rqt="delete  FROM t_client  where nom ='$rech'";

             mysql_query($rqt);
              echo '<body onLoad="alert('Suppression effectuée...')">';
             echo '<meta http-equiv="refresh" content="0;URL=index.php">';
             mysql_close();
              }



 ?>
