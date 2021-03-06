<div class="control-group">
    {!! Form::label('name', '标签名', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('name', null) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('parent', '父标签', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::select('parent', array_column($tags->toArray(), 'name', 'id'), $parent['id']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('submit', $submitName, ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::submit($submitName, ['class' => 'btn btn-lg btn-info']) !!}
    </div>
</div>