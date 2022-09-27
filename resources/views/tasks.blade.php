<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet">

</head>
<body>
    <div class=container>
            @include('Header')

            <div class="row">
                <div class="col-md-6">
                    <div class="float-child1">
                        <div class="green">
                          <form action="{{ route('to-do-list.store') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insert task name" name="description">
                                <button type="submit" class="btn btn-primary block">Add</button>
                              </div>
                          </form>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="float-child2">
                        <div class="div">
                            <table class="table">
                                <tr># Task</tr>
                                @foreach($todolist as $task)                        
                                <tr>
                                    @if ($task['status'] == 1)
                                        <td style="text-decoration: line-through">{{$task['description'] }}</td>

                                    @else
                                        <td>{{$task['description'] }}
                                        
                                            {{-- delete task --}}
                                            <form method="POST" action="{{route('to-do-list.destroy',$task->id)}}" class="deleteform">
                                                @method('delete')
                                                @csrf
                                            
                                            <button id={{$task->id}} type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                            </form>

                                            {{-- task done --}}                                                               
                                            <a href="{{ route('to-do-list.edit',$task->id) }}" class="btn btn-success deleteform"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>

                                        </td>
                                    @endif
                                    
                                    
                                </tr>
                                @endforeach
                            </table>
                        </div>              
                    </div>
                </div>
            </div>
            
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <div class="float-footer">
                    <p>Copyright <span>&copy</span> 2020 All Rights Reserved.</p>
                </div>
                </div>
                
            </div>
    </div>
    
</body>
</html>
