<?php
 	$length = $_POST['length'];
 	$data =$_POST['values'];
 	$output = array();
 	$splittedvalue=explode(" ",$data);
	foreach ($splittedvalue as $key => $value) {
	$splittedvalue[$key] = $value;
}
for ($i=0; $i < $length; $i++) {
	$beforeSum = 0;
	$afterSum = 0;
 	for ($j=$i; $j >= 0; $j--) { 
 		$beforeSum += $splittedvalue[$j];
 	}
 	for ($k=$i; $k < $length; $k++) { 
 		$afterSum += $splittedvalue[$k];
 	}
 	if($beforeSum == $afterSum)
 	{
 		array_push($output, $i);
 	}
}
echo json_encode($output);
?>
<!DOCTYPE html>
<html>
    <div class="col-md-4">
        <div class="form-group">
            <label for="outputValue">Output Values are</label>
            <textarea class="form-control" maxlength="5000" rows="1" id="outputvalues" ><?php foreach ($output as $key => $value) {
				 echo $value." ";}?></textarea>
        </div>
    </div>
</html>