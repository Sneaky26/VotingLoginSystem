
let voterList = [];

function signupInfo(){
let voter = {
        voterid: String(document.getElementById("signupid").value),
        username: String(document.getElementById("signupuser").value),
        password: String(document.getElementById("signuppassword").value)
    }
    voterList.push(voter);
    console.log(voterList);
}
function checkPassword(){
    let voterid = String(document.getElementById("loginid").value);
    let username = String(document.getElementById("loginuser").value);
    let password = String(document.getElementById("loginpassword").value);

    let found = voterList.find(voter => 
        voter.voterid == voterid && 
        voter.username == username && 
        voter.password == password
    );

    if (found){
        alert("Login Success Welcome " + found.username + "!!");
    } else {
        alert("WRONG PASSWORD");
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
