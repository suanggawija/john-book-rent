@extends('layouts')
@section('title', 'Home')
@section('contain')
<h1>Books List</h1>
<form action="">
    @csrf
    <label for="rate">Rating :</label>
    <select name="rate" id="rate">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </select>
    <br>
    <label for="search">Search : </label>
    <input type="text" id="search" placeholder="search...">
    <br>
    <button type="submit">SUBMIT</button>
</form>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Book Name</th>
            <th>Category Name</th>
            <th>Author Name</th>
            <th>Average Ratting</th>
            <th>Voter</th>
        </tr>
    </thead>
    <tbody>
        @php
            $counter = 1;
        @endphp
        @foreach ($books_info as $book)    
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $book['book']->name }}</td>
                <td>{{ $book['book']->category_id }}</td>
                <td>{{ $book['author_name'] }}</td>
                <td>{{ $book['average_rating'] }}</td>
                <td>{{ $book['total_voters'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection