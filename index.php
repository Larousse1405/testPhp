<!DOCTYPE html>
<html>
    <head>
        <title>Php List</title>
        <meta charset = "utf-8">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <?php


        // <ul class="list-group">
        // <li class="list-group-item">An item</li>
        // <li class="list-group-item">A second item</li>
        // <li class="list-group-item">A third item</li>
        // <li class="list-group-item">A fourth item</li>
        // <li class="list-group-item">And a fifth one</li>
        // </ul>


        $n = 5;
        echo "<ul class='list-group'>";
        for($i=0; $i<5; $i++){
            echo "<li class='list-group-item'>item".($i+1)."</li>";
        }
        echo "</ul>";
        echo "<a href='./views/pages/add.php' class='btn btn-primary m-5'>Ajouter Item</a>";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>