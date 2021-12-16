//strings written in " " or ' 

var str="hello IT 2021";

document.write('given string:',str);
//string length

document.write('<br>length:',str.length)

//character at a given index
document.write('<br>Character at index 2 is ',str.charAt(2));

//index of given character (first)

document.write('<br>index of first e is ',str.indexOf('e'));

//substring

document.write('<br> substring between 1 and 7 is ',str.substring(1,7));

//to upper case and to lower case
document.write('<br>upper case:',str.toUpperCase());
document.write('<br>lower case:',str.toLowerCase());

//slice
document.write('<br>slice between 1 and 7 is ',str.slice(1,7));

//replace
document.write('<br>replace first e with i:',str.replace('e','<u>i</u>'));

//split : convert string to array
var arr=str.split(' ');
document.write('<br> after split:',arr);
console.log(typeof(arr));

var letters=str.split('');
document.write('<br>letters: ',letters);