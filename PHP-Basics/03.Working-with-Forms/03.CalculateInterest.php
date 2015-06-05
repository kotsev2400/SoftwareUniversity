<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculate Interest</title>
    </head>
    <body>
        <form method="GET">
            <label>Enter Amount</label>
            <input type="text" name="amount"/><br />
            <label><input type="radio" name="type" value="USD"/>USD</label>
            <label><input type="radio" name="type" value="EUR"/>EUR</label>
            <label><input type="radio" name="type" value="BGN"/>BGN</label><br />
            <label>Compound Interest Amount</label>
            <input type="text" name="compound"/><br />
            <select name="time">
                <option value="6">6 Months</option>
                <option value="12">1 Year</option>
                <option value="24">2 Years</option>
                <option value="70">5 Years</option>
            </select>
            <input type="submit" name="submit" value="Calculate"/>
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $amount = $_GET['amount'];
            $type = $_GET['type'];
            $compound = $_GET['compound'];
            $time = $_GET['time'];
            
            switch ($type){
                case "USD": $fType = "&#36";
                    break;
                case "EUR": $fType = "&#8364";
                    break;
                case "BGN": $fType = "лева";
                    break;
            }
            
            $compPerM = $compound / 12;
            
            for ($var = 0; $var < $time; $var++) {
                $amount += $amount * ($compPerM / 100);
            }
            $result = number_format($amount, 2);
            
            echo "$fType $result";
        }
        ?>
    </body>
</html>
