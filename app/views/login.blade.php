<html>
    <head>
    <title>SME</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
 table,tr,td
      {
          padding:10px;
      }
      h1
      {
          text-align:center;
      }
 </style>
    </head>
<body>
    <h1>SME LOGIN</h1>
<form action="http://localhost/LoginCheck" method="POST">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <center>
<table>
    <tr>
    <td>User Name:</td>
    <td><input type="text" class="form-control" name="Username"/></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" class="form-control" name="Password"/></td>
    </tr>
    <pre>
      {{var_dump(Session::has('Username'))}}
    </pre>
       <tr>
        <td> </td>
        <td><br>
               <input type="submit" class="btn btn-primary" name="Login" value="Login"/>
               <input type="submit" class="btn btn-primary" name="Clear" value="Clear"/>
               
           </td>
    </tr>
    </table>
        </center>
</form>
    </body></html>

    