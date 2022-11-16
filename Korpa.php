<?php

class Korpa
{
    public $korpa_id;
    public $korisnik_id;
    public $parfem_id;


    public function __construct($korpa_id = null, $korisnik_id = null, $parfem_id = null)
    {
        $this->korpa_id = $korpa_id;
        $this->korisnik_id = $korisnik_id;
        $this->parfem_id = $parfem_id;
    }


    public static function dodajParfem($korisnik_id, $parfem_id, $db_connection)
    {
        $query = "insert into korpa values (NULL, '$korisnik_id', '$parfem_id')";

        return $db_connection->query($query);
    }

    public static function parfemiKorpa($korisnik_id, $db_connection)
    {
        $query = "select korpa.*, parfem.* from korpa join parfem on korpa.parfem_id = parfem.parfem_id where korpa.korisnik_id = " . $korisnik_id;

        return $db_connection->query($query);
    }


    public static function obrisiParfem($korisnik_id, $parfem_id, $db_connection)
    {
        $query = "delete from korpa where korisnik_id=" . $korisnik_id . " and parfem_id=" . $parfem_id;

        return $db_connection->query($query);
    }



    public static function sort($korisnik_id, $sort, $db_connection)
    {
        $query = "select korpa.*, parfem.* from korpa join parfem on korpa.parfem_id = parfem.parfem_id where korpa.korisnik_id = " . $korisnik_id . " order by parfem.cena " . $sort;

        return $db_connection->query($query);
    }
}
