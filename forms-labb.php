<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Medlemsuppgifter</title>
<style type="text/css">

body {
background-color:#FFFFFF;
color:#000000;    
}

.clearfix {
clear:both;
}

</style>

</head>

<body>

<h1>Följande uppgifter blev registrerade:</h1>
<br />

<!-- Här startar php-script som exekveras av webbservern -->

<?php

echo '<ul>';
echo '<li> <b>Betalsätt:</b> ',$_POST['payment'],'</li>';
echo '<li> <b>Förnamn:</b> ',$_POST['fname'],'</li>';
echo '<li> <b>Efternamn:</b> ',$_POST['ename'],'</li>';
echo '<li> <b>Adress:</b> ',$_POST['address'],'</li>';
echo '<li> <b>Postnummer:</b> ', $_POST['zip-code'],'</li>';
echo '<li> <b>Ort:</b> ', $_POST['city'],'</li>';
echo '<li> <b>Mobil:</b> ', $_POST['cell'],'</li>';
echo '<li> <b>E-post:</b> ', $_POST['mail'],'</li>';
echo '<li> <b>Lösenord:</b> ', $_POST['password'],'</li>';
echo '<li> <b>Erbjudanden via e-post:</b> ', $_POST['offers'],'</li>';
echo '<li> <b>E-postformat:</b> ', $_POST['mail-format'],'</li>';
echo '<li> <b>Kommentarer:</b> ', $_POST['comments'],'</li>';
echo '</ul>';
?>


<!-- Slut php-script -->

<pre>



</pre>


<!-- W3C logos for valid HTML5 and CSS3 -->
<div class="clearfix"></div>
<div>
<p>
<a href="http://validator.w3.org/check?uri=referer"><img
src="http://www.w3.org/html/logo/downloads/HTML5_Logo_64.png"
alt="Valid HTML5" height="50" width="50"
style="border:0;" /></a>
</p>
<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
<img style="border:0;width:88px;height:31px"
src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
alt="Valid CSS!" />
</a>
</p>
</div>

</body>
</html>
