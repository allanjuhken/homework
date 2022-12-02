<?php
include 'mysqli.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-ui-dist@1.13.1/jquery-ui.min.css">

    <title> Tunnitöö </title>
</head>

<body>
    <div class="container">
        <div class="row-2">
            <div class="col-sm-12 col-lg-6 mx-auto">
                <h1>Tunnitöö valmis, häid jõule</h1>
            </div>
        </div>
    </div>


    <?php
    $sql = 'SELECT * FROM simple_small WHERE id = '.$id;
    $res = $kl->dbGetArray($sql); // 
    ?>


        <table class= "table table-hover table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($res as $key=>$val) {
                    ?>
                    <tr>
                        <td class="text-end"><?php echo ($key+1+$start); ?>.</td>
                        <td><?php echo $val['id']; ?></td>
                        <td><?php echo $val['user'] ; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php

    ?>
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-ui-dist@1.13.1/jquery-ui.min.js"></script>

</body>

</html> 