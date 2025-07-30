<?php

function plugin_version_importcsvtickets() {
   return [
      'name'           => "Importador CSV de Chamados",
      'version'        => '1.0.0',
      'author'         => 'Neris',
      'license'        => 'GPLv2+',
      'minGlpiVersion' => '10.0.0'
   ];
}

function plugin_importcsvtickets_install() {
   return true;
}

function plugin_importcsvtickets_uninstall() {
   return true;
}
