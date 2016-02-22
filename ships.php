<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function changeIt(objName)
{
	//The image object accessed through its id we mentioned in the DIV block which is going to be visible currently
	var obj = document.getElementById(objName);
	
	//An array that hold the IDs of images that we mentioned in their DIV blocks
	var objId = new Array();
	
	//Storing the image IDs into the array starts here
	objId[0] = "image1";
	objId[1] = "image2";
	objId[2] = "image3";
	objId[3] = "image4";
	//Storing the image IDs into the array ends here
	
	//A counter variable going to use for iteration
	var i;
	
	//A variable that can hold all the other object references other than the object which is going to be visible
	var tempObj;
	
	//The following loop does the display of a single image based on its ID. The image whose ID we passed into this function will be the
	//only image that is displayed rest of the images will be hidden based on their IDs and that part has been handled by the else part
	//of the if statement within this loop.
	for(i=0;i<objId.length;i++)
	{
		if(objName == objId[i])
		{
			obj.style.display = "block";
		}
		else
		{
			tempObj = document.getElementById(objId[i]);
			tempObj.style.display = "none";	
		}
	}
	return;	
}
</script>
</head>

<body><div align="center">
<div id="image1">
<img src="siteimg/l1.gif" border="0" alt="Enterprise" style="height:225px;" />
</div>

<div id="image2" style="display:none">
<img src="siteimg/l4.gif" border="0" alt="Defiant" style="height:225px;" />
</div>

<div id="image3" style="display:none">
<img src="siteimg/l2.gif" border="0" alt="Voyager" style="height:225px;" />
</div>

<div id="image4" style="display:none">
<img src="siteimg/l3.gif" border="0" alt="Prometheus" style="height:225px;" />
</div>
<br><br><h5>
<a id="one" href="Enterprise" onclick="changeIt('image1'); return false">Enterprise</a> - 
<a id="two" href="Defiant" onclick="changeIt('image2'); return false">Defiant</a> - 
<a id="three" href="Voyager" onclick="changeIt('image3'); return false">Voyager</a> - 
<a id="four" href="Prometheus" onclick="changeIt('image4'); return false">Prometheus</a>
</h5></div></body>
</html>