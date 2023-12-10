@extends('layouts')

@section('contain')
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