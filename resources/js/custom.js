$(document).ready( function() {
    var id = 12; // A random variable for this example

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/character/characterDetails', // This is the url we gave in the route
        success: function(response){ // What to do if we succeed
            console.log(response);
            if( response == 'No Character') {
                $('.alert').append('You have not created your character yet. You will need to fill out the character sheet below');
                $('.alert').removeClass('hide-on-load');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });
});
