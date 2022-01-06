//1. ask user for his full name and check whether it is valid or not

/*
var fullName = prompt("Enter your full name");

var position = fullName.search(/^[A-Z][a-z]+\s[A-Z][a-z]+(\s[A-Z][a-z]+)?$/); //matches the first name and last name or first name and last name and middle name (each starting with capital letter)

if (position == -1) {
  alert("You entered an Invalid name");
} else {
  alert("You entered a valid name");
}

*/

//2. ask user his 10 digit ph number and validate it
/*
var phone = prompt("Enter your 10 digit phone number");

var position = phone.search(/^[0-9]{10}$/);

if (position == -1) {
  alert("You entered an Invalid phone number");
} else {
  alert("You entered a valid phone number");
}

//also check whether the number has any alphabets or not
if (phone.match(/[a-z]/i)) {
  alert("You number conatins alphabets");
}
*/

//3. ask user his email and validate it

var email = prompt("Enter your email");
var position = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);

if (position == -1) {
  alert("You entered an Invalid email");
} else {
  alert("You entered a valid email");
}
