searchButton1 = document.getElementById("search-button");
resultsContainer = document.getElementById("pokeResults");
currentSelect = document.getElementById("pokeSelect");
selectGeneration = document.getElementById("generation-search");
selectType = document.getElementById("type-search");
cardsOnPage = document.getElementsByClassName("resultsImage");
nameSearch1 = document.getElementById("name-input");

var modal = document.getElementById("myModal");
var modalCardName = document.getElementById("modal-card-name");
var reverseHolofoilPrice = document.getElementById(
  "modal-reverseHolofoil-price"
);
var holoFoilPrice = document.getElementById("modal-HoloFoil-price");
var normalPrice = document.getElementById("modal-normal-price");
var modalCardImage = document.getElementById("modal-card-image");
var modalCardType = document.getElementById("modal-card-type");
var addCardPokemon= document.getElementById( "addCard-data");
var addCardPokemonPrice= document.getElementById( "addCard-price");
var addCardPokemonImage= document.getElementById( "addCard-image");
var url = document.getElementById( "buyCard");


var cardSaveBtn = document.getElementById("card-saver");

var cardDisplayClose = document.getElementsByClassName("close")[0];
var collectionsDisplayClose = document.getElementsByClassName("close")[1];

var collectionsModal = document.getElementById("collections-modal");
var collectionResults = document.getElementById("collection-results");

var savedCardsBtn1 = document.getElementById("show-saved");


function searchingPokeData(theGeneration, theType, name) {
  if (theGeneration && theType && !name) {
    generationURL = "https://pokeapi.co/api/v2/" + theGeneration;

    fetch(generationURL)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        var pokemonGenerationArray = [];

        for (i = 0; i < data.pokemon_species.length; i++) {
          pokemonGenerationArray.push(data.pokemon_species[i].name);
        }

        console.log(pokemonGenerationArray);
        getCardsOfType(theType, pokemonGenerationArray);
      });

  } else if (theGeneration && !theType && !name) {
    generationURL = "https://pokeapi.co/api/v2/" + theGeneration;

    fetch(generationURL)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        var pokemonGenerationArray = [];

        for (i = 0; i < data.pokemon_species.length; i++) {
          pokemonGenerationArray.push(data.pokemon_species[i].name);
        }

        console.log(pokemonGenerationArray);
        searchingTCGData(pokemonGenerationArray);
      });

  } else if (theType && !theGeneration && !name) {
    typeCardURL = "https://api.pokemontcg.io/v2/cards?q=types:" + theType;

    fetch(typeCardURL)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        console.log(data);

        postPokemonCardInfo(data.data);
      });

  } else if (name) {
    finalURL = "https://pokeapi.co/api/v2/pokemon/" + name;

    console.log(finalURL);

    fetch(finalURL)
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        var pokemonNameArray = [];
        pokemonNameArray.push(data.name);
        searchingTCGData(pokemonNameArray);
      });
  }
}
function getCardsOfType(type, genArray) {
  for (i = 0; i < genArray.length; i++) {
    pokeCardURL = "https://api.pokemontcg.io/v2/cards?q=name:" + genArray[i];

    fetch(pokeCardURL, {
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
    
        for (x = 0; x < data.data.length; x++) {
          if (data.data[x].types[0] === type) {
            console.log(data.data[x]);

            postTypePokemonCardInfo(data.data[x]);
          }
        }
      });
  }
}

function searchingTCGData(pokemonData) {
  for (i = 0; i < pokemonData.length; i++) {
    pokeCardURL = "https://api.pokemontcg.io/v2/cards?q=name:" + pokemonData[i];

    fetch(pokeCardURL, {
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
        console.log(data);

        postPokemonCardInfo(data.data);
      });
  }
}


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


