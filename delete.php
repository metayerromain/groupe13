<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 01:12
 */

require_once('database.php');

if (isset($_GET['id'])) // On a le nom et le prénom
{
    $id = $_GET['id'];
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner l\'id !';
}
?>
<form method="POST" action="dodelete.php">
    <p>ETES VOUS SUR DE SUPPRIMER L'ARTICLE "<?=$_GET['id'];?>"</p>
    <a href="admin.php">NON</a>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="submit" value="OUI">
</form>


