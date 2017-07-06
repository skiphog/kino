<fieldset class="uk-fieldset">
    <div class="uk-margin">
        {!! Form::text('title', null, ['class' => 'uk-input', 'placeholder' => 'Заголовок', 'required']) !!}
    </div>

    <div class="uk-margin">
        {!! Form::text('description', null, ['class' => 'uk-input', 'placeholder' => 'Описание', 'required']) !!}
    </div>

    <div class="uk-margin">
        {!! Form::textarea('text',null,['class' => 'uk-textarea','rows' => 10,'placeholder' => 'Статья']) !!}
    </div>

    {!! Form::button($nameButton,['type' => 'submit', 'class' => 'uk-button uk-button-secondary']) !!}

</fieldset>