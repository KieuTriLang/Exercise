var pattern= document.getElementById('pattern');

for (var i=1;i<=25;i++){
    if (i%5==0){
        pattern.innerHTML += '* <br>';
    }else{
        pattern.innerHTML += '*';
    }
}