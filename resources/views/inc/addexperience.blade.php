<div id="xpLog" class="hide-on-load">
    <div id="xpForm">
        {!! Form::open([]) !!}
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-2"><h6>{{Form::label('sessionDate', 'Session Date:')}}</h6></div>
                <div class="col-4">{{Form::date('sessionDate', '0', ['class' => 'width-100', 'placeholder' => '0'])}}</div>
                <div class="col-1"><h6>{{Form::label('experience', 'XP:')}}</h6></div>
                <div class="col-1">{{Form::text('experience', '5', ['class' => 'width-100', 'placeholder' => '5'])}}</div>
                <div class="col-3"><h6>{{Form::label('dragonExperience', 'Dragon XP:')}}</h6></div>
                <div class="col-1">{{Form::text('dragonExperience', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            </div>
            <input style="float:right" type="button" name="save" value="Save" id="saveXPLog" />
        {!! Form::close() !!}
    </div>
    <div id="xpView"></div>
</div>