@extends('tasks.layout')

@section('content')

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Current Tasks
                            </div>
                            <table class="table table-striped task-table">
                                <thead>

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <th>&nbsp;
                                    <a class="btn btn-success" href="{{ route('tasks.create') }}"> Add new Task</a>
                                </th>


                                </thead>
                                <tbody>

                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Due-Date</th>
                                    <th width="250px"></th>
                                </tr>
                                @foreach ($tasks as $task)
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->due_date}}</td>


                                        <td>
                                            <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">


                                                <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}"><i class="glyphicon glyphicon-eye-open"></i></a>

                                                <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}"><i class="fa fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                            </div>



                                    <table class="table table-bordered">


                                    </table>

                            </div>
                        </div>

    {!! $tasks->links() !!}

@endsection
