
<?php 
require "database.php" ; 
// $db->insert("isbn3" , "the programmer" , "ziad" , 100 , 300) ;
// $db->insert("isbn4" , "why we sleep" , "Adam" , 1000 , 500) ;
// $db->insert("isbn5" , "The atomic habits" , "Hamza" , 450 , 150) ;
echo '<a href="ajouter.php"><button >Ajouter un livre</button></a>' ; 
$tab = $db->select() ;
echo "<table border>" ;
echo "<tr>
<td>isbn Livre</td><td>titre</td><td>nom auteur</td><td>nombre des pages </td><td>prix</td><td>Image</td><td>action</td>
</tr>" ;
foreach ($tab as $key => $value) {
    echo "<tr><td>$value[isbn_livre]</td><td>$value[titre_livre]</td><td>$value[nomcomplet_auteur]</td><td>$value[nb_pages] pages</td><td>$value[prix] DHS</td><td><img src='covers/$value[image]' width='70px'></td><td><a href='update.php?id=$value[isbn_livre]'><button>modifier</button></a><a href='delete.php?id=$value[isbn_livre]'><button>supprimer</button></a></td></tr>" ;

}
echo "</table>" ;






?>