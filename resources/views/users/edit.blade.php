<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="text-center">
    <div class="container">
    @foreach($users as $user)
    <form method="POST" action="{{ url('/edit/'.$user->id.'/post') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $user->users->id }}">
    <table class="table">
    <tr>
    <td>Name:</td><td><input type="text" name="full_name" value="{{ $user->users->full_name }}" class="form-control" required></td>
    </tr>
    <tr>
    <td>Phone Number:</td><td><input type="text" name="phone_number" maxlength='13' value="{{ $user->phone_number }}" class="form-control" required></td>
    </tr>
    <tr>
    <td><input type="submit" class="btn btn-success" value="Click to Edit"></td>
    <tr>
    </table>
    @endforeach
    </div>
    </body>
</html>
