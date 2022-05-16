<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>YuGiOh</title>
</head>
<body>
    <h1><a href="https://db.ygoprodeck.com/" target="_blank">YG</a> API</h1>
    <div id="searchbar">
      <input type="text" id="textEntry" value="" placeholder="What do you seek...">
      <button id="keywordSearch">Search Card Name</button>
      <button id="archetypeSearch">Search Card Archetype</button>
      <button id="typeSearch">Search Card Type</button>
      <button id="raceSearch">Search Card Race</button>
    </div>
    <main>
      <!-- remove hardcoded value later -->
      <div class="listbox">
        <table id="cardList">
          <thead>
            <tr>
              <th style="width: 150px">Name</th>
              <th>Card Type</th>
              <th style="width: 200px">Description</th>
              <th>Attribute</th>
              <th>Race</th>
            </tr>
          </thead>

          <tbody></tbody>
        </table>

        <a id="prev" href="#">&lt;-Prev</a> <a id="next" href="#">Next -&gt;</a>
      </div>
      <div>
        <p id="detailsbox" class="hidden">No Cards Match Your Search Criteria</p>
      </div>
    </main>
    <script src="src/js/yugioh.js" type="module">
      // function searchCards() {
      // const searchCard = document.getElementById("search");
      // //console.log(searchCard);
      // //showCards('archetype=' +searchCard);
      // }
    </script>
</body>
</html>