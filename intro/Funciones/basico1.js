//FUNCION CONVENCIONAL
function saludar(nombre){
    //console.log("Hola");
    return `Hola ${nombre}
    `;//Este salto se imprime gracias a las comillas francesas
}

var x=saludar('Maria');
var y=saludar('Jose');
var z=saludar('Juan');
var w=saludar('Ana');
var a=saludar('Pedro');
console.log(x+y+z+w+a);

//-----------------------------------------------------

//FUNCIONES FLECHA
var saludar = ['Maria', 'Jose', 'Juan', 'Ana', 'Pedro'];
saludar.forEach(function(nombre){
    console.log(`Hola ${nombre}`);
});

//...........................................

var saludar = ['Maria', 'Jose', 'Juan', 'Ana', 'Pedro'];
saludar.forEach(nombre=>{
    console.log(`Hola ${nombre}`);
});

//----------------------------------------------------

//FACTORIAL
function factor(numero1, numero2){
    if (numero1 % numero2 == 0){
        console.log(`El factor de ${numero1} es ${numero2}`)
    }else{
        console.log('No es factor');
    }
}
factor(10, 2);

//-------------------------------------------------------

//Funcion flecha sin parametros
var sinpar=()=>"Hola";
console.log(sinpar());

//Funcion anonima con un parametro
var cuadrado=function(num){
    return num*num;
}

//Funcion flecha con parametro
var cuadradito=num=>num*num;
console.log(cuadradito(10));

//-------------------------------------------------------

//MAS DE UN PARAMETRO
var factor=(numero1, numero2)=>{
    if (numero1 % numero2 == 0){
        console.log(`El factor de ${numero1} es ${numero2}`)
    }else{
        console.log('No es factor');
    }
}
console.log(factor(7, 10));

//-----------------------------------------------------

//TALLER
//1. funcion que reciba un valor que representa una cantidad en dinero y y hallar su porcentaje
var d = dinero=>dinero * 0.10;
console.log("El 10% es $"+d(50000));

//2. funcion que reciba un numero y de el indicar cuales son los divisores
var n = numero=>{
    for (let divisor = 1; divisor < numero; divisor++) {
        if (numero%divisor==0) {
            console.log(`${divisor} es divisor de ${numero}`);
        }
    }
}
console.log(n(10));

//3. Ingrese una fecha e indicar si la fecha es anterior, posterior o actual

//----------------------------------------------------------

//TALLER EN CLASE 02/05/22
/*1. Diseñar una pagina resumen que explique las funciones flecha y las diferencias con laas funciones clásicas.
2. Ejercicios:
	c)Leer un vector y un numero y multiplicar cada elemento del arreglo por el numero y retornar un vector con los nuevos valores
	d)Leer dos vectores halla de cada uno el promedio y retornar el vector con mayor promedio
	e)Leer un arreglo numerico y retornar desviacion estandar*/

//a)Leer una cadena de texto y decir cuantas minusculas y mayusculas
function Ejercicios (cadena){
    this.cadena = cadena;
    this.mayusculas = function(){
        var contar = 0;
        var mayusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        for (var i = 0; i < mayusculas.length; i++) {
            for (var x = 0; x < cadena.length; x++) {
                if (cadena[x]==mayusculas[i]) {
                    contar+=1;
                }
            }
        }
        return `Mayusculas: ${contar+=1}`;
    }
    this.minusculas = function(){
        var contar = 0;
        var minusculas = "abcdefghijklmnopqrstuvwxyz";
        for (var i = 0; i < minusculas.length; i++) {
            for (var x = 0; x < cadena.length; x++) {
                if (cadena[x]==minusculas[i]) {
                    contar+=1;
                }
            }
        }
        return `Minusculas: ${contar+=1}`;
    }
}
var obj = new Ejercicios("HOLasssss");
console.log(obj.mayusculas());
console.log(obj.minusculas());
//b) Leer un arreglo y un numero decir cuantas veces esta el numero en el arreglo