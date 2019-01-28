var rows;
var maxY;
var maxX;
var catPositionX = 2;
var catPositionY = 2;

function init() {
    rows = document.getElementById("grid").rows;
    maxY = rows.length;
    maxX = rows[1].cells.length;
    //position cat
    rows[catPositionY].cells[catPositionX].innerHTML = 'C';
    addClicks();
}

function addClicks(){
    
    for (var y = 0; y < maxY; y++) {
        for (var x = 0; x < maxX; x++) {
            rows[y].cells[x].addEventListener("click", function () {
                toggleMouse(this);
            });
            var idVar = x + "_" + y;
            rows[y].cells[x].setAttribute('id', idVar);
        }
    }
}

function toggleMouse(elem) {
    if (elem.innerHTML == 'M') {
        elem.innerHTML = '';
    } else {
        elem.innerHTML = 'M';
    }

}




function moveCat() {
    var randomNumber = Math.random();
    var xChange = 0;
    var yChange = 0;
    if (randomNumber < .25) {
        //up
        yChange = -1;
    } else if (randomNumber < .50) {
        //right
        xChange = 1;
    } else if (randomNumber < .75) {
        //down
        yChange = 1;
    } else {
        //left
        xChange = -1;
    }
    
    if (validPosition(catPositionX + xChange, catPositionY + yChange)){
        rows[catPositionY].cells[catPositionX].innerHTML = '';
        var mouseDirection = senseMouse();
        if(mouseDirection){
            xChange = mouseDirection[0];
            yChange = mouseDirection[1];
        } 
        catPositionX = catPositionX + xChange;
        catPositionY = catPositionY + yChange;
        rows[catPositionY].cells[catPositionX].innerHTML = 'C';
    }
    
}


function validPosition(xPosition,yPosition){
    if (xPosition > -1 && xPosition < maxX) {
        if (yPosition > -1 && yPosition < maxY) {
            return true;
        }
    }
    return false;
}



function senseMouse(){
    
    //Start from top left and work across and down
    var xChange = -1;
    var yChange = -1;
    
    for (xChange = -1; xChange < 2; xChange++){
        for (yChange = -1; yChange < 2; yChange++){
          if (validPosition(catPositionX+xChange,catPositionY+yChange) && rows[catPositionY+ yChange].cells[catPositionX + xChange].innerHTML == 'M'){
            return [xChange,yChange];  
          }
        } 
    }   
    return false;   
        
}

