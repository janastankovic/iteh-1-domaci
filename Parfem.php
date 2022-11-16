<?php

class Parfem
{
    public $parfem_id;
    public $naziv;
    public $pol;
    public $slika;
    public $zapremina;
    public $cena;


    public function __construct($parfem_id = null, $naziv = null, $pol = null, $slika = null, $zapremina = null, $cena = null)
    {
        $this->parfem_id = $parfem_id;
        $this->naziv = $naziv;
        $this->pol = $pol;
        $this->slika = $slika;
        $this->zapremina = $zapremina;
        $this->cena = $cena;
    }

    public static function sviParfemi($db_connection)
    {
        $query = "select * from parfem";

        return $db_connection->query($query);
    }


    public static function polPretraga($pol, $db_connection)
    {
        $query = "select * from parfem where pol='" . $pol . "'";

        return $db_connection->query($query);
    }
}
