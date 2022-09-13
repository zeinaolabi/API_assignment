//Initalized variables
let christmasAPI = "http://localhost/API_assignment/christmasAPI.php?year=&month=&day=";
let mathFormulaAPI = "http://localhost/API_assignment/mathFormulaAPI.php"
let palindromeAPI = "http://localhost/API_assignment/palindromeAPI.php?string="
let passwordAPI = "http://localhost/API_assignment/strongPasswordAPI.php"
let day = document.getElementById("day");
let month = document.getElementById("month");
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
    //Fetch data from API using axios
    const headers = { "password": password.value.trim() };
    axios.post(passwordAPI, {headers})
    .then(response => document.getElementById("password_result") = response.data.status);
})

//When the palindrome button is clicked, show result
palindromeButton.addEventListener("click", (event)=>{
    //Fetch data from API using axios
    const headers = { "string": palindrome.value.trim() };
    axios.post(palindromeAPI, {headers})
    .then(response => document.getElementById("palindrome_result") = response.data.palindrome);
})

//When the chrsitmas button is clicked, show result
christmasButton.addEventListener("click", (event)=>{
    //Fetch data from API using axios
    const headers = { "day": day.value.trim(), "month": month.value.trim()};
    axios.post(christmasAPI, {headers})
    .then(response => document.getElementById("christmas_result") = response.data.daysLeft);
})

//When the math button is clicked, show result
mathButton.addEventListener("click", (event)=>{
    //Fetch data from API using axios
    const headers = { "a": a.value, "b": b.value, "c": c.value };
    axios.post(mathFormulaAPI, {headers})
    .then(response => document.getElementById("math_result") = response.data.result);
})





