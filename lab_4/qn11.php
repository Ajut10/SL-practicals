<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qn11</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

    
    
    
    
    <script>
        $(document).ready(function() {
            
            $("#getbtn").click(function() {
                $.get("get.php",function(data,status){
                    alert("data: " + data+ "\nStatus:"+status);
                });
            });
        });
        $(document).ready(function() {
            $("#postbtn").click(function() {
                $.post("post.php",
                {
                    name: "Babu",
                    lastname:"Rao"
                },
                function(data,status){
                    alert("data: " + data+ "\nStatus:"+status);
                })
            });


        });
    </script>
<h3>GET </h3>
<button id="getbtn">GET Request</button>
<h3>POST</h3>
<button id="postbtn">Post Request</button>

   

</body>

</html>