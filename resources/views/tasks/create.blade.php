@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ToDo!</div>

                <div class="panel-body">
                    {!! Form::open(array('route'=>'task.store')) !!}

                        <div class="form-group">
                          {!! Form::label('title', 'Enter Title') !!}
                          {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::label('body', 'Description') !!}
                          {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {!! Form::button('Create', ['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>

                @if($errors->has())
                  <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection