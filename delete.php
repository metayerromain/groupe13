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

    $query = $bdd->prepare("DELETE FROM events WHERE id = :id");
    $query->bindParam(":id", $id);

    echo"
    <div>
        <p>Etes-vous sur de supprimer?</p>
        <a href='delete.php?delete=true'><button>OUI</button></a>
        <button>NON</button>
    </div>
    ";

    function delete($query, $id){
        $query->execute();
        echo 'l\'article numéro ' .$id. ' à bien été supprimé';
        echo "<br/>";
        echo "<a href='admin.php'>Retour à l'accueil</a>";
    }

    if (isset($_GET['delete'])) {
        delete($query, $id);
    }


}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner l\'id !';
}