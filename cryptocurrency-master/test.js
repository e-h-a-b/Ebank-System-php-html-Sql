function setup() {
  createCanvas(600, 400);
  noStroke();
  textSize(20);
  loadJSON("https://api.cryptowat.ch/markets/summaries", drawData);
}

function drawData(data) {
  // person 1 bubble
  
  text(data.result.binance:adabnb.price.last, 210, 200); // person1.name = Morgan
 
}