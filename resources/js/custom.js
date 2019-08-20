$(document).ready( function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Load the character details
    $.ajax({
        method: 'POST', // Type of response and matches what we said in the route
        url: '/character/characterDetails', // This is the url we gave in the route
        success: function(response){ // What to do if we succeed
            if( response == 'No Character') {
                $('.alert').append('You have not created your character yet. You will need to fill out the character sheet below');
                $('.alert').removeClass('hide-on-load');
            } else {
                if( !$('#character-name').val() ){
                    populateCharacterDetails( response.character);
                    populateAttributeDetails( response.attribute );
                    populateAbilityDetails( response.ability );
                    populateSpecializationDetails( response.specialization );
                    populateWillpowerDetails( response.willpower );
                    populateEssenceDetails( response.essence );
                    populateMeritDetails( response.merit );
                    populateAnimaDetails( response.anima );
                    populateAuraDetails( response.aura );
                    populateExperienceDetails( response.experience );
                    populateDragonExperienceDetails( response.dragonExperience );
                    populateWeaponDetails( response.weapon );
                    populateArmorDetails( response.armor );
                    populateDefenseDetails( response.defense );
                    populateHealthDetails( response.health );
                    populateIntimacyDetails( response.intimacie );
                    populateCharmDetails( response.charm );
                    populateInventoryDetails( response.inventory );
                }
            }
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
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

    function populateCharacterDetails( character ) {
        $.each(character, function(key,value) {
            $( 'input[name=\'character-'+key+'\'').val(value);
        });
    }

    function populateAttributeDetails( attributes ) {
        $.each(attributes, function(key,value) {
            $.each(value, function(key,value) {
                $( 'input[name=\'attributes-'+key+value+'\'').click();
            });
        });
    }

    function populateAbilityDetails( abilities ) {
        $.each(abilities, function(key,value) {
            $.each(value, function(key,value) {
                $( 'input[name=\'abilities-'+key+value+'\'').click();
                if(key.includes('Favored') && value == 1) {
                    $( 'input[name=\'abilities-'+key+'\'').click();
                }
            });    
        });
    }

    function populateSpecializationDetails( specializations ) {
        $.each(specializations, function(key,value) {
            let slot = key+1;
            $( 'input[name=\'specialization-'+slot+'\'').parent().prepend('<input type="hidden" name="specialization-id'+slot+'" value="'+value.id+'" />');
            $( 'input[name=\'specialization-'+slot+'\'').val(value.specialization);
        });
    }

    function populateWillpowerDetails( willpowers ) {
        $.each(willpowers, function(key,value) {
            $( 'input[name=\'willpower-'+value.total+'\'').click();
            $( 'input[name=\'willpower-Available'+value.available+'\'').click();
        });
    }

    function populateEssenceDetails( essence ) {
        $.each(essence, function(key,value) {
            $.each(value, function(key,value) {
                if( key=='level') {
                    $( 'input[name=\'essence-'+value+'\'').click();
                } else {
                    $( 'input[name=\'essence-'+key+'\'').val(value);
                }
            });
        });
    }

    function populateMeritDetails( merits ) {
        $.each(merits, function(key,value) {
            let slot = key+1;
            $( 'input[name=\'merit-'+slot+'\'').parent().prepend('<input type="hidden" name="merit-id'+slot+'" value="'+value.id+'" />');
            $( 'input[name=\'merit-'+slot+'\'').val(value.name);
            $( 'input[name=\'merit-'+slot+'v'+value.value+'\'').click();
        });
    }

    function populateAnimaDetails( anima ) {
        $.each(anima, function(key,value) {
            $( 'input[value=\''+value.level+'\'').click();
        });
    }

    function populateAuraDetails( aura ) {
        $.each(aura, function(key,value) {
            $( 'input[value=\''+value.type+'\'').click();
        });
    }
    
    function populateExperienceDetails( experience ) {
        $.each(experience, function(key,value) {
            $( 'input[name=\'experience-current\'').val(value.current);
            $( 'input[name=\'experience-total\'').val(value.total);
        });
    }

    function populateDragonExperienceDetails( dragonExperience ) {
        $.each(dragonExperience, function(key,value) {
            $( 'input[name=\'dragonExperience-current\'').val(value.current);
            $( 'input[name=\'dragonExperience-total\'').val(value.total);
        });
    }

    function populateWeaponDetails( weapons ) {
        let i=1;
        $.each(weapons, function(key,value) {
            $.each(value, function(key,value) {
                if( key == 'id'){
                    $( 'input[name=\'weapon-name'+i+'\'').parent().prepend('<input type="hidden" name="weapon-'+key+i+'" value="'+value+'" />');
                }
                $( 'input[name=\'weapon-'+key+i+'\'').val(value);
            });
            i++;
        });
    }

    function populateArmorDetails( armor ) {
        let i=1;
        $.each(armor, function(key,value) {
            $.each(value, function(key,value) {
                if( key == 'id'){
                    $( 'input[name=\'armor-name'+i+'\'').parent().prepend('<input type="hidden" name="armor-'+key+i+'" value="'+value+'" />');
                }
                $( 'input[name=\'armor-'+key+i+'\'').val(value);
            });
            i++;
        });
    }

    function populateDefenseDetails( defense ) {
        $.each(defense, function(key,value) {
            $.each(value, function(key,value) {
                $( 'input[name=\'defense-'+key+'\'').val(value);
            });;
        });
    }

    function populateHealthDetails( health ) {
        $.each(health, function(key,value) {
            if( key == 'id'){
                $( 'input[name=\'health-box'+i+'\'').parent().prepend('<input type="hidden" name="health-'+key+i+'" value="'+value+'" />');
            }
            if(value.activated == 1) {
                $( 'input[name=\'health-box'+value.position+'\'').click();
            }
            $( 'input[name=\'health-text'+value.position+'\'').val(value.value);
        });
    }

    function populateIntimacyDetails( intimacies ) {
        let i=1;
        $.each(intimacies, function(key,value) {
            
            $( 'input[name=\'intimacy-intimacy'+i+'\'').parent().prepend('<input type="hidden" name="intimacy-id'+i+'" value="'+value.id+'" />');
            
            $( 'input[name=\'intimacy-intimacy'+i+'\'').val(value.intimacy);
            $( 'input[name=\'intimacy-intensity'+i+'\'').val(value.intensity);
            i++;
        });
    }

    function populateCharmDetails( charms ) {
        let i=1;
        $.each(charms, function(key,value) {            
            $( 'input[name=\'charm-name'+i+'\'').parent().prepend('<input type="hidden" name="charm-id'+i+'" value="'+value.id+'" />');
            $( 'input[name=\'charm-name'+i+'\'').val(value.name);
            $( 'input[name=\'charm-type'+i+'\'').val(value.type);
            $( 'input[name=\'charm-duration'+i+'\'').val(value.duration);
            $( 'input[name=\'charm-cost'+i+'\'').val(value.cost);
            $( 'input[name=\'charm-element'+i+'\'').val(value.element);
            $( 'input[name=\'charm-book'+i+'\'').val(value.book);
            $( 'input[name=\'charm-effect'+i+'\'').val(value.effect);
            i++;
        });
    }

    function populateInventoryDetails( inventory ) {
        let i=1;
        $.each(inventory, function(key,value) {
            
            $( 'input[name=\'inventory-'+i+'\'').parent().prepend('<input type="hidden" name="inventory-id'+i+'" value="'+value.id+'" />');
            $( 'input[name=\'inventory-'+i+'\'').val(value.item);
            i++;
        });
    }
});

if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
    window.location.reload();
}