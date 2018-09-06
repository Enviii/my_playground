@extends('layouts.layout')

@section('title', 'Home')

@section('custom-css')
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<main role="main" class="container">
    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>
</main>
<!-- /.container -->

@section('custom-js')
    <script src="{!! asset('js/main.js') !!}"></script>
@endsection

@endsection
