# JavaScript — The Basics

---

## 1. Variables

```javascript
let name = "John";       // can be changed
const age = 20;          // cannot be changed
var old = "old way";     // old way, avoid using
```

---

## 2. Data Types

```javascript
let name = "John";          // String
let age = 20;               // Number
let price = 12.5;           // Number (decimal)
let isLoggedIn = true;      // Boolean (true/false)
let nothing = null;         // empty on purpose
let notDefined;             // undefined (no value yet)
```

---

## 3. String Tricks

```javascript
let name = "John";

name.length           // 4
name.toUpperCase()    // "JOHN"
name.toLowerCase()    // "john"
name.includes("Jo")   // true
name.trim()           // removes spaces from both ends

// combining strings
let msg = "Hello " + name;           // "Hello John"
let msg2 = `Hello ${name}`;          // same thing (template literal)
```

---

## 4. Numbers

```javascript
let x = 10;
let y = 3;

x + y    // 13
x - y    // 7
x * y    // 30
x / y    // 3.333
x % y    // 1  (remainder)
x ** y   // 1000 (power)

// converting
Number("123")       // string to number → 123
parseFloat("12.5")  // string to decimal → 12.5
String(123)         // number to string → "123"
```

---

## 5. Arrays

```javascript
let fruits = ["apple", "banana", "mango"];

fruits[0]               // "apple" (index starts at 0)
fruits.length           // 3
fruits.push("grape")    // add to end
fruits.pop()            // remove from end
fruits.includes("apple") // true

// loop through array
fruits.forEach(fruit => {
    console.log(fruit);
});
```

---

## 6. Objects

```javascript
let person = {
    name: "John",
    age: 20,
    password: "1234"
};

person.name         // "John"
person.age          // 20
person.name = "Bob" // change value
```

---

## 7. If / Else

```javascript
let age = 20;

if (age >= 18) {
    console.log("Adult");
} else if (age >= 13) {
    console.log("Teen");
} else {
    console.log("Kid");
}
```

---

## 8. Comparison Operators

```javascript
x == y    // equal (value only)
x === y   // equal (value AND type) — use this one
x != y    // not equal
x > y     // greater than
x < y     // less than
x >= y    // greater than or equal
x <= y    // less than or equal
```

---

## 9. Logical Operators

```javascript
x > 0 && x < 10   // AND — both must be true
x < 0 || x > 10   // OR — at least one must be true
!isLoggedIn        // NOT — flips true to false
```

---

## 10. Functions

```javascript
// basic function
function greet() {
    console.log("Hello!");
}
greet(); // call it

// function with parameters
function add(num1, num2) {
    return num1 + num2;
}
let result = add(5, 3); // result = 8

// arrow function (shorter way)
const add = (num1, num2) => num1 + num2;
```

---

## 11. Loops

```javascript
// for loop
for (let i = 0; i < 5; i++) {
    console.log(i); // 0 1 2 3 4
}

// while loop
let i = 0;
while (i < 5) {
    console.log(i);
    i++;
}

// loop through array
let fruits = ["apple", "banana", "mango"];
for (let fruit of fruits) {
    console.log(fruit);
}
```

---

## 12. Ternary Operator (short if/else)

```javascript
let age = 20;

// instead of this:
if (age >= 18) {
    console.log("Adult");
} else {
    console.log("Kid");
}

// you can write:
let result = age >= 18 ? "Adult" : "Kid";
```

---

## 13. Null / Undefined Checks

```javascript
let name = "";

if (name == "") console.log("empty!");
if (name == null) console.log("null!");
if (!name) console.log("falsy — catches empty, null, undefined");
```

---

## 14. Console (for debugging)

```javascript
console.log("hello")          // print text
console.log(myVariable)       // print variable
console.log("value:", myVar)  // label + value
console.error("oops!")        // red error message
```
> Open with **F12 → Console tab** in browser

---

## 15. Math

```javascript
Math.round(4.6)    // 5
Math.floor(4.9)    // 4 (round down)
Math.ceil(4.1)     // 5 (round up)
Math.max(1, 2, 3)  // 3
Math.min(1, 2, 3)  // 1
Math.abs(-5)       // 5 (removes negative)
Math.random()      // random number between 0 and 1
```

---

## 16. Common Mistakes

| Wrong | Correct |
|---|---|
| `=` to compare | `==` or `===` to compare |
| `const x = 1; x = 2` | use `let` if value changes |
| forgetting `return` in function | add `return` to get value back |
| `"1" + 1 = "11"` | `Number("1") + 1 = 2` |
| calling function before defining | define function first |

---

## 17. Quick Cheat Sheet

```javascript
// declare
let x = 5;
const name = "John";

// check
if (x > 0) { ... }

// loop
for (let i = 0; i < 5; i++) { ... }

// function
function myFunc(param) { return param; }

// array
let arr = [1, 2, 3];
arr.push(4);

// object
let obj = { name: "John", age: 20 };
obj.name;
```
