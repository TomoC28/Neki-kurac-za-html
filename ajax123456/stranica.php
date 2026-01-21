<?php
    $link = mysqli_connect("localhost","root","","knjiznica");
    if (!$link) {
        die("". mysqli_connect_error());
    }
    $rez = mysqli_query($link,"SELECT * FROM knjiga");
    $podaci = $rez->fetch_all(MYSQLI_ASSOC);
    $prvi = $podaci[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="gumb">GUMB</button>
    <table id="rezultat">
        <tr>
            <th>id</th>
            <th>naslov</th>
            <th>autor</th>
            <th>godina</th>
            <th>zanr</th>
        </tr>
    </table>
    <script>
        let rezultat=document.getElementById("rezultat");
        document.getElementById("gumb").addEventListener("click",function(){
            fetch("knjiga.php")
            .then(response => response.json())
            .then(data=>{
                for(let knjiga of data){
                    let tr = document.createElement("tr");
                    for(val of Object.values(knjiga)){
                        let td = document.createElement("td");
                        td.innerHTML=val;
                        tr.appendChild(td);

                    }
                    rezultat.appendChild(tr);
                }
            })
            .catch(error =>{
                document.getElementById("rezultat").innerHTML = "Greška!";
            })
        })
    
    </script>
</body>
</html>