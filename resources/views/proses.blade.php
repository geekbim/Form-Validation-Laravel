<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Output Data</h3>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>Nama</td>
                                <td>{{$data->nama}}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>{{$data->pekerjaan}}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{$data->usia}} tahun</td>
                            </tr>
                        </table>
                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
</body>
</html>