function postTypePokemonCardInfo(dataTCG) {
  console.log("datattcg"+dataTCG);
  var cardImage = document.createElement("img");
  resultsContainer.appendChild(cardImage);
  cardImage.id = dataTCG.id;
  cardImage.setAttribute("class", "resultsImage");
  cardImage.src = dataTCG.images.small;
  console.log("datattcg"+dataTCG);
  cardImage.addEventListener("click", function (e) {
    console.log(this);
    var cardID = this.id;

    cardClickInformation(cardID);
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


function cardModalInformation(modalCard) {
        addCardPokemon.value = modalCard.name;
        //console.log(modalCard.tcgplayer.prices.holofoil.market)
if(typeof modalCard.tcgplayer.prices.reverseholofoil   !== 'undefined'){

    addCardPokemonPrice.value = modalCard.tcgplayer.prices.reverseholofoil.market.toFixed(2);

} else if(typeof modalCard.tcgplayer.prices.holofoil !== 'undefined'){

    addCardPokemonPrice.value = modalCard.tcgplayer.prices.holofoil.market.toFixed(2);

} else if(typeof modalCard.tcgplayer.prices.normal !== 'undefined'){

     addCardPokemonPrice.value = modalCard.tcgplayer.prices.normal.market;

} else {addCardPokemonPrice.value = "0"}


       
        addCardPokemonImage.value = modalCard.images.large;
  modalCardName.innerHTML =  modalCard.name;
  modalCardImage.src = modalCard.images.large;
  cardSaveBtn.setAttribute("class", modalCard.id);
  
  if (modalCard.tcgplayer) {
    if (modalCard.tcgplayer.prices.normal) {
      normalPrice.innerHTML =
        "Price: " + modalCard.tcgplayer.prices.normal.market;
        
    } else {
      normalPrice.innerHTML = " N/A";
    }

    if (modalCard.tcgplayer.prices.reverseholofoil) {
      reverseHolofoilPrice.innerHTML =
        "Price: " +
        modalCard.tcgplayer.prices.reverseholofoil.market;
    } else {
      reverseHolofoilPrice.innerHTML = " N/A";
    }

    if (modalCard.tcgplayer.prices.holofoil) {
      holoFoilPrice.innerHTML =
        "Price: " +
        modalCard.tcgplayer.prices.holofoil.market;
    } else {
      holoFoilPrice.innerHTML = " N/A";
    }
  }
  modalCardType.innerHTML = "Type " + modalCard.types[0];

  modal.style.display = "block";
}


window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    consol.log('click')  }

  if (event.target == collectionsModal) {
    collectionsModal.style.display = "none";
  }
};


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

parameterType = selectType.value;
  parameterGeneration = selectGeneration.value;
  searchedName = nameSearch1.value;
  searchedName = searchedName.toLowerCase();

  console.log(
    "Type: " + parameterType + "  Generation: " + parameterGeneration
  );
  searchingPokeData(parameterGeneration, parameterType, searchedName);

  resultsContainer.innerHTML = "";


  document.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      parameterType = selectType.value;
      parameterGeneration = selectGeneration.value;
      searchedName = nameSearch1.value;
      searchedName = searchedName.toLowerCase();
    
      console.log(
        "Type: " + parameterType + "  Generation: " + parameterGeneration
      );
      searchingPokeData(parameterGeneration, parameterType, searchedName);
    
      resultsContainer.innerHTML = "";
    }
});


searchButton1.addEventListener("click", function () {
  parameterType = selectType.value;
  parameterGeneration = selectGeneration.value;
  searchedName = nameSearch1.value;
  searchedName = searchedName.toLowerCase();

  console.log(
    "Type: " + parameterType + "  Generation: " + parameterGeneration
  );
  searchingPokeData(parameterGeneration, parameterType, searchedName);

  resultsContainer.innerHTML = "";
});





// Runs a search query based on the current card you clicked
function getSavedCards(cardObject) {
  collectionResults.innerHTML = "";

  for (i = 0; i < cardObject.length; i++) {
    clickCardURL = "https://api.pokemontcg.io/v2/cards/" + cardObject[i];

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
        postSavedCards(data.data);
      });
  }
}



