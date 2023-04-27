@extends('layouts.app')

@section('title-block')
    Сторінка контактів
@endsection

@section('content')
    <h1>Сторінка контактів</h1>

    <form action="{{ route('contact-form') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="first-name">Введіть ім'я</label>
            <input type="text" name="first-name" placeholder="Ім'я*" id="first-name" class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="last-name">Введіть прізвище</label>
            <input type="text" name="last-name" placeholder="Прізвище*" id="last-name" class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="name">Введіть email</label>
            <input type="text" name="email" placeholder="Email*" id="email" class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="subject">Введіть тему повідомлення</label>
            <input type="text" name="subject" placeholder="Тема повідомлення" id="subject" class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="message">Введіть текст повідомлення</label>
            <textarea name="message" placeholder="Текст повідомлення" id="message" class="form-control">
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary rounded-pill px-3 mt-2">Відправити</button>
    </form>
@endsection
