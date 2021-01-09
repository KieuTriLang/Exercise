var searchString='Javascript function to find a wordz within a string'
var needle='word';
for (var i=0;i<searchString.length-needle.length;i++){
    var check='';
    for(var j=i;j<i+needle.length;j++){
        check+=searchString[j];
    }
    console.log(check)
    if(check==needle){
        alert('true');
        break;
    }
}