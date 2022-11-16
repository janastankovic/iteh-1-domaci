<?php

require 'db_conn.php';
require 'Korpa.php';

Korpa::dodajParfem($_POST['kor_id'], $_POST['par_id'], $db_connection);
