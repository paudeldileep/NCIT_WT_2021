
// //function to print multiplication table of given number
// function multiplicationTable(num) {
//     for (var i = 1; i <= 10; i++) {
//         console.log(num + " x " + i + " = " + num * i);
//     }
// }
// //function call
// multiplicationTable(5);

// //function to find factorial of a number
// function factorial(num) {
//     if (num === 0) {
//         return 1;
//     }
//     return num * factorial(num - 1);
// }
// //function call
// console.log(factorial(5));


//function to find sum of two numbers
function sum(num1, num2) {
    return num1 + num2;
}

var result=sum(1,2);
console.log('sum=',result);

//function to find sum of given array
var arraySum=function(arr) {
    var sum=0;
    for (var i = 0; i < arr.length; i++) {
        sum+=arr[i];
    }
    console.log('sum of array=',sum);
}

//function call
// var result=sumArray([1,2,3,4,5]);
// console.log('sum of array=',result);

arraySum([1,2,3,4,5]);


function display(){
    console.log(this.name+" "+this.age);
}
//constructor
function Person(name,age) {
    this.name=name;
    this.age=age;
    this.display=display;
}




var person1=new Person('John',25);

console.log(person1);
var person2=new Person('binay',26);
console.log(person2);

person2.display();


