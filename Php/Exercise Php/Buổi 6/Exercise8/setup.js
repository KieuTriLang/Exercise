var letter='hello my friend.';
var ltc=prompt('quantity you wanna cut: ');
var newLetter='';
if(ltc>letter.length){
    ltc=letter.length;
}
for (var i=0;i<ltc;i++){
    newLetter+=letter[i];
}
alert(newLetter);