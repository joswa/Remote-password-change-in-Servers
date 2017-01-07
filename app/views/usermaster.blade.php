<html>
    <head>
    <title>Insert data using Laravel</title>
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
    <h1>CRUD in Laravel 5  :</h1>
<form action="http://localhost/usermaster" method="POST">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <center>
<table>
    <tr>
    <td>Enter SNO:</td>
    <td><input type="text" class="form-control" name="sno"/></td>
    </tr>
    <tr>
        <td>Enter Name:</td>
        <td><input type="text" class="form-control" name="sname"/></td>
    </tr>
    
    <tr>
        <td>Enter Course:</td>
        <td><input type="text" class="form-control" name="course"/></td>
    </tr>
    
       <tr>
        <td> </td>
        <td><br>
               <input type="submit" class="btn btn-primary" name="insert" value="Add Record" onclick=fnadd()/>
               <input type="submit" class="btn btn-primary" name="update" value="Update Record"/>
               <input type="submit" class="btn btn-primary" name="delete" value="Delete Record"/>
               <input type="submit" class="btn btn-primary" name="show" value="Show Data"/>
            
           </td>
    </tr>
    </table>
        </center>
</form>
    </body></html>
<script type="text/javascript">
function fnAdd()
{
  form.action="usermaster?Mode=ADD";
//form.submit();
}
</script>