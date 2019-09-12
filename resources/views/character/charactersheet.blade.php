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
        <?php
            $attributes = ['strength', 'dexterity', 'stamina', 'charisma', 'manipulation', 'appearance', 'perception', 'intelligence', 'wits'];
    
            foreach($attributes as $key => $value) {
                echo '<div class="form-row">';
                echo '<div class="col-2"><h6><label for="attributes-'.$value.'">'.ucfirst($value).'</label></h6></div>';
                echo '<div class="col-10 text-right">';
                echo '<input type="hidden" value="true" name="attributes-'.$value.'0">';
                echo '<input class="checkbox-round" data-type="'.$value.'" data-value="1" name="attributes-'.$value.'1" type="checkbox" value="true">';
                echo '<input class="checkbox-round" data-type="'.$value.'" data-value="2" name="attributes-'.$value.'2" type="checkbox" value="true">';
                echo '<input class="checkbox-round" data-type="'.$value.'" data-value="3" name="attributes-'.$value.'3" type="checkbox" value="true">';
                echo '<input class="checkbox-round" data-type="'.$value.'" data-value="4" name="attributes-'.$value.'4" type="checkbox" value="true">';
                echo '<input class="checkbox-round" data-type="'.$value.'" data-value="5" name="attributes-'.$value.'5" type="checkbox" value="true">';
                echo '</div>';
                echo '</div>';

                if($value == 'stamina') {
                    echo '</div><div class="col-md-4 border-right">';
                } else if ($value == 'appearance') {
                    echo '</div><div class="col-md-4">';
                }
            }
        ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 border-right abilities">
            <h2>ABILITIES</h2>
            <?php
                $abilities = ['archery', 'athletics', 'awareness', 'brawl', 'bureaucracy', 'craft', 'dodge', 'integrity', 'investigation', 'larceny', 'linguistics', 'lore', 'martialArts', 'medicine', 'melee', 'occult', 'performance', 'presence', 'resistance', 'ride', 'sail', 'socialize', 'stealth', 'survival', 'thrown', 'war'];

                foreach ($abilities as $key => $value) {
                    echo '<div class="form-row">';
                    echo '<div class="col-1"><input class="checkbox" name="abilities-'.$value.'Favored" type="checkbox" value="true"></div>';
                    echo '<div class="col-2"><label for="abilities-'.$value.'">'.ucfirst($value).'</label></div>';
                    echo '<div class="col-6"><input class="width-100" name="abilities-'.$value.'Text" type="text" value=""></div>';
                    echo '<div class="col-3 text-right">';
                    echo '<input type="hidden" value="true" name="abilities-'.$value.'0" />';
                    echo '<input class="checkbox-round" data-type="'.$value.'" data-value="1" name="abilities-'.$value.'1" type="checkbox" value="true">';
                    echo '<input class="checkbox-round" data-type="'.$value.'" data-value="2" name="abilities-'.$value.'2" type="checkbox" value="true">';
                    echo '<input class="checkbox-round" data-type="'.$value.'" data-value="3" name="abilities-'.$value.'3" type="checkbox" value="true">';
                    echo '<input class="checkbox-round" data-type="'.$value.'" data-value="4" name="abilities-'.$value.'4" type="checkbox" value="true">';
                    echo '<input class="checkbox-round" data-type="'.$value.'" data-value="5" name="abilities-'.$value.'5" type="checkbox" value="true">';
                    echo '</div>';
                    echo '</div>';
                }
            ?>

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
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 border-right">
                    <h2>SPECIALIZATIONS</h2>

                    <?php
                        for($i=1; $i<=11; $i++) {
                            echo '<div class="form-row">';
                            echo '<div class="col-12"><input class="width-100" name="specialization-'.$i.'" type="text" value=""></div>';
                            echo '</div>';
                        }
                    ?>

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
                    <?php
                        for($i=1; $i<=8; $i++) {
                            echo '<div class="form-row">';
                            echo '<div class="col-7"><input class="width-100" name="merit-'.$i.'" type="text" value=""></div>';
                            echo '<div class="col-5 text-right">';
                            echo '<input class="checkbox-round" data-type="merit'.$i.'" data-value="1" name="merit-'.$i.'v1" type="checkbox" value="true">';
                            echo '<input class="checkbox-round" data-type="merit'.$i.'" data-value="2" name="merit-'.$i.'v2" type="checkbox" value="true">';
                            echo '<input class="checkbox-round" data-type="merit'.$i.'" data-value="3" name="merit-'.$i.'v3" type="checkbox" value="true">';
                            echo '<input class="checkbox-round" data-type="merit'.$i.'" data-value="4" name="merit-'.$i.'v4" type="checkbox" value="true">';
                            echo '<input class="checkbox-round" data-type="merit'.$i.'" data-value="5" name="merit-'.$i.'v5" type="checkbox" value="true">';
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                    
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
                <?php
                    for($i=1; $i<=7; $i++) {
                        echo '<div class="form-row">';
                        echo '<div class="col-3"><input class="width-100" placeholder="" name="weapon-name'.$i.'" type="text" value=""></div>';
                        echo '<div class="col-1"><input class="width-100" placeholder="" name="weapon-wit'.$i.'" type="text" value=""></div>';
                        echo '<div class="col-1"><input class="width-100" placeholder="" name="weapon-dmg'.$i.'" type="text" value=""></div>';
                        echo '<div class="col-1"><input class="width-100" placeholder="" name="weapon-dec'.$i.'" type="text" value=""></div>';
                        echo '<div class="col-1"><input class="width-100" placeholder="" name="weapon-rng'.$i.'" type="text" value=""></div>';
                        echo '<div class="col-5"><input class="width-100" placeholder="" name="weapon-tags'.$i.'" type="text" value=""></div>';
                        echo '</div>';
                    }
                ?>
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
    <a href="#" class="clearHealth">Clear All</a>
    <div class="row healthRow" data-track="0">
        <div class="healthBox">
            <span class="healthCheck" data-position="1"></span>
            <input type="hidden" name="health-box1" value="0">
            &nbsp;0
            <input type="hidden" name="health-text1" value="0">
        </div>
        <?php
        for($i=2;$i<31;$i++) {
            echo '<div class="healthBox">';
            echo '<span class="healthCheck" data-position="'.$i.'"></span>';
            echo '<input name="health-box'.$i.'" type="hidden" value="0">';
            echo '<input class="width-50" placeholder="" name="health-text'.$i.'" type="text" value="">';
            echo '</div>';
        }
        ?>

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
                            {{Form::checkbox('merit-11v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit11', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-11v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit11', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-11v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit11', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-11v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit11', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-11v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit11', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-13', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-13v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-13v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-13v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-13v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-13v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit13', 'data-value' => '5'])}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-7">{{Form::text('merit-15', '', ['class' => 'width-100'])}}</div>
                        <div class="col-5 text-right">
                            {{Form::checkbox('merit-15v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit15', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-15v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit15', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-15v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit15', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-15v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit15', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-15v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit15', 'data-value' => '5'])}}
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
                            {{Form::checkbox('merit-12v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-12v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-12v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-12v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-12v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit12', 'data-value' => '5'])}}
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
                            {{Form::checkbox('merit-16v1', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit16', 'data-value' => '1'])}}
                            {{Form::checkbox('merit-16v2', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit16', 'data-value' => '2'])}}
                            {{Form::checkbox('merit-16v3', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit16', 'data-value' => '3'])}}
                            {{Form::checkbox('merit-16v4', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit16', 'data-value' => '4'])}}
                            {{Form::checkbox('merit-16v5', 'true', false, ['class' => 'checkbox-round', 'data-type' => 'merit16', 'data-value' => '5'])}}
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
        <div class="col-12 charms" data-count="1">
            <div class="form-row">
                <div class="col-2">Name</div>
                <div class="col-2">Type</div>
                <div class="col-1">Duration</div>
                <div class="col-1">Cost</div>
                <div class="col-1">Element</div>
                <div class="col-1">Book/Pg</div>
                <div class="col-2">Effect</div>
                <div class="col-2">Notes</div>
            </div>
            <?php
                for($i=1;$i<=26;$i++) {
            ?>
            <div class="form-row">
                <input name="charm-id<?= $i; ?>" type="hidden" value="">
                <div class="col-2"><input type="text" class="width-100 charmTypeAhead" name="charm-name<?= $i; ?>" /></div>
                <div class="col-2"><input class="width-100 disabled" disabled="" placeholder="" name="charm-type<?= $i; ?>" type="text" value="" readonly="true"></div>
                <div class="col-1"><input class="width-100 disabled" disabled="" placeholder="" name="charm-duration<?= $i; ?>" type="text" value="" readonly="true"></div>
                <div class="col-1"><input class="width-100 disabled" disabled="" placeholder="" name="charm-cost<?= $i; ?>" type="text" value="" readonly="true"></div>
                <div class="col-1"><input class="width-100 disabled" disabled="" placeholder="" name="charm-element<?= $i; ?>" type="text" value="" readonly="true"></div>
                <div class="col-1"><input class="width-100 disabled" disabled="" placeholder="" name="charm-book<?= $i; ?>" type="text" value="" readonly="true"></div>
                <div class="col-2"><input class="width-100 disabled" disabled="" placeholder="" name="charm-effect<?= $i; ?>" type="text" value="" readonly="true"></div>
                <div class="col-2"><input class="width-95" placeholder="" name="charm-notes<?= $i; ?>" type="text" value=""><i class="fa fa-times removeCharm" data-id="0" data-position="<?= $i; ?>"></i></div>
            </div>
            <?php } ?>
        </div>
        <!--<div class="col-12 text-left">
            <a href="#" class="btn addCharm"><i class="fa fa-plus"></i> Add Charm</a>
        </div>-->
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
                <div class="col-2">Name</div>
                <div class="col-2">Circle</div>
                <div class="col-2">Cost</div>
                <div class="col-2">Duration</div>
                <div class="col-2">Keywords</div>
                <div class="col-2">Book/pg</div>
            </div>
            <div class="form-row">
                {{ Form::hidden('spell-id1', '') }}
                <div class="col-2">{{Form::text('spell-name1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-circle1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-cost1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-duration1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-keywords1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
                <div class="col-2">{{Form::text('spell-book1', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
        </div>
        <div class="col-12 text-left">
            <a href="#" class="btn addSpell"><i class="fa fa-plus"></i> Add Spell</a>
        </div>
    </div>
    <br>    
</div>
