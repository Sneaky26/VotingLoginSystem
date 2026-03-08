# JavaScript Basics & HTML Interactions

---

## 1. Selecting Elements

```javascript
document.getElementById("myId")          // by id
document.querySelector(".myClass")        // first match by class
document.querySelectorAll(".myClass")     // all matches by class
document.getElementsByName("myName")[0]   // by name (needs [0])
```

---

## 2. Getting & Setting Values

```javascript
// inputs
document.getElementById("myInput").value          // get typed value
document.getElementById("myInput").value = "hi"   // set value

// text content
document.getElementById("myDiv").textContent = "Hello"     // plain text
document.getElementById("myDiv").innerHTML = "<b>Hello</b>" // supports HTML
```

---

## 3. Converting Types

```javascript
Number("123")       // string to number → 123
parseFloat("12.5")  // string to decimal → 12.5
String(123)         // number to string → "123"
```

---

## 4. Show / Hide Elements

```javascript
document.getElementById("myDiv").style.display = "none"   // hide
document.getElementById("myDiv").style.display = "block"  // show

// toggle (adds class if not there, removes if it is)
document.getElementById("myDiv").classList.toggle("hidden")
```

---

## 5. Changing Styles

```javascript
let el = document.getElementById("myDiv");
el.style.color = "red";
el.style.backgroundColor = "blue";
el.style.fontSize = "20px";
el.style.display = "none";
```

---

## 6. CSS Classes

```javascript
el.classList.add("active")       // add class
el.classList.remove("active")    // remove class
el.classList.toggle("active")    // toggle class
el.classList.contains("active")  // returns true or false
```

---

## 7. Button Click

```html
<button type="button" onclick="myFunction()">Click Me</button>
```
```javascript
function myFunction() {
    alert("Button clicked!");
}
```

---

## 8. Passing `this` (current element)

```html
<button onmouseover="hoverMe(this)" onmouseout="unhoverMe(this)">Hover</button>
```
```javascript
function hoverMe(el) {
    el.style.color = "white";
}
function unhoverMe(el) {
    el.style.color = "black";
}
```

---

## 9. Show / Hide Password

```html
<input type="password" id="password">
<button type="button" onclick="togglePassword()">Show</button>
```
```javascript
function togglePassword() {
    let pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}
```

---

## 10. Form Validation

```javascript
function validateForm() {
    let name = document.getElementById("username").value;
    if (name == "") {
        alert("Please fill in all fields!");
        return false;
    }
    return true;
}
```

---

## 11. Storing Data in an Object

```javascript
let storedInfo = {}; // global — accessible everywhere

function saveInfo() {
    storedInfo.username = document.getElementById("username").value;
    storedInfo.password = document.getElementById("password").value;
}

function checkInfo() {
    if (storedInfo.username == "admin" && storedInfo.password == "1234") {
        alert("Success!");
    } else {
        alert("Wrong!");
    }
}
```

---

## 12. Sending Data to PHP (AJAX / fetch)

```html
<form id="myForm">
    <input type="text" name="username">
    <button type="button" onclick="sendData()">Submit</button>
</form>
```
```javascript
function sendData() {
    fetch("dataprocess.php", {
        method: "POST",
        body: new FormData(document.getElementById("myForm"))
    })
    .then(res => res.text())
    .then(data => {
        alert(data); // shows whatever PHP echoes back
    });
}
```

---

## 13. Redirect to Another Page

```javascript
window.location.href = "voting.php";  // redirect
location.reload();                     // refresh page
```

---

## 14. Console Logging (for debugging)

```javascript
console.log("hello");           // print text
console.log(myVariable);        // print variable
console.log("value:", myValue); // print label + value
```
> Open with **F12 → Console tab** in browser

---

## 15. Common Events

```javascript
// click
el.addEventListener("click", () => { console.log("clicked!"); });

// keypress
el.addEventListener("keyup", (e) => {
    if (e.key === "Enter") { console.log("enter pressed!"); }
});

// input change
el.addEventListener("change", () => { console.log("changed!"); });
```

---

## Quick Reference: `getElementById` vs `querySelector`

| | `getElementById` | `querySelector` |
|---|---|---|
| By ID | `getElementById("myId")` | `querySelector("#myId")` |
| By Class | ❌ | `querySelector(".myClass")` |
| By Tag | ❌ | `querySelector("div")` |
| Multiple | ❌ | `querySelectorAll(".myClass")` |

---

## Common Mistakes

| Wrong | Correct |
|---|---|
| `getElementsById` | `getElementById` (no s) |
| `getElementsByName("x").value` | `getElementsByName("x")[0].value` |
| `type="submit"` with JS | `type="button"` |
| Two functions same name | Use different names |
| `.value` on a `<p>` or `<label>` | `.innerHTML` or `.textContent` |
