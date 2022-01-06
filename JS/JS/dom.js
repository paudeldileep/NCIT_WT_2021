//dom element access

function handleClick() {
  var userName = document.getElementById("name").value;
  var userEmail = document.getElementById("email").value;

  console.log(userName, userEmail);
  //writing to document
  //   //access the target element
  //   var targetElement = document.getElementById("display_area");
  //   targetElement.innerHTML =
  //     "<h2 style='color:red'>Hello " +
  //     userName +
  //     " your email is " +
  //     userEmail +
  //     "</h2>";

  //   document.getElementById("name").value = "";
  //   document.getElementById("name").placeholder = "Enter name";

  //validating name
  var pos = userName.search(/^[A-Z][a-z]+\s[A-Z][a-z]+(\s[A-Z][a-z]+)?$/);
  var nameError = document.getElementById("name_error");
  //for email
  var pos2 = userEmail.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  var emailError = document.getElementById("email_error");

  if (pos == -1) {
    //access span element
    nameError.innerHTML = "<span style='color:red'>*Invalid name</span>";
  } else {
    nameError.innerHTML = "<span style='color:green'>Name is Valid</span>";
  }
  if (pos2 == -1) {
    emailError.innerHTML = "<span style='color:red'>*Invalid email</span>";
  } else {
    emailError.innerHTML = "<span style='color:green'>Email is Valid</span>";
  }
}
