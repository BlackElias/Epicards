
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
    
  }startPageSearch();