@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"> All avialable plans</h3> </div>
                
        <div class="panel-body">
           
      
               <div calss="table-responsive">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            
                            <th>Projects</th>
                            <th>trainings</th>
                            <th>challenges</th>
                            <th>Personal Projects</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($plans as $key=>$plan)
                            <tr>
                            <td>{{$plan->projects}}</td>
                            <td>{{$plan->training}}</td>
                            <td>{{$plan->Challenges}}</td>
                            <td>{{$plan->personal_projects}}</td>
                                
                            </tr>
                            @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
          
@endsection
