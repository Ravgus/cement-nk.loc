@extends('layouts.site')

@section('meta')
    @include('site.input.meta')
@endsection

@section('title', $title)

@section('navigation')
    @include('site.input.navigation', ['navs' => $navs, 'languages' => $languages])
@endsection

@section('background')
    @include('site.input.background', ['content' => $content[0]])
@endsection

@section('abouts_as')
    @include('site.input.abouts_as', ['content' => $content[1]])
@endsection

@section('delivery')
    @include('site.input.delivery', ['content' => $content[2]])
@endsection

@section('production')
    @include('site.input.production', ['content' => $content[3], 'products' => $products])
@endsection

@section('guarantees')
    @include('site.input.guarantees', ['content' => $content[4]])
@endsection

@section('contacts')
    @include('site.input.contacts', ['content' => $content[5], 'contacts' => $contacts])
@endsection

@section('footer')
    @include('site.input.footer')
@endsection