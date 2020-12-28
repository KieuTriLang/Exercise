var mul=document.querySelector('#mul');
var div=document.querySelector('#div');

var form=document.querySelector('.form');

var fNum=document.querySelector('#fNum');
var sNum=document.querySelector('#sNum');
mul.onclick=function(){
    form.innerHTML += '<p>Result: '+ (fNum.value*sNum.value) +'</p>';
}
div.onclick=function(){
    form.innerHTML += '<p>Result: '+ (fNum.value/sNum.value) +'</p>';
}
