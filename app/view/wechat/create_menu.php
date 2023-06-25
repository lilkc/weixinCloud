<?php
require "weixin.class.php";
 

	$menu = '{
	  "button": [
	  {
		  "name": "xinm",
		   "type": "view",
		  "url": "http://www.baidu.com"
	  }]}';


$ret = weixin::createMenu($menu);
//$ret = weixin::getMenu();
echo $ret;
if($ret)
{
while(list($key,$value)=each($ret)){ 
    echo $key; 
	echo  $value; 
   
//}
}
}
?>