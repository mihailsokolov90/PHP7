/**
 * @summary AJAX QUERY ENGINE
 * @author Mikle
 */

$(document).ready( function () {

    $('#btn_about_page').click(function (e) {
        e.preventDefault();

        $('#main_content').load( $('#btn_about_page').prop('href') )

    });

    $('input[type=submit]').click(function (e) {
        e.preventDefault();

        var json = {
            name: $('input[name=name]').val(),
            family: $('input[name=family]').val()
        };

        $.ajax({
            url: $('form').prop('action'),
            method: 'POST',
            data: 'json=' + JSON.stringify(json),
            success: function () {
                alert("SUCCESS");
            },
            failure: function () {
                alert("FAILURE");
            }
        }).
        done(function (data) {
                $('#greeting').html(data);
        });
    });

} );