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
<div>Your form has been submit.</div>
<br>
<div><b>Your Details are mentioned below.</b></div>
<br>

<table>
 
  <tr>
    <td>Email</td>
    <td>{{$request->mail}}</td>
  </tr>
  <tr>
    <td>Message</td>
    <td>{{$request->message}}</td>
  </tr>
</table>    
</body>
</html>