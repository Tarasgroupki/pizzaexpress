var sum = 0;
var del,del1,del2,del3,del4,del5,del6;
var sub;
var sub1;
var sub2;
var sub3;
var sub4;
var sub5;
var sub6;
$(function(){
$('.onion').on('change',function(){
    console.log($('.onion').prop('checked',true));
	if(sub != sum){
	sum += 20;
	}
	del = 1;
	sub = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn').on('click',function(){
    console.log($('.onion').prop('checked',false));
    if((del != sum) && (sub != null)){
	sum -= 20;
	}
	sub = null;
	del = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('.Mozarella').on('change',function(){
    console.log($('.Mozarella').prop('checked',true));
	if(sub1 != sum){
	sum += 30;
	}
	del1 = 1;
	sub1 = sum;
	console.log(sum);
    document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn1').on('click',function(){
    console.log($('.Mozarella').prop('checked',false));
    if((del1 != sum) && (sub1 != null)){
	sum -= 30;
	}
	sub1 = null;
	del1 = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('.Ham').on('change',function(){
    console.log($('.Ham').prop('checked',true));
	if(sub2 != sum){
	sum += 40;
	}
	del2 = 1;
	sub2 = sum;
	console.log(sum);
    document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn2').on('click',function(){
    console.log($('.Ham').prop('checked',false));
	if((del2 != sum) && (sub2 != null)){
	sum -= 40;
	}
	sub2 = null;
	del2 = sum;
    console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('.Salami').on('change',function(){
    console.log($('.Salami').prop('checked',true));
	if(sub3 != sum){
	sum += 30;
	}
	del3 = 1;
	sub3 = sum;
	console.log(sum);
    document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn3').on('click',function(){
    console.log($('.Salami').prop('checked',false));
    if((del3 != sum) && (sub3 != null)){
	sum -= 30;
	}
	sub3 = null;
	del3 = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('.Sprat').on('change',function(){
    console.log($('.Sprat').prop('checked',true));
	if(sub4 != sum){
	sum += 15;
	}
	del4 = 1;
	sub4 = sum;
	console.log(sum);
    document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn4').on('click',function(){
    console.log($('.Sprat').prop('checked',false));
    if((del4 != sum) && (sub4 != null)){
	sum -= 15;
	}
	sub4 = null;
	del4 = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('.Tuna').on('change',function(){
    console.log($('.Tuna').prop('checked',true));
	if(sub5 != sum){
	sum += 25;
	}
	del5 = 1;
	sub5 = sum;
	console.log(sum);
    document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn5').on('click',function(){
    console.log($('.Tuna').prop('checked',false));
    if((del5 != sum) && (sub5 != null)){
	sum -= 25;
	}
	sub5 = null;
	del5 = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('.Pepper').on('change',function(){
    console.log($('.Pepper').prop('checked',true));
	if(sub6 != sum){
	sum += 35;
	}
	del6 = 1;
	sub6 = sum;
	console.log(sum);
    document.getElementById('fg').innerHTML = sum;
});
});
$(function(){
$('#btn6').on('click',function(){
    console.log($('.Pepper').prop('checked',false));
    if((del6 != sum) && (sub6 != null)){
	sum -= 35;
	}
	sub6 = null;
	del6 = sum;
	console.log(sum);
	document.getElementById('fg').innerHTML = sum;
});
});