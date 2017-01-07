<?php 
if(count($data)>0)
{
   echo count($data);
$mydata = array();
$mydata = $data; //store data passed from controller to view
//print_r($mydata);
echo "<table border='1' cellspacing='0' cellpadding='0'><tr><th>Sno</th><th>Student Name</th><th>Course</th></tr>";
foreach($mydata as $key=>$value)
{
  echo "<tr>";
  echo "<td>". $mydata[$key]->sno."</td>";
  echo "<td>". $mydata[$key]->sname."</td>";
  echo "<td>". $mydata[$key]->course."</td>";
  echo "</tr>";      
}
echo "</table>";
}
else
{
    echo "No data found!"
}
 
 
?>