
var modal = document.getElementById("myModal");
var price = document.getElementById("collection");
var private = document.getElementById("private")
var btnPrivate = document.getElementById("unprivate")

var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
  price.style.backgroundColor = "transparent";
}

btnPrivate.onclick = function() {
  private.style.textDecoration= "underline";
  console.log("click")

}

span.onclick = function() {
  modal.style.display = "none";
  price.style.backgroundColor = "white";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    price.style.backgroundColor = "white";
  }
}