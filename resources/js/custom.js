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
            //console.log(response);
            if( response == 'No Character') {
                $('.alert').append('You have not created your character yet. You will need to fill out the character sheet below');
                $('.alert').removeClass('hide-on-load');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            //console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });

    // Any time a round checkbox option is clicked we want to also selected any that come before it and de-select any that come after it.
    $( '.checkbox-round' ).click( function() {
        let type = $( this ).data('type');
        let value = $( this ).data('value');
        $( '.checkbox-round[data-type=\''+type+'\']').each(function() {
            if( $( this ).data( 'value' ) < value ) {
                $( this ).prop('checked', true);
            } else if( $( this ).data( 'value' ) > value ) {
                $( this ).prop('checked', false);
            }
        });
    });

    $( '.checkbox' ).click( function() {
        let type = $( this ).data('type');
        let value = $( this ).data('value');
        $( '.checkbox[data-type=\''+type+'\']').each(function() {
            if( $( this ).data( 'value' ) < value ) {
                $( this ).prop('checked', true);
            } else if( $( this ).data( 'value' ) > value ) {
                $( this ).prop('checked', false);
            }
        });
    });
});
