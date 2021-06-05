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
        $text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro commodi saepe assumenda iste,
        repudiandae vel voluptatibus consectetur ex sint deserunt modi officia voluptatum nihil soluta.
        Sapiente temporibus unde dolorum perferendis.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt inventore cupiditate tempora illum!
        Provident dignissimos nesciunt obcaecati aliquid, maxime, non tenetur, adipisci autem eaque modi sint. Ipsum incidunt fugiat expedita?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem hic placeat distinctio maxime tenetur quibusdam,
        dolorum expedita fugiat non perferendis inventore nostrum minus odio ipsam, laudantium quasi dolor consectetur? Fugit?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum necessitatibus, distinctio, quae mollitia aperiam aspernatur,
        consequatur corporis vitae animi ipsa nesciunt accusamus? Ducimus, autem nulla culpa inventore quia fugiat.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eveniet aut dicta laboriosam,
        assumenda id rerum possimus provident voluptatem voluptatum corporis vero voluptates officia qui quos quasi placeat numquam consequatur.";

        $newText  =  explode('.', $text);
        echo var_dump($newText);    
    ?>
    
</body>
</html>