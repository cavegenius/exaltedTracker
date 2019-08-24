$(document).ready( function() {

    $(document).on('click', '#mode-xpLog', function() {
        getXPLogEntries();
        $( '#xpLog').removeClass( 'hide-on-load' );
    });

    /**
     * Save an XP Log
     * 
     */
    function saveXPLog() {
        let characterId = $( '#characterId' ).val();
        let experience = $( '#experience' ).val();
        let dragonExperience = $( '#dragonExperience' ).val();
        let sessionDate = $( '#sessionDate' ).val();

        data = {characterId: characterId, experience: experience, dragonExperience: dragonExperience, sessionDate: sessionDate};
        $.ajax({
            method: 'POST', // Type of response and matches what we said in the route
            url: '/character/saveExperienceLog', // This is the url we gave in the route
            data: data,
            success: function(response){ // What to do if we succeed
                let newExperienceCurrent = parseInt(experience)+parseInt($('#experience-current').val());
                let newExperienceTotal = parseInt( experience )+parseInt($('#experience-total').val());
                $('#experience-current').val(newExperienceCurrent);
                $('#experience-total').val(newExperienceTotal);
                $( '#experience' ).val('');
                $( '#dragonExperience' ).val('');
                $( '#sessionDate' ).val('');
                getXPLogEntries();
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    }
    /**
     * Get the XP log entries
     */
    function getXPLogEntries() {
        let characterId = $( '#characterId' ).val();

        data = {characterId: characterId};
        $.ajax({
            method: 'POST', // Type of response and matches what we said in the route
            url: '/character/retrieveExperienceLog', // This is the url we gave in the route
            data: data,
            success: function(response){ // What to do if we succeed
                $('#xpView').html('');
                $('#xpView').append('<table id="xpTable" class="width-100"><tr><th class="text-right">Session Date</th><th class="text-right">Experience</th><th class="text-right">Dragon Experience</th></tr>');
                response.forEach(function (arrayItem) {
                    $('#xpTable').append('<tr><td class="text-right">'+arrayItem.sessionDate+'</td><td class="text-right">'+arrayItem.experience+'</td><td class="text-right">'+arrayItem.dragonExperience+'</td></tr>');
                });
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    }
});
