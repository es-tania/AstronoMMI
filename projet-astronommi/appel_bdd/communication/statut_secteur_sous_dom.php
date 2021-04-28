<?php 
$sql2 = "SELECT * 
FROM astro_metier, astro_sousdomaine, astro_rel_statut_metier, astro_statut
WHERE astro_sousdomaine.nom_sousdom='".$data['nom_sousdom']."' AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
AND astro_metier.id_metier=".$data['id_metier']." AND astro_metier.id_metier=astro_rel_statut_metier.id_metier
AND astro_rel_statut_metier.id_statut=astro_statut.id_statut;";
$req2 = $link -> prepare($sql2);
$req2 -> execute();
while($data2 = $req2 -> fetch()){
echo $data2['nom_statut'].'<br>';
}
$req2 = null;
echo '</p>
<br>
<p>Secteur(s) professionnel(s) : <br>';
$sql3 = "SELECT * 
FROM astro_metier, astro_sousdomaine, astro_rel_secteur_metier, astro_secteurpro
WHERE astro_sousdomaine.nom_sousdom='".$data['nom_sousdom']."' AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
AND  astro_metier.id_metier=".$data['id_metier']." AND astro_metier.id_metier=astro_rel_secteur_metier.id_metier
AND astro_rel_secteur_metier.id_secteur=astro_secteurpro.id_secteur;";
$req3 = $link -> prepare($sql3);
$req3 -> execute();
while($data3 = $req3 -> fetch()){
echo $data3['nom_secteur'].'<br>';
}
$req3 = null;

?>