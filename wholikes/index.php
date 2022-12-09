<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhoLikes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="card">
        <div>
            <img class="post" src="https://uploads.metropoles.com/wp-content/uploads/2021/06/09110407/cachorro-fofo-usando-oculos_23-2148917262-1.jpg">
        </div>
        <button id="button-like">
            <img class="likes" src="https://img.icons8.com/dotty/512/thumb-up.png">
        </button>
        <button id="button-dislike">
            <img class="likes" src="https://img.icons8.com/dotty/512/thumb-up.png">
        </button>

        <?php 

        function mostrarCurtidas($nomes = []) {
            if (count($nomes)>=4) {
                echo $nomes[0].", ".$nomes[1]. " e outros ".(count($nomes)-2)." <b>Curtiram isso</b>";
            } else {
                echo $nomes[0]." e ".$nomes[1]. " <b>Curtiram isso</b>";
            }
        }
//adicionar os nomes dentro deste array
        $nomes = ["Vini", "Malko"];
//-------------------------------------
        mostrarCurtidas($nomes);

        ?>
            
    </div>    

</body>
</html>