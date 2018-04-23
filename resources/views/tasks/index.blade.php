@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }}'s To Do List</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>To Do</th>
                                <th>Decisions</th>
                            </tr>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ link_to_route('task.show',$task->title,[$task->id]) }}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                            {{ link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-primary']) }}
                                            |

                                            {!! Form::button('Did It',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}


                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

                {{ link_to_route('task.create','Add It',null,['class'=>'btn btn-success']) }}

            </div>
        </div>
    </div>
@endsection