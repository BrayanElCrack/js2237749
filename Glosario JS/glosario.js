/*
//enPoint, postman, metodos de postman, ambito lexico, typeof, hoisting, interprete, compilador, settimeout,
forIn: pista para saber cuantos objetos clave valor tiene el ultimo ejercicio, hil en callbacks, asincronismo
collbacks, callback hell, codigo spagetti, hilo de ejecucion, trail comat, testing de bases de datos, persistencia de archivos y bases de datos

GLOSARIO JAVASCRIPT

//-------------------------------------------------

CARACTERISTICAS BASICAS QUE TRABAJARAN CON LO MENCIONADO POSTERIORMENTE:
Variables: Palabras reservadas que permiten almacenar, js cuenta con let, var y const. Las cuales cuentan con caracteristicas diferentes, en el caso de let, no permite redefenir variables, caso contrario sucede con var, y const por su parte no permite que lo almacenado en el pueda ser alterado.

Tipos de datos: (string)Cadena de texto, (int)numero entero, (float)numero decimal, (booleano)true-false/verdadero-falso, (null)no se le asigna un dato, (array)este a su vez contiene otros datos.

Entorno de ejecucion: Es aquel que permite que un conjunto de instrucciones se ejecute.

Parametros: Son aquellos que reciben los datos de entrada, los cuales permitiran que un determinado fragmento de codigo funciones. Hay fragmentos de codigo que no requieren parametros.

Instancia: La instancia utiliza la palabra reservada (new). Esta es utilizada seguida del nombre de la funcion o clase y parametros en caso de tenerlos

Impresiones: (console.log)imprime en consola, (document.write)imprime en documento.

//----------------------------------------------

CLASE MATH Y SUS METODOS:
Pendiente...

//----------------------------------------
El simbolo / indica posibilidades

OPERADORES LOGICOS:
&&/and Significa (y)
||/or Significa (o)
not Significa (no)

//----------------------------------

OPERADORES DE ASIGNACION:
= Sirve para almacenar
== Sirve para comparar, no discrimina el dato
=== Sirve para comparar, si discrimina el dato
> Significa (mayor que)
< Significa (menos que)
!=/<> Significa (diferente)

//----------------------------------------

CONDICIONALES:
if: Es un scope que sirve para condicionar, el if significa (si), de este deriva el else if (sino si) y else (sino). Ejm: if(){}, else if(){}, else{}

switch: Pendiente...

//--------------------------------------

CICLOS:
for: Es un scope que me permite dar un punto de partida, hasta donde quiero que vaya y de cuanto en cuanto. Ejm: for(let i=0; i<10; i++){}
forIn: Trabaja directamente con los objetos. Ejm: for(i in object){}

while: Pendiente...

do while: Pendiente...

//-----------------------------------

ARREGLOS:
Arreglo convencional: Fragmento de codigo que permite almacenar datos, a esos datos se les puede llamar indices o posiciones.

Arreglo asociativo: Fragmento de codigo que permite almacenar datos y asignarles datos a esos datos.

Arreglo multidimensional: Arreglo que permite crear arreglos convencionales o asociativos dentro del mismo.

//----------------------------------------

FUNCIONES:
Funcion convencional: Fragmento de codigo que contiene un conjunto de instrucciones que permiten dar solucion a un problema en especifico.

Funcion anonima: Funcion a la que no se le asigna un nombre

Funcion flecha: Funcion que tiene una sintaxis mas reducida, puede llamarsele funcion simplificada.
Donde no puede usarse: Pendiente...

Return: Hace entrega del resultado.

Closures: Funcion interna dentro de otra funcion que puede hacer uso de las variables de la funcion externa.

Callbacks: Funcion que tiene como parametro otra funcion.

//-------------------------------------------

OBJETOS:
Objeto literal: Es un scope que no requiere ser instanciado y trabaja en base a (clave-valor).

Objeto instanciado: Es aquel que hace uso de la palabra reservada (new) seguido del nombre de la clase o funcion.

//-------------------------------------------

CLASES:
Super clase: Clase padre de la cual derivan otras clases.

Sub clase: Clase derivada de la clase padre.

Extends: Palabra reservada que indica que es una clase heredada

Super: Palabra reservada que almacena los parametros heredados.

This: Significa esta clase, es usada junto a la propiedad, a la cual le es asignada un valor.

Metodo constructor: Es lo primero que se ejecuta al generar una instancia, puede o no contener parametros.

Metogo getter: Permite obtener, normalmente hace uso de la palabra reservada (return) o de impresion como (console.log).

Metodo setter: Permite modificar. Este trabaja como un parametro y se le es asignado a una propiedad.
*/
"a";//String-Cadena de texto
1;//Int-Numero entero
1.5;//Float-Numero decimal
["a", 1, 1.5, null, true, false]//Array-Arreglo que contiene datos
null//Null-Sin dato
true, false;//Booleano-Verdadero o falso
var a=5;
console.log();//Impresion por consola, (Puede recibir datos, variables y funciones)
document.write();//Impresion en el documento, (Puede recibir datos, variables y funciones)
nombreFuncion();//Llamado de la funcion, (Puede recibir o no parametros)
function funcion(parametro) {//Funcion con parametro
    console.log(parametro);
}
funcion(1);//Llamado de la funcion con argumento
color1="rojo";
color2="negro";
if (color1=="amarillo" && color2=="azul") {//El condicional if indica que si esto ocurre sera este scope el que se ejecutara
    console.log(true);
}else if (color1=="rojo" || color2=="verde") {//Else if  indica que si lo anterior no ocurre pero esto si, sera este scope el que se ejecutara
    console.log(true);
}else{//Else indica que si lo anterior no es, esto se ejecutara
    console.log(false);
}
for (let i = 0; i < 10; i++) {//Ciclo for que inicia desde 0, ira hasta el 9 de uno en uno
    console.log(i);//Impresion
}
console.log(Math.abs(1));//Devuelve valor absoluto
console.log(Math.ceil(5.5));//Redondea al numero posterior
console.log(Math.floor(5.5));//Redondea al numero previo
console.log(Math.round(5.5));//Redondea al numero mas cercano
console.log(Math.sqrt(5));//Raiz cuadrada
console.log(Math.pow(5,2));//Base y exponente
console.log(Math.sign(5));//Indica si un numero es negativo, cero o positivo
console.log(Math.random()*10);//Duelve numero aleatorio desde el 0 hasta el numero que se le haya asignado