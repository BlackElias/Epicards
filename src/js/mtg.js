
resultsContainer = document.getElementById("pokeResults");
var modalCardMtgImage = document.getElementById("modal-card-image");
var modalCardMtgName = document.getElementById("modal-card-name");
var cardSaveBtn = document.getElementById("card-saver");
var modal = document.getElementById("myModal");
var normalPrice = document.getElementById("modal-normal-price");
var holoFoilPrice = document.getElementById("modal-HoloFoil-price");
var reverseHolofoilPrice = document.getElementById( "modal-reverseHolofoil-price");
var priceH = document.getElementById("priceH");
var priceR = document.getElementById( "priceR");

document.getElementById("search-button").addEventListener("click", () => {
  const cardname = document.getElementById('name-input').value;
  console.log(cardname)   
   fetch(' https://api.scryfall.com/cards/search?order=name&q='+ cardname)
  
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    console.log(data);

    postMtgCardInfo(data.data);
  });
})
function postMtgCardInfo(datamtg) {
   
  for (i = 0; i < datamtg.length; i++) {
  //    if(datamtg[i].imageUrl !== undefined){
    console.log(datamtg[i].image_uris.large);
    var cardImage = document.createElement("img");
    resultsContainer.appendChild(cardImage);
    cardImage.id = datamtg[i].id;
    console.log(datamtg[i].image_uris.large);
    cardImage.setAttribute("class", "resultsImage");
    cardImage.src = datamtg[i].image_uris.large;

    cardImage.addEventListener("click", function (e) {
      console.log(this);
      var cardIDmtg = this.id;

      cardClickInformationMtg(cardIDmtg);
    });
  }
}
//}
/*function postTypeMtgCard(datamtg) {
  console.log("datattcg");
  var cardImage = document.createElement("img");
  resultsContainer.appendChild(cardImage);
  cardImage.id = datamtg.id;
  cardImage.setAttribute("class", "resultsImage");
  cardImage.src = datamtg.image_uris.large;
  console.log("datattcg"+datamtg);
  cardImage.addEventListener("click", function (e) {
    console.log(this);
    var cardIDmtg = this.id;

    cardClickInformationMtg(cardIDmtg);
  });
}*/
function cardClickInformationMtg(cardObject) {
  fetch('https://api.scryfall.com/cards/'+ cardObject)
  
 
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log("te"+data);
      cardModalMtgInformation(data);
      
    });
}

// Handles information inside the Card Modal
function cardModalMtgInformation(modalCardmtg) {
 // console.log(modalCardmtg.name)
  modalCardMtgName.innerHTML =  modalCardmtg.name;
  modalCardMtgImage.src = modalCardmtg.image_uris.large;
  
  cardSaveBtn.setAttribute("class", modalCardmtg.id);

  if (modalCardmtg) {
    if (modalCardmtg.prices.eur) {
      normalPrice.innerHTML =
        "Price: " + modalCardmtg.prices.eur;
        reverseHolofoilPrice.style.display = "none";
        holoFoilPrice.style.display = "none";
        priceH.style.display = "none";
        priceR.style.display = "none";
    } else {
      normalPrice.innerHTML = " N/A";
      reverseHolofoilPrice.style.display = "none";
        holoFoilPrice.style.display = "none";
        priceH.style.display = "none";
        priceR.style.display = "none";
    }

  
  }
  //modalCardType.innerHTML = " ";

  modal.style.display = "block";
}
