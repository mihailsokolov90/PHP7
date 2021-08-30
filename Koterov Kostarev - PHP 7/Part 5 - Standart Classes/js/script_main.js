/**
 * @author Mikle
 * @brief Page Main Script
 */


 function Application()
 {
    this.page_header = "Chapter 3";
 }

 Application.prototype.Run = function()
 {
     $('#signin-button').on('click', function (e)
     {
         $(e.currentTarget.closest('ul')).slideUp();
         //$('#form-signin').fadeIn('slow');
         $('#form-signin').css('visibility', 'visible').animate({
            opacity: 1.0,
         }, 2000);
     });

     $('#signout-button').on('click', function (e)
     {
         e.preventDefault();
         $('#form-signin').hide();
     });
 };

//! MAIN
 $(document).ready( function() {

    var app = new Application();
    app.Run();

 } );


