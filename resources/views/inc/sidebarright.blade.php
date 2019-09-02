<div class="row">
        <div class="alert results hide-on-load width-100"></div>
</div>
<div class="row rightTop">
    <div class="col-md-3 text-left">
        {{Form::submit('Submit', ['name' => 'submit-submit', 'type' => 'submit', 'class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    
    <div id="toggles" class="col-md-9">
        <form class="form">
            <div class="switch-field">
                <input type="radio" id="mode-standard" name="mode" value="standard" checked/>
                <label for="mode-standard">Standard</label>
                <input type="radio" id="mode-session" name="mode" value="session" />
                <label for="mode-session">Session</label>
                <input type="radio" id="mode-training" name="mode" value="training" />
                <label for="mode-training">Training</label>
                <input type="radio" id="mode-xpLog" name="mode" value="xpLog" />
                <label for="mode-xpLog">LogXP</label>
            </div>
        </form>
    </div>
</div>
<div class="rightBottom">
    @include('inc.addexperience')
    @include('inc.trainingmode')
</div>