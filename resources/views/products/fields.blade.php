<!-- Title Ru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_ru', 'Название(рус):') !!}
    {!! Form::text('title_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Uk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_uk', 'Название(укр):') !!}
    {!! Form::text('title_uk', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Ru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text_ru', 'Текст(рус):') !!}
    {!! Form::textarea('text_ru', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Uk Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text_uk', 'Текст(укр):') !!}
    {!! Form::textarea('text_uk', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Отменить</a>
</div>
