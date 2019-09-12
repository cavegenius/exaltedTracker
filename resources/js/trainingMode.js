$(document).ready( function() {

    $(document).on('click', '#mode-training', function() {
        resetForm();
        hideOtherModes();
        disableOtherSections();
    });

    function hideOtherModes() {
        if (!$( '#xpLog').hasClass( 'hide-on-load' ) ) {
            $( '#xpLog' ).addClass( 'hide-on-load' );
        }

        $( '#trainingMode').removeClass( 'hide-on-load' );
    }

    function disableOtherSections() {
        let enable = ['attributes', 'abilities', 'additionalabilities','specialization', 'merit', 'willpower', 'charm', 'martialArtsCharm', 'evocation', 'spell'];
        $( '.characterSheet input' ).each(function() {
            if( $(this).attr('readonly') ) {
                return true;
            }
            let name =  $(this).attr('name').split('-')[0];
            
            if(enable.indexOf(name) <= -1) {
                $(this).attr( 'disabled', true);
                $(this).addClass('disabled');
            } if( /abilities-[a-zA-Z]*Favored/.test( $( this ).attr( 'name' ) ) || /abilities-[a-zA-Z]*Text/.test( $( this ).attr( 'name' ) ) ) {
                $(this).attr( 'disabled', true);
                $(this).addClass('disabled');
            } else if( /merit-[0-9]{1,2}$/.test( $( this ).attr( 'name' ) ) && $( this ).val() != '' ) {
                $(this).attr( 'disabled', true);
                $(this).addClass('disabled');
            }
        });
        $( 'input[name=\'submit-submit\'' ).attr( 'disabled', true);
        $( 'input[name=\'submit-submit\'' ).addClass('disabled');
    }

    function resetForm() {
        let disable = ['experience', 'dragonExperience'];
        $( '.characterSheet input' ).each(function() {
            if( $(this).attr('readonly') ) {
                if(!$(this).hasClass('disabled') && !$(this).hasClass('charmTypeAhead') ) {
                    $(this).attr( 'disabled', true);
                    $(this).addClass('disabled');
                }
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

    $( document ).change(function( event ) {
        if ($( 'input[name="mode"]:checked').val() == 'training' ) {
            console.log( event.target );
        }
    });

});