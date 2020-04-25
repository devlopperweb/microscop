<? $image = "https://static.arageek.com/wp-content/uploads/2019/02/mnm.jpg"; ?>
<img src="<?=$image?>" height="100" width="100" ><br />
<?
 $im = imagecreatefromjpeg($image);
 $dx = imagesx($im);
 $dy = imagesy($im);
 for($y = 0; $y < $dy; $y++) {
 for($x=0; $x < $dx; $x++) {
 $col = imagecolorat($im, $x, $y);
 $rgb = imagecolorsforindex($im,$col);
 printf("<font color=#%02x%02x%02x>01</font>",
 $rgb['red'],$rgb['green'],$rgb['blue']);
 }
 echo "<br />\n";
 }
 imagedestroy($im);
?>
