var images = [
    "images\\dice1.svg",
    "images\\dice2.svg",
    "images\\dice3.svg",
    "images\\dice4.svg",
    "images\\dice5.svg",
    "images\\dice6.svg"

];
var dice = document.querySelectorAll("img");

function roll() {
    var diceOneValue = Math.floor(Math.random() * 6);
    var dicetwoValue = Math.floor(Math.random() * 6);
    console.log(diceOneValue, dicetwoValue);
    document.querySelector("#d1").setAttribute("src", images[diceOneValue])
    document.querySelector("#d2").setAttribute("src", images[dicetwoValue])
    if (diceOneValue > dicetwoValue) {
        document.querySelector('#winner').innerHTML = 'Player 1 wins';

    } else if (diceOneValue < dicetwoValue) {
        document.querySelector('#winner').innerHTML = 'Player 2 wins';

    } else if (diceOneValue = dicetwoValue) {
        document.querySelector('#winner').innerHTML = 'DRAW';
    }
}