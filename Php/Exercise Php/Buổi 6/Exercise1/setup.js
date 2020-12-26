document.querySelector('#fNum').value='';
document.querySelector('#sNum').value='';

var mul=document.querySelector('#mul');
var div=document.querySelector('#div');

var form=document.querySelector('.form');

var fNum=document.querySelector('#fNum').value;
var sNum=document.querySelector('#sNum').value;
mul.onclick=function(){
    var num=parseFloat(fNum)*parseFloat(sNum);
    var result=num.toString();
    form.innerHTML += '<p>Result: '+ result +'</p>';
}
div.onclick=function(){
    form.innerHTML += '<p>Result: '+ (parseFloat(fNum)/parseFloat(sNum)) +'</p>';
}
