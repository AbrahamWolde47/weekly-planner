@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Weekly Planner</div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-8">
                                {!! Form::open(['url' => 'info']) !!}

                                {{Form::label('projects','Projects:')}}
                                {{Form::text('projects', null, array('class' => 'form-control'))}}

                                {{Form::label('training','Training:')}}
                                {{Form::text('training', null, array('class' => 'form-control'))}}

                                {{Form::label('Challenges','Challenges:')}}
                                {{Form::text('Challenges', null, array('class' => 'form-control'))}}

                                {{Form::label('personal_projects','Personal Projects:')}}
                                {{Form::text('personal_projects', null, array('class' => 'form-control'))}}

                                {{Form::submit('Submit My Plan', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
