<div class="characterSheet yes">
    {!! Form::open(['url' => 'character/submit']) !!}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <img class="width-100" src="img/exaltedLogo.png" />
        </div>
        <div class="characterDetails col-md-4">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('character-name', 'Name')}}</h6></div>
                <div class="col-10">{{Form::text('character-name', '', ['class' => 'width-100', 'placeholder' => 'Name'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('character-player', 'Player')}}</h6></div>
                <div class="col-10">{{Form::text('character-player', '', ['class' => 'width-100', 'placeholder' => 'Player'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('character-aspect', 'Aspect')}}</h6></div>
                <div class="col-10">{{Form::text('character-aspect', '', ['class' => 'width-100', 'placeholder' => 'Aspect'])}}</div>
            </div>
        </div>
        <div class="characterDetails col-md-4">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('character-concept', 'Concept')}}</h6></div>
                <div class="col-10">{{Form::text('character-concept', '', ['class' => 'width-100', 'placeholder' => 'Concept'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('character-anima', 'Anima')}}</h6></div>
                <div class="col-10">{{Form::text('character-anima', '', ['class' => 'width-100', 'placeholder' => 'Anima'])}}</div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('character-origin', 'Origin')}}</h6></div>
                <div class="col-10">{{Form::text('character-origin', '', ['class' => 'width-100', 'placeholder' => 'Origin'])}}</div>
            </div>
        </div>
    </div>
    
    <h2>ATTRIBUTES</h2>
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-strength', 'Strength')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-strength1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'strength', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-strength2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'strength', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-strength3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'strength', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-strength4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'strength', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-strength5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'strength', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-dexterity', 'Dexterity')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-dexterity1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dexterity', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-dexterity2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dexterity', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-dexterity3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dexterity', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-dexterity4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dexterity', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-dexterity5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dexterity', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-stamina', 'Stamina')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-stamina1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stamina', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-stamina2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stamina', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-stamina3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stamina', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-stamina4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stamina', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-stamina5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stamina', 'data-value' => '5'])}}
                </div>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-charisma', 'Charisma')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-charisma1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'charisma', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-charisma2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'charisma', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-charisma3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'charisma', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-charisma4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'charisma', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-charisma5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'charisma', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-manipulation', 'Manipulation')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-manipulation1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'manipulation', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-manipulation2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'manipulation', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-manipulation3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'manipulation', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-manipulation4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'manipulation', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-manipulation5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'manipulation', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-appearance', 'Appearance')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-appearance1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'appearance', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-appearance2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'appearance', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-appearance3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'appearance', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-appearance4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'appearance', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-appearance5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'appearance', 'data-value' => '5'])}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-perception', 'Perception')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-perception1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'perception', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-perception2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'perception', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-perception3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'perception', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-perception4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'perception', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-perception5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'perception', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-intelligence', 'Intelligence')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-intelligence1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'intelligence', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-intelligence2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'intelligence', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-intelligence3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'intelligence', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-intelligence4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'intelligence', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-intelligence5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'intelligence', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('attributes-wits', 'Wits')}}</h6></div>
                <div class="col-10 text-right">
                    {{Form::checkbox('attributes-wits1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'wits', 'data-value' => '1'])}}
                    {{Form::checkbox('attributes-wits2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'wits', 'data-value' => '2'])}}
                    {{Form::checkbox('attributes-wits3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'wits', 'data-value' => '3'])}}
                    {{Form::checkbox('attributes-wits4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'wits', 'data-value' => '4'])}}
                    {{Form::checkbox('attributes-wits5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'wits', 'data-value' => '5'])}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 border-right abilities">
            <h2>ABILITIES</h2>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-archeryFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-archery', 'Archery')}}</div>
                <div class="col-6">{{Form::text('abilities-archeryText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-archery1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'archery', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-archery2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'archery', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-archery3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'archery', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-archery4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'archery', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-archery5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'archery', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-athleticsFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-athletics', 'Athletics')}}</div>
                <div class="col-6">{{Form::text('abilities-athleticsText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-athletics1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'athletics', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-athletics2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'athletics', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-athletics3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'athletics', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-athletics4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'athletics', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-athletics5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'athletics', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-awarenessFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-awareness', 'Awareness')}}</div>
                <div class="col-6">{{Form::text('abilities-awarenessText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-awareness1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'awareness', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-awareness2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'awareness', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-awareness3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'awareness', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-awareness4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'awareness', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-awareness5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'awareness', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-brawlFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-brawl', 'Brawl')}}</div>
                <div class="col-6">{{Form::text('abilities-brawlText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-brawl1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'brawl', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-brawl2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'brawl', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-brawl3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'brawl', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-brawl4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'brawl', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-brawl5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'brawl', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-bureaucracyFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-bureaucracy', 'Bureaucracy')}}</div>
                <div class="col-6">{{Form::text('abilities-brawlText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-bureaucracy1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'bureaucracy', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-bureaucracy2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'bureaucracy', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-bureaucracy3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'bureaucracy', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-bureaucracy4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'bureaucracy', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-bureaucracy5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'bureaucracy', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-craftFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-craft', 'Craft')}}</div>
                <div class="col-6">{{Form::text('abilities-craftText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-craft1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'craft', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-craft2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'craft', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-craft3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'craft', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-craft4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'craft', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-craft5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'craft', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-dodgeFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-dodge', 'Dodge')}}</div>
                <div class="col-6">{{Form::text('abilities-dodgeText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-dodge1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dodge', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-dodge2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dodge', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-dodge3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dodge', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-dodge4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dodge', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-dodge5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'dodge', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-integrityFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-integrity', 'Integrity')}}</div>
                <div class="col-6">{{Form::text('abilities-integrityText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-integrity1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'integrity', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-integrity2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'integrity', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-integrity3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'integrity', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-integrity4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'integrity', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-integrity5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'integrity', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-investigationFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-investigation', 'Investigation')}}</div>
                <div class="col-6">{{Form::text('abilities-investigationText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-investigation1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'investigation', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-investigation2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'investigation', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-investigation3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'investigation', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-investigation4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'investigation', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-investigation5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'investigation', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-larcenyFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-larceny', 'Larceny')}}</div>
                <div class="col-6">{{Form::text('abilities-larcenyText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-larceny1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'larceny', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-larceny2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'larceny', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-larceny3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'larceny', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-larceny4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'larceny', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-larceny5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'larceny', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-linguisticsFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-linguistics', 'Linguistics')}}</div>
                <div class="col-6">{{Form::text('abilities-linguisticsText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-linguistics1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'linguistics', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-linguistics2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'linguistics', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-linguistics3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'linguistics', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-linguistics4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'linguistics', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-linguistics5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'linguistics', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-loreFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-lore', 'Lore')}}</div>
                <div class="col-6">{{Form::text('abilities-loreText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-lore1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'lore', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-lore2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'lore', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-lore3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'lore', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-lore4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'lore', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-lore5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'lore', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-martialArtsFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-3">{{Form::label('abilities-martialArts', 'Martial Arts')}}</div>
                <div class="col-5">{{Form::text('abilities-martialArtsText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-martialArts1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'martialArts', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-martialArts2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'martialArts', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-martialArts3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'martialArts', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-martialArts4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'martialArts', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-martialArts5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'martialArts', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-medicineFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-medicine', 'Medicine')}}</div>
                <div class="col-6">{{Form::text('abilities-medicineText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-medicine1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'medicine', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-medicine2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'medicine', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-medicine3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'medicine', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-medicine4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'medicine', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-medicine5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'medicine', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-melee', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-melee', 'Melee')}}</div>
                <div class="col-6">{{Form::text('abilities-meleeText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-melee1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'melee', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-melee2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'melee', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-melee3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'melee', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-melee4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'melee', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-melee5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'melee', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-occultFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-occult', 'Occult')}}</div>
                <div class="col-6">{{Form::text('abilities-occultText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-occult1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'occult', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-occult2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'occult', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-occult3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'occult', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-occult4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'occult', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-occult5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'occult', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-performanceFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-performance', 'Performance')}}</div>
                <div class="col-6">{{Form::text('abilities-performanceText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-performance1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'performance', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-performance2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'performance', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-performance3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'performance', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-performance4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'performance', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-performance5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'performance', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-presenceFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-presence', 'Presence')}}</div>
                <div class="col-6">{{Form::text('abilities-presenceText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-presence1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'presence', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-presence2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'presence', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-presence3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'presence', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-presence4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'presence', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-presence5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'presence', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-resistanceFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-resistance', 'Resistance')}}</div>
                <div class="col-6">{{Form::text('abilities-resistanceText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-resistance1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'resistance', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-resistance2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'resistance', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-resistance3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'resistance', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-resistance4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'resistance', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-resistance5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'resistance', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-rideFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-ride', 'Ride')}}</div>
                <div class="col-6">{{Form::text('abilities-rideText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-ride1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'ride', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-ride2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'ride', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-ride3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'ride', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-ride4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'ride', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-ride5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'ride', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-sailFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-sail', 'Sail')}}</div>
                <div class="col-6">{{Form::text('abilities-sailText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-sail1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'sail', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-sail2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'sail', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-sail3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'sail', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-sail4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'sail', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-sail5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'sail', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-socializeFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-socialize', 'Socialize')}}</div>
                <div class="col-6">{{Form::text('abilities-socializeText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-socialize1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'socialize', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-socialize2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'socialize', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-socialize3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'socialize', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-socialize4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'socialize', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-socialize5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'socialize', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-stealthFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-stealth', 'Stealth')}}</div>
                <div class="col-6">{{Form::text('abilities-stealthText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-stealth1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stealth', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-stealth2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stealth', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-stealth3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stealth', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-stealth4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stealth', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-stealth5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'stealth', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-survivalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-survival', 'Survival')}}</div>
                <div class="col-6">{{Form::text('abilities-survivalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-survival1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'survival', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-survival2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'survival', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-survival3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'survival', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-survival4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'survival', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-survival5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'survival', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-thrownFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-thrown', 'Thrown')}}</div>
                <div class="col-6">{{Form::text('abilities-thrownText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-thrown1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'thrown', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-thrown2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'thrown', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-thrown3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'thrown', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-thrown4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'thrown', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-thrown5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'thrown', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('abilities-warFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('abilities-war', 'War')}}</div>
                <div class="col-6">{{Form::text('abilities-warText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('abilities-war1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'war', 'data-value' => '1'])}}
                    {{Form::checkbox('abilities-war2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'war', 'data-value' => '2'])}}
                    {{Form::checkbox('abilities-war3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'war', 'data-value' => '3'])}}
                    {{Form::checkbox('abilities-war4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'war', 'data-value' => '4'])}}
                    {{Form::checkbox('abilities-war5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'war', 'data-value' => '5'])}}
                </div>
            </div>

            <h2>ADDITIONAL ABILITIES</h2>
            
            <h5 class="text-center">This Section is not yet supported. If you require this section for your character please let me know.</h5>
            
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalabilities-additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additionalabilities-additional', 'Additional')}}</div>
                <div class="col-6">{{Form::text('additionalabilities-additionalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '1'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '2'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '3'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '4'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalabilities-additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additionalabilities-additional', 'Additional')}}</div>
                <div class="col-6">{{Form::text('additionalabilities-additionalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '1'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '2'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '3'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '4'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalabilities-additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additionalabilities-additional', 'Additional')}}</div>
                <div class="col-6">{{Form::text('additionalabilities-additionalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '1'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '2'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '3'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '4'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalabilities-additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additionalabilities-additional', 'Additional')}}</div>
                <div class="col-6">{{Form::text('additionalabilities-additionalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '1'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '2'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '3'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '4'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalabilities-additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additionalabilities-additional', 'Additional')}}</div>
                <div class="col-6">{{Form::text('additionalabilities-additionalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '1'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '2'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '3'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '4'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '5'])}}
                </div>
            </div>
            <div class="form-row">
                <div class="col-1">{{Form::checkbox('additionalabilities-additionalFavored', 'true', false, ['class' => 'checkbox'])}}</div>
                <div class="col-2">{{Form::label('additionalabilities-additional', 'Additional')}}</div>
                <div class="col-6">{{Form::text('additionalabilities-additionalText', '', ['class' => 'width-100'])}}</div>
                <div class="col-3 text-right">
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '1'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '2'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '3'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '4'])}}
                    {{Form::checkbox('additionalabilities-additional', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'additional', 'data-value' => '5'])}}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 border-right">
                    <h2>SPECIALIZATIONS</h2>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-1', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-2', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-3', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-4', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-5', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-6', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-7', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-8', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-9', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-10', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">{{Form::text('specialization-11', '', ['class' => 'width-100'])}}</div>
                    </div>
                    <h2>WILLPOWER</h2>
                    <div class="form-row willpower-row">
                        <div class="col-1 willpower">{{Form::checkbox('willpower-1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '1'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '2'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '3'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '4'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '5'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-6', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '6'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-7', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '7'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-8', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '8'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-9', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '9'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-10', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'willpower', 'data-value' => '10'])}}</div>
                    </div>
                    <div class="form-row willpower-row">
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available1', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '1'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available2', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '2'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available3', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '3'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available4', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '4'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available5', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '5'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available6', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '6'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available7', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '7'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available8', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '8'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available9', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '9'])}}</div>
                        <div class="col-1 willpower">{{Form::checkbox('willpower-Available10', 'true', false, ['class' => 'checkbox', 'data-type' => 'willpowerAvailable', 'data-value' => '10'])}}</div>
                    </div>
                    <h2>ESSENCE</h2>
                    <div class="form-row essence-row">
                        <div class="col-1 essence">{{Form::checkbox('essence-1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'essence', 'data-value' => '1'])}}</div>
                        <div class="col-1 essence">{{Form::checkbox('essence-2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'essence', 'data-value' => '2'])}}</div>
                        <div class="col-1 essence">{{Form::checkbox('essence-3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'essence', 'data-value' => '3'])}}</div>
                        <div class="col-1 essence">{{Form::checkbox('essence-4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'essence', 'data-value' => '4'])}}</div>
                        <div class="col-1 essence">{{Form::checkbox('essence-5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'essence', 'data-value' => '5'])}}</div>
                    </div>
                    <div class="text-center">
                        <div class="form-row">
                            <div class="col-12">
                                {{Form::label('essence-personal', 'Personal')}}&nbsp;&nbsp;&nbsp;
                                {{Form::text('essence-personalAvailable', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}} | 
                                {{Form::text('essence-personalTotal', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                {{Form::label('essence-peripheral', 'Peripheral')}}
                                {{Form::text('essence-peripheralAvailable', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}} | 
                                {{Form::text('essence-peripheralTotal', '', ['class' => '', 'size'=> 5, 'placeholder' => ''])}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                {{Form::label('essence-committed', 'Committed')}}
                                {{Form::text('essence-committed', '', ['class' => '', 'size'=> 13, 'placeholder' => ''])}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>MERITS</h2>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-1', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-1v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit1', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-1v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit1', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-1v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit1', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-1v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit1', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-1v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit1', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-2', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-2v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit2', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-2v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit2', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-2v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit2', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-2v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit2', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-2v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit2', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-3', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-3v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit3', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-3v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit3', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-3v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit3', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-3v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit3', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-3v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit3', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-4', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-4v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit4', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-4v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit4', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-4v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit4', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-4v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit4', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-4v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit4', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-5', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-5v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit5', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-5v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit5', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-5v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit5', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-5v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit5', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-5v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit5', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-6', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-6v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit6', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-6v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit6', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-6v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit6', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-6v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit6', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-6v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit6', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-7', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-7v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit7', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-7v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit7', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-7v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit7', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-7v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit7', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-7v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit7', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-8', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-8v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit8', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-8v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit8', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-8v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit8', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-8v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit8', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-8v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit8', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <h2>ANIMA LEVEL</h2>
                    <div class="form-row">
                            <div class="col-3 text-center">{{Form::label('dim', 'Dim')}}<br>{{Form::radio('anima-anima', 'dim', false, ['class' => 'checkbox'])}}</div>
                            <div class="col-3 text-center">{{Form::label('glowing', 'Glowing')}}<br>{{Form::radio('anima-anima', 'glowing', false, ['class' => 'checkbox'])}}</div>
                            <div class="col-3 text-center">{{Form::label('burning', 'Burning')}}<br>{{Form::radio('anima-anima', 'burning', false, ['class' => 'checkbox'])}}</div>
                            <div class="col-3 text-center">{{Form::label('bonfire', 'Bonfire/Iconic')}}<br>{{Form::radio('anima-anima', 'bonfire', false, ['class' => 'checkbox'])}}</div>
                    </div>
                    <h2>ELEMENTAL AURA</h2>
                    <div class="form-row">
                        <div class="col-2 text-center">{{Form::label('none', 'None')}}<br>{{Form::radio('aura-aura', 'none', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('earth', 'Earth')}}<br>{{Form::radio('aura-aura', 'earth', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('air', 'Air')}}<br>{{Form::radio('aura-aura', 'air', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('fire', 'Fire')}}<br>{{Form::radio('aura-aura', 'fire', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('water', 'Water')}}<br>{{Form::radio('aura-aura', 'water', false, ['class' => 'checkbox'])}}</div>
                        <div class="col-2 text-center">{{Form::label('wood', 'Wood')}}<br>{{Form::radio('aura-aura', 'wood', false, ['class' => 'checkbox'])}}</div>
                    </div>
                    <h2>EXPERIENCE</h2>
                    <div class="form-row">
                        <div class="col-2"><h6>{{Form::label('experience-current', 'Current:')}}</h6></div>
                        <div class="col-4">{{Form::text('experience-current', '', ['class' => 'width-100 disabled', 'placeholder' => '', 'disabled' => true])}}</div>
                        <div class="col-2"><h6>{{Form::label('experience-total', 'Total:')}}</h6></div>
                        <div class="col-4">{{Form::text('experience-total', '', ['class' => 'width-100 disabled', 'placeholder' => '', 'disabled' => true])}}</div>
                    </div>
                    <h2>DRAGON EXPERIENCE</h2>
                    <div class="form-row">
                        <div class="col-2"><h6>{{Form::label('dragonExperience-current', 'Current:')}}</h6></div>
                        <div class="col-4">{{Form::text('dragonExperience-current', '', ['class' => 'width-100 disabled', 'placeholder' => '', 'disabled' => true])}}</div>
                        <div class="col-2"><h6>{{Form::label('dragonExperience-total', 'Total:')}}</h6></div>
                        <div class="col-4">{{Form::text('dragonExperience-total', '', ['class' => 'width-100 disabled', 'placeholder' => '', 'disabled' => true])}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 weapons">
                <h2>WEAPONS</h2>
                <div class="form-row">
                    <div class="col-3"><h6>{{Form::label('weapon-name', 'Weapon Name:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('weapon-wit', 'WIT:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('weapon-dmg', 'DMG:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('weapon-dec', 'DEC:')}}</h6></div>
                    <div class="col-1"><h6>{{Form::label('weapon-rng', 'RNG:')}}</h6></div>
                    <div class="col-5"><h6>{{Form::label('weapon-tags', 'Tags:')}}</h6></div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                </div>
                <div class="form-row">
                    <div class="col-3">{{Form::text('weapon-name7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-wit7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dmg7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-dec7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-1">{{Form::text('weapon-rng7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                    <div class="col-5">{{Form::text('weapon-tags7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
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
                <div class="col-4">{{Form::text('armor-name1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('armor-soak1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('armor-hard1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('armor-mp1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-5">{{Form::text('armor-tags1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-4">{{Form::text('armor-name2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('armor-soak2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('armor-hard2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('armor-mp2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-5">{{Form::text('armor-tags2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-2">{{Form::label('defense-naturalSoak', 'Natural Soak:')}}</div>
                <div class="col-2">{{Form::text('defense-naturalSoak', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-2">{{Form::label('defense-finalSoak', 'Final Soak:')}}</div>
                <div class="col-3">{{Form::text('defense-finalSoak', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-5">
            <div class="row">
                <div class="col-3">{{Form::label('defense-parry', 'Parry:')}}</div>
                <div class="col-3">{{Form::text('defense-parry', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::label('defense-resolve', 'Resolve:')}}</div>
                <div class="col-3">{{Form::text('defense-resolve', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-3">{{Form::label('defense-evasion', 'Evasion:')}}</div>
                <div class="col-3">{{Form::text('defense-evasion', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::label('defense-guile', 'Guile:')}}</div>
                <div class="col-3">{{Form::text('defense-guile', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                <div class="col-3">{{Form::label('defense-rush', 'Rush:')}}</div>
                <div class="col-3">{{Form::text('defense-rush', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::label('defense-disengage', 'Disengage:')}}</div>
                <div class="col-3">{{Form::text('defense-disengage', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3 text-right">{{Form::label('defense-joinBattle', 'Join Battle:')}}</div>
                    <div class="col-3 text-left">{{Form::text('defense-joinBattle', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
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
            {{Form::checkbox('health-box1', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '1'])}}
            &nbsp;0
            {{ Form::hidden('health-text1', '0') }}

        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box2', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '2'])}}
            {{Form::text('health-text2','', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box3', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '3'])}}
            {{Form::text('health-text3', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box4', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '4'])}}
            {{Form::text('health-text4', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box5', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '5'])}}
            {{Form::text('health-text5', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box6', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '6'])}}
            {{Form::text('health-text6', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box7', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '7'])}}
            {{Form::text('health-text7', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box8', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '8'])}}
            {{Form::text('health-text8', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box9', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '9'])}}
            {{Form::text('health-text9', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box11', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '10'])}}
            {{Form::text('health-text11', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box12', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '11'])}}
            {{Form::text('health-text12', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box13', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '12'])}}
            {{Form::text('health-text13', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box14', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '13'])}}
            {{Form::text('health-text14', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box15', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '14'])}}
            {{Form::text('health-text15', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box16', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '15'])}}
            {{Form::text('health-text16', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box17', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '16'])}}
            {{Form::text('health-text17', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box18', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '17'])}}
            {{Form::text('health-text18', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box19', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '18'])}}
            {{Form::text('health-text19', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box20', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '19'])}}
            {{Form::text('health-text20', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box21', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '20'])}}
            {{Form::text('health-text21', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box22', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '21'])}}
            {{Form::text('health-text22', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box23', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '22'])}}
            {{Form::text('health-text23', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box24', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '23'])}}
            {{Form::text('health-text24', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box25', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '24'])}}
            {{Form::text('health-text25', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box26', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '25'])}}
            {{Form::text('health-text26', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box27', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '26'])}}
            {{Form::text('health-text27', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box28', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '27'])}}
            {{Form::text('health-text28', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box29', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '28'])}}
            {{Form::text('health-text29', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box30', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '29'])}}
            {{Form::text('health-text30', '', ['class' => 'width-50', 'placeholder' => ''])}}
        </div>
        <div class="healthBox">
            {{Form::checkbox('health-box31', 'true', false, ['class' => 'checkbox width-100', 'data-type' => 'health', 'data-value' => '30'])}}
            {{Form::text('health-text31', '', ['class' => 'width-50', 'placeholder' => ''])}}
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
                        <div class="col-7">{{Form::text('merit-9', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-9v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit9', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-9v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit9', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-9v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit9', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-9v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit9', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-9v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit9', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-11', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-11v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-11v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-11v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-11v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-11v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-13', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-13v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-13v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-13v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-13v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-13v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-15', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-15v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-15v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-15v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-15v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-15v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '5'])}}
                        </div>
                    </div>
                </div>
                <div class="characterDetails col-md-6">
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-10', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-10v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit10', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-10v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit10', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-10v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit10', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-10v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit10', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-10v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit10', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-12', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-12v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-12v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-12v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-12v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-12v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-14', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-14v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-14v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-14v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-14v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-14v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-16', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-16v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-16v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-16v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-16v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-16v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit14', 'data-value' => '5'])}}
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
                <div class="col-8">{{Form::text('intimacy-intimacy1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-row">
                <div class="col-8">Intimacy</div>
                <div class="col-4">Intensity</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity11', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity12', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity13', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity14', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity15', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity16', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity17', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity18', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity19', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-8">{{Form::text('intimacy-intimacy20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-4">{{Form::text('intimacy-intensity20', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
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
                {{ Form::hidden('charm-id1', '') }}
                <div class="col-3">{{Form::text('charm-name1', '', ['class' => 'width-100 charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type1', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration1', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost1', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element1', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book1', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect1', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id2', '') }}
                <div class="col-3">{{Form::text('charm-name2', '', ['class' => 'width-100 charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type2', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration2', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost2', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element2', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book2', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect2', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id3', '') }}
                <div class="col-3">{{Form::text('charm-name3', '', ['class' => 'width-100 charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type3', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration3', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost3', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element3', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book3', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect3', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id4', '') }}
                <div class="col-3">{{Form::text('charm-name4', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type4', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration4', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost4', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element4', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book4', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect4', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id5', '') }}
                <div class="col-3">{{Form::text('charm-name5', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type5', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration5', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost5', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element5', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book5', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect5', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id6', '') }}
                <div class="col-3">{{Form::text('charm-name6', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type6', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration6', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost6', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element6', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book6', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect6', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id7', '') }}
                <div class="col-3">{{Form::text('charm-name7', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type7', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration7', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost7', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element7', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book7', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect7', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id8', '') }}
                <div class="col-3">{{Form::text('charm-name8', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type8', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration8', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost8', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element8', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book8', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect8', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id9', '') }}
                <div class="col-3">{{Form::text('charm-name9', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type9', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration9', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost9', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element9', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book9', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect9', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id10', '') }}
                <div class="col-3">{{Form::text('charm-name10', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type10', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration10', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost10', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element10', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book10', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect10', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id11', '') }}
                <div class="col-3">{{Form::text('charm-name11', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type11', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration11', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost11', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element11', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book11', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect11', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id12', '') }}
                <div class="col-3">{{Form::text('charm-name12', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type12', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration12', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost12', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element12', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book12', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect12', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id13', '') }}
                <div class="col-3">{{Form::text('charm-name13', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type13', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration13', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost13', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element13', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book13', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect13', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id14', '') }}
                <div class="col-3">{{Form::text('charm-name14', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type14', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration14', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost14', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element14', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book14', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect14', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id15', '') }}
                <div class="col-3">{{Form::text('charm-name15', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type15', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration15', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost15', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element15', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book15', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect15', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id16', '') }}
                <div class="col-3">{{Form::text('charm-name16', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type16', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration16', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost16', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element16', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book16', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect16', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id17', '') }}
                <div class="col-3">{{Form::text('charm-name17', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type17', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration17', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost17', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element17', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book17', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect17', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id18', '') }}
                <div class="col-3">{{Form::text('charm-name18', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type18', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration18', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost18', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element18', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book18', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect18', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id19', '') }}
                <div class="col-3">{{Form::text('charm-name19', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type19', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration19', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost19', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element19', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book19', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect19', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id20', '') }}
                <div class="col-3">{{Form::text('charm-name20', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type20', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration20', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost20', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element20', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book20', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect20', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id21', '') }}
                <div class="col-3">{{Form::text('charm-name21', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type21', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration21', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost21', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element21', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book21', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect21', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id22', '') }}
                <div class="col-3">{{Form::text('charm-name22', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type22', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration22', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost22', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element22', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book22', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect22', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id23', '') }}
                <div class="col-3">{{Form::text('charm-name23', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type23', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration23', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost23', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element23', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book23', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect23', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id24', '') }}
                <div class="col-3">{{Form::text('charm-name24', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type24', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration24', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost24', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element24', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book24', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect24', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id25', '') }}
                <div class="col-3">{{Form::text('charm-name25', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type25', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration25', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost25', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element25', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book25', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect25', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('charm-id26', '') }}
                <div class="col-3">{{Form::text('charm-name26', '', ['class' => 'width-100  charmTypeAhead', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('charm-type26', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-duration26', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-cost26', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-element26', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('charm-book26', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('charm-effect26', '', ['class' => 'width-100 disabled', 'disabled' => true, 'placeholder' => ''])}}</div>
            </div>
        </div>
    </div>
    <h2>INVENTORY</h2>
    <div class="row">
        <div class="col-12">
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory-1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory-6', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory-2', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory-7', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory-3', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory-8', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory-4', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory-9', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <div class="form-row">
                <div class="col-6">{{Form::text('inventory-5', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-6">{{Form::text('inventory-10', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
    </div>
    <h2>MARTIAL ARTS CHARMS</h2>
    <div class="row">
        <div class="col-12 martialArtsCharms" data-count="1">
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
                {{ Form::hidden('martialArtsCharm-id1', '') }}
                <div class="col-3">{{Form::text('martialArtsCharm-name1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('martialArtsCharm-type1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('martialArtsCharm-duration1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('martialArtsCharm-cost1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('martialArtsCharm-element1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('martialArtsCharm-book1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('martialArtsCharm-effect1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            <a href="#" class="btn addMartialArtsCharm"><i class="fa fa-plus"></i> Add Martial Arts Charm</a>
        </div>
    </div>
    <h2>EVOCATIONS</h2>
    <div class="row">
        <div class="col-12 evocations" data-count="1">
            <div class="form-row">
                <div class="col-2">Name</div>
                <div class="col-2">Type</div>
                <div class="col-1">Duration</div>
                <div class="col-1">Cost</div>
                <div class="col-1">Element</div>
                <div class="col-1">Book/Pg</div>
                <div class="col-2">Effect</div>
                <div class="col-1">Artifact</div>
                <div class="col-1">Attunement</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('evocation-id1', '') }}
                <div class="col-2">{{Form::text('evocation-name1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('evocation-type1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('evocation-duration1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('evocation-cost1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('evocation-element1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('evocation-book1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('evocation-effect1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('evocation-artifact1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-1">{{Form::text('evocation-attunement1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-12 text-left">
            <a href="#" class="btn addEvocation"><i class="fa fa-plus"></i> Add Evocation</a>
        </div>
    </div>
    <h2>SPELLS</h2>
    <div class="row">
        <div class="col-12 spells" data-count="1">
            <div class="form-row">
                <div class="col-3">Name</div>
                <div class="col-2">Circle</div>
                <div class="col-2">Cost</div>
                <div class="col-2">Duration</div>
                <div class="col-3">Keywords</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('spell-id1', '') }}
                <div class="col-3">{{Form::text('spell-name1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-circle1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-cost1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-duration1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-3">{{Form::text('spell-keywords1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-12 text-left">
            <a href="#" class="btn addSpell"><i class="fa fa-plus"></i> Add Spell</a>
        </div>
    </div>
    <br>    
</div>
