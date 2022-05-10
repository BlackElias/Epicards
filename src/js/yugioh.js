
searchButton1 = document.getElementById("search-button");
resultsContainer = document.getElementById("pokeResults");
currentSelect = document.getElementById("pokeSelect");
selectGeneration = document.getElementById("generation-search");
selectType = document.getElementById("type-search");
cardsOnPage = document.getElementsByClassName("resultsImage");
nameSearch1 = document.getElementById("name-input");

//Instantiate View Card Modal
var modal = document.getElementById("myModal");
var modalCardName = document.getElementById("modal-card-name");
var reverseHolofoilPrice = document.getElementById(
  "modal-reverseHolofoil-price"
);
var holoFoilPrice = document.getElementById("modal-HoloFoil-price");
var normalPrice = document.getElementById("modal-normal-price");
var modalCardImage = document.getElementById("modal-card-image");
var modalCardType = document.getElementById("modal-card-type");

var cardSaveBtn = document.getElementById("card-saver");

// Get the <span> element that closes the modal [This is just w3Schools basic modal setup]
var cardDisplayClose = document.getElementsByClassName("close")[0];
var collectionsDisplayClose = document.getElementsByClassName("close")[1];

// Instantiate Collections Modal
var collectionsModal = document.getElementById("collections-modal");
var collectionResults = document.getElementById("collection-results");

var savedCardsBtn1 = document.getElementById("show-saved");
const getValueInput = () =>{
    const cardname = document.querySelector('input').value;
    console.log(cardname)   
     fetch(' https://db.ygoprodeck.com/api/v7/cardinfo.php?&fname='+ cardname)
  .then(response => response.json())
  .then(data => console.log(data));
  clickCardURL = "https://api.pokemontcg.io/v2/cards?q=name:" + cardname;

  fetch(clickCardURL, {
    method: "GET",
    withCredentials: true,
    headers: {
      "X-API-KEY": "5a31ade9-b98e-4294-ac61-d47c25d4dae0",
      "Content-Type": "application/json",
    },
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log(data.data);
      cardModalInformation(data.data);
    });
  }
  function cardClickInformation(cardObject) {
    clickCardURL = "https://api.pokemontcg.io/v2/cards/" + cardObject;
  
    fetch(clickCardURL, {
      method: "GET",
      withCredentials: true,
      headers: {
        "X-API-KEY": "5a31ade9-b98e-4294-ac61-d47c25d4dae0",
        "Content-Type": "application/json",
      },
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        console.log(data.data);
        cardModalInformation(data.data);
      });
  }
  
  // Handles information inside the Card Modal
  function cardModalInformation(modalCard) {
    modalCardName.innerHTML =  modalCard.name;
    modalCardImage.src = modalCard.images.large;
    cardSaveBtn.setAttribute("class", modalCard.id);
  
    if (modalCard.tcgplayer) {
      if (modalCard.tcgplayer.prices.normal) {
        normalPrice.innerHTML =
          "Price: " + modalCard.tcgplayer.prices.normal.market.toFixed(2);
      } else {
        normalPrice.innerHTML = " N/A";
      }
  
      if (modalCard.tcgplayer.prices.reverseholofoil) {
        reverseHolofoilPrice.innerHTML =
          "Price: " +
          modalCard.tcgplayer.prices.reverseholofoil.market.toFixed(2);
      } else {
        reverseHolofoilPrice.innerHTML = " N/A";
      }
  
      if (modalCard.tcgplayer.prices.holofoil) {
        holoFoilPrice.innerHTML =
          "Price: " +
          modalCard.tcgplayer.prices.holofoil.market.toFixed(2);
      } else {
        holoFoilPrice.innerHTML = " N/A";
      }
    }
    modalCardType.innerHTML = "Type " + modalCard.types[0];
  
    modal.style.display = "block";
  }
  
  // Modal handling
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
      consol.log('click')  }
  
    if (event.target == collectionsModal) {
      collectionsModal.style.display = "none";
    }
  };
  function postPokemonCardInfo(dataTCG) {
    for (i = 0; i < dataTCG.length; i++) {
      console.log(dataTCG[i]);
      var cardImage = document.createElement("img");
      resultsContainer.appendChild(cardImage);
      cardImage.id = dataTCG[i].id;
      cardImage.setAttribute("class", "resultsImage");
      cardImage.src = dataTCG[i].images.small;
  
      cardImage.addEventListener("click", function (e) {
        console.log(this);
        var cardID = this.id;
  
        cardClickInformation(cardID);
      });
    }
    
  }
  // Handle the event to run a search when the page loads
function startPageSearch() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
  
    parameterType = urlParams.get("type");
    parameterGeneration = urlParams.get("generation");
    searchedName = urlParams.get("name");
    console.log(searchedName);
    searchedName = searchedName.toLowerCase();
  
    console.log(
      "Type: " + parameterType + "  Generation: " + parameterGeneration
    );
    searchingPokeData(parameterGeneration, parameterType, searchedName);
  
    resultsContainer.innerHTML = "";
  }

