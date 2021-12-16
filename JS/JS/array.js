//create array #1
var students=['binay','sishir','sarath','siva','sai'];

//create array #2
var marks=[10,20,30,40,50];

//create array #3
var colors=new Array('red','green','blue','yellow','pink');

//printing values of array 
//#1

for(var i=0;i<students.length;i++)
{
    console.log(students[i]);
    document.write(i+1,'.',students[i]+'<br>');
}

document.write('<br>using for-of loop<br>');
//#2  for-of loop
for(var student of students)
{
    console.log(student);
    document.write(student+'<br>');
}

document.write('<br>using for-in loop<br>');
//#3 for-in loop
for(var i in students)
{
    console.log(students[i]);
    document.write(students[i]+'<br>');
}

//lenght of array ]
document.write('<br>Length(no of items in an arary) of students array is ',students.length);


//insertion at the beginning
students.unshift('binayak');

document.write('<br>after insertion at the beginning<br>');
for(var i=0;i<students.length;i++)
{
    console.log(students[i]);
    document.write(students[i]+'<br>');
}

//insertion at the end
students.push('shreya');
document.write('<br>after insertion at the end<br>');
for(var i=0;i<students.length;i++)
{
    console.log(students[i]);
    document.write(students[i]+'<br>');
}

//delete from the beginning
students.shift();
document.write('<br>after deletion from the beginning<br>');
for(var i=0;i<students.length;i++)
{
    console.log(students[i]);
    document.write(students[i]+'<br>');
}

//delete from the end
students.pop();
document.write('<br>after deletion from the end<br>');
for(var i=0;i<students.length;i++)
{
    console.log(students[i]);
    document.write(students[i]+'<br>');
}


//orinal array colors
document.write('<br>original array colors<br>');
for(var i=0;i<colors.length;i++)
{
    console.log(colors[i]);
    document.write(colors[i]+'<br>');
}

// var copy_of_colors=colors;


// //copied colors array
// document.write('<br>copied array colors<br>');
// for(var i=0;i<copy_of_colors.length;i++)
// {
//     console.log(copy_of_colors[i]);
//     document.write(copy_of_colors[i]+'<br>');
// }

// copy_of_colors.pop();

// //orinal array colors after pop in copy
// document.write('<br>original array colors<br>');
// for(var i=0;i<colors.length;i++)
// {
//     console.log(colors[i]);
//     document.write(colors[i]+'<br>');
// }



// //copied colors array after pop
// document.write('<br>copied array colors<br>');
// for(var i=0;i<copy_of_colors.length;i++)
// {
//     console.log(copy_of_colors[i]);
//     document.write(copy_of_colors[i]+'<br>');
// }


//deleting elemnet at middle(or any position)

var removed_color=colors.splice(1,0,'black');

//colors array after splice
document.write('<br>after slice, array colors<br>');
for(var i=0;i<colors.length;i++)
{
    console.log(colors[i]);
    document.write(colors[i]+'<br>');
}

var str=colors.join(',');

document.write('<br>',str);

var new_colors=colors.slice(1,3);

//new array after slice
document.write('<br>after slice, array colors<br>');
for(var i=0;i<new_colors.length;i++)
{
    console.log(new_colors[i]);
    document.write(new_colors[i]+'<br>');
}
