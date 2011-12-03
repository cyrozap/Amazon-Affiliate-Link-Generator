<head>
<title>Cyrozap&#039;s Amazon Affiliate Link Generator</title>
</head>
<h2>Enter the Amazon link you want to convert, then click the "Make Affiliate Link" button.</h2>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
	<p><input type="text" name="link">
	<input type="submit" value="Make Affiliate Link!"></p>
</form>
<?php
$affiliate = "?ie=UTF8&tag=cyrstecpro-20&linkCode=as2&camp=1789&creative=390957&creativeASIN="; //This is what is in all of my Amazon Affiliate links. To get yours, make an affiliate link, then look for where it has a "?" then copy all the characters from the "?" to the "=" including those two signs.
$link = htmlspecialchars($_GET['link']); //This is the original Amazon link that is entered by the user.
if (isset($_GET['link'])) {
	$pid = substr(strstr($link,"p/"),2,10);
	echo "<h4>Here's your new Amazon Affiliate link: </h4>";
	//echo "http://www.amazon.com/gp/product/", $pid, $affiliate, $pid; //Uncomment this line to just make a text link.
	echo "<h4><a href=http://www.amazon.com/gp/product/", $pid, $affiliate, $pid, ">http://www.amazon.com/gp/product/", $pid, $affiliate, $pid, "</a></h4>"; //This line makes a "clickable" link.
}
?>
<br>
<p>License: <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA 3.0</a><br>
Original script by Cyrozap<br>
<a href="htp://cyrozap.com/">http://cyrozap.com/</a></p>
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a>