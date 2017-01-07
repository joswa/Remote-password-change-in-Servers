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
        <td>txtMobileNumber:</td>
        <td><input type="text" class="form-control" name="txtMobileNumber"/></td>
    </tr>
     <tr>
        <td>Enter Course:</td>
        <td><input type="text" class="form-control" name="txtEmailid"/></td>
    </tr>
     <tr>
        <td>txtUserName:</td>
        <td><input type="text" class="form-control" name="txtUserName"/></td>
    </tr>
     <tr>
        <td>txtPasssword:</td>
        <td><input type="text" class="form-control" name="txtPasssword"/></td>
    </tr>
     <tr>
        <td>txtUserId</td>
        <td><input type="text" class="form-control" name="txtUserId"/></td>
    </tr>
     <tr>
        <td>lstRoleId</td>
        <td><input type="text" class="form-control" name="lstRoleId"/></td>
    </tr>
     <tr>
        <td>UniqueName</td>
        <td><input type="text" class="form-control" name="UniqueName"/></td>
    </tr>
     <tr>
        <td>lstHeadUserId</td>
        <td><input type="text" class="form-control" name="lstHeadUserId"/></td>
    

       <tr>
        <td> </td>
        <td><br>
               <input type="submit" class="btn btn-primary" name="insert" value="Add Record" onclick=fnadd()/>
               <input type="submit" class="btn btn-primary" name="update" value="Update Record" onclick=fnadd()/>
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
