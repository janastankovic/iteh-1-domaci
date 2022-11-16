<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>Parfemi</title>
</head>

<body>

    <?php
    session_start();
    require 'db_conn.php';
    require 'Korpa.php';

    $data = Korpa::parfemiKorpa($_SESSION['user_id'], $db_connection);

    ?>


    <div class="container">

        <h1 class="text-primary text-center" id="korpa-h1">Korpa</h1>

        <div id="div-sort">
            <label id="lbl">Cena: </label>
            <select class="form-select text-center" id="sort_select">
                <option value="asc" selected>Rastuće</option>
                <option value="desc">Opadajuće</option>
            </select>
        </div>
        <button class="btn btn-danger" onclick="sortKorpa(<?php echo $_SESSION['user_id']; ?>)" id="sort_btn">Sortiraj</button>

        <div class="parfemi">
            <?php
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
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>