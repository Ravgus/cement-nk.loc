<ul class="menu">
    @foreach($navs as $nav)
        <li><a href="#{{ $loop->iteration }}">{{ $nav }}</a></li>
    @endforeach
    <li>
        <div class="select">
        <form action="{{ route('setLocale') }}" method="post">
            {{ csrf_field() }}
            <select name="lang" onchange="this.form.submit()">
                @foreach($languages as $language)
                    <option @if(App::getLocale() == $language) selected
                            @endif value="{{ $language }}">{{ $language }}</option>
                @endforeach
            </select>
        </form>
        </div>
    </li>
</ul>