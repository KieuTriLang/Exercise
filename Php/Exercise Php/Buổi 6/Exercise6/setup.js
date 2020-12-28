var container= document.querySelector(".container");
var a=[1,2,3,34,4,9];
var b=[100,1,2,99,23,34,57,16];
var c=[];

for(var i=0;i<a.length;i++){
    for(var j=0;j<b.length;j++){
        if(a[i]===b[j]){
            c.push(a[i]);
        }
    }
}
container.innerHTML="<p>"+c+"</p>";