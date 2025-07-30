<?php
function plugin_init_importcsvtickets() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['importcsvtickets'] = true;
    $PLUGIN_HOOKS['menu_toadd']['importcsvtickets'] = ['tools' => 'importcsvtickets'];
}

function plugin_version_importcsvtickets() {
    return [
        'name'           => 'Import CSV Tickets',
        'version'        => '1.0.0',
        'author'         => 'Neris',
        'license'        => 'GPLv3+',
        'homepage'       => 'https://seusite.com',
        'minGlpiVersion' => '10.0.0'
    ];
}

function plugin_importcsvtickets_check_prerequisites() {
    return true;
}

function plugin_importcsvtickets_check_config() {
    return true;
}
