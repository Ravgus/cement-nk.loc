<table class="table table-responsive" id="chapters-table">
    <thead>
        <tr>
            <th>Название</th>
        {{--<th>Title Uk</th>--}}
        <th>Текст</th>
        {{--<th>Text Uk</th>--}}
            <th colspan="2">Действия</th>
        </tr>
    </thead>
    <tbody>
    @foreach($chapters as $chapter)
        <tr>
            <td>{!! $chapter->title_ru !!}</td>
            {{--<td>{!! $chapter->title_uk !!}</td>--}}
            <td>{!! $chapter->text_ru !!}</td>
            {{--<td>{!! $chapter->text_uk !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['chapters.destroy', $chapter->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('chapters.show', [$chapter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('chapters.edit', [$chapter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>