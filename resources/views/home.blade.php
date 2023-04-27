@extends('layouts.app')

@section('title-block')
    Головна сторінка
@endsection

@section('content')
    <h1>Головна сторінка</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab minus corrupti odio consectetur ea dolore, blanditiis
        veniam placeat odit iste illo architecto ad labore voluptatem perferendis voluptatibus esse tempora!</p>
@endsection

@section('aside')
    @parent
    <p>Додатковий текст</p>
@endsection
