//1. Ejercicio número 1 
function Aritmetica (num1, num2){
    this.num1=num1;
    this.num2=num2;
    this.suma=function(){
        return (`La suma entre ${num1} y ${num2} es ${num1+num2}`)
    }
    this.resta=function(){
        return (`La resta entre ${num1} y ${num2} es ${num1-num2}`)
    };
    this.multi=function(){
        return (`La multiplicación entre ${num1} y ${num2} es ${num1*num2}`)
    };
    this.div=function(){
        return (`La división entre ${num1} y ${num2} es ${num1/num2}`)
    };
  }
  var  obj=new Aritmetica (4, 6);
  console.log(obj.suma());
  console.log(obj.resta());
  console.log(obj.multi());
  console.log(obj.div());

//2. Ejercicio número 2
function Arreglos (arr){
    this.arr=arr;
    this.suma=function(){
        var sum =0;
        for (let i = 0; i < arr.length; i++) {
            sum += arr[i];
        }
        return (`La suma de los número del arreglo es ${sum}`);
    }
    this.promedio=function(){
        var sum =0;
        var pro =arr.length;
        for (let i = 0; i < arr.length; i++) {
            sum += arr[i];
            //sum = sum+arr[i];
        }
        return (`El promedio de los número del arreglo es ${sum/pro}`)
    }
    this.mayor=function(){
        var mayor=Math.max(...arr);
        return (`El número mayor de los número del arreglo es ${mayor}`)
    }
    this.menor=function(){
        var menor=Math.min(...arr);
        return (`El número menor de los número del arreglo es ${menor}`)
    }
}

var obj=new Arreglos ([4, 1, 7, 8, 5, 3, 2, 4]);
console.log(obj.suma());
console.log(obj.promedio());
console.log(obj.mayor());
console.log(obj.menor());



