<html>
<head>
    <tittle>Hola</tittle>
</head>
<body>
    <h1>Fecha: <?=date("d.m.y")?></h1>
    <?php
    if(date("d")%2==0){
        echo "Hoy es un día par";
        } else {
        echo "Hoy es un día impar";   
    }
    ?>
</body>
</html>
