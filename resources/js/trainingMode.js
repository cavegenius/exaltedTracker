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
            }
        });
        $( 'input[name=\'submit-submit\'' ).attr( 'disabled', true);
        $( 'input[name=\'submit-submit\'' ).addClass('disabled');
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

});