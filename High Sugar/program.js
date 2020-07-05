var candies,threshold,tmp, sum; var index1,index2; var el,outp;
candies=[33,20,12,19,29];
threshold=33; var ln=candies.length; var last=candies.length-1;
function sugarHigh(candies,threshold){
for(var i=0;i<ln;i++){
if(0<=candies.length<=100000){
    if(candies[i]!=last){
    tmp=candies[i]++;
    el=candies[i];
    sum=el + tmp;
    if(sum<threshold){
        index1=candies.indexOf(el);
        index2=candies.indexOf(tmp);
return outp=[index1,index2];
        }
    }
    }}
console.log(sugarHigh());
}
