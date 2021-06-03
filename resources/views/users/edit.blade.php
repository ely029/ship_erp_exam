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
    <form method="POST" action="{{ url('edit') }}">
    @csrf
    @foreach($users as $user)
    <input type="hidden" name="id" value="{{ $user->id }}">
    <table class="table">
    <tr>
    <td>Name:</td><td><input type="text" name="name" value="{{ $user->name }}" class="form-control" required></td>
    </tr>
    <tr>
    <td>Email:</td><td><input type="email" name="email" value="{{ $user->email }}" class="form-control" required></td>
    </tr>
    <tr>
    <td>Address:</td><td><input type="text" name="address" value="{{ $user->address }}" class="form-control" required></td>
    </tr>
    <tr>
    <td>Telephone/Cellphone Number:</td><td><input type="text" name="phone_number" maxlength="11" value="{{ $user->phone_number }}"  class="form-control" required></td>
    </tr>
    <tr>
    <td>Nationality:</td><td><input type="text" name="nationality" maxlength="50" value="{{ $user->nationality }}" class="form-control" required></td>
    </tr>
    <tr>
    <td>Gender:</td><td><select name="gender" class="form-control">
    <option value="Male" {{ $user->gender == 'Male' ? 'selected' : ''}}>Male</option>
    <option value="Female" {{ $user->gender == 'Female' ? 'selected' : ''}}>Female</option>
    </select>
    </td>
    </tr>
    <tr>
    <td><input type="submit" class="btn btn-success" value="Click to Edit"></td>
    <tr>
    </table>
    @endforeach
    </div>
    </body>
</html>
