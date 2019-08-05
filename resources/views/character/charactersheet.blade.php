<div class="characterSheet">
    {!! Form::open(['url' => 'character/submit']) !!}
    <div class="row">
        <div class="col-md-4">
            <img class="width-100" src="img/exaltedLogo.png" />
        </div>
        <div class="characterDetails col-md-4">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('name', 'Name')}}</h6></div>
                <div class="col-10">{{Form::text('name', '', ['class' => 'width-100', 'placeholder' => 'Name'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('player', 'Player')}}</h6></div>
                <div class="col-10">{{Form::text('player', '', ['class' => 'width-100', 'placeholder' => 'Player'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('aspect', 'Aspect')}}</h6></div>
                <div class="col-10">{{Form::text('aspect', '', ['class' => 'width-100', 'placeholder' => 'Aspect'])}}</div>
            </div>
        </div>
        <div class="characterDetails col-md-4">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('concept', 'Concept')}}</h6></div>
                <div class="col-10">{{Form::text('concept', '', ['class' => 'width-100', 'placeholder' => 'Concept'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('anima', 'Anima')}}</h6></div>
                <div class="col-10">{{Form::text('anima', '', ['class' => 'width-100', 'placeholder' => 'Anima'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('origin', 'Origin')}}</h6></div>
                <div class="col-10">{{Form::text('origin', '', ['class' => 'width-100', 'placeholder' => 'Origin'])}}</div>
            </div>
        </div>
    </div>
    
    <h2>ATTRIBUTES</h2>
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('strength', 'Strength')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('strength1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('strength2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('strength3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('strength4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('strength5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('dexterity', 'Dexterity')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('dexterity1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dexterity2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dexterity3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dexterity4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dexterity5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('stamina', 'Stamina')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('stamina1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stamina2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stamina3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stamina4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stamina5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('charisma', 'Charisma')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('charisma1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('charisma2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('charisma3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('charisma4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('charisma5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('manipulation', 'Manipulation')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('manipulation1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('manipulation2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('manipulation3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('manipulation4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('manipulation5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('appearance', 'Appearance')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('appearance1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('appearance2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('appearance3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('appearance4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('appearance5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('perception', 'Perception')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('perception1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('perception2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('perception3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('perception4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('perception5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('intelligence', 'Intelligence')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('intelligence1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('intelligence2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('intelligence3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('intelligence4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('intelligence5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('wits', 'Wits')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('wits1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('wits2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('wits3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('wits4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('wits5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 border-right">
            <h2>ABILITIES</h2>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('archeryFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('archery', 'Archery')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('archery1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('archery2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('archery3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('archery4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('archery5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('athleticsFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('athletics', 'Athletics')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('athletics1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('athletics2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('athletics3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('athletics4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('athletics5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('awarenessFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('awareness', 'Awareness')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('awareness1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('awareness2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('awareness3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('awareness4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('awareness5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('brawlFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('brawl', 'Brawl')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('brawl1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('brawl2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('brawl3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('brawl4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('brawl5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('bureaucracyFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('bureaucracy', 'Bureaucracy')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('bureaucracy1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('bureaucracy2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('bureaucracy3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('bureaucracy4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('bureaucracy5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('craftFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('craft', 'Craft')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('craft1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('craft2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('craft3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('craft4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('craft5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('dodgeFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('dodge', 'Dodge')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('dodge1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dodge2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dodge3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dodge4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('dodge5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('integrityFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('integrity', 'Integrity')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('integrity1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('integrity2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('integrity3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('integrity4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('integrity5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('investigationFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('investigation', 'Investigation')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('investigation1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('investigation2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('investigation3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('investigation4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('investigation5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('larcenyFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('larceny', 'Larceny')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('larceny1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('larceny2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('larceny3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('larceny4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('larceny5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('linguisticsFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('linguistics', 'Linguistics')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('linguistics1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('linguistics2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('linguistics3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('linguistics4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('linguistics5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('loreFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('lore', 'Lore')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('lore1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('lore2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('lore3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('lore4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('lore5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('martialArtsFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-3">{{Form::label('martialArts', 'Martial Arts')}}</div>
                <div class="col-8 text-right">
                    {{Form::checkbox('martialArts1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('martialArts2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('martialArts3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('martialArts4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('martialArts5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('medicineFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('medicine', 'Medicine')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('medicine1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('medicine2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('medicine3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('medicine4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('medicine5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('melee', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('melee', 'Melee')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('melee1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('melee2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('melee3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('melee4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('melee5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('occultFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('occult', 'Occult')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('occult1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('occult2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('occult3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('occult4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('occult5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('performanceFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('performance', 'Performance')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('performance1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('performance2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('performance3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('performance4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('performance5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('presenceFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('presence', 'Presence')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('presence1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('presence2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('presence3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('presence4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('presence5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('resistanceFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('resistance', 'Resistance')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('resistance1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('resistance2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('resistance3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('resistance4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('resistance5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('rideFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('ride', 'Ride')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('ride1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('ride2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('ride3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('ride4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('ride5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('sailFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('sail', 'Sail')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('sail1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('sail2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('sail3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('sail4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('sail5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('socializeFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('socialize', 'Socialize')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('socialize1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('socialize2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('socialize3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('socialize4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('socialize5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('stealthFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('stealth', 'Stealth')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('stealth1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stealth2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stealth3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stealth4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('stealth5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('survivalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('survival', 'Survival')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('survival1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('survival2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('survival3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('survival4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('survival5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('thrownFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('thrown', 'Thrown')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('thrown', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('thrown', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('thrown', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('thrown', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('thrown', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('warFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('war', 'War')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('war1', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('war2', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('war3', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('war4', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('war5', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>

            <h2>ADDITIONAL ABILITIES</h2>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additional', 'Additional')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additional', 'Additional')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additional', 'Additional')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additional', 'Additional')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additional', 'Additional')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additional', 'Additional')}}</div>
                <div class="col-9 text-right">
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                    {{Form::checkbox('additional', 'true', false, ['class' => 'checkbox-round'])}}
                </div>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <h2>SPECIALIZATIONS</h2>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization1', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization2', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization3', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization4', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization5', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization6', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization7', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization8', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization9', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization10', '', ['class' => 'width-100'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-12">{{Form::text('specialization11', '', ['class' => 'width-100'])}}</div>
            </div>
            <h2>WILLPOWER</h2>
            <div class="form-row willpower-row">
                <div class="col-1 willpower">{{Form::checkbox('willpower1', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower2', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower3', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower4', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower5', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower6', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower7', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower8', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower9', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpower10', 'true', false, ['class' => 'checkbox-round'])}}</div>
            </div>
            <div class="form-row willpower-row">
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable1', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable2', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable3', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable4', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable5', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable6', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable7', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable8', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable9', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-1 willpower">{{Form::checkbox('willpowerAvailable10', 'true', false, ['class' => 'checkbox'])}}</div>
            </div>
            <h2>ESSENCE</h2>
            <div class="form-row essence-row">
                <div class="col-1 essence">{{Form::checkbox('essence1', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 essence">{{Form::checkbox('essence2', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 essence">{{Form::checkbox('essence3', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 essence">{{Form::checkbox('essence4', 'true', false, ['class' => 'checkbox-round'])}}</div>
                <div class="col-1 essence">{{Form::checkbox('essence5', 'true', false, ['class' => 'checkbox-round'])}}</div>
            </div>
            <div class="text-center">
                <div class="form-row">
                    <div class="col-12">
                        {{Form::label('personal', 'Personal')}}&nbsp;&nbsp;&nbsp;
                        {{Form::text('personalAvailabe', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}} | 
                        {{Form::text('personalTotal', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        {{Form::label('peripheral', 'Peripheral')}}
                        {{Form::text('peripheralAvailabe', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}} | 
                        {{Form::text('peripheralTotal', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        {{Form::label('committed', 'Committed')}}
                        {{Form::text('committed', '', ['class' => '', 'size'=> 13, 'placeholder' => ''])}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h2>MERITS</h2>
        </div>
    </div>





    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Will need this for Abilities section -->
    <div class="form-row">
        <div class="col-1">{{Form::checkbox('private', 'true', false, ['class' => 'checkbox'])}}</div>
        <div class="col-2">{{Form::label('strength', 'Strength')}}</div>
        <div class="col-9 text-right">{{Form::checkbox('private', 'true', false, ['class' => 'checkbox-round'])}}
            {{Form::checkbox('private', 'true', false, ['class' => 'checkbox-round'])}}
            {{Form::checkbox('private', 'true', false, ['class' => 'checkbox-round'])}}
            {{Form::checkbox('private', 'true', false, ['class' => 'checkbox-round'])}}
            {{Form::checkbox('private', 'true', false, ['class' => 'checkbox-round'])}}
        </div>
    </div>


    {{ Form::radio('NAME', 'VALUES', true, ['class' => '']) }}
    {{Form::select('prepTimeUnit', array('Seconds'=> 'Second(s)', 'Minutes'=> 'Minute(s)', 'Hours'=> 'Hour(s)'), null, ['class' => 'form-control'])}}
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => '', 'placeholder' => 'Recipe Name'])}}
    {{Form::checkbox('private', 'true', false, ['class' => 'checkbox-round'])}}
    {{ Form::hidden('ingredientCount', '1', ['id' => 'ingredientCount']) }}
    {{Form::textarea('step1', '', ['class' => '', 'min-rows' => '1', 'max-rows' => '5', 'rows' => '1', 'placeholder' => 'Step Details'])}}
    {{Form::submit('Submit', ['type' => 'submit', 'class' => 'btn btn-primary float-right'])}}
{!! Form::close() !!}
</div>
