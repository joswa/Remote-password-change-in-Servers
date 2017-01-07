<?php
ob_start();
?>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/bodystyles.css">
		<link rel="stylesheet" href="css/jquery.dataTables.css">
		<link href="css/jquery.datepick.css" rel="stylesheet">
		<link href="css/jquery.timepicker.css" rel="stylesheet">
		<!--<link href="images/logo2.jpg" rel="icon" />-->
                <link rel="stylesheet" type="text/css" href="css/pagingtab.css" />
                <link rel="stylesheet" href="./css/jquery-ui-1.8.16.custom.css" type="text/css" />
                
		
                 
		<script  type="text/javascript" src="js/jquery.js"></script>
                <script  type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                <script type="text/javascript" src="./js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
        
            <script type="text/javascript" src="js/script(2).js"></script>
        
		<script type="text/javascript" src="js/validate.js"></script>	
             
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>	
                  
		<script src="js/jquery.plugin.js"></script>
		<script src="js/jquery.datepick.js"></script>
        <script src="js/jquery.timepicker.js"></script>        
		
            <script>
    function addslashes(str) {

  return (str + '')
    .replace(/[\\"'()]/g, '\\$&')
    .replace(/\u0000/g, '\\0');
}
function gColSort(tabName, colIdx)
{
//alert(tabName+" " +colIdx)

	//var oTable = $('#'+tabName).dataTable();
	//alert(oTable + " ")
	//$('#'+tabName).tablesorter( {sortList: [colIdx,0]} ); 
	//alert(
	m1='#tabSearchDet';
//	alert(m1);
	//$(m1).tablesorter({sortList: [3,0]});
	$(m1).tablesorter();
	$(m1).trigger("update");    
    //oTable.fnSort([colIdx,'asc'] );
	//alert(colIdx)
}



function PreventSplChars(obj)
{
	
    nStr=obj.value;
    nStr1=nStr.replace(/[\"~`|]/g, '');
    obj.value=nStr1;
}
</script>