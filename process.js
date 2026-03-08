
let voterinfo = {};

function signupInfo(){
voterinfo.voterid = String(document.getElementById("signupid").value);
voterinfo.username = String(document.getElementById("signupuser").value);
voterinfo.password = String(document.getElementById("signuppassword").value);
console.log(voterinfo);
}
function checkPassword(){
let voterid = String(document.getElementById("loginid").value);
let username = String(document.getElementById("loginuser").value);
let password = String(document.getElementById("loginpassword").value);

if (voterid == voterinfo.voterid && 
    username == voterinfo.username && 
    password == voterinfo.password){
      alert("Login Success Welcome " + voterinfo.username + "!! You are TRASH NIGGA");
    } else {
        alert("WRONG PASSWORD NICKER STOP HACKING PUSSY NIGGA");
    }

}

function processor(operation){
    const num1 = Number(document.getElementById("num1").value);
    const num2 = Number(document.getElementById("num2").value);
    let result;
    if (operation == 'plus') result = num1 + num2  
    if (operation == 'minus') result = num1 - num2  
    if (operation == 'divide') result = num1 / num2  
    if (operation == 'multiply') result = num1 * num2  
        
    document.getElementById("result").innerHTML = "RESULT: " + result; 
}

function hoverNav(hover){
    hover.style.color = "white";
}
function unhoverNav(hover){
    hover.style.color = "black";
}
