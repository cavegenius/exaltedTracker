<div id="xpLog" class="hide-on-load">
    {!! Form::open([]) !!}
        {{ csrf_field() }}
        <div class="form-row">
                <div class="col-2"><h6>{{Form::label('sessionDate', 'Session Date:')}}</h6></div>
                <div class="col-4">{{Form::date('sessionDate', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            <div class="col-1"><h6>{{Form::label('experience', 'XP:')}}</h6></div>
            <div class="col-1">{{Form::text('experience', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
            <div class="col-3"><h6>{{Form::label('dragonExperience', 'Dragon XP:')}}</h6></div>
            <div class="col-1">{{Form::text('dragonExperience', '', ['class' => 'width-100', 'placeholder' => ''])}}</div>
        </div>
        <input style="float:right" type="button" name="save" value="Save" id="saveXPLog" />
    {!! Form::close() !!}
</div>