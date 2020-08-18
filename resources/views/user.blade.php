
@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<table border=1 class="table table-primary">
<thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
      <th scope="col">First Month</th>
      <th scope="col">Score</th>
      <th scope="col">Second Month</th>
      <th scope="col">Score</th>

    </tr>
  </thead>
    @foreach($data as $var)
        
        <tr scope="row"><td>{{$var['name']}} </td>
        <td>{{$var['phone']}} </td>
        <td>{{$var['email']}} </td>
        <td>{{$var['address']}} </td>
            @foreach($var['score'] as $key=>$value)
            <td>{{$key}}</td> <td>{{$value}}</td>
            @endforeach
        </tr>

      <br>
       @endforeach
<table>

@endsection