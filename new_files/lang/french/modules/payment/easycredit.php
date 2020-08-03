<?php
$lang_array = array(
  'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE' => 'ratenkauf par easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO' => '',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION' => '',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE' => 'Zones autoris&eacute;es',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC' => 'Pr&eacute;cisez <b>individuel</b> les zones qui doivent &ecirc;tre autoris&eacute;es pour ce module. (par exemple, AT,DE (si vide, toutes les zones sont autoris&eacute;es))',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE' => 'Activer le module',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC' => 'Souhaitez-vous accepter les paiements avec ratenkauf par easyCredit?',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE' => 'S&eacute;quence d\'affichage',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC' => 'S&eacute;quence d\'affichage. Le plus petit chiffre est affich&eacute; en premier.',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC' => 'Si une zone est s&eacute;lectionn&eacute;e, le mode de paiement n\'est valable que pour cette zone.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE' => 'Statut de l\'ordonnance temporaire',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC' => 'Indiquer le statut de la commande pour les commandes non confirm&eacute;es.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Statut de la commande r&eacute;ussie',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC' => 'Indiquer le statut de la commande pour les commandes r&eacute;ussies.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE' => 'ID de la boutique en ligne',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC' => 'Vous trouverez votre identifiant de boutique en ligne dans l\'interface du gestionnaire easyCredit dans la sous-rubrique Administration de la boutique.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE' => 'Mot de passe de l\'API',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC' => 'Vous d&eacute;finissez vous-m&ecirc;me votre mot de passe API dans l\'interface easyCredit Handler, dans le sous-menu Administration de la boutique.',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE' => 'Niveau du journal',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC' => 'Pr&eacute;cisez le niveau du journal. Par d&eacute;faut : "erreur".',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE' => 'Le paiement avec ratenkauf par easyCredit a &eacute;t&eacute; annul&eacute;',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX' => 'Veuillez accepter les accords suppl&eacute;mentaires n&eacute;cessaires pour la location-vente par easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL' => 'Des informations pr&eacute;contractuelles sur les achats &agrave; temp&eacute;rament peuvent &ecirc;tre trouv&eacute;es ici',
  'TEXT_EASYCREDIT_TBAID' => 'Identification du processus',
  'TEXT_EASYCREDIT_RATING_PLAN' => 'Financement par %s en %s Versements avec location-vente par easyCredit',
  'TEXT_EASYCREDIT_RATING_PLAN_SHORT' => 'Financement &agrave; partir de %s par mois',
  'TEXT_EASYCREDIT_RATING_PLAN_CALC' => 'plus d\'informations sur l\'achat &agrave; temp&eacute;rament',
  'TEXT_EASYCREDIT_LEGAL' => 'Exemple reproductif selon &sect; 6a PAngV',
  'TEXT_EASYCREDIT_NOMINAL_RATE' => 'Taux d\'int&eacute;r&ecirc;t d&eacute;biteur p.a. fix&eacute; pour toute la dur&eacute;e',
  'TEXT_EASYCREDIT_EFFECTIVE_RATE' => 'taux annuel en pourcentage',
  'TEXT_EASYCREDIT_TOTAL_COST' => 'Montant total',
  'TEXT_EASYCREDIT_TOTAL_NETTO' => 'Montant net du pr&ecirc;t',
  'TEXT_EASYCREDIT_TOTAL_INTEREST' => 'Montant des int&eacute;r&ecirc;ts',
  'TEXT_EASYCREDIT_MONTHLY_PAYMENT' => 'mensualit&eacute;s en H&ouml;he de chaque',
  'TEXT_EASYCREDIT_LAST_PAYMENT' => 'dernier versement',  
);
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>