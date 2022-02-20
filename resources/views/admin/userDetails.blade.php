
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")

    <div style="position:relative;top:60px;right:-60px">
       <table class="table table-striped table-dark">
           <tr>
            <th style="padding:30px">Details of etudiant</th>
           </tr>
           <tr>
               <td>{{ $data->id }}</td>
           </tr>
           <tr>
               <td>{{ $data->apogee }}</td>
           </tr>
           <tr>
               <td>{{ $data->cne }}</td>
           </tr>
           <tr>
               <td>{{ $data->cin }}</td>
           </tr>
           <tr>
               <td>{{ $data->nom }}</td>
           </tr>
           <tr>
               <td>{{ $data->prenom }}</td>
           </tr>
           <tr>
               <td>{{ $data->date_de_naissance }}</td>
           </tr>
           <tr>
               <td>{{ $data->adresse }}</td>
           </tr>
           <tr>
               <td>{{ $data->email_institutionnel }}</td>
           </tr>
           <tr>
               <td>{{ $data->email_personnel }}</td>
           <tr>
               <td>{{ $data->sexe }}</td>
           </tr>
           <tr>
               <td>{{ $data->user_id }}</td>
           </tr>
       </table>

    </div>
</div>

    @include("admin.adminscript")
</body>
</html>
