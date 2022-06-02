//nodemon
const prueba=require('./animals.json');
//console.log(prueba);
console.log(typeof(prueba));
for (const key in prueba[0]) {
    console.log(key);
}

const pruebaString=JSON.stringify(prueba);
console.log(pruebaString.includes('name'));
//console.log('probando nodemon');

// const sena="Amo al sena de Soacha";
// console.log(sena.includes('Amo'));

//const jsonDataString=JSON.stringify(jsonData);
//const prueba=JSON.stringify(require('./animals.json'));
//console.log(prueba.includes('name'));
//console.log(jsonData[1]);

// for (const key in jsonData[0]) {
//     //console.log(key);
//     console.log(`${key}: ${jsonData[0][key]}`);
// }
//console.log('*********'+JSON.stringify(jsonData))





// const fs=require('fs');
// const leer=(ruta,cb)=>{
//     fs.readFile(ruta,(err,data)=>{
//         cb(data.toJSON());
//     })
// }
//leer('animals.json',console.log) //así no sirve
//leer(__dirname+'/animals.json',console.log)
