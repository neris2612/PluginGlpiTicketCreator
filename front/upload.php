<?php
include ('../../../inc/includes.php');

if (!isset($_FILES['csv_file'])) {
    die("Arquivo não enviado.");
}

$file = $_FILES['csv_file']['tmp_name'];
$loggedUserID = Session::getLoginUserID();

if (($handle = fopen($file, 'r')) !== false) {
    $first = true;
    while (($data = fgetcsv($handle, 1000, ';')) !== false) {
        if ($first) { $first = false; continue; }

        $titulo = $data[0];
        $descricao = $data[1];
        $observadores_raw = $data[2];

        $observadores = array_filter(explode(',', $observadores_raw));

        $ticket = new Ticket();

        $newID = $ticket->add([
            'name'        => $titulo,
            'content'     => $descricao,
            'status'      => 1,
            'urgency'     => 2,
            'priority'    => 2,
            'requesttypes_id' => 1,
            'users_id_recipient' => $loggedUserID,
        ]);

        // Adiciona observadores
        foreach ($observadores as $obs_id) {
            $ticket->addWatcher([
                'tickets_id' => $newID,
                'users_id'   => (int)$obs_id,
            ]);
        }
    }
    fclose($handle);
    Html::redirect('../importcsvtickets.php');
}