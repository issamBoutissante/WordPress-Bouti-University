<h1>Hello </h1>
<?php 
$name ="issam"
?>
<h2>You are welcome into <?php echo $name ?> university</h2>
<h1><?php bloginfo('name')?></h1>
<p><?php bloginfo('description')?></p>
<?php
$names=array('issam','chaimae');
$counter=0;
while($counter<count($names)){
    ?>
    <h3><?php echo "hello $names[$counter]"?></h3>
    <?php
    $counter++;
}
?>