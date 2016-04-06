<?php
$retour = mysql_query('SELECT * FROM listepays');
while ($data = mysql_fetch_array($retour)) // On fait une boucle pour lister les informations à afficher
{
?>
<tr>
<td><?php echo $data['Pays'] ?></td>
<td><?php echo '<a href="BDD_2.php?supp=' . $data['ID'] . '">'; ?><img class='icon' src='./skin site/b_drop.png' alt='Effacer' title='Effacer' name='supp[]' width='16' height='16')'></a></td>
</tr>
<?php
} // Fin de la boucle!!
?>