var decor=document.querySelector(".decor");


for(var i=0;i<4;i++){
    decor.innerHTML+= '<img src="./decor/christmas-ball.png" alt="" class="xmas_ball">';
}
for(var i=0;i<20;i++){
    decor.innerHTML+= '<img src="./decor/snowflake.png" alt="" class="xmas_snowflake">'
}
for(var i=0;i<20;i++){
    decor.innerHTML+= '<img src="./decor/snowflake1.png" alt="" class="xmas_snowflake">'
}
var snowflake=document.querySelectorAll(".xmas_snowflake");

for(var i=0;i<snowflake.length;i++){
    snowflake[i].style.width= Math.floor(Math.random()*60) + 'px';
    snowflake[i].style.height=snowflake[i].style.width     + 'px';
    snowflake[i].style.left=Math.floor(Math.random()*550)  + 'px';
}
function randomIntFromInterval(min,max){
    return Math.floor(Math.random()*(max-min+1)+min);
}
for(var i=0;i<snowflake.length;i++){
    snowflake[i].style.animationDuration=randomIntFromInterval(10,20) + 's';
    snowflake[i].style.animationDelay=randomIntFromInterval(0,5) + 's';
}