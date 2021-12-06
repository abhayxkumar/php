<html>
<head>
    <title>Chess</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 50px;
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        td {
            width: 150px;
            height: 150px;
        }
        
        .black
        {
            height: 100px;
            width: 100px;
           background-color: black;
        }

        .white
        {
            height: 100px;
            width: 100px;
            background-color: white;
        }
    </style>
</head>
<body>
  <h1>Chessboard</h1>
<table>
    <?php
        for ($i = 1; $i < 8; $i++) 
        {
            echo "<tr>";
            for ($j = 1; $j < 8; $j++) 
            {
                if (($i + $j) % 2 == 0) 
                {
                    echo "<td class='black'></td>";
                } 
                else 
                {
                    echo "<td class='white'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    
    </table>
</body>
</html>