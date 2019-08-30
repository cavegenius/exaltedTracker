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
                $( 'sidebar-right' ).html('');
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
                    populateMartialArtsCharmDetails( response.martialArtsCharm );
                    populateEvocationDetails( response.evocation );
                    populateSpellDetails( response.spell );
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
        $( 'body' ).append('<input type="hidden" id="characterId" value="'+character.id+'"> ');
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
            $( 'input[name=\'intimacy-intimacy'+i+'\'').attr('title', value.intimacy);
            $( 'input[name=\'intimacy-intensity'+i+'\'').val(value.intensity);
            $( 'input[name=\'intimacy-intensity'+i+'\'').attr('title', value.intensity);
            i++;
        });
    }

    function populateCharmDetails( charms ) {
        let i=1;
        $.each(charms, function(key,value) {            
            $( 'input[name=\'charm-id'+i+'\'').val(value.id);
            $( 'input[name=\'charm-name'+i+'\'').val(value.name);
            $( 'input[name=\'charm-name'+i+'\'').attr('title', value.name);
            $( 'input[name=\'charm-name'+i+'\'').attr('disabled', true);
            $( 'input[name=\'charm-name'+i+'\'').addClass('disabled');
            $( 'input[name=\'charm-type'+i+'\'').val(value.type);
            $( 'input[name=\'charm-type'+i+'\'').attr('title', value.type);
            $( 'input[name=\'charm-duration'+i+'\'').val(value.duration);
            $( 'input[name=\'charm-duration'+i+'\'').attr('title', value.duration);
            $( 'input[name=\'charm-cost'+i+'\'').val(value.cost);
            $( 'input[name=\'charm-cost'+i+'\'').attr('title', value.cost);
            $( 'input[name=\'charm-element'+i+'\'').val(value.element);
            $( 'input[name=\'charm-element'+i+'\'').attr('title', value.element);
            $( 'input[name=\'charm-book'+i+'\'').val(value.book);
            $( 'input[name=\'charm-book'+i+'\'').attr('title', value.book);
            $( 'input[name=\'charm-effect'+i+'\'').val(value.effect);
            $( 'input[name=\'charm-effect'+i+'\'').attr('title', value.effect);
            i++;
        });
    }

    function populateMartialArtsCharmDetails( charms ) {
        let i=1;
        $.each(charms, function(key,value) {
            if(i>1) {
                $('.addMartialArtsCharm').click();
            }
            $( 'input[name=\'martialArtsCharm-id'+i+'\'').val(value.id);
            $( 'input[name=\'martialArtsCharm-name'+i+'\'').val(value.name);
            $( 'input[name=\'martialArtsCharm-name'+i+'\'').attr('title', value.name);
            $( 'input[name=\'martialArtsCharm-type'+i+'\'').val(value.type);
            $( 'input[name=\'martialArtsCharm-type'+i+'\'').attr('title', value.type);
            $( 'input[name=\'martialArtsCharm-duration'+i+'\'').val(value.duration);
            $( 'input[name=\'martialArtsCharm-duration'+i+'\'').attr('title', value.duration);
            $( 'input[name=\'martialArtsCharm-cost'+i+'\'').val(value.cost);
            $( 'input[name=\'martialArtsCharm-cost'+i+'\'').attr('title', value.cost);
            $( 'input[name=\'martialArtsCharm-element'+i+'\'').val(value.element);
            $( 'input[name=\'martialArtsCharm-element'+i+'\'').attr('title', value.element);
            $( 'input[name=\'martialArtsCharm-book'+i+'\'').val(value.book);
            $( 'input[name=\'martialArtsCharm-book'+i+'\'').attr('title', value.book);
            $( 'input[name=\'martialArtsCharm-effect'+i+'\'').val(value.effect);
            $( 'input[name=\'martialArtsCharm-effect'+i+'\'').attr('title', value.effect);
            i++;
        });
    }

    function populateEvocationDetails( evocations ) {
        let i=1;
        $.each(evocations, function(key,value) {            
            $( 'input[name=\'evocation-id'+i+'\'').val(value.id);
            $( 'input[name=\'evocation-name'+i+'\'').val(value.name);
            $( 'input[name=\'evocation-name'+i+'\'').attr('title', value.name);
            $( 'input[name=\'evocation-type'+i+'\'').val(value.type);
            $( 'input[name=\'evocation-type'+i+'\'').attr('title', value.type);
            $( 'input[name=\'evocation-duration'+i+'\'').val(value.duration);
            $( 'input[name=\'evocation-duration'+i+'\'').attr('title', value.duration);
            $( 'input[name=\'evocation-cost'+i+'\'').val(value.cost);
            $( 'input[name=\'evocation-cost'+i+'\'').attr('title', value.cost);
            $( 'input[name=\'evocation-element'+i+'\'').val(value.element);
            $( 'input[name=\'evocation-element'+i+'\'').attr('title', value.element);
            $( 'input[name=\'evocation-book'+i+'\'').val(value.book);
            $( 'input[name=\'evocation-book'+i+'\'').attr('title', value.book);
            $( 'input[name=\'evocation-effect'+i+'\'').val(value.effect);
            $( 'input[name=\'evocation-effect'+i+'\'').attr('title', value.effect);
            $( 'input[name=\'evocation-artifact'+i+'\'').val(value.artifact);
            $( 'input[name=\'evocation-artifact'+i+'\'').attr('title', value.artifact);
            $( 'input[name=\'evocation-attunement'+i+'\'').val(value.attunement);
            $( 'input[name=\'evocation-attunement'+i+'\'').attr('title', value.attunement);
            i++;
        });
    }

    function populateSpellDetails( spells ) {
        let i=1;
        $.each(spells, function(key,value) {            
            $( 'input[name=\'spell-id'+i+'\'').val(value.id);
            $( 'input[name=\'spell-name'+i+'\'').val(value.name);
            $( 'input[name=\'spell-name'+i+'\'').attr('title', value.name);
            $( 'input[name=\'spell-circle'+i+'\'').val(value.circle);
            $( 'input[name=\'spell-circle'+i+'\'').attr('title', value.circle);
            $( 'input[name=\'spell-cost'+i+'\'').val(value.cost);
            $( 'input[name=\'spell-cost'+i+'\'').attr('title', value.cost);
            $( 'input[name=\'spell-duration'+i+'\'').val(value.duration);
            $( 'input[name=\'spell-duration'+i+'\'').attr('title', value.duration);
            $( 'input[name=\'spell-keywords'+i+'\'').val(value.keywords);
            $( 'input[name=\'spell-keywords'+i+'\'').attr('title', value.keywords);
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

    // Charms Typeahead function
    var bloodhound = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/charm/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
    });
    
    $('.charmTypeAhead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'charms',
        source: bloodhound,
        display: function(data) {
            return data.name;  //Input value to be set when you select a suggestion. 
        },
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
            return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.name + '</div></div>'
            }
        }
    });

    jQuery('.charmTypeAhead').on('typeahead:selected', function (e, datum) {
        let name = $( this ).attr('name');
        var matches = name.match(/\d+$/);
        number = matches[0];
        $( 'input[name=\'charm-id'+number+'\']' ).val(datum.id);
        $( 'input[name=\'charm-type'+number+'\']' ).val(datum.type);
        $( 'input[name=\'charm-duration'+number+'\']' ).val(datum.duration);
        $( 'input[name=\'charm-cost'+number+'\']' ).val(datum.cost);
        $( 'input[name=\'charm-element'+number+'\']' ).val(datum.element);
        $( 'input[name=\'charm-book'+number+'\']' ).val(datum.book);
        $( 'input[name=\'charm-effect'+number+'\']' ).val(datum.effect);
    });

    $('.addMartialArtsCharm').click(function() {
        let number = parseInt( $('.martialArtsCharms').data( 'count') );
        number += 1
        $('.martialArtsCharms').data('count', number );
        
        $('.martialArtsCharms').append('<div class="form-row"><input name="martialArtsCharm-id'+number+'" type="hidden" value="'+number+'"><div class="col-3"><input class="width-100" placeholder="" name="martialArtsCharm-name'+number+'" type="text" value=""></div><div class="col-2"><input class="width-100" placeholder="" name="martialArtsCharm-type'+number+'" type="text" value=""></div><div class="col-1"><input class="width-100" placeholder="" name="martialArtsCharm-duration'+number+'" type="text" value=""></div><div class="col-1"><input class="width-100" placeholder="" name="martialArtsCharm-cost'+number+'" type="text" value=""></div><div class="col-1"><input class="width-100" placeholder="" name="martialArtsCharm-element'+number+'" type="text" value=""></div><div class="col-1"><input class="width-100" placeholder="" name="martialArtsCharm-book'+number+'" type="text" value=""></div><div class="col-3"><input class="width-100" placeholder="" name="martialArtsCharm-effect'+number+'" type="text" value=""></div></div>');
    });

});

if (window.performance && window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {
    window.location.reload();
}