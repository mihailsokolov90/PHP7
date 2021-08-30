

function Application()
{

}

Application.prototype.Run = function()
{
    /*$("#contact_form form").on('submit', function (e)
    {
        e.preventDefault();

        let form = $('#contact_form');
        let btn = $('#contact_form  button[type="submit"]');
        let email = $('#contact-email');
        let name = $('#contact-name');
        let msg = $('#contact_form div.form-message');

        msg.text(" ");

        if( name === undefined || name === null )
        {
            msg.text("Name is undefind");
            return;
        }

        if( name.val().length === 0 )
        {
            $('#contact_form label[for=contact-name]').addClass('has-error');
            // $(name.closest('form-group')).addClass('has-error');
            msg.text("Please Enter Your Name");
            return;
        }
        else
        {
            $('#contact_form label[for="contact-name"]').removeClass('has-error');
            //$(name.closest('form-group')).removeClass('has-error');
        }

        if( email.val().indexOf('@') === -1 )
        {
            $(email.closest('form-group')).addClass('has-error');
            msg.text("Please Enter Your Email Address");
            return;
        }
        else
        {
            $(email.closest('form-group')).removeClass('has-error');
        }

        msg.css('color', '#08a300');
        msg.text("Message send. We will contact you soon");
        btn.attr('disabled', 'disabled');
    });*/
};


$(document).ready(function () {

    let app = new Application();
    app.Run();
});