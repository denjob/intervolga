<?
//php version < 8

$_path_mini = 'image_mini.png';
$_path_src =  __DIR__ ."/image.png";
	
if(!file_exists($_path_mini)) {
	$src = imagecreatefrompng($_path_src);
	list($width, $height) = getimagesize($_path_src);

	$__cf = 1;
	if($width > $height)
		$__cf = $height/$width;
	elseif($width < $height)
		$__cf = $width/$height;
		
	$new_w = 200;
	$new_h = $new_w * $__cf;

	$dst = imagecreatetruecolor($new_w, $new_h);
	imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_w, $new_h, $width, $height);
	imagepng($dst, $_path_mini, 0);

	imagedestroy($src);
	imagedestroy($dst);
}
?>
<style>
#banner_1 {
	display:block;
	width:200px;
	height:100px;
	background-image:url(/<?=$_path_mini;?>);
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
}
</style>

<a href="#" id="banner_1" title="banner_1"></a>