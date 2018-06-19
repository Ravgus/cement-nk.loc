<div class="col-1 dn"></div>
<div class="col-md-8 col-sm-10 contacts">
    <div class="number">
        <div class="nm">05</div>
    </div>
    <div class="title">{{ $content->title }}</div>
    @foreach($contacts as $contact)
        <div class="chapter">
            <div class="title_chapter">{{ $contact->city }}</div>
            <div class="separator"></div>
            <div class="text">
                <p>{{ $contact->address }}</p>
                <p>{{ $contact->phone }}</p>
                <p>{{ $contact->email }}</p>
            </div>
        </div>
    @endforeach
</div>
