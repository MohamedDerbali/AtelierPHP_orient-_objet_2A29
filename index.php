<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $arr = [2023, "hello", false, 2022];
    $arr_asso = ["name" => "ali", "age" => 25];
    array_push($arr, $arr_asso);
    // var_dump($arr);
    // print_r($arr);
    ?>
    <table border="1">
        <thead>
            <th>key</th>
            <th>valeur</th>
        </thead>
        <tbody>
            <?php
            for($i= 0;$i<count($arr);$i++){
                if(is_array($arr[$i])){
                    echo '<tr>
                    <td>'.$i.'</td>
                    <td>{name: '.$arr[$i]['name'].', age:'.$arr[$i]['age'].'}</td>
                </tr>';
                }else {
                    echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$arr[$i].'</td>
                </tr>';
                }
            
            }
            ?>
            
        </tbody>
    </table>
</body>
</html>