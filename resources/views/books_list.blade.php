@extends('layouts')

@section('contain')
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