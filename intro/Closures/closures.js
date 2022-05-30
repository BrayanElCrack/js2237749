//Ejercicio 1
//Funcion externa
function alcancia(){
    //Variable unica de esta funcion
    let ahorro=0;
    //Funcion interna que recibe un parametro, almacenar suma e impresion
    function guardar(monedas){
        ahorro=ahorro+monedas;
        console.log(`tiene $${ahorro} pesos`);
    }
    //Retorno de la funcion interna
    return guardar;
}
//variable constante, almacenacion de funcion externa
const brayan = alcancia();
//Llamado de la funcion con datos de entrada para la funcion interna
brayan(500);
brayan(500);

//--------------------------------------------------------------------

//Ejercicio 2
//Funcion externa que recibe un parametro
function alcancia(monedas){
    //Funcion interna, incremento de 1 en 1 e impresion
    function incrementar(){
        monedas++;
        console.log(monedas);
    }
    //Funcion interna, decrementa de 1 en 1 e impresion
    function decrementar(){
        monedas--;
        console.log(monedas);
    }
    //Retorno de la funcion interna
    return incrementar;
}
//Variable constante, almacenacion de funcion externa con dato de entrada
const elcrack = alcancia(100);
//Llamado de la funcion
elcrack();
elcrack();

//--------------------------------------------------------------

//Funcion flecha de incremento
//Funcion externa con parametro almacenada en una variable constante
const alcancia2 = (monedas)=>{
    //Funcion interna en flecha e impresion
    return ()=>{
        monedas++;
        console.log(monedas);
    }
}
const elcrack2 = alcancia2(100);//Almacenar funcion externa con dato de entrada en variable constante
elcrack2();//Llamado de la funcion

//------------------------------------------------------------

//Ejercicios del dia 12/05/2022
//Ejercicio 1
//Funcion externa con parametro
function posicion (numero){
    //Funcion interna con parametro e impresion
    function persona (nombre){
        console.log(`Hola ${nombre} tu posicion es ${numero++}`)
    }
    return persona//Retorno de la funcion interna
}
const a = posicion(1);//Funcion externa con dato de entrada almacenada en variable constante
//Llamados de la funcion con datos de entrada
a("Brayan");
a("Marcus");
a("Esteban");

//---------------------------------------------------------

//Ejercicio 2
//Funcion externa con variables privadas
function externa (){
    let pos=0;
    let i=0;
    let inc=0;
    let arreglo = [0,0,1,4];
    //Funcion interna con parametro, ciclo for, condicional if anidado e impresion
    function interna (numero){
        for (i = 0; i < arreglo.length; i++) {
            pos=arreglo.indexOf(numero);//La funcion (indexOf) permite identificar la posicion en que se encuentra el parametro (numero)
            if (numero==arreglo[i]) {
                inc++;
            }
        }
        console.log(`
        Numero: ${numero}
        Repeticiones: ${inc}
        Posicion: ${pos}`);
    }
    return interna;//Retorno de la funcion interna
}
const b = externa();//Almacenar funcion externa en variable constante
b(1);//Llamado de la funcion con dato de entrada

//--------------------------------------------------------

//Ejercicio 3
//Funcion externa con parametro y variables privadas
function externa(arreglo){
    let i=0;
    let suma=0;
    //Funcion interna con ciclo for e impresion
    function sumPro(){
        for (i = 0; i < arreglo.length; i++) {
            suma = suma+arreglo[i];
        }
        console.log(`
        La suma de los datos es: ${suma}
        El promedio es: ${suma/arreglo.length}`);
    }
    return sumPro;//Retorno de la funcion
}
const c=externa([1,2,3,4,5]);//Funcion externa que recibe como dato de entrada un arreglo
c();//Llamado de la funcion

//----------------------------------------------------

//Ejercicio 4
//Funcion externa
function externa(){
    const object = {//Objeto literal
        nombre:"Brayan",
        apellido:"Cañon",
        telefono:3228761675};
        //Funcion interna que hace uso del ciclo for in e imprime en pantalla
    function interna(){
        for (i in object) {
            console.log(`${i}: ${object[i]}`);
        }
    }
    return interna;//Retorno de la funcion interna
}
const d=externa();//Funcion externa almacenada en variable constante
d();//Llamado de la funcion

//-----------------------------------------------

