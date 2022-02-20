<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include('admin.navbar')
    <div style="position:relative;top:60px;right:-60px">
        <table  class="table table-striped table-dark">
            <tr>
                <th style="padding:30px">Id</th>
                <th style="padding:30px">Apogée</th>
                <th style="padding:30px">Nom</th>
                <th style="padding:30px">Prénom</th>
                <th style="padding:30px">Date de naissance</th>
                <th style="padding:30px">Email personnel</th>
                <th style="padding:30px">Sexe</th>
                <th style="padding:30px">Actions</th>

            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->id}}</td>
                <td>{{$data->apogee}}</td>
                <td>{{$data->nom}}</td>
                <td>{{$data->prenom}}</td>
                <td>{{$data->date_de_naissance}}</td>
                <td>{{$data->email_personnel}}</td>
                <td>{{$data->sexe}}</td>

                <td>
                    <a href="{{ url('/showEtudiantDetails', $data->id) }}">Show details</a>
                    <a href="{{ url('/write-mail', $data->id) }}">Send email</a>
                    <a href="{{url('/deleteuser',$data->id)}}">Delete</a>
                </td>

            </tr>
            @endforeach
    </div>
</div>

    @include('admin.adminscript')
</body>
</html>
