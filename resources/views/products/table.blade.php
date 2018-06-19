<table class="table table-responsive" id="products-table">
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
    @foreach($products as $product)
        <tr>
            <td>{!! $product->title_ru !!}</td>
            {{--<td>{!! $product->title_uk !!}</td>--}}
            <td>{!! $product->text_ru !!}</td>
            {{--<td>{!! $product->text_uk !!}</td>--}}
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>