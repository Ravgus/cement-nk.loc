@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Новый контакт
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'contacts.store']) !!}

                        @include('contacts.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace( 'text_ru' );
        CKEDITOR.replace( 'text_uk' );
    </script>
@endsection
