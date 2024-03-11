<?php
$array=array("Sonoo"=>"350000","johng"=>"23422","Karthik"=>"40000");
?>
<table border='2'><tr><td>name</td><td>Salary</td></tr>
<?php foreach($array as $a=>$v)
{?>
<tr>
    <td><?php echo $a; ?></td>
    <td><?php echo $v; ?></td>
</tr>
<?php } ?>