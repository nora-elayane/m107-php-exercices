<?php 
require "database.php" ; 
// $db->insert("isbn3" , "the programmer" , "ziad" , 100 , 300) ;
// $db->insert("isbn4" , "why we sleep" , "Adam" , 1000 , 500) ;
// $db->insert("isbn5" , "The atomic habits" , "Hamza" , 450 , 150) ;
$tab = $db->select() ;
echo "<table border>" ;
echo "<tr>
<td>isbn Livre</td><td>titre</td><td>nom auteur</td><td>nombre des pages </td><td>prix</td>
</tr>" ;
foreach ($tab as $key => $value) {
    echo "<tr><td>$value[isbn_livre]</td><td>$value[titre_livre]</td><td>$value[nomcomplet_auteur]</td><td>$value[nb_pages] pages</td><td>$value[prix] DHS</td></tr>" ;

}
echo "</table>" ;




?>