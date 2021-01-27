@extends('tasks.layout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Task
                    </div>

                    <div class="panel-body">

                        <a type="submit" class="btn btn-warning" href="{{route('tasks.index')}}" > <i class="fa fa-arrow-left"></i> Back</a>
                        <p></p>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Warning!</strong> Please check input field code<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('tasks.update',$task->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" value="{{ $task->title }}" class="form-control" placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $task->description }}</textarea>
                            </div>
                        </div>
                        <div class="panel-body">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Edit Task
                            </button>

                        </div>
                    </div>

                </form>
        </div>
    </div>

@endsection
