<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="gumb">Dohvati poruku</button><br><br>
    <h1 id="rezultat"></h1>

    <script>
        document.getElementById("gumb").addEventListener("click",function(){
            fetch("brojac.php")
            .then(response => response.text())
            .then(data=>{
                document.getElementById("rezultat").innerHTML = data;
            })
            .catch(error =>{
                document.getElementById("rezultat").innerHTML = "Greška!";
            })
        })
    </script>
</body>
</html>