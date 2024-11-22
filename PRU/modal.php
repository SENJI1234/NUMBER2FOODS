
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="last.css">

<body>


        <div class="ones" id="modal">
            
            <span class="close" onclick="closeModal()">&times</span>
            <h1>Order product</h1>
          
            
            <form action="SUBMIT.PHP" method="post">
                <img src="images/banana.png.png" alt=""><br>
                <H3>Banana</H3>

                <label for="customerName">Customer Name:</label><br>
                <input type="text" name="customerName"><br>

                <label for="customerContact">Contact information:</label><br>
                <input type="text" name="customerContact"><br>



                <label for="customerOption">Buy Option:</label><br>
                <select name="customerOption" id="">
                    <option value="Per_piece">Per Piece</option>
            <option value="Per_piece">Per kilo</option>
        </select><BR>


        <label for="customerQuantity">QUANTITY:</label><br>
                <input type="text" name="customerQuantity"><br>
    
            
            <h3>Total prize $30:00 </h3>
            <button>Submit Order</button>
        </div>
    </div>
         
        </form>
    </div>
</body>
</html>