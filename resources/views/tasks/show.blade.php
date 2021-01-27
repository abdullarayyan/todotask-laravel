@extends('tasks.layout')
@section('content')

    <div class="row">
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Show Task
                    </div>

                    <div class="panel-body">

                        <a type="submit" class="btn btn-warning" href="{{route('tasks.index')}}" > <i class="fa fa-arrow-left"></i> Back</a>
                        <p></p>



                    <div class="panel-body">



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $task->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $task->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Due-date:</strong>
                {{ $task->due_date}}
            </div>
        </div>

    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
