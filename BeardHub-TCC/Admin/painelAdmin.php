<?php
 include "head.php";
?>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    <?php
    include "header.php";

    switch($_GET['r']){

        case 'menu':
                include "views/menu.php";
                break;
        case 'today':
                include "views/today.php";
                break;
        case 'concluidos':
                include "views/concluidos.php";
                break;
        case 'cancelados':
                include "views/cancelados.php";
                break;
        case 'lojaCopy':
                include "views/lojaCopy.php";
                break;
        case 'estabelecimento':
                include "views/estabelecimento.php";
                break;
        default:
                include "views/menu.php";
                break;
            
    }
    


    ?>
    <?php include "footer.php";?>
    
 <?php include "js.php"; ?>
 

</body>
</html>