$(document).ready( function() {

    $(document).on('click', '#mode-training', function() {
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
        let enable = ['attributes', 'abilities', 'additionalabilities','specialization', 'merit', 'willpower', 'charm'];
        $( '.characterSheet input' ).each(function() {
            if( $(this).attr('readonly') ) {
                return true;
            }
            let name =  $(this).attr('name').split('-')[0];
            console.log(this);
console.log(name);
            if(enable.indexOf(name) <= -1) {
                $(this).attr( 'disabled', true);
                $(this).addClass('disabled');
            }
        });
        $( 'input[name=\'submit-submit\'' ).attr( 'disabled', true);
        $( 'input[name=\'submit-submit\'' ).addClass('disabled');
    }

});