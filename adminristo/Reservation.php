<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
 
</head>
<body>
    <div class="adm">
            <?php
            $conn = new mysqli('localhost','root','','commande');
            $sql="select * from reservation order by id desc";
            $result=mysqli_query($conn,$sql);
            $resultcheck=mysqli_num_rows($result);
            if($resultcheck>0){
                  while( $row =mysqli_fetch_assoc($result))
                  {
                              echo "<div class='tst'>".
                              '<input type="checkbox" id="scales" name="scales" style="-webkit-transform: scale(2);
                              -o-transform: scale(2);
                              transform: scale(1.5); margin-left: -3px;
                              margin-right: 18px;">'
                              ."<div>".$row['nom_complet']."</div>"
                              ."<div>".$row['numero_table']."</div>"
                              ."<div>".$row['date']."</div>"

                              ."</div>";
                  }
            }
            
            ?>
      </div>
</body>
</html>
