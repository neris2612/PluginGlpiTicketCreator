<?php
include ('../../../inc/includes.php');

Html::header('Importar CSV para Chamados', $_SERVER['PHP_SELF'], 'tools', 'importcsvtickets');

echo "<h2>Importar CSV de Chamados</h2>";

echo '<form method="post" action="front/upload.php" enctype="multipart/form-data">';
echo '<input type="file" name="csv_file" accept=".csv" required>';
echo '<br><br>';
echo '<input type="submit" name="submit" value="Enviar">';
echo '</form>';

Html::footer();