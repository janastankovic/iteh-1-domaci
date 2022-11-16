<?php

require 'db_conn.php';
require 'Korpa.php';

$data = Korpa::sort($_POST['kor_id'], $_POST['sort'], $db_connection);

while ($p = mysqli_fetch_array($data)) {
?>

    <div class="parfem">
        <h3 class="text-center"><?php echo $p['naziv']; ?></h3>
        <img src="<?php echo $p['slika']; ?>" id="slika">
        <h5 class="text-center"><?php echo $p['pol']; ?></h5>
        <h5 class="text-center"><?php echo $p['zapremina']; ?></h5>
        <h5 class="text-center"><?php echo $p['cena']; ?> RSD</h5>
        <button class="btn btn-danger" onclick="obrisiParfemKorpa(<?php echo $p['parfem_id']; ?>, <?php echo $_SESSION['user_id']; ?>)" id="korpa_del_btn">Obriši</button>
    </div>


<?php
}
?>