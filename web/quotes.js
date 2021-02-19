
function newQuote(){

var quotes =[
	'The Way Get Started Is To Quit Talking And Begin Doing. -Wait Disney',
	'Don\'t Let Yesterday Take Up Too Much Of Today. -Will Rogers',
	'"I\'m selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can\'t handle me at my worst, then you sure as hell don\'t deserve me at my best." -Marilyn Monroe',
	'"Be yourself; everyone else is already taken." -Car Wilde',
	'"Be who you are and say what you feel, because those who mind don\'t matter, and those who matter don\'t mind."― Bernard M. Baruch',
	'rohit shakya',
	'priya shakya',
]
var randomNumber =Math.floor(Math.random() *(quotes.length));
document.getElementById('quoteDisplay').innerHTML =quotes[randomNumber];
}
