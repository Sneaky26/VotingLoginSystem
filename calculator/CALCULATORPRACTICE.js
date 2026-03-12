let firstNum = "";
let secondNum = "";
let operator = "";
let totaldisplay = "";
let memsavebaby = 0;
let memplusbaby = 0;
let uppervalue = 0;
let memretrieve = 0;
let realnum1 = 0;
let all = 0;
let first = true;
let second = false;
let continuous = false;
let result = 0;
let num1 = 0;
let num2 = 0;
let num3 = 0;
let firstCalc = true;
let ucanopera = false;

function inputNum(num){
    if (first){
	num1 = num;
	tshet(num);
	first = false;
	second = true;
    ucanopera = true;
    } else if (second){
	num2 = num;
	tshet(num);
	second = false;
	continuous = true;
    ucanopera = true;
    } else if (continuous){
	num3 = num;
	tshet(num);
    ucanopera = true;
    } 
}
function tshet(num){
    document.getElementById("display1").value += num;
    console.log("num input: " + num);
}
function operagod(oper){
    if (ucanopera){
    operator = oper;
    console.log(operator);
    document.getElementById("display1").value = "";
    ucanopera = false;
    }
}
function displayOutput(){
    if (firstCalc){
        if (operator === '+') { 	
            result = num1 + num2;
        } else if (operator === '-') { 
        result = num1 - num2;
        } else if (operator === '*') { 
        result = num1 * num2;
        } else if (operator === '/') { 
            result = num1 / num2;
        } 
        firstCalc = false
     } else {
        if (operator === '+') { 	
            result += num3;
        } else if (operator === '-') { 
        result -= num3;
        } else if (operator === '*') { 
        result *= num3;
        } else if (operator === '/') { 
            result /= num3;
        } 
     }

    document.getElementById("display1").value = result;
    result = Number(document.getElementById("display1").value);
    console.log("result: " + result);
}   
function clearer(){
    document.getElementById("display1").value = "";
}
function clearAllPeople(){
    document.getElementById("display1").value = "";
    document.getElementById("display2").value = "";
}
function memSeyb(){
    memsavebaby = Number(document.getElementById("display1").value);
    document.getElementById("display2").value = memsavebaby;
}
function memPlus(){
    uppervalue = Number(document.getElementById("display1").value);
    memplusbaby = memsavebaby + uppervalue ;
    document.getElementById("display2").value = memplusbaby;
}
function memRetrieve(){
    memretrieve = Number(document.getElementById("display2").value);
    document.getElementById("display1").value = memretrieve;
}
function memClear(){
    document.getElementById("display2").value = "";
}
