<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

    <?php require './libs/content.php'; ?>


    <h1 class="mt-5">Info about <?= $personInfo['name'] ?></h1>

    <ul>
    
        <li>
            <strong>Name: </strong><?= $personInfo['name'] ?>
        </li>

        <li>
            <strong>Age: </strong><?= $personInfo['age'] ?>
        </li>
    
        <li>
            <strong>Gender </strong>
            
            <?php if ($personInfo['age'] == 'male') {
                echo '&#x02640';
            } else { echo '&#x02642';} ?>
        </li>

        <li>
            <strong>Mood: </strong>

            <?php if ($personInfo['happy']){
                echo '&#128512';
            } else {echo '&#128546';} ?>

        </li>
    
        <li>
            <strong>Favorite things: </strong>
            <ul>
                <li>
                    <i>Movie: </i><?= $personInfo['favorites']['movie'] ?>
                </li>
            </ul>
            <ul>
                <li>
                    <i>Football club: </i><?= $personInfo['favorites']['club'] ?>
                </li>
            </ul>
            <ul>
                <li>
                    <i>Color: </i><?= $personInfo['favorites']['color'] ?>
                </li>
            </ul>
        </li>
        <li>
            <strong>Status: </strong> 
            
            <?php if ($personInfo['online']){
                echo '<span class="text-success">&#9679</span>';
            } else {echo '<span class="text-danger">&#9679</span>';} ?>
        </li>

    </ul>

    </div>

</body>
</html>
