@extends('layouts')
@section('title', 'Input Rating')
@section('contain')
<h1>Insert Rating Rating</h1>
<div class="card">
    <form method="post" action="{{ route('store_rating') }}">
        @csrf
        <label for="author_id">Book Author :</label>
        <select name="author_id" id="author_id">
            @foreach ($show_authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="book_id">Book Name :</label>
        <select name="book_id" id="book_id">
            @foreach ($show_books as $book)
                <option value="{{ $book->id }}">{{ $book->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="rate">Rating :</label>
        <select name="rate" id="rate">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <button type="submit">SUBMIT</button>
    </form>
</div>
@endsection