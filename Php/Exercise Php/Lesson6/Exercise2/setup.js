document.querySelector('#fNum').value='';
document.querySelector('#sNum').value='';
var sub=document.getElementById('submit');
var form=document.querySelector('.form');

sub.onclick=function(){
    var fNum=document.querySelector('#fNum').value;
    var sNum=document.querySelector('#sNum').value;
    if (parseFloat(fNum)>parseFloat(sNum)){
        form.innerHTML+= '<p>Result: '+ fNum +'</p>';
    }else{
        form.innerHTML+= '<p>Result: '+ sNum +'</p>';
    }
}
