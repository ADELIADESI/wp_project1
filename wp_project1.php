<!DOCTYPE html>
<html>
<head>
    
    <title>Tugas 1 Pemrograman Web</title>
</head>
<body>
    <h1> Menghitung Luas Segitiga </h1> <br>
    <form method="POST" action="#">
        Nilai Alas:<br>
        <input type="number" name="txALAS" min="0" max="999" required><br><br>

        <form method="POST" action="#">
            Nilai Tinggi:<br>
            <input type="number" name="txTINGGI" min="0" max="999" required><br><br>  
        Luas:<br>
        <textarea name="luas" id="luas">
      
        <?php
            
        if(isset($_POST['hasil'])){
                $alas    =$_POST["txALAS"];
                $tinggi    =$_POST["txTINGGI"];
                $luas = $alas * $tinggi * 0.5;
                echo $luas ;
            }
            ?>
              </textarea>
            <br> <input type="submit" name="hasil" value="hasil">
           
            
        </form>
      
        
        
    </form>
</body>
</html>
