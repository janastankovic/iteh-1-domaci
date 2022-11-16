<?php

require 'db_conn.php';
require 'Parfem.php';

$data = Parfem::polPretraga($_POST['pol'], $db_connection);

while ($p = mysqli_fetch_array($data)) {
?>
    <div class="parfem">
        <h3 class="text-center"><?php echo $p['naziv']; ?></h3>
        <img src="<?php echo $p['slika']; ?>" id="slika">
        <h5 class="text-center"><?php echo $p['pol']; ?></h5>
        <h5 class="text-center"><?php echo $p['zapremina']; ?></h5>
        <h5 class="text-center"><?php echo $p['cena']; ?> RSD</h5>

        <button class="btn btn-danger" id="korpa_btn">Dodaj u korpu</button>
    </div>

<?php
}
?>