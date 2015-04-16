

<footer><p>&copy; Deniz Balcı</p></footer>
<?php wp_footer(); ?>

<script type="text/javascript">// <![CDATA[
function arkaPlanDegis(resim)
{
document.body.style.backgroundImage = 'url(' + resim + ')';
createCookie("arkaPlan",resim,99);
}
 
function createCookie(name,value,days) {
if (days) {
var date = new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires = "; expires="+date.toGMTString();
}
else var expires = "";
document.cookie = name+"="+value+expires+"; path=/";
}
 
function readCookie(name) {
var nameEQ = name + "=";
var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1,c.length);
if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
}
return null;
}
 
function eraseCookie(name) {
createCookie(name,"",-1);
}
 
function CagirEskiArkaplan()
{
var a=readCookie("arkaPlan");
arkaPlanDegis(a);
}
 
window.onload = CagirEskiArkaplan;
// ]]></script></pre>
<div id="rakBar"><center>
<div class="divArkaResimler">
<div class="divArkaResim"><a onclick="arkaPlanDegis('http://blog.rakkoc.com/bg/tahta1.jpg');" href="javascript:void(0)"><img src="http://blog.rakkoc.com/bg/tahta1.jpg" alt="" width="46" height="46" border="0" /></a></div>
<div class="divArkaResim"><a onclick="arkaPlanDegis('http://blog.rakkoc.com/bg/tahta2.jpg');" href="javascript:void(0)"><img src="http://blog.rakkoc.com/bg/tahta2.jpg" alt="" width="46" height="46" border="0" /></a></div>
<div class="divArkaResim"><a onclick="arkaPlanDegis('http://blog.rakkoc.com/bg/kare.jpg');" href="javascript:void(0)"><img src="http://blog.rakkoc.com/bg/kare.jpg" alt="" width="46" height="46" border="0" /></a></div>
<div class="divArkaResim"><a onclick="arkaPlanDegis('http://blog.rakkoc.com/bg/yok.jpg');" href="javascript:void(0)"><img src="http://blog.rakkoc.com/bg/yok.jpg" alt="" width="46" height="46" border="0" /></a></div>
</div>
</center></div>
<pre>
</body>
</html>