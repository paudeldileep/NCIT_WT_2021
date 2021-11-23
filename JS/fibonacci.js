
//get fibonacci series between given two numbers
const series=function fibonacci(n1, n2) {
    var series = [];
    var a = 0;
    var b = 1;
    var c = 0;
    for (var i = 0; i < n2; i++) {
        if (i >= n1 ) {
            if(c<n2){
                series.push(c);
            }
        }
        c = a + b;
        a = b;
        b = c;
    }
    return series;
}


alert(series(0,10))

//function to convert minutes to hours 

