
@extends('html')

@section('content')

@if($fname=="Dhaval")
<h1> About {{ $fname }} {{ $lname}} </h1>
@else 
<h1> New </h1>
@endif
@stop