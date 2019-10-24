$(document).ready( function() {

    $(document).on('click', '#mode-session', function() {
        hideOtherModes();
        resetForm();
        disableOtherSections();
        $( '#sessionMode').removeClass( 'hide-on-load' );
    });

    function hideOtherModes() {
        if (!$( '#xpLog').hasClass( 'hide-on-load' ) ) {
            $( '#xpLog' ).addClass( 'hide-on-load' );
        }

        $( '#trainingMode').removeClass( 'hide-on-load' );
    }

    function disableOtherSections() {
        let enable = ['willpower', 'essence', 'anima','aura', 'health'];
        $( '.characterSheet input' ).each(function() {
            if( $(this).attr('readonly') ) {
                return true;
            }

            if( $(this).hasClass('checkbox-round') ) {
                $(this).attr( 'disabled', true);
                return true;
            }
            let name =  $(this).attr('name').split('-')[0];
            
            if(enable.indexOf(name) <= -1) {
                $(this).attr( 'disabled', true);
                $(this).addClass('disabled');
            }
        });
        //$( 'input[name=\'submit-submit\'' ).attr( 'disabled', true);
        //$( 'input[name=\'submit-submit\'' ).addClass('disabled');
    }

    function resetForm() {
        let disable = ['experience', 'dragonExperience'];
        $( '.characterSheet input' ).each(function() {
            if( $(this).attr('readonly') ) {
                return true;
            }
            let name =  $(this).attr('name').split('-')[0];
            
            if(disable.indexOf(name) <= -1) {    
                $(this).attr( 'disabled', false);
                $(this).removeClass('disabled');
            }
        });
        $( 'input[name=\'submit-submit\'' ).attr( 'disabled', false);
        $( 'input[name=\'submit-submit\'' ).removeClass('disabled');
    }
    
    $(document).on('click', '.getCharmDetails', function() {
        let id = $(this ).attr('data-id');

        if(id != 0) {
            data = {id: id};
            $.ajax({
                method: 'POST', // Type of response and matches what we said in the route
                url: '/charm/getDetails', // This is the url we gave in the route
                data: data,
                success: function(response){ // What to do if we succeed
                    showCharm(response);
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        }
    });

    function showCharm(response) {
        $( '#charmDetails' ).html('');
        $( '#charmDetails' ).append( 'ID: '+response.id+'<br>');
        $( '#charmDetails' ).append( 'Name: '+response.name+'<br>');
        $( '#charmDetails' ).append( 'Mins: '+response.mins+'<br>');
        $( '#charmDetails' ).append( 'Type: '+response.type+'<br>');
        $( '#charmDetails' ).append( 'Duration: '+response.duration+'<br>');
        $( '#charmDetails' ).append( 'Cost: '+response.cost+'<br>');
        $( '#charmDetails' ).append( 'Element: '+response.element+'<br>');
        $( '#charmDetails' ).append( 'Book: '+response.book+'<br>');
        $( '#charmDetails' ).append( 'Effect: '+response.effect+'<br>');
        $( '#charmDetails' ).append( 'Prerequisite: '+response.prerequisite+'<br>');
        $( '#charmDetails' ).append( 'Description: '+response.description+'<br>');
    }

    $( document ).change(function( event ) {
        if ($( 'input[name="mode"]:checked').val() == 'training' ) {
            // Add Auto Save here.
        }
    });
});