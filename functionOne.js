//Rechnen: Addition, Subtraktion, Division, Modulo 
function MathAdd(){
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = +num1 + +num2;
}
<<<<<<< HEAD
=======

>>>>>>> main
function MathSub(){
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = num1 - num2;
}
<<<<<<< HEAD
=======

>>>>>>> main
function MathMult(){
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = num1 * num2;
}
<<<<<<< HEAD
=======

>>>>>>> main
function MathDiv(){
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
    document.getElementById("result").innerHTML = num1 / num2;
}
<<<<<<< HEAD
=======

>>>>>>> main
//This function only give the remainder of the firstnumber,
function MathModulo(){
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;
<<<<<<< HEAD
=======

>>>>>>> main
    if (num1 > num2){
        document.getElementById("result").innerHTML = (num1 % num2);
    }else if (num1 < num2){
        document.getElementById("result").innerHTML = (num2 % num1);
    }else if (num1 = num2){
        document.getElementById("result").innerHTML = (num1 % num2);
    }
}
<<<<<<< HEAD
=======

>>>>>>> main
//for loop
function getNumber(){
    number = document.getElementById("Number").value;
    let text = ""
<<<<<<< HEAD
    for(let i = 0; i <= number; i++) {
        if (i === 1338) { break; }
        if(i === 0) { text += '(☼Д☼)A ZEROOO!! ' + i + ' |'}
        text += '(≧▽≦ﾉ' + i + 'ﾉﾞ ' + ' *Hello* | ';
=======

    for(let i = 0; i <= number; i++) {
        if (i === 1338) { break; }
        if(i === 0) { text += '(☼Д☼)A ZEROOO!! ' + i + ' |'}
        text += '(≧▽≦ﾉ' + i + 'ﾉﾞ ' + ' *clap* | ';
>>>>>>> main
        console.log(text);
    }
    document.getElementById("Numbers").innerHTML = text;
}
<<<<<<< HEAD
function Unlimit(){
    numbertwo = document.getElementById("tumberTwo").value;
    let texttwo = ""
    for(let k = 0; k <= numbertwo; k++) {
        if(k === 0) { texttwo += '(☼Д☼) A ZEROOO!! ' + k + ' |'}
        texttwo += '(*ˊᗜˋﾉ' + k + 'ﾉ ' + ' *Hello* | ';
=======

function Unlimit(){
    numbertwo = document.getElementById("tumberTwo").value;
    let texttwo = ""

    for(let k = 0; k <= numbertwo; k++) {
        if(k === 0) { texttwo += '(☼Д☼) A ZEROOO!! ' + k + ' |'}
        texttwo += '(*ˊᗜˋﾉ' + k + 'ﾉ ' + ' *clap* | ';
>>>>>>> main
        console.log(texttwo);
    }
    document.getElementById("tumbersTwo").innerHTML = texttwo;
}
<<<<<<< HEAD
=======

>>>>>>> main
//argument
function maxnum(){
    let max = -Infinity;
    for(let i = 0; i <arguments.length; i++) {
        if (arguments[i] > max ) {
            max = arguments[i];
        }
    }
    return max;
}
<<<<<<< HEAD
=======

>>>>>>> main
function sum(){
    let p = 0;
    for (let i = 0; i < arguments.length; i++) {
        p += arguments[1];
    }
    return p;
}
//here starts the function texting/trying/understanding the connection
