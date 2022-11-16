<?php

class Korisnik
{
    public $korisnik_id;
    public $ime;
    public $prezime;
    public $username;
    public $password;


    public function __construct($korisnik_id = null, $ime = null, $prezime = null, $username = null, $password = null)
    {
        $this->korisnik_id = $korisnik_id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->username = $username;
        $this->password = $password;
    }

    public static function login($username, $password, $db_connection)
    {
        $check_username_sql = "select * from korisnik where username like '" . $username . "'";
        $data = $db_connection->query($check_username_sql);

        $user = mysqli_fetch_object($data);

        if ($user && ($user->password == $password)) {
            echo "<script type='text/javascript'>alert('Uspešna prijava!'); location='parfemi.php'</script>";
            $_SESSION['user_id'] = $user->korisnik_id;
        } else {
            echo "<script type='text/javascript'>alert('Pokušajte ponovo!'); location='index.php'</script>";
        }
    }
}
