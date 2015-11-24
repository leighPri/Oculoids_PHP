var shortUrl = "comic?id=";

document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37: //left
        	if (prevPage === curPage){
        		alert("You're already at the first comic");
        	}else {
        		window.location = shortUrl + prevPage;
        	}
              break;
        case 39: //right
        	if (nextPage === curPage){
        		alert("You're already at the last comic");
        	} else {
        		window.location = shortUrl + nextPage;
        	}
            break;
  
   }
};