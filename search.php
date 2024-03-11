<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <script>
        function search(typedText){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("result").innerHTML= this.responseText;
                }
            }
            xmlhttp.open("GET","data.php?query="+typedText,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <form action="" method="get">
        <input type="text" onkeyup="search(this.value)">
        <div id="result"></div>
    </form>
</body>
</html>