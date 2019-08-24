$(document).ready( function() {

    $(document).on('click', '#mode-standard', function() {
        resetForm();
        
    });

    function resetForm() {
        let disable = ['experience', 'dragonExperience'];
        $( '.characterSheet input' ).each(function() {
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