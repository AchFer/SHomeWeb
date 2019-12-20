<?php
  function call($core, $action) {
    require_once('cores/' . $core . '_core.php');

    switch($core) {
       case 'maison':
        $core = new maison_core();
      break;
      case 'node':
        $core = new node_core();
      break;
  
    }

    $core->{ $action }();
  }
    // we're adding an entry for the new core and its actions
  $cores = array('maison' => ['login','verifAdmin','acceuil_admin','home_list','add_home','delete','Users_list','delete_user','page_add_user','add_user','add_maison','add_maison_page','page_add_node','update_user_page','update_user','page_update_home','update_maison','send_mail'] ,'node' => ['add_node','delete','page_nodes','page_add_sensor','add_capteur','page_capteurs','delete_capteur','reclamation_page','reclamation_supprimer','page_add_node','page_update_noeud','updating_node','search_node','search_sensor'])
  ;

  if (array_key_exists($core, $cores)) {
    if (in_array($action, $cores[$core])) {
      call($core, $action);
    
  } else {
    call('maison', 'login');
  }}
?>