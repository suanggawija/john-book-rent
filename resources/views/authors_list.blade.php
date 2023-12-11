@extends('layouts')
@section('title', 'Authors')
@section('contain')
<h1>Top 10 Most Famous Authoe</h1>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Author Name</th>
            <th>Voter</th>
        </tr>
    </thead>
    <tbody>
        @php
            $counter = 1;
        @endphp
        @foreach ($author_info as $author)    
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ $author['author']->name }}</td>
                <td>{{ $author['total_voters'] }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection