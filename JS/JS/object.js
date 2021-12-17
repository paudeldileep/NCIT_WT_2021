
//object
var student={
    name:"John",
    age:25,
    isGraduate:false,
    address:"Kathmandu",
    display:function(){
        console.log(this.name+" "+this.age+" "+this.isGraduate+" "+this.address);
        
    }
}

//iterate through the object
for(var key in student){
    console.log(key+":"+student[key]);
}

student.display();

//adding new propert to object
student.phone="9876543210";

console.log(student);

//delete property
delete student.age;

console.log(student);

//delete whole object
//delete student;

//adding new function to student
student.display2=function(){
    console.log(this.name+" "+this.age+" "+this.isGraduate+" "+this.address);
}

console.log(student);
