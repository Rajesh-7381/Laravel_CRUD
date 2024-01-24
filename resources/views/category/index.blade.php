<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 10 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 10 CRUD Example Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ url('categories/create') }}"> add category</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> Name</th>
                    <th> description</th>
                    <th> is active</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            @if( $item->is_active )
                            Active
                            @else
                            In-Active
                        @endif
                    </td>
                        <td>
                            <a href="{{url('categories/'.$item->id.'/edit')}}" class="btn btn-success mx-2">edit</a>
                            <a href="{{url('categories/'.$item->id.'/delete')}}" class="btn btn-danger mx-2" onclick="return confirm('are you sure?')">delete</a>
                            {{-- <form action="{{ route('destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- {!! $companies->links() !!} --}}
    </div>
</body>
</html>