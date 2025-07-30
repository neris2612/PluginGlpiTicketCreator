<?php

function plugin_init_importcsvtickets() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['menu_toadd']['central'][] = 'PluginImportcsvticketsImportcsvtickets';
}

function plugin_version_importcsvtickets() {
    return [
        'name'           => 'Importador CSV de Chamados',
        'version'        => '1.0.0',
        'author'         => 'Neris',
        'license'        => 'GPLv2+',
        'homepage'       => '',
        'minGlpiVersion' => '10.0.0'
    ];
}

function plugin_importcsvtickets_check_prerequisites() {
    return true;
}

function plugin_importcsvtickets_check_config() {
    return true;
}
