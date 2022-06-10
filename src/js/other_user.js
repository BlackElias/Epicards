let follow = true;
const followButton = document.querySelector(".btn-profile-follow");
let followeduser = followButton.dataset.followeduser;
let followid = followButton.dataset.followid; // Waarom Kleine letters??
console.log(followeduser)
followButton.addEventListener("click", () => {

  var res;
  const check = new FormData();

  check.append("followeduser", followeduser);

fetch('src/ajax/checkFollow.php', {
  method: 'POST',
  body: check
})
.then(response => response.json())
.then(result => {
  console.log('Success:', result);
  if (result["result"][0]) {
    res = true;
  } else {
    res = false;
  }
  if(res === true){
    followid = result["result"][0]["id"];
    const remove = new FormData();

    remove.append("followid", followid);

    fetch('src/ajax/removeFollower.php', {
      method: 'POST',
      body: remove
    })
    .then(response => response.json())
    .then(result => {
      console.log('Success:', result);
      followButton.innerHTML = '<img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">add friend';
    })
    .catch(error => {
      console.error('Error:', error);
  
    /*follow = !follow;
    followPage(follow);*/
    })
 } else {
      const follow = new FormData();
  
      follow.append("followeduser", followeduser);
    
      fetch('src/ajax/addFollower.php', {
        method: 'POST',
        body: follow
      })
      .then(response => response.json())
      .then(result => {
        console.log('Success:', result);
        followButton.innerHTML = "Unfriend";
      })
      .catch(error => {
        console.error('Error:', error);
    
      /*follow = !follow;
      followPage(follow);*/
    })
    }
})

.catch(error => {
  console.error('Error:', error);
  })
})