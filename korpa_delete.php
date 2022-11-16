<?php

require 'db_conn.php';
require 'Korpa.php';

Korpa::obrisiParfem($_POST['kor_id'], $_POST['par_id'], $db_connection);
