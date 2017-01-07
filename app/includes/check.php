<?php
if(!isset($_SESSION["Login"]))
session_start();

return Redirect::intended('login');
if(!isset($_SESSION["Login"]))
{
	print <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "#">
<html>
  <head>
    <meta http-equiv="refresh" content="3; url=login.php?Msg=Session Timeout." target="_top">
  </head>
  <body>
    <h1>Session Timeout</h1>
	
  </body>
</html>
EOF;
	exit(0);
	return -1;
}
 

/*<SCRIPT LANGUAGE="JavaScript">
var cornmsg="Right click disabled!";
function mouse(envt) {
if (document.all) {
        if (event.button == 2 || event.button == 2) {
                alert(cornmsg);
                return false;
                }
        }
if (document.layers) {
        if (envt.which == 3) {
                alert(cornmsg);
                return false;
                }
        }
}
if (document.layers) {
        document.captureEvents(Event.mousedown);
        }
document.onmousedown=mouse;
</SCRIPT>*/

?>