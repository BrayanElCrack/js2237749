//Escriba un funcion llamada aritmetica que tenga 2 atributos numericos y metodos para las operaciones aritmeticas basicas
function Aritmetica(numero1, numero2){
    this.numero1=numero1;
    this.numero2=numero2;
    this.suma=function(){
        return numero1 + numero2;
    }
    this.resta=function(){
        return numero1 - numero2;
    }
    this.multiplicacion=function(){
        return numero1 * numero2;
    }
    this.division=function(){
        return numero1 / numero2;
    }
}
var obj = new Aritmetica (10, 20);
console.log(obj.division());

//-----------------------------------------------------

//Crear un objeto cuyo atributo es un arreglo con el que se puede sacar un promedio
function Operacion(arreglo){
    this.arreglo = arreglo;
    this.promedio = function(){
        var promedio = arreglo.length;
        var suma = 0;
        for (let i = 0; i < arreglo.length; i++) {
            suma = suma+arreglo[i];
        }
        return suma/promedio;
    }
}
var obj = new Operacion([1,2,3,4,5]);
console.log(obj.promedio());

//-------------------------------------------------------

//FRACCIONARIOS
function Fracciones (numerador1, denominador1, numerador2, denominador2){
        this.numerador1 = numerador1;
        this.denominador1 = denominador1;
        this.numerador2 = numerador2;
        this.denominador2 = denominador2;
        //Funciones
        this.suma = function (){
        num1 = numerador1 * denominador2;
        num2 = denominador1 * numerador2;
        if (denominador1 == denominador2) {
        return `el resultado de la fracción ${numerador1} / ${denominador1} y ${numerador2} / ${denominador2}
        es ${numerador1 + numerador2} / ${denominador1}`;
        }else if(denominador1 != denominador2){
        return `el resultado de la fracción ${numerador1} / ${denominador1} y ${numerador2} / ${denominador2}
        es ${num1 + num2} / ${denominador1*denominador2}`;
        }
        }
        this.resta = function (){
        num1 = numerador1 * denominador2;
        num2 = denominador1 * numerador2;
        if (denominador1 == denominador2) {
        return `el resultado de la fracción ${numerador1} / ${denominador1} y ${numerador2} / ${denominador2}
        es ${numerador1 - numerador2} / ${denominador1}`;
        }else if(denominador1 != denominador2){
        return `el resultado de la fracción ${numerador1} / ${denominador1} y ${numerador2} / ${denominador2}
        es ${num1 - num2} / ${denominador1*denominador2}`;
        }
        }
        this.multiplicacion = function (){
        return `el resultado de la fracción ${numerador1} / ${denominador1} y ${numerador2} / ${denominador2}
        es ${numerador1*numerador2} / ${denominador1*denominador2}`;
        }
        this.division = function (){
            return `el resultado de la fracción ${numerador1} / ${denominador1} y ${numerador2} / ${denominador2}
            es ${numerador1*denominador2} / ${denominador1*numerador2}`;
            }
    }
    var obj = new Fracciones (4, 5, 6, 2);
    console.log (obj.suma());
    console.log (obj.resta());
    console.log (obj.multiplicacion());
    console.log (obj.division());