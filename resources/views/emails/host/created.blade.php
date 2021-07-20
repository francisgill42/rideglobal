<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<div>Dear {{$request->name}},</div>
<br>
<div>Your account has been created.</div>
<br>
<div><b>Your Details are mentioned below.</b></div>
<br>

<table>
 
  <tr>
    <td>Name</td>
    <td>{{$request->name}}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{{$request->email}}</td>
  </tr>
  <tr>
    <td>password</td>
    <td>{{$request->password}}</td>
  </tr>
  <tr>
    <td>Contact</td>
    <td>{{$request->contact}}</td>
  </tr>
  <tr>
    <td>Country</td>
    <td>{{$request->country}}</td>
  </tr>
  <tr>
    <td>City</td>
    <td>{{$request->city}}</td>
  </tr>
  <tr>
    <td>Starting Date</td>
    <td>{{$request->starting_date}}</td>
  </tr>
  <tr>
    <td>Location</td>
    <td>{{$request->location}}</td>
  </tr>
  <tr>
    <td>Cause</td>
    <td>{{$request->cause}}</td>
  </tr>
  <tr>
    <td>Description</td>
    <td>{{$request->description}}</td>
  </tr>
</table>    
</body>
</html>