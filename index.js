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