resultsContainer = document.getElementById("pokeResults");
var modalCardYugiohImage = document.getElementById("modal-card-image");
var modalCardYugiohName = document.getElementById("modal-card-name");
var cardSaveBtn = document.getElementById("card-saver");
var modal = document.getElementById("myModal");
var normalPrice = document.getElementById("modal-normal-price");
var holoFoilPrice = document.getElementById("modal-HoloFoil-price");
var reverseHolofoilPrice = document.getElementById( "modal-reverseHolofoil-price");
var priceH = document.getElementById("priceH");
var priceR = document.getElementById( "priceR");
var addCardYugioh= document.getElementById( "addCard-data");
var addCardYugiohPrice= document.getElementById( "addCard-price");
var addCardYugiohImage= document.getElementById( "addCard-image");

  
  document.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      const cardname = document.getElementById('name-input').value;
      console.log(cardname)   
       fetch(' https://db.ygoprodeck.com/api/v7/cardinfo.php?&fname='+ cardname)
      
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        console.log(data);
    
        postyugiohCardInfo(data.data);
      });
    }
});
document.getElementById("search-button").addEventListener("click", () => {
    const cardname = document.getElementById('name-input').value;
    console.log(cardname)   
     fetch(' https://db.ygoprodeck.com/api/v7/cardinfo.php?&fname='+ cardname)
    
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log(data);
  
      postyugiohCardInfo(data.data);
    });
  })
  function postyugiohCardInfo(datayugioh) {
    for (i = 0; i < datayugioh.length; i++) {
      console.log(datayugioh[i].card_images[0].image_url);
      var cardImage = document.createElement("img");
      resultsContainer.appendChild(cardImage);
      cardImage.id = datayugioh[i].id;
      cardImage.setAttribute("class", "resultsImage");
      cardImage.src = datayugioh[i].card_images[0].image_url;
  
      cardImage.addEventListener("click", function (e) {
        console.log(this);
        var cardID = this.id;
  
        cardClickInformationyugioh(cardID);
      });
    }
  }
  
  function postTypeyugiohCardInfo(datayugioh) {
    console.log("datattcg");
    var cardImage = document.createElement("img");
    resultsContainer.appendChild(cardImage);
    cardImage.id = datayugioh.id;
    cardImage.setAttribute("class", "resultsImage");
    cardImage.src = datayugioh.card_images.image_url;
    console.log("datattcg"+datayugioh);
    cardImage.addEventListener("click", function (e) {
      console.log(this);
      var cardIDyugioh = this.id;
  
      cardClickInformationyugioh(cardIDyugioh);
    });
  }
  function cardClickInformationyugioh(cardObject) {
    fetch(' https://db.ygoprodeck.com/api/v7/cardinfo.php?id='+ cardObject)
    
   
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        console.log("te"+data.data);
        cardModalyugiohInformation(data.data);
        
      });
  }
  
  
  function cardModalyugiohInformation(modalCardYugioh) {
    console.log()
    addCardYugioh.value = modalCardYugioh[0].name;
    if( modalCardYugioh[0].card_prices[0].tcgplayer_price == null){
        addCardYugiohPrice.value = "0"
    }else{addCardYugiohPrice.value = modalCardYugioh[0].card_prices[0].tcgplayer_price;}
    
    addCardYugiohImage.value = modalCardYugioh[0].card_images[0].image_url;
    modalCardYugiohName.innerHTML =  modalCardYugioh[0].name;
    modalCardYugiohImage.src = modalCardYugioh[0].card_images[0].image_url;
    
    cardSaveBtn.setAttribute("class", modalCardYugioh.id);
  
    if (modalCardYugioh) {
      if (modalCardYugioh[0].card_prices[0].tcgplayer_price) {
        normalPrice.innerHTML =
          "Price: " + modalCardYugioh[0].card_prices[0].tcgplayer_price;
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
   // modalCardType.innerHTML = " ";
  
    modal.style.display = "block";
    
  }
  
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
var addCardMtg= document.getElementById( "addCard-data");
var addCardMtgPrice= document.getElementById( "addCard-price");
var addCardMtgImage= document.getElementById( "addCard-image");




document.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
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
  }
});


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
        
        cardModalMtgInformation(data);
        console.log("te"+data);
      });
  }
  
  // Handles information inside the Card Modal
  function cardModalMtgInformation(modalCardmtg) {
    console.log(modalCardmtg.id)
    addCardMtg.value = modalCardmtg.name;
    addCardMtgImage.value = modalCardmtg.image_uris.large;
    if(modalCardmtg.prices.eur == null){
        addCardMtgPrice.value = "0"
    }else{
      addCardMtgPrice.value = modalCardmtg.prices.eur;  
    }
    
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
  
  
startPageSearch();