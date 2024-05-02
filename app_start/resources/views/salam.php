
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>laravel</title>
</head>
<body>


    <h1>salam <?php echo $nom ." ". $prenom ?> </h1>
    <h2>cours : </h2>
    <ul>
        <?php foreach($cours as $value) : ?>
            <li><?php echo $value ?> </li>
        <?php endforeach ;?>
        </ul>
 
        <h2><?php echo $age ?><h2>

</body>
</html>