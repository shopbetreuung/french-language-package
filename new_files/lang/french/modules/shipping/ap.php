<?php
define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Poste autrichienne AG');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', 'Austrian Post AG - Exp&eacute;dition dans le monde entier');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Envoi &agrave;');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Malheureusement, il n\'est pas possible d\'envoyer dans ce pays');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Les frais d\'exp&eacute;dition ne peuvent &ecirc;tre calcul&eacute;s pour l\'instant');
define('MODULE_SHIPPING_AP_STATUS_TITLE' , 'Poste autrichienne AG');
define('MODULE_SHIPPING_AP_STATUS_DESC' , 'Souhaitez-vous proposer &agrave; la poste autrichienne l\'exp&eacute;dition?');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , 'Zones autoris&eacute;es');
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , 'Veuillez entrer les zones <b>s&eacute;par&eacute;ment</b> qui doivent &ecirc;tre autoris&eacute;es &agrave; utiliser ce module (par exemple AT,DE (laissez vide si vous voulez autoriser toutes les zones))');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE' , 'Cat&eacute;gorie d\'imp&ocirc;t');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC' , 'Utilisez la classe d\'imp&ocirc;t suivante sur les frais d\'exp&eacute;dition.');
define('MODULE_SHIPPING_AP_ZONE_TITLE' , 'Zone de navigation');
define('MODULE_SHIPPING_AP_ZONE_DESC' , 'Si une zone est s&eacute;lectionn&eacute;e, n\'activez ce mode d\'exp&eacute;dition que pour cette zone.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE' , 'Ordre de tri');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC' , 'Ordre d\'affichage.');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Nombre de zones');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Nombre de zones &agrave; utiliser');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Activer l\'affichage');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , 'Voulez-vous afficher, si l\'exp&eacute;dition &agrave; destination n\'est pas possible ou si les frais d\'exp&eacute;dition ne peuvent pas &ecirc;tre calcul&eacute;s?');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Nombre de zones');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Nombre de zones &agrave; utiliser');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Activer l\'affichage');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , 'Voulez-vous afficher, si l\'exp&eacute;dition &agrave; destination n\'est pas possible ou si les frais d\'exp&eacute;dition ne peuvent pas &ecirc;tre calcul&eacute;s?');
if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
  for ($module_shipping_ap_i = 1; $module_shipping_ap_i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $module_shipping_ap_i ++) {
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_TITLE' , '<hr/>Zone '.$module_shipping_ap_i.' Pays');
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_DESC' , 'Liste s&eacute;par&eacute;e par des virgules des codes pays ISO &agrave; deux caract&egrave;res qui font partie de la zone '.$module_shipping_ap_i.' (Entrez dans le MONDE pour le reste du monde.).');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_TITLE' , 'Zone '.$module_shipping_ap_i.' Tableau d\'exp&eacute;dition');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_DESC' , 'Les frais d\'exp&eacute;dition vers la zone '.$module_shipping_ap_i.' seront multipli&eacute;s par le nombre d\'articles dans une commande qui utilise cette m&eacute;thode d\'exp&eacute;dition.');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_TITLE' , 'Zone '.$module_shipping_ap_i.' Frais de traitement');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_DESC' , 'Frais de manutention pour cette zone de navigation');
  }
}
?>