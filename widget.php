<div align="center" style="width:170px">
Enter the Amazon link you want to convert, then click the "Make Affiliate Link" button.
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
	<p><input type="text" name="link"></p>
	<p><input type="submit" value="Make Affiliate Link!"></p>
</form>
<?php
$affiliate = "?ie=UTF8&tag=cyrstecpro-20&linkCode=as2&camp=1789&creative=390957&creativeASIN=";
$link = htmlspecialchars($_GET['link']);
if (isset($_GET['link'])) {
	$pid = substr(strstr($link,"p/"),2,10);
	echo "Here's your new Amazon Affiliate link: ";
	echo "<br><a href=http://www.amazon.com/gp/product/", $pid, $affiliate, $pid, ">http://www.amazon.com/gp/product/", $pid, $affiliate, $pid, "</a>"; //This line makes a "clickable" link.
}
?>
</div>