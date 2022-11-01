@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <!--Form to add new task-->
            <form method="POST" action="{{ route('task.store') }}">
                @csrf

                <!--Task description-->
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="description" type="text" placeholder="Insert task name"
                        class="form-control" name="description" value="{{ old('description') }}" required>
                    </div>
                </div>

                <!--Submit-->
                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                        <button type="submit" class="btn btn-primary form-control">Add</button>
                    </div>
                </div>

            </form>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body" style="background-color: white; padding: 20px">
                    <!--Display tasks inside a form to edit each task-->
                    @if ($tasks->count())
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Task</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($tasks as $task)
                            <input type="hidden" name="task_ids[]" value="{{ $task->task_id }}">
                            <tr>
                                <td>{{ $task->task_id }}</td>
                                {{-- If task complete, display with line through --}}
                                @if ($task->is_complete)
                                <td style="text-decoration: line-through">{{ $task->description }}</td>
                                {{-- If task not complete, display buttons --}}
                                @else
                                <td>
                                    <div class="row">

                                        <div class="col-lg-9 col-xs-9">
                                            {{ $task->description }}
                                        </div>

                                        <!--Complete task-->
                                        <div class="col-lg-1 col-xs-1">
                                            <a href="{{ route('task.complete', ['task' => $task->task_id]) }}" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                </svg>
                                            </a>
                                        </div>

                                        <!--Delete task-->
                                        <div class="col-lg-1 col-xs-1">
                                            <form action="{{ route('task.destroy', ['task' => $task->task_id]) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('Delete') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <div class="alert alert-info">
                    No tasks
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
