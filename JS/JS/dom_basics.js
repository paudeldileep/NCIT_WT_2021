// //access element
// //1.

// var form1 = document.forms[0].elements[0];

// console.log(form1);

// form1.style.backgroundColor = "red";
// form1.style.fontSize = "20px";

// //accessing second forms second element
// var elem2 = document.forms[1].elements[1];

// elem2.style.border = "1px solid red";

//***************************** second approach */
//2.by tagname

var form1 = document.getElementsByTagName("form")[0];

form1.style.border = "1px solid red";

var form2 = document.getElementsByClassName("form")[1];
form2.style.border = "1px solid blue";

var element = document.8("useremail")[0];
element.style.border = "2px solid green";
