<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.style10 {color: #FF0000; font-weight: bold; font-size: 18px; }
table {
padding-top:3px;
margin-left:0;
padding-left:0;
}
</style>
<?php 
if (file_exists('check.php')) {
include_once("check.php");
} 
if (file_exists('gvars.php')) {
include_once("gvars.php");
} 
if (file_exists('assets.php')) {
include_once("assets.php");
}
$sMode="";
$sCnd="";
$sErrMsg="";
$sSql="";
$UserId="";
$UserName="";
$EmpName="";
$Password="";
$MobileNo="";
$MobileNumber="";
$EmailId="";
$RoleId="";
$RecStatus="";
$InsDt="";
$ModDt="";
$UserId="";
$Emailid="";
$Passsword="";
$RoleId="";
$InsDt="";
$ModDt="";
$UserName="";
$UniqueName="";
$RecStatus="";
$HeadUserId="";
$RoleName="";

if(isset($_GET["Mode"]))
$sMode=$_GET["Mode"];
else
$sMode="LIST";
if($sMode=="SAVE")
{
$Emailid=$_REQUEST["txtEmailid"];
$UserName=$_REQUEST["txtUserName"];
$Passsword=$_REQUEST["txtPasssword"];
$MobileNumber=$_REQUEST["txtMobileNumber"];
$UserId=$_REQUEST['txtUserId'];
$RoleId=$_REQUEST["lstRoleId"];
$UniqueName=$_REQUEST["UniqueName"];
$HeadUserId=$_REQUEST["lstHeadUserId"];

//$check="SELECT * FROM `sme_user` WHERE `Emailid`='$Emailid' where ";
//$checking=mysqli_query($con,$check);
//$countCheck=mysqli_num_rows($checking);
//if($countCheck==0)
//{

if(!empty($UserId))
{
  if(empty($sErrMsg))
  {
    $sSql="Update sme_user set Emailid='$Emailid',Passsword='$Passsword',UserName='$UserName',RoleId='$RoleId', HeadUserId='$HeadUserId', ModDt=CURRENT_TIMESTAMP, `MobileNumber`='$MobileNumber', `UniqueName`='$UniqueName' where UserId=" . $UserId . "";
  // echo $sSql;
  mysqli_query($con, $sSql);
  if(mysqli_affected_rows($con)<0)
  $sErrMsg="Unable to update record into DB.";
  else
  $sErrMsg="Successfully updated.";
  }
}
else
{
if(empty($sErrMsg))
{
$sSql="Insert into sme_user (Emailid,Passsword,RoleId,InsDt,UniqueName,UserName,MobileNumber, HeadUserId) values('$Emailid','$Passsword','$RoleId',current_timestamp,'$UniqueName','$UserName','$MobileNumber','$HeadUserId')";
echo $sSql;
mysqli_query($con, $sSql);
if(mysqli_affected_rows($con)<0)
$sErrMsg="Unable to insert record into DB.";
Else
$sErrMsg="Successfully updated.";
}
}
/* }
else
{
	$sErrMsg="Email ID Already Exist.";
} */
$_SESSION["MSG"]=$sErrMsg;
echo "<BR>$sErrMsg";
header("Location: UserMaster.php", TRUE, 301);
exit(); 
}
else if($sMode=="DELETE")
{
$UserId=$_REQUEST["UserId"];$sSql="";
$sErrMsg="";
if(empty($sErrMsg))
{
$sSql="Update sme_user set Emailid=concat('~',Emailid,'~'),RecStatus=0 where UserId='$UserId'";
echo $sSql;
mysqli_query($con, $sSql);
if(mysqli_affected_rows($con)<0)
$sErrMsg="Unable to update record into DB.";
Else
$sErrMsg="Successfully deleted.";
}
$_SESSION["MSG"]=$sErrMsg;
echo "<BR>$sErrMsg";
header("Location: UserMaster.php", TRUE, 301);
exit(); 
}
if(isset($_SESSION["MSG"]))
{
$sErrMsg=$_SESSION["MSG"];
$_SESSION["MSG"]="";
}
?>
<body>
<div id="container">
<?php 
$sSql = "Select a.UserId, a.Emailid,a.UniqueName,a.UserName,a.MobileNumber, a.Passsword, a.RoleId, b.RoleName, b.RoleId, a.InsDt, HeadUserId from sme_user a, sme_role b  where a.recstatus = 1  and a.RoleId = b.RoleId $sCnd";
$rs = mysqli_query($con, $sSql);
?>
<form name="form1" action="UserMaster.php" method="post">
<table width='100%'>
<tr>
<td class='pagehead'>
<table width="100%">
<tr>
<td width="61%" >&nbsp;&nbsp;&nbsp;<span class="pageheader" >User Master</span> </td>
<td width="11%" > </td>
<td width="28%"  class="pageaction" align="right"><?php echo $sErrMsg;?>
<?php
if($sMode=="LIST")
{
?>
<input type="button" name="cmdAdd" value="Add" class="buttons" onclick="fnAdd();" accesskey="A"/>
<?php
}
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
<div class="box-content">
<?php 
if($sMode=="LIST")
{
?>
<Table class="TabData" id="TabProduct" width="100%">
<thead>
<tr>
<th width="5%" align=center>Edit</th><th width="10%" >Sl.No.</th>
<th width="10%" >RM Detail</th>
<th width="10%" >User Name</th>
<th width="10%" >Email Id</th>
<th width="10%" >Mobile number</th>
<th width="10%" >Role Name</th>
<th width="5%" align=center>Del</th>
</tr>
</thead>
<tbody>	
<?php 
$i=1;
while($row = mysqli_fetch_array($rs)){
echo "<tr>";
echo "<td align=center><a onclick=\"fnEdit(".  $row['UserId'] .",this);\">Edit</a></td>";
//echo "<td>". $row['UserId'] ."</td>";
echo "<td>".$i."</td>";
echo "<td>". $row['UniqueName'] ."</td>";
echo "<td>". $row['UserName'] ."</td>";
echo "<td>". $row['Emailid'] ."</td>";
echo "<td>". $row['MobileNumber'] ."</td>";
echo "<td>". $row['RoleName'] ."</td>";
echo "<td align=center><a onclick=\"fnDelete(".  $row['UserId'] .",this);\">Del</a></td>";
echo "</tr>";
$i=$i+1;
}
echo "</tbody>";
?>
</Table><br>
<?php
}
else if($sMode=="ADD" Or $sMode=="EDIT")
{
if($sMode=="EDIT")
{
$UserId=$_GET['UserId'];
$sSql="Select a.Emailid, a.Passsword, a.RoleId,a.UniqueName,a.UserName,a.MobileNumber, a.InsDt, b.RoleName, a.HeadUserId from sme_user a, sme_role b where a.RoleId = b.RoleId and UserId='$UserId'";
$rs=mysqli_query($con, $sSql);
if($row=mysqli_fetch_array($rs))
{
$Emailid=$row['Emailid'];
$Passsword=$row['Passsword'];
$RoleId=$row['RoleId'];
$UniqueName=$row['UniqueName'];
$UserName=$row['UserName'];
$RoleName=$row['RoleName'];
$MobileNumber=$row['MobileNumber'];
$HeadUserId=$row['HeadUserId'];
}
}
?>
<Table  width="70%" align="center" border='0'>

<tr>
<td>RM Detail<span style="color: red;">*</span></td>
<td><input type="text" size="20" maxlength="50" name="UniqueName" id="UniqueName" value="<?php echo $UniqueName;?>" /></td>
</tr>

<tr>
<td>Email Id</td>
<td><input type="text" size="20" maxlength="50" name="txtEmailid" id="txtEmailid" value="<?php echo $Emailid;?>" /></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><input type="text" size="20" maxlength="10" name="txtMobileNumber" id="txtMobileNumber" value="<?php echo $MobileNumber;?>" /></td>
</tr>

<tr>
<td>User Name<span style="color: red;">*</span></td>
<td><input type="text" size="20" maxlength="50" name="txtUserName" id="txtUserName" value="<?php echo $UserName;?>" /></td>
</tr>

<tr>
<td>Password <span style="color: red;">*</span></td>
<td><input type="text" size="20" maxlength="50" name="txtPasssword" id="txtPasssword" value="<?php echo $Passsword;?>" /></td>
</tr>
<tr>
<td>Role Name</td>
<td>
<Select name="lstRoleId" id="lstRoleId" onchange="fnShowHead(this);">
<?php
$sSql="Select RoleName as tmpDispCol, RoleId as tmpValueCol from sme_role where RecStatus=1";
FillListQuery($sSql, $con, "tmpDispCol", "tmpValueCol", $RoleId);
?>
</Select>
<input type="text" size="10" name="txtUserId" style="display:none"  value="<?php echo $UserId;?>"/>
</td>
</tr>

<tr id='trHeadUserId' <?php if($RoleName!='FSE' and $RoleName!='TC') echo "style=\"display:none;\""; ?>>
<td>Back office User</td>
<td><Select name="lstHeadUserId" id="lstHeadUserId">
<?php
$sSql="Select UserName as tmpDispCol, UserId as tmpValueCol from sme_user where roleid in (select roleid from sme_role where rolename ='BO') and RecStatus=1";
FillListQuery($sSql, $con, "tmpDispCol", "tmpValueCol", $HeadUserId);
?>
</Select>
<input type="text" size="10" name="txtUserId" style="display:none"  value="<?php echo $UserId;?>"/>
</td>
</tr>

<tr><td colspan="2">&nbsp; </td></tr>

<tr>
<td align="center" colspan="2"><input type="button" accesskey="S" onClick="return fnSave();" class="button" value="Save">&nbsp;
<input type="button" accesskey="B" onClick="fnBack();" class="button" value="Back"></td>
</tr>
</Table>
</td>
</tr>
</Table><br>
<?php
}?>
</Div>
</DIV>

<script>
function fnShowHead(objRole)
{
//alert("X"+$("#lstRoleId option:selected").text()+"X");
if($("#lstRoleId option:selected").text()=='FSE' || $("#lstRoleId option:selected").text()=='TC')
	{
	$("#trHeadUserId").show();
	}
else
	{
	form1.lstHeadUserId.selectedIndex=0;
	$("#trHeadUserId").hide();
	
	}
}

function fnAdd()
{
window.location="UserMaster.php?Mode=ADD";
}
function fnBack()
{
form1.action="UserMaster.php";
form1.submit();
}
function fnEdit(UserId, objRow)
{
CurrTr=objRow.parentNode.parentNode;
window.location="UserMaster.php?Mode=EDIT&UserId="+UserId;
}
function fnDelete(UserId, objRow)
{
CurrTr=objRow.parentNode.parentNode;
Name=CurrTr.childNodes[1].innerHTML;
if(confirm("Name : " + Name + "\nPress OK to delete ?")==false)	{
return false;
}form1.action="UserMaster.php?Mode=DELETE&UserId="+UserId;
form1.submit();
}
function fnClear()
{
form1.txtEmailid.value="";
form1.txtPasssword.value="";
form1.txtRoleId.value="";
}
function fnSave()
{
//if(isNull(form1.txtEmailid,"Emailid")) return false;
//if(document.form1.txtEmailid.value)
 var x = document.form1.txtEmailid.value;
 if(x!='')
 {
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
		form1.txtEmailid.focus();
        return false;
    }
 }
 if(isNaN(form1.txtMobileNumber.value) || form1.txtMobileNumber.value.length>10)
 {
	 alert("Enter a Valid Phone Number with 10 Digits");
	 form1.txtMobileNumber.focus();
	 return false;
 }
 
 if(isNull(form1.UniqueName,"Unique Name")) return false;
 if(isNull(form1.txtUserName,"User Name")) return false;
if(isNull(form1.txtPasssword,"Passsword")) return false;

if(notSelected(form1.lstRoleId,"RoleId")) return false;
if($("#lstRoleId option:selected").text()=='FSE')
	{
		if(notSelected(form1.lstHeadUserId,"Backoffice User Id")) return false;
	}


form1.action="UserMaster.php?Mode=SAVE";
form1.submit();
}
$(document).ready(function() {
$('#TabProduct').dataTable( {
"sPaginationType": "full_numbers",
"iDisplayLength":"25"
} );
var oTable = $('#TabProduct').dataTable();
oTable.fnSort( [ [1,'asc'] ] );
} );
document.form1.UniqueName.focus();
</script>
</body></html>
