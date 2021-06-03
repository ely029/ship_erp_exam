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
    <form method="POST" action="{{ url('create') }}">
    @csrf
    <table class="table">
    <tr>
    <td>Name:</td><td><input type="text" name="name" class="form-control" required></td>
    </tr>
    <tr>
    <td>Email:</td><td><input type="email" name="email" class="form-control" required></td>
    </tr>
    <tr>
    <td>Address:</td><td><input type="text" name="address" class="form-control" required></td>
    </tr>
    <tr>
    <td>Phone Number:</td><td><input type="text" name="phone_number" maxlength="11" class="form-control" required></td>
    </tr>
    <tr>
    <td>Nationality:</td><td><input type="text" name="nationality" maxlength="50" class="form-control" required></td>
    </tr>
    <tr>
    <td>Gender:</td><td><select name="gender" class="form-control">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    </td>
    </tr>
    <tr>
    <td><input type="submit" class="btn btn-success" value="Click to Create"></td>
    <tr>
    </table>
    </div>
    </body>
</html>
