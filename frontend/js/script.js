//Initalized variables
let christmasAPI = "http://localhost/API_assignment/christmasAPI.php?year=&month=&day=";
let mathFormulaAPI = "http://localhost/API_assignment/mathFormulaAPI.php"
let palindromeAPI = "http://localhost/API_assignment/palindromeAPI.php?string="
let passwordAPI = "http://localhost/API_assignment/strongPasswordAPI.php"
let day = document.getElementById("day");
let month = document.getElementById("month");
let year = document.getElementById("year");
let a = document.getElementById("a");
let b = document.getElementById("b");
let c = document.getElementById("c");
let password = document.getElementById("password");
let palindrome = document.getElementById("palindrome");
let christmasButton = document.getElementById("christmas_button");
let palindromeButton = document.getElementById("palindrome_button");
let passwordButton = document.getElementById("password_button");
let mathButton = document.getElementById("math_button");

//When the password button is clicked, show result
passwordButton.addEventListener("click", (event)=>{
fetch(passwordAPI, {
    method: "POST",
    body: JSON.stringify({
        password: "foo",
    })
})
.then(response => response.json())
.then(json => console.log(json));
})





