<?
$arr = [2,5,4,4,8,0,0,1,1,7,6,2,8,8,8]; //for example
$cnt = 0;
foreach($arr as $val){
	if(isset($pre_val) && $pre_val === $val){
		$cnt++;
	}
	$pre_val = $val;
}
echo $cnt;
?>
