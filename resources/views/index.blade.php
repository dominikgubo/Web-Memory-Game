<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div class="memory__section">
        <div class="section__logo">
            <div class="logo__shape"></div>
            <img src="{{url('images/memory-logo.png')}}" alt="Memory image">
        </div>
        <h1 class="section__title">Memory game</h1>
        <form action="{{route('terms.add')}}" method="POST" class="section__form">
            @csrf
            <h2>Add term</h2>
            <div class="form__title">
                <label for="term_title">Title</label>
                <input type="text" name="title" id="">
            </div>
            <div class="form__description">
                <label for="term_description">Description</label>
                <input type="textarea" name="description" id="">
            </div>
            <div class="form__image">
                <label for="image">Image</label>
                <input type="file" name="image_path" id="">
            </div>
            <div class="form__button--submit">
                <input type="hidden" name="_method" value="PUT">
                <button type="submit">Insert</button>
            </div>
        </form>
        <div class="section__buttons">
            <button class="button--show"><span>Show terms</span></button>
            <button class="button--play"><span>Play</span></button>
        </div>
        <div class="section__terms">

        </div>
    </div>
</body>
</html>