//Ejercicios del dia 16/05/2022
//Ejercicio 1
//Funcion externa con parametro y variables privadas
function externa(producto){
    let psd=0;
    let cambio=0;
    let des1=producto*0.10;//10% del producto
    let des2=producto*0.20;//20% del producto
    let des3=producto*0.30;//30% del producto
    //Funcion interna con parametro
    function interna(billete){
        //Condicional y sus revidados que hacen uso de operadores logicos
        if (producto>2000 && producto<=5000) {
            psd=producto;//Producto sin descuento
            producto=producto-des1;//Producto con descuento
            cambio=billete-producto;//El cambio al adquirir producto con descuento
            //Impresion
            console.log(`
            Billete recibido: ${billete}
            Valor del producto: ${psd}
            Producto con descuento del 10%: ${producto}
            El cambio: ${cambio}
            `);
            if (billete<producto) {
                console.log(`No puede adquirir este producto`);
            }
        }else if (producto>5000 && producto<=10000) {
            psd=producto;//Producto sin descuento
            producto=producto-des2;//Producto con descuento
            cambio=billete-producto;//El cambio al adquirir producto con descuento
            //Impresion
            console.log(`
            Billete recibido: ${billete}
            Valor del producto: ${psd}
            Producto con descuento del 20%: ${producto}
            El cambio: ${cambio}
            `);
            if (billete<producto) {
                console.log(`No puede adquirir este producto`);
            }
        }else if (producto>10000) {
            psd=producto;//Producto sin descuento
            producto=producto-des3;//Producto con descuento
            cambio=billete-producto;//El cambio al adquirir producto con descuento
            //Impresion
            console.log(`
            Billete recibido: ${billete}
            Valor del producto: ${psd}
            Producto con descuento del 30%: ${producto}
            El cambio: ${cambio}
            `);
            if (billete<producto) {
                console.log(`No puede adquirir este producto`);
            }
        }else{
            cambio=billete-producto;//El cambio al adquirir producto con descuento
            //Impresion
            console.log(`
            Billete recibido: ${billete}
            Producto: ${producto}
            El producto no tiene descuento
            Cambio: ${cambio}
            `);
            if (billete<producto) {
                console.log(`No puede adquirir este producto`);
            }
        }
    }
    return interna;//Retorno de la funcion interna
}
const e=externa(2000);//Almacenar funcion externa con dato de entrada en variable constante
e(500);//Llamado de la funcion con dato de entrada

//----------------------------------------------------------------

//Ejercicio 2
//Funcion externa con 2 parametros y variables privadas
function externa(juan, carlos){
    let incj=0;//Incremento juan
    let incc=0;//Incremento carlos
    let lsj="abcd";//Letras seleccionadas por juan
    let lsc="efgh";//Letras seleccionadas por carlos
    //Funcion interna
    function interna(){
        //Ciclor for y condicional if anidados en otro ciclo for e impresion
        for (let j = 0; j < lsj.length; j++) {
            for (let lej = 0; lej < juan.length; lej++) {
                if (lsj[j]==juan[lej]) {
                    incj=incj+1;
                }
            }
        }console.log(`Juan tiene ${incj} puntos`);
        //Ciclor for y condicional if anidados en otro ciclo for e impresion
        for (let c = 0; c < lsc.length; c++) {
            for (let lec = 0; lec < carlos.length; lec++) {
                if (lsc[c]==carlos[lec]) {
                    incc=incc+1
                }
            }
        }console.log(`Carlos tiene ${incc} puntos`);
        //Condicional if, derivados e impresiones
        if (incj>incc) {
            console.log(`Juan lleva la delantera`);
        }else if (incc>incj) {
            console.log(`Carlos lleva la delantera`);
        }else{
            console.log(`Se encuentran empatados`);
        }
    }
    return interna;//Retorno de la funcion interna
}
const f=externa("abcd","efggg");//Funcion externa con 2 datos de entrada almacenados en variable constante
f();//Llamado de la funcion

//Otra posible forma de resolver este ejercicio es declarando los for anidados de juan y carlos sin condicional y sin retornar, por separado. Luego declarar los condicionales de comparacion de letras por separado y a lo ultimo generar los condicionales en donde se comparan los puntos e imprimir

//----------------------------------------------------------

//Ejercicio 3
function externa(a, b){//Funcion externa con parametros, variables privadas y metodos de la clase Math
    let p1=Math.pow(a,2);
    let p2=Math.pow(b,2);
    let p3=p1+p2;
    let h=Math.sqrt(p3);
    function interna() {//Funcion interna e impresion
        console.log(`
        Cateto a: ${a}
        Cateto b: ${b}
        Valor de la hipotenusa ${h}`);
    }
    return interna;//Retrono de la funcion interna
}
const g=externa(5, 25);//Funcion externa con 2 datos de entrada almacenada en variable constante
g();//Llamado de la function

//--------------------------------------------------------------

//Ejercicio 4
function externa(lado1, lado2, lado3){//Funcion externa con parametros
    function interna(){//Funcion interna, condicional y sus derivados, operadores logicos, operadores de asignacion e impresiones
        if (lado1==lado2 && lado2==lado3) {
            console.log(`
            lado a: ${lado1}
            lado b: ${lado2}
            lado c: ${lado3}
            El triangulo es equilatero debido a que todos sus lados son iguales`);
        }else if (lado1!=lado2 && lado2==lado3 || lado2!=lado1 && lado1==lado3 || lado3!=lado1 &&lado1==lado2) {
            console.log(`
            lado a: ${lado1}
            lado b: ${lado2}
            lado c: ${lado3}
            El triangulo es isosceles debido a que dos de sus lados son iguales y uno diferente`);
        }
        else{
            console.log(`
            lado a: ${lado1}
            lado b: ${lado2}
            lado c: ${lado3}
            El triangulo es escaleno debido a que todos sus lados son diferentes`);
        }
    }
    return interna;//Retorno funcion interna
}
const h=externa(1, 10, 5);//Funcion externa con datos de entrada almecanada en variable constante
h();//Llamada de la funcion