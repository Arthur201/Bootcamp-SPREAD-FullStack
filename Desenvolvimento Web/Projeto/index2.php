<html>

    <head>
        <title> Site em PHP mesclando CSS e JS </title>

        <script src = "<script src=https://code.jquery.com/jquery-3.6.0.min.js"> </script>">

        <style type = "text/css">
            .linha {
                font-weight: bold;
                color: red;
                padding-left: 8px;
                line-height: 50px;

            }

            </style>


    </head>

    <body> 

        <?php
            for ($i = 0; $i < 10; $i++){
                print ("<span class=\" linha\">Linha Número " .$i . "<br />");
            }

        ?>

    </body>

    <script type = "text/javascript">
        $(document).ready(function() {
            alert("UUUHUUUL DEU CERTO");
        });
    </script>


</html>
