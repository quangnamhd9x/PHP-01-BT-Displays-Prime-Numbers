<form method="post">
    So luong: <input type="number" name="value" placeholder="so luong"><br>
    <input type="submit" value="Show">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["value"];
}
$count = 0;
$num = 2;

while ($count < $a){
    if (isPrime($num)){
        $count++;
        echo $num."<br>";
    }
    $num++;
}
function isPrime($num){
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num < 2) {
            return false;
        }
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
