//Promise
var obj = [];
const getDatos=()=>{
    return new Promise((resolve, reject)=>{
        if (obj.length==0) {
            reject(new Error(`No existen datos`));
        }
        setTimeout(() => {
            resolve (obj);
        }, 1500);
    });
}
getDatos().then((obj)=>console.log(obj));

//-------------------------------------------

//async-await
async function fetchingData(){
    try {
        const datosFetched = await getDatos();
        console.log(datosFetched);
    } catch (err) {
        console.log(err.message);
    }
}
fetchingData();

//-----------------------------------------------------

//19/05/2022
//Ejercicio 1
var obj = {
    crack:"brayan",
    suma:function () {
        let s=1+1;
        return s;
    }
};

function prueba(obj) {
    return new Promise(
        function (resolve, reject) {
            if (!obj) {
                reject(new Error(`No existen datos`));
            }
            setTimeout(() => {
                resolve (obj);
            }, 500);
        }
    );
}
let x = {}
prueba().then(function (obj) {
    console.log(`
    ${obj.suma()}
    ${obj.crack}
    `);
})
.then((x)=>console.log(typeof(x)))

//----------------------------------------------

//Ejercicio 2
const mivariable=new Promise((resolve, reject)=>{/*codigo*/})
const mifuncion=(parametros)=>{new Promise((resolve,reject)=>{})}
//........................................
function otraFuncion() {//Funcion principal
    return new Promise((resolve,reject)=>{//Objeto Promise que tiene una funcion flecha como argumento y su vez la funcion flecha tiene 2 parametros que actuaran como validacion y error(resolve/reject)
        resolve();//Llamado de la funcion
    })
}
function prueba1() {//Funcion convencional
    console.log(`Probando num1`);//Impresion
}
const prueba2=()=>console.log(`Probando num2`);//Funcion flecha con impresion

function prueba3() {//Funcion convencional
    let vec=[1,2,3,4];//Variable con arreglo almacenado
    console.log(vec);//Impresiones
    console.log(`Tamaño del vector ${vec.length}`);
}
otraFuncion()//Llamado de la funcion que retorna objeto Promise
.then(prueba1)//.then que indica que se ejecutara la funcion que esta entre los parentesis y esta tomara el lugar de resolve para hacer el llamado desde alli
.then(prueba2)
.then(prueba3)

//-------------------------------------------

function principal() {//Funcion principal
    return new Promise(//Retorna objeto promise que recibe como argumento una funcion que tiene 2 parametros
        function (resolve, reject) {
            resolve();//Llamado de la funcion
        }
    )
}

function secundaria() {//Funcion secundaria
    let arreglo=["house", "car", "university", "jump", "play"];//Variable almacena arreglo
    let p=Math.round(Math.random()*arreglo.length);//Almacena una posicion del arreglo y lo redondea al entero mas cercano
    let d=arreglo[p];//Ingresa al arreglo, convierte la posicion en dato y lo almacena
    if (d==arreglo[0]) {//Condicional if y return
        console.log(`${d}: casa`);
    }else if (d==arreglo[1]){
        console.log(`${d}: carro`);
    }else if (d==arreglo[2]){
        console.log(`${d}: universidad`);
    }else if (d==arreglo[3]){
        console.log(`${d}: saltar`);
    }else{
        console.log(`${d}: jugar`);
    }
}
principal()//Llamado de la funcion principal
.then(secundaria);//Indica que queremos que se ejecute la funcion secundaria

//------------------------------------------------------

//23/05/2022
//Ejercicio 1
function secundaria(num){//Funcion con parametro
    let sumArr=0;//Variable inicializada en 0
    if (num!=null){//Condicional if, operador de asignacion y tipo de dato null
        let arr=[5,5,num];//Variable que almacena arreglo
        for (let i = 0; i < arr.length; i++) {//Ciclo for que recorre arreglo
            sumArr=sumArr+arr[i];//Suma de los indices del arreglo
        }
        console.log(`El promedio es: ${sumArr/arr.length}`)//Impresion
    }else{//Derviado del condicional if
        let arr=[5,5];//Variable que almacena arreglo
        for (let i = 0; i < arr.length; i++) {//Ciclo for que recorre arreglo
            sumArr=sumArr+arr[i];//Suma de los indices del arreglo
        }
        console.log(`El promedio es: ${sumArr/arr.length}`);//Impresion
    }
}

function principal(){//Funcion sin parametros
    return new Promise(//Objeto promise
        function (resolve, reject) {//Funcion con parametros
            resolve();//Llamado de la funcion con argumento
        }
    )
}
principal()//Llamado de la funcion que retorna el objeto promise
.then(secundaria);//.then con el cual se indica que la funcion secundaria tomara el lugar de la funcion resolve

//--------------------------------------------------

//Ejercicio 2
function llamada() {//Funcion
    setTimeout(() => {//Funcion setTimeout que recibe como parametro funcion flecha y tiempo en milisegundos
        console.log(`Llamada en espera...`)
    }, 1000);
}
function contestar() {//Funcion
    setTimeout(() => {//Funcion setTimeout que recibe como parametro funcion flecha y tiempo en milisegundos
        console.log(`Contestar`)
    }, 2000);
}
function hablar() {//Funcion
    setTimeout(() => {//Funcion setTimeout que recibe como parametro funcion flecha y tiempo en milisegundos
        console.log(`Hola crack`)
    }, 3000);
}
function finalizar() {//Funcion
    setTimeout(() => {//Funcion setTimeout que recibe como parametro funcion flecha y tiempo en milisegundos
        console.log(`Fin de la llamada`)
    }, 4000);
}
function principal() {//Funcion
    return new Promise(//Retorna objeto promise que recibe como argumento una funcion que a su vez cuenta con 2 callbacks
        function (resolve, reject) {
            resolve();//Llamado de la funcion
        }
    )
}
principal()//Llamado de la funcion
.then (llamada)//Indico que quiero que se ejecute la funcion "llamada". Esta tomara el lugar de resolve en la funcion principal
.then (contestar)
.then (hablar)
.then (finalizar)