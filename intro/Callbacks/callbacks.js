//Ejercicios 16/05/2022
//Ejercicio 1
//Funcion que recibe 3 parametros y entre ellos una funcion
function sumar(num1, num2, callback){
    let j=num1+num2;
    callback(j);//Llamado de la funcion con parametro
}
function impresora(msj){//Funcion con parametro e impresion
    console.log(`imprimiendo ${msj}`);
}
sumar(10,20,impresora);//Llamado de la funcion con argumentos o datos de entrada

//---------------------------------------------

//Ejercicio 2
function principal(vec1, callback, callback2){
    let tam = Math.round(Math.random()*20);
    for (let i = 0; i < tam; i++) {
        vec1.push(Math.round(Math.random()*100))
    }
    callback(vec1);
    console.log(callback2(vec1));
}
function imprimeVec(vec){
    console.log(vec);
}
function sumaVector(vec){
    let suma=0;
    for (let i = 0; i < vec.length; i++) {
        suma+=vec[i];
    }
    return suma;
}
vector=[];
principal(vector,imprimeVec, sumaVector);

//--------------------------------------------------------

//Ejercicio 3
function principal(vec1, callback1,callback2) {
    let tam = Math.round(Math.random() * 20);
    for (let i = 0; i < tam; i++) {
      vec1.push(Math.round(Math.random() * 100));
    }
    callback1(vec1,callback2);
    //console.log(callback2(vec1));
  }
  function imprimeVec(vec, callback) {
    console.log(vec);
    callback(vec);
  }
  function sumaVector(vec) {
    let suma=0;
    for (let i = 0; i < vec.length; i++) {
        suma+=vec[i];
    }
    return suma;
  }

  vector = [];
  principal(vector,()=>{imprimeVec(vector,()=>{
      console.log(sumaVector(vector));
    })
});

//--------------------------------------------------

//Ejercicio 4
function orden(n1, n2, n3, callback) {//Funcion principal con parametros e impresion
    console.log(`en funcion principal ${n1} ${n2} ${n3}`);
    callback(n1, n2, n3);//Llamado de la funcion con parametros
  }
  const call = (n1, n2, n3) => {//Funcion flecha con parametros, condicional if, derivados e impresiones
    if (n1 < n2 && n2 < n3) {
      console.log(`en callback ${n1} ${n2} ${n3}`);
    } else if (n1 < n3 && n3 < n2) {
      console.log(`en callback ${n1} ${n3} ${n2}`);
    } else if (n2 < n1 && n1 < n3) {
      console.log(`en callback ${n2} ${n1} ${n3}`);
    } else if (n2 < n3 && n3 < n1) {
      console.log(`en callback ${n2} ${n3} ${n1}`);
    } else if (n3 < n2 && n2 < n1) {
      console.log(`en callback ${n3} ${n2} ${n1}`);
    } else if (n3 < n1 && n1 < n2) {
      console.log(`en callback ${n3} ${n1} ${n2}`);
    }
  };
  orden(2,3,1,call);//Llamado de la funcion con argumentos

//-----------------------------------------------------

//18/05/2022
//Ejercicio 1
//Hoisting
  function saludo(nombre, callback, callback2) {//Funcion principal con parametros
    setTimeout(() => {//Funcion que tiene como parametro otra funcion, impresion, llamado de la funcion y tiempo en milisegundos
      console.log(`Hola ${nombre} como estas`);
      callback();
      callback2();
    }, 2000);
  }
  function hablar() {//Funcion principal con setTimeout que tiene como parametro otra funcion, impresion y tiempo en milisegundos
    setTimeout(() => {
      console.log(`Bla bla bla`);
    }, 1000);
  }
  function despedida() {//Funcion principal con setTimeout que tiene como parametro otra funcion, impresion y tiempo en milisegundos
    setTimeout(() => {
      console.log(`chao chaooo`);
    }, 1000);
  }
  saludo("Brayan", hablar, despedida);//Llamado de la funcion con argumentos

//--------------------------------------------------------------

//Ejercicio 2 (triqui)
function letras(brayan, wilson, inicio, triqui, final) {//Funcion principal con parametros y variables
  let letra=brayan;
  let letra2=wilson;
  let fila=`
  ${letra}|${letra2}|${letra}
  ${letra2}|${letra}|${letra2}
  ${letra}|${letra2}|${letra}
  `;
  inicio();//Llamados de la funcion con y sin parametros
  triqui(fila);
  final();
}
function inicio() {//Funcion principal, setTimeout con funcion flecha como parametro y tiempo en milisegundos
  setTimeout(() => {
  console.log(`Que empieze el juego`);
  }, 1000);
}
function triqui(fila) {//Funcion principal con parametro, setTimeout con funcion flecha como parametro y tiempo en milisegundos
  setTimeout(() => {
  console.log(fila);
  }, 2000);
}
function final() {//Funcion principal, setTimeout con funcion flecha como parametro y tiempo en milisegundos
  setTimeout(() => {
  console.log(`Fin del juego`);
  }, 3000);
}
letras("X", "O", inicio, triqui, final);//Llamado de la funcion con argumentos