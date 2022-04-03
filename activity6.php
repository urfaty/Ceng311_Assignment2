<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Tayfur Salih Şen - 18050111014</title>
    <link rel="stylesheet" href="activity6.css">

</head>
<body>

<?php
        $usd = array ("USD" => "1","CAD" => "1.25","EUR" => "0.91");
        $cad = array ("CAD" => "1","USD" => "0.8","EUR" => "0.72");
        $eur = array ("EUR" => "1","CAD" => "1.38","USD" => "1.11");
       

        if(empty($_POST['Fromname'])== false)  
        {

             if($_POST['Currencyidupper'] == "USD" )  
             {
                if($_POST['Currencyiddown'] == "USD" ) 
                    {
                        $TO_variable = $_POST['Fromname']*$usd["USD"];

                    } 
                else if($_POST['Currencyiddown'] == "CAD" ) 
                    {
                       $TO_variable = $_POST['Fromname']*$usd["CAD"];
                    } 

                    
                else if($_POST['Currencyiddown'] == "EUR" ) 
                    {
                       $TO_variable = $_POST['Fromname']*$usd["EUR"];
                    }   
             }
             


             if($_POST['Currencyidupper'] == "CAD" )  
             {
                if($_POST['Currencyiddown'] == "USD" ) 
                    {
                        $TO_variable = $_POST['Fromname']*$cad["USD"];
                    } 
                else if($_POST['Currencyiddown'] == "CAD" ) 
                    {
                       $TO_variable = $_POST['Fromname']*$cad["CAD"];
                    } 

                    
                else if($_POST['Currencyiddown'] == "EUR" ) 
                    {
                       $TO_variable = $_POST['Fromname']*$cad["EUR"];
                    }     

                    
                
                  
                   
             }
             if($_POST['Currencyidupper'] == "EUR" )  
             {
                if($_POST['Currencyiddown'] == "USD" ) 
                    {
                        $TO_variable = $_POST['Fromname']*$eur["USD"];
                    } 
                else if($_POST['Currencyiddown'] == "CAD" ) 
                    {
                       $TO_variable = $_POST['Fromname']*$eur["CAD"];
                    } 

                    
                else if($_POST['Currencyiddown'] == "EUR" ) 
                    {
                       $TO_variable = $_POST['Fromname']*$eur["EUR"];
                    }     
                   
             }
              
        }
        else 
        {
             echo "You did not enter any data"."<br>";

        }
    
    
    ?>



<form action="activity6.php" method="POST">


<label for="Fromid">From: </label>
<input type="text" name="Fromname" id="Fromid" value="<?php echo $_POST['Fromname']; ?>">

<label for="Currencyidupper">Currency:</label>
<select id="Currencyidupper" name="Currencyidupper">
    <option value="USD" <?php if($_POST['Currencyidupper'] == 'USD'): ?> selected="selected"<?php endif; ?>>US Dollar</option>
    <option value="CAD" <?php if($_POST['Currencyidupper'] == 'CAD'): ?> selected="selected"<?php endif; ?>>Canadian Dollar</option>
    <option value="EUR" <?php if($_POST['Currencyidupper'] == 'EUR'): ?> selected="selected"<?php endif; ?>>Euro</option>
</select><br />






<label id="deneme" for="Toid">To: </label>
<input type="text" name="Toname" id="Toid" readonly value="<?php echo $TO_variable; ?>" />

<label for="Currencyiddown">Currency:</label>
<select id="Currencyiddown" name="Currencyiddown">
    <option value="USD" <?php if($_POST['Currencyiddown'] == 'USD'): ?> selected="selected"<?php endif; ?>>US Dollar</option>
    <option value="CAD" <?php if($_POST['Currencyiddown'] == 'CAD'): ?> selected="selected"<?php endif; ?>>Canadian Dollar</option>
    <option value="EUR" <?php if($_POST['Currencyiddown'] == 'EUR'): ?> selected="selected"<?php endif; ?>>Euro</option>

</select><br /><br />



<input id="Convert_Button_id" type="submit" value="Convert"/>


</form>
<!-- NOTE to TEACHER : Hocam 1 tane php dosyasının içine hem html kodlarını hem de php kodlarını
yazdım. Verilen formata uygun bir şekilde dönüşümleri gerçekleştiriyor kod. Ama link muhtemelen 
çalışmayabilir. Çünkü php dosyalarında github sıkıntı çıkarıyor. Bir de index.html dosyası olmadığı
için link muhtemelen hiç çalışmaz.-->
    
</body>
</html>