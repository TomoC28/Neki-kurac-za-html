function yoyo(){
    alert("PORUKA");
}
var element = document.createElement("p");
var tekst = document.createTextNode("Tekstoslav");
element.appendChild(tekst);
document.getElementsByTagName("body").item(0).appendChild(element);

