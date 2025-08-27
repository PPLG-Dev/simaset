@extends('layouts.app')

@section('content')
<h3>Data {{ $title }}</h3>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item["id"] }}</td>
            <td>{{ $item["nama"] }}</td>
            <td>{{ $item["price"] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection