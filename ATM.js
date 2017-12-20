// var artistname =  ["Lil B", "Kanye West", "Lil Wayne", "T-Pain", "E-40"];
// var artistbio =  ["Lil B is an artist.", "Kanye West is an artist.", "Lil Wayne is an artist.", "T-Pain is an artist.", "E-40 is an artist."];


var index = []

var artistName = {
	LilB:"Lil B",
	KanyeWest:"Kanye West",
	LilWayne:"Lil Wayne",
	TPain:"T-Pain",
	E40:"E-40",
}
var artistBio = {
	LilB:"Lil B is an artist.",
	KanyeWest:"Kanye West is an artist.",
	LilWayne:"Lil Wayne is an artist.",
	TPain:"T-Pain is an artist.",
	E40:"E-40 is an artist.",
}
var artistPicture = {
	LilB:"assets/slideshow.png",
	KanyeWest:"assets/slideshow.pngt",
	LilWayne:"assets/slideshow.png",
	TPain:"assets/slideshow.png",
	E40:"assets/slideshow.png",
}

Object.values(artistName);
Object.values(artistBio);
Object.values(artistPicture);


$(document).ready(function(){
	document.getElementById("Name").innerHTML = artistName.KanyeWest;
});

$(document).ready(function(){
	document.getElementById("Bio").innerHTML = artistBio.KanyeWest;
});