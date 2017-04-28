<h1>Siguenos en Twitter <?php echo $twitter;?></h1>
<h1>Siguenos en facebook <?php echo $facebook;?></h1>

<?php foreach($model as $data):?>

<h1><?php echo $data->username;?></h1>

<?php endforeach;?>
