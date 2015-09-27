<?php

if (!defined('_ECRIRE_INC_VERSION')) return;

function intertitres_convertir($texte) {
  if (!isset($GLOBALS['debut_intertitre'])) {
    return $texte;
  } else {
    $GLOBALS['debut_intertitre_2'] = '<h3 class="spip">';
    $GLOBALS['fin_intertitre_2'] = '</h3>';
    $GLOBALS['debut_intertitre_3'] = '<h4 class="spip">';
    $GLOBALS['fin_intertitre_3'] = '</h4>';
    $GLOBALS['debut_intertitre_4'] = '<h5 class="spip">';
    $GLOBALS['fin_intertitre_4'] = '</h5>';
    $GLOBALS['debut_intertitre_5'] = '<h6 class="spip">';
    $GLOBALS['fin_intertitre_5'] = '</h6>';

    global $debut_intertitre, $fin_intertitre;
    global $debut_intertitre_2, $fin_intertitre_2;
    global $debut_intertitre_3, $fin_intertitre_3;
    global $debut_intertitre_4, $fin_intertitre_4;
    global $debut_intertitre_5, $fin_intertitre_5;

    $chercher_raccourcis=array();
    $remplacer_raccourcis=array();

    $chercher_raccourcis[]="/(^|[^{])[{][{][{]\*\*\*\*\*(.*)[}][}][}]($|[^}])/SUms";
    $chercher_raccourcis[]="/(^|[^{])[{][{][{]\*\*\*\*(.*)[}][}][}]($|[^}])/SUms";
    $chercher_raccourcis[]="/(^|[^{])[{][{][{]\*\*\*(.*)[}][}][}]($|[^}])/SUms";
    $chercher_raccourcis[]="/(^|[^{])[{][{][{]\*\*(.*)[}][}][}]($|[^}])/SUms";
    $chercher_raccourcis[]="/(^|[^{])[{][{][{]\*(.*)[}][}][}]($|[^}])/SUms";
    $chercher_raccourcis[]="/(^|[^{])[{][{][{](.*)[}][}][}]($|[^}])/SUms";


    $remplacer_raccourcis[]="\$1\n\n$debut_intertitre_5\$2$fin_intertitre_5\n\n\$3";
    $remplacer_raccourcis[]="\$1\n\n$debut_intertitre_4\$2$fin_intertitre_4\n\n\$3";
    $remplacer_raccourcis[]="\$1\n\n$debut_intertitre_3\$2$fin_intertitre_3\n\n\$3";
    $remplacer_raccourcis[]="\$1\n\n$debut_intertitre_2\$2$fin_intertitre_2\n\n\$3";
    $remplacer_raccourcis[]="\$1\n\n$debut_intertitre\$2$fin_intertitre\n\n\$3";
    $remplacer_raccourcis[]="\$1\n\n$debut_intertitre\$2$fin_intertitre\n\n\$3";

    $texte = preg_replace($chercher_raccourcis, $remplacer_raccourcis, $texte);
    return $texte;
  }
}
?>
