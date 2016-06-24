@extends('html')

@section('content')


 <h1> Tasks </h1>

<hr>
 @foreach($tasks as $task)

 <a href="{{ action('TasksController@detail',[$task->id])}}">
  <h3>

     {{ $task->task_data }}

  </h3>
</a>

  @endforeach

 </ul>
 
@stop 