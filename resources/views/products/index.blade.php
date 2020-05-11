<!DOCTYPE html>
<html>
<head>
    <title>Import Export Database Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
        <div class="card  mt-3">
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Import Data</button>
                    <a class="btn btn-secondary" href="{{ route('export') }}">Export Data</a>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>