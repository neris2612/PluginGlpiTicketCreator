<?php
class PluginImportcsvticketsImportcsvtickets extends CommonDBTM {

    public static function getTypeName($nb = 0) {
        return __('Import CSV Tickets', 'importcsvtickets');
    }

    function canCreate() {
        return Session::haveRight("ticket", CREATE);
    }

    function canView() {
        return Session::haveRight("ticket", READ);
    }

    function canUpdate() {
        return Session::haveRight("ticket", UPDATE);
    }

    function canDelete() {
        return Session::haveRight("ticket", DELETE);
    }
}
