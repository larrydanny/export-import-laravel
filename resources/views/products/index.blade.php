<!DOCTYPE html>
<html>
<head>
    <title>Products Import Export Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Import Products</button>
                    <a class="btn btn-secondary" href="{{ route('export') }}">Export Products</a>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>    
                        <td>{{ $product->details }}</td>      
                        <td>{{ $product->created_at }}</td>      
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                    @endforeach
                </table>

                {!! $products->links() !!}
            </div>
        
        </div>
    </div>
   
</body>
</html>