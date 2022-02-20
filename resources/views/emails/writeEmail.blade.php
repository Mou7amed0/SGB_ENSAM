<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write Email</title>
</head>
<body>
    <form class="forms-sample" method="get" action="{{url('./send-mail')}}">
        <span>Send email to {{ $data->email_personnel }}</span>
        <input id="email" name="email" value="{{ $data->email_personnel }}" hidden>
        <label for="subject">Subject</label>
        <input id="subject" type="text" name="title">
        <label for="body">Email body</label>
        <textarea name="body" id="body" cols="30" rows="10">
            Bonjour {{ $data->nom }} {{ $data->prenom }},

        </textarea>
        <input type="submit">
    </form>
</body>
</html>
