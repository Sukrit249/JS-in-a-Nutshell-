function getNumber(){
    number = document.getElementById("Number").value;
    let text = ""

    for(let i = 0; i <= number; i++) {
        if (i === 1338) { break; }
        text += 'The ' + i + ' line | ';
        console.log(text);
    }
    document.getElementById("Numbers").innerHTML = text;
}

function Unlimit(){
    numbertwo = document.getElementById("tumberTwo").value;
    let texttwo = ""

    for(let k = 0; k <= numbertwo; k++) {
        texttwo += 'The ' + k + ' line | ';
        console.log(texttwo);
    }
    document.getElementById("tumbersTwo").innerHTML = texttwo;
}

/*function AddLineOne(){
    for (let i = 1; i < 5; i++){
        for (let o = 1; o < 5; o++){
            console.log(i * ", " + o);
        }
    console.log("\n");
    }
}*/

function Remainders(){
    num1 = document.getElementById("firstNumber").value;
    num2 = document.getElementById("secondNumber").value;

    if (num1 > num2){
        document.getElementById("result").innerHTML = (num1 % num2);
    }else if (num1 < num2){
        document.getElementById("result").innerHTML = (num1 % num2);
    }else if (num1 = num2){
        document.getElementById("result").innerHTML = (num1 % num2);
    }
}
 //testing Argumens.Object
function func1(a, b, c){
    console.log(arguments[0] = 'Hello');
    console.log(arguments[1]);
    console.log(arguments[2]);
}

func1(1, 2, 3);

function list(type) {
    var result = "<" + type + "l><li>";
    var args = Array.prototype.slice.call(arguments, 1);
    result += args.join("</li><li>");
    result += "</li></" + type + "l>"; // end list
  
    console.log(result);
  }
