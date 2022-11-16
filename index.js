$('#prikaz_btn').click(function () {

    var pol_select = $('#pol_select').val()

    $.ajax({
        url: 'pol_pretraga.php',
        method: 'post',
        data: {
            pol: pol_select
        },

        success: function (data) {
            $('.parfemi').html(data)
        }
    })
});


function dodajUKorpu(parfem_id, korisnik_id) {

    $.ajax({
        url: 'dodaj_u_korpu.php',
        method: 'post',
        data: {
            par_id: parfem_id,
            kor_id: korisnik_id
        },

        success: function () {
            alert('Parfem dodat u korpu!')
        }
    })

}


function obrisiParfemKorpa(parfem_id, korisnik_id) {

    $.ajax({
        url: 'korpa_delete.php',
        method: 'post',
        data: {
            par_id: parfem_id,
            kor_id: korisnik_id
        },

        success: function () {
            alert('Parfem obrisan iz korpe!')
            location.reload()
        }
    })
};