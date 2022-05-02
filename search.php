<!DOCTYPE html>

  <html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="src/css/style.css">
  </head>


 
    <nav>
      
     

      
      
    
    </nav>
  
  <body>
     
            <h3>Search for Pokemon cards by name , type, or generation.</h3>
            <div class="input-field col s12">
              <label for="current-search">Pokemon Name</label>
              <input type="text" id="name-input" name="current-search">
                
              <h5>Generation</h5>
              <select class="browser-default" id="generation-search">
                <option value="" >Choose your option</option>
                <option value="generation/1">1</option>
                <option value="generation/2">2</option>
                <option value="generation/3">3</option>
                <option value="generation/4">4</option>
                <option value="generation/5">5</option>
                <option value="generation/6">6</option>
                <option value="generation/7">7</option>
              </select>

              <h5>Pokemon Type</h5>
              <select class="browser-default" id="type-search">
                <option value="" >Choose your option</option>
                <option value="Grass">Grass</option>
                <option value="Fire">Fire</option>
                <option value="Water">Water</option>
                <option value="Lightning">Lightning</option>
                <option value="Psychic">Psychic</option>
                <option value="Fighting">Fighting</option>
                <option value="Darkness">Darkness</option>
                <option value="Metal">Metal</option>
                <option value="Dragon">Dragon</option>
                <option value="Fairy">Fairy</option>
                <option value="Colorless">Colorless</option>
              </select>
              <button id="search-button">search</button>

            </div>
          </ul>
        </div>
        <div class="col s12 m8 l9">
          <!-- Teal page content  -->
          <div class="row" class="responsive-img" id="pokeResults">
            
          </div>
        </div>
      </div>
          <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
            <h4 id="modal-card-name"></h4> 
            <h2 id="modal-card-type"></h2>
        <table class ="responsive-table highlight">
  
    
          <tbody>
            <tr>
              <td>Holofoil Market Price</td>
              <td id="modal-HoloFoil-price"></td>
            </tr>
            <tr>
              <td>Reverse Holofoil Market Price</td>
              <td id="modal-reverseHolofoil-price"></td>
              
            </tr>
            <tr>
              <td>Normal Market Price</td>
              <td id="modal-normal-price"></td>
              
            </tr>
          </tbody>
        </table>
        <img class="responsive-img" src="" alt="" id="modal-card-image">
        <button id="card-saver" > <img class="responsive-img"></button>

      </div>
    </div>

    <!-- The Modal -->
    <div id="collections-modal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="col s12 m8 l9">
          <div class="row" id="collection-results"></div>
        </div>
      </div>
    </div>

     <script src="src/js/pokesearch.js"></script>
    </body>

    </html>