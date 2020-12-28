var fNum= document.querySelector("#fNum");
var sNum= document.querySelector("#sNum");
var submit= document.querySelector("#submit");
var html= document.querySelector(".container")

submit.onclick=function(){
    while (fNum.value*sNum.value !=0){
        if(fNum.value>sNum.value){
            fNum.value%=sNum.value;
        }else{
            sNum.value%=fNum.value;
        }
    }
    html.innerHTML+="<p>UCLN: " + (parseInt(fNum.value)+parseInt(sNum.value)) + "</p>";
}

