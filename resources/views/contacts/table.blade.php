<table class="table table-responsive" id="contacts-table">
    <thead>
        <tr>
            <th>Город</th>
        {{--<th>City Uk</th>--}}
        <th>Адресс</th>
        {{--<th>Address Uk</th>--}}
        <th>Телефон</th>
        <th>Email</th>
            <th colspan="3">Действия</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{!! $contact->city_ru !!}</td>
            {{--<td>{!! $contact->city_uk !!}</td>--}}
            <td>{!! $contact->address_ru !!}</td>
            {{--<td>{!! $contact->address_uk !!}</td>--}}
            <td>{!! $contact->phone !!}</td>
            <td>{!! $contact->email !!}</td>
            <td>
                {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Вы уверены?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>