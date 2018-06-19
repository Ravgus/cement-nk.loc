<!-- City Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_ru', 'Город(рус):') !!}
    {!! Form::text('city_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- City Uk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_uk', 'Город(укр):') !!}
    {!! Form::text('city_uk', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_ru', 'Адресс(рус):') !!}
    {!! Form::text('address_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Uk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_uk', 'Адресс(укр):') !!}
    {!! Form::text('address_uk', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Телефон:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contacts.index') !!}" class="btn btn-default">Отменить</a>
</div>
