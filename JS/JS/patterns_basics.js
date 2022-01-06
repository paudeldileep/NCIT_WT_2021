var str =
  "She loves lover loved love NCIT very much  and I LOVE because its a good college";

// search

var position = str.search(/love/);

console.log("position of love ", position);

//replace
var newStr1 = str.replace(/love/g, "like");
console.log("new string is ", newStr1);

var newStr = str.replace(/love/gi, "hate").replace(/good college/g, "bad");

console.log("new str ", newStr);

//match
var arr = str.match(/\blove[a-z]*/gi);

console.log("arr of words", arr);
