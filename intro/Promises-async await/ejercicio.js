//01/06/2022
const jsonData = require ('./parodia.json');//Con require se accede a dicho archivo y se almacena en variable constante
function principal(control) {//Funcion con parametro
    return new Promise(//Retornar objeto promise que tiene como parametro una funcion y esta a su vez contiene 2 callbacks
        function (resolve, reject) {
            if (control) {//Condicional if
                setTimeout(() => {//Funcion que contiene callback y tiempo en milisegundos
                    resolve();//Llamado de la funcion
                }, 3000);
            }
            else{//Derivado del condicional if
                reject();//Llamado de la funcion
            }
        }
    )
}

function objeto1(jsonData) {//Funcion con parametro
    for (const key in jsonData[0]) {//Condicional forIn e impresion
        console.log(`${key}: ${jsonData[0][key]}`);
    }
}

function objeto2(jsonData) {//Funcion con parametro
    for (const key in jsonData[1]) {//Condicional forIn e impresion
        console.log(`${key}: ${jsonData[1][key]}`);
    }
}

function objeto3(jsonData) {//Funcion con parametro
    for (const key in jsonData[2]) {//Condicional forIn e impresion
        console.log(`${key}: ${jsonData[2][key]}`);
    }
}

function objeto4(jsonData) {//Funcion con parametro
    for (const key in jsonData[3]) {//Condicional forIn e impresion
        console.log(`${key}: ${jsonData[3][key]}`);
    }
}

function final1(){//Funcion e impresion
    console.log(`
    La nave despego y sobrevivieron
    Todos felices`);
}

function final2() {//Funcion e impresion
    console.log(`
    La nave no despego y nadie sobrevivio
    Todos tristes`);
}

async function impresion() {//Funcion que hace uso de async y await
    try {//Esto ocurre
        await principal(false)//Llamado de la funcion con argumento
        await final1()//Asigna funcion a callback resolve
    } catch (error) {//excepcion
        await final2()//Asigna funcion a callback reject
    }
}
/*principal(true)
.then (final1)
.catch(final2)*/
impresion()//Llamado de la funcion async
objeto1(jsonData)//Llamados de la funcion con argumentos
objeto2(jsonData)
objeto3(jsonData)
objeto4(jsonData)

//----------------------------------------------------------------------

function aguaHervida(control){//Funcion con parametro
    return new Promise((resolve,reject)=>{//Retorno de objeto promise que tiene como parametro una funcion y esta a su vez contiene 2 callbacks
        if (control) {//Condicional if
            setTimeout(() => {//Funcion que tiene un callback y tiempo en milisegundos
                console.log(`Proceso de hervimiento de agua terminado`)//Impresion
                    resolve()//Llamado de la funcion
                },3000)
        } else {//Derivado del condicional if
            reject();//Llamado de la funcion
        }
    })
}
function agregarIngredientes(){//Funcion e impresion
    console.log(`Todos los ingredientes listos`)
}
function picarCarne(){//Funcion e impresion
    console.log('Lista la carne')
}
function pelarPapa(){//Funcion e impresion
    console.log('Lista la papa')
}
function lavarVerduras(){//Funcion e impresion
    console.log('Listas las verduras')
}
aguaHervida(false)//Llamado de la funcion con argumento
.then(agregarIngredientes)//Asigna funcion a callback resolve
.catch(()=>console.log('No hay GAS'))//Asigna funcion a callback reject
pelarPapa()//Llamados de la funcion vencionales
lavarVerduras()
picarCarne()