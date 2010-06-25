<style type="text/css">
#layer1 {
	position: absolute;
	z-index: 1;
	float: left;
	visibility: hidden;
	width: 80%;
	height: 80%;
	left: 20px;
	top: 20px;
	background-color: black;
	opacity: .5;
	border: 1px solid #000;
	padding: 10px;
}

#close {
	float: center;
}
</style>
<script type="text/javascript" >

/* -----------------------------------------------
   Floating layer - v.1
   (c) 2006 www.haan.net
   contact: jeroen@haan.net
   You may use this script but please leave the credits on top intact.
   Please inform us of any improvements made.
   When usefull we will add your credits.
  ------------------------------------------------ */

x = 20;
y = 70;
function setVisible(obj)
{
	obj = document.getElementById(obj);
	obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
	obj = document.getElementById(obj);
	if (document.documentElement)
	{
		theLeft = document.documentElement.scrollLeft;
		theTop = document.documentElement.scrollTop;
	}
	else if (document.body)
	{
		theLeft = document.body.scrollLeft;
		theTop = document.body.scrollTop;
	}
	theLeft += x;
	theTop += y;
	obj.style.left = theLeft + 'px' ;
	obj.style.top = theTop + 'px' ;
	setTimeout("placeIt('layer1')",500);
}
window.onscroll = setTimeout("placeIt('layer1')",500);
</script>



<div id="layer1">
  <span id="close">
  
  <a href="javascript:setVisible('layer1')" style="text-decoration: none"><strong>Hide</strong></a></span>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
    enim ad minim veniam, quis nostrud exerci.</p>
  <br><br>
  <img src="award.gif" width="120" height="65" border="0">
</div>




