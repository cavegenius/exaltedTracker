<div class="characterSheet">
    {!! Form::open(['url' => 'character/submit']) !!}
    {{ csrf_field() }}
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
        <div class="col-md-4 border-right abilities">
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
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 border-right">
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
                <div class="col-md-6">
                    <h2>MERITS</h2>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit1', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit1v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit1v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit1v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit1v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit1v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit2', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit2v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit2v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit2v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit2v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit2v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit3', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit3v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit3v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit3v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit3v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit3v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit4', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit4v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit4v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit4v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit4v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit4v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit5', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit5v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit5v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit5v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit5v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit5v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit6', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit6v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit6v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit6v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit6v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit6v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit7', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit7v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit7v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit7v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit7v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit7v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit8', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit8v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit8v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit8v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit8v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit8v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <h2>ANIMA LEVEL</h2>
                    <div class="form-row">
                            <div class="col-3 text-center">{{Form::label('dim', 'Dim')}}<br>{{Form::checkbox('dim', 'true', false, ['class' => 'checkbox'])}}</div>
                            <div class="col-3 text-center">{{Form::label('glowing', 'Glowing')}}<br>{{Form::checkbox('glowing', 'true', false, ['class' => 'checkbox'])}}</div>
                            <div class="col-3 text-center">{{Form::label('burning', 'Burning')}}<br>{{Form::checkbox('burning', 'true', false, ['class' => 'checkbox'])}}</div>
                            <div class="col-3 text-center">{{Form::label('bonfire', 'Bonfire/Iconic')}}<br>{{Form::checkbox('bonfire', 'true', false, ['class' => 'checkbox'])}}</div>
                    </div>
                    <h2>ELEMENTAL AURA</h2>
                    <div class="form-row">
                        <div class="col-3 text-center">{{Form::label('earth', 'Earth')}}<br>{{Form::checkbox('earth', 'true', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('air', 'Air')}}<br>{{Form::checkbox('air', 'true', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('fire', 'Fire')}}<br>{{Form::checkbox('fire', 'true', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-3 text-center">{{Form::label('water', 'Water')}}<br>{{Form::checkbox('water', 'true', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('wood', 'Wood')}}<br>{{Form::checkbox('wood', 'true', false, ['class' => 'checkbox'])}}</div>
                    </div>
                    <h2>EXPERIENCE</h2>
                    <div class="form-row">
                        <div class="col-2"><h6>{{Form::label('current', 'Current:')}}</h6></div>
                        <div class="col-4">{{Form::text('current', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                        <div class="col-2"><h6>{{Form::label('total', 'Total:')}}</h6></div>
                        <div class="col-4">{{Form::text('total', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    </div>
                    <h2>DRAGON EXPERIENCE</h2>
                    <div class="form-row">
                        <div class="col-2"><h6>{{Form::label('dragonCurrent', 'Current:')}}</h6></div>
                        <div class="col-4">{{Form::text('dragonCurrent', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                        <div class="col-2"><h6>{{Form::label('dragonTotal', 'Total:')}}</h6></div>
                        <div class="col-4">{{Form::text('dragonTotal', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 weapons">
                <h2>WEAPONS</h2>
                <div class="form-row">
                    <div class="col-3"><h6>{{Form::label('weaponName', 'Weapon Name:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('wit', 'WIT:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('dmg', 'DMG:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('dec', 'DEC:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('rng', 'RNG:')}}</h6></div>
                    <div class="col-5"><h6>{{Form::label('weaponTags', 'Tags:')}}</h6></div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weaponName7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('wit7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dmg7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('dec7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('rng7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weaponTags7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-1">CLS</div>
                            <div class="col-1">SRT</div>
                            <div class="col-1">MED</div>
                            <div class="col-1">LNG</div>
                            <div class="col-1">EXT</div>
                        </div>
                        <div class="row">
                            <div class="col-6">Mortal Archery</div>
                            <div class="col-1">-2</div>
                            <div class="col-1">+4</div>
                            <div class="col-1">+2</div>
                            <div class="col-1">+0</div>
                            <div class="col-1">-2</div>
                        </div>
                        <div class="row">
                            <div class="col-6">Mortal Thrown</div>
                            <div class="col-1">+4</div>
                            <div class="col-1">+3</div>
                            <div class="col-1">+2</div>
                            <div class="col-1">-1</div>
                            <div class="col-1">-3</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-1">CLS</div>
                            <div class="col-1">SRT</div>
                            <div class="col-1">MED</div>
                            <div class="col-1">LNG</div>
                            <div class="col-1">EXT</div>
                        </div>
                        <div class="row">
                            <div class="col-6">Artifact Archery</div>
                            <div class="col-1">-1</div>
                            <div class="col-1">+5</div>
                            <div class="col-1">+3</div>
                            <div class="col-1">+1</div>
                            <div class="col-1">-1</div>
                        </div>
                        <div class="row">
                            <div class="col-6">Artifact Thrown</div>
                            <div class="col-1">+5</div>
                            <div class="col-1">+4</div>
                            <div class="col-1">+3</div>
                            <div class="col-1">+0</div>
                            <div class="col-1">-2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>HEALTH & DEFENSE</h2>
    <div class="row">
        <div class="col-7">
            <div class="row">
                <div class="col-4">Armor</div>
                <div class="col-1">Soak</div>
                <div class="col-1">Hard</div>
                <div class="col-1">MP</div>
                <div class="col-5">Tags</div>
            </div>
            <div class="row">
                <div class="col-4">{{Form::text('armor1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('soak1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('hard1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('mp1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-5">{{Form::text('tags1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-4">{{Form::text('armor2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('soak2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('hard2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('mp2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-5">{{Form::text('armorTags2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-2">{{Form::label('naturalSoak', 'Natural Soak:')}}</div>
                <div class="col-2">{{Form::text('naturalSoak', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-2">{{Form::label('finalSoak', 'Final Soak:')}}</div>
                <div class="col-3">{{Form::text('finalSoak', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-5">
            <div class="row">
                <div class="col-3">{{Form::label('parry', 'Parry:')}}</div>
                <div class="col-3">{{Form::text('parry', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::label('resolve', 'Resolve:')}}</div>
                <div class="col-3">{{Form::text('resolve', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-3">{{Form::label('evasion', 'Evasion:')}}</div>
                <div class="col-3">{{Form::text('evasion', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::label('guile', 'Guile:')}}</div>
                <div class="col-3">{{Form::text('guile', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-3">{{Form::label('rush', 'Rush:')}}</div>
                <div class="col-3">{{Form::text('rush', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::label('disengage', 'Disengage:')}}</div>
                <div class="col-3">{{Form::text('disengage', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3 text-right">{{Form::label('joinBattle', 'Join Battle:')}}</div>
                    <div class="col-3 text-left">{{Form::text('joinBattle', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-3"></div>
            </div>
        </div>
    </div>
    <!-- Health Levels section -->
    <div class="row ">
        <div class="col-12 text-center"><h3 class="padding-top-5">Health Levels</h3></div>
    </div>
    <div class="row healthRow">
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('healthBox1', 'true', false, ['class' => 'checkbox width-100'])}}
            {{Form::text('healthText1', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="xxsmall">Join Battle: Wits + Awareness (plus 3 successes) • Withering attack pool: Dexterity + (Combat Ability) + weapon’s accuracy • Decisive attack pool: Dexterity + (Combat Ability) • Defense: Higher of Parry or Evasion •
Parry: ([Dexterity + (Combat Ability] / 2, round up) + weapon’s defense • Evasion: ([Dexterity + Dodge] / 2, round up) - armor’s mobility penalty • Rush: Dexterity + Athletics • Disengage: Dexterity + Dodge •
Resolve = ([Wits + Integrity + specialty] / 2, round up) • Guile = ([Manipulation + Socialize + specialty] / 2, round up) • Natural Soak = Stamina • Soak = Stamina + Charms + Armor Soak, defends against Withering attacks •
Hardness = Best hardness value from Charm or Armor, if higher than a Decisive attack dice pool, the attack fails. • Every time an opponent attacks a character, that character suffers a cumulative -1 Defense penalty until his next turn.</div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="width-100" src="img/exaltedLogo.png" />
        </div>
        <div class="col-8">
            <h2 class="width-100">ADDITIONAL MERITS</h2>
            <div class="row">
                <div class="characterDetails col-md-6">
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit9', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit9v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit9v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit9v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit9v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit9v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit10', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit10v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit10', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit10v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit10v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                </div>
                <div class="characterDetails col-md-6">
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit11', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit11v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit11v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit11v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit11v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit11v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit12', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit12v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit12v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit12v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit12v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit12v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit13', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit13v1', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit13v2', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit13v3', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit13v4', 'true', false, ['class' => 'checkbox-round'])}}
                            {{Form::checkbox('merit13v5', 'true', false, ['class' => 'checkbox-round'])}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>INTIMACIES</h2>
    <div class="row">
        <div class="col-6">
            <div class="form-row">
                <div class="col-8">Intimacy</div>
                <div class="col-4">Intensity</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-row">
                <div class="col-8">Intimacy</div>
                <div class="col-4">Intensity</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intesity20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
    </div>
    <h2>CHARMS</h2>
    <div class="row">
        <div class="col-12">
            <div class="form-row">
                <div class="col-3">Name</div>
                <div class="col-2">Type</div>
                <div class="col-1">Duration</div>
                <div class="col-1">Cost</div>
                <div class="col-1">Element</div>
                <div class="col-1">Book/Pg</div>
                <div class="col-3">Effect</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect21', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect22', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect23', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect24', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect25', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-3">{{Form::text('charmName26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charmType26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmDuration26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmCost26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmElement26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charmBook26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charmEffect26', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
    </div>
    <h2>INVENTORY</h2>
    <div class="row">
        <div class="col-12">
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">{{Form::submit('Submit', ['type' => 'submit', 'class' => 'btn btn-primary'])}}</div>
    {!! Form::close() !!}
</div>
