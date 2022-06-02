//fs es un modulo de node que me permite
//leer un archivo
//console.log(__dirname);
const fs=require('fs');

const leer=(ruta,cb)=>{
    fs.readFile(ruta,(err,data)=>{
       // console.log(data.toString());
       cb(data.toString());
    })
}
leer('./archivos/archivo1.txt',console.log)
 //leer(__dirname+'/archivo1.txt',console.log)
 //leer(__dirname+'/animals.json',console.log)

 const fs=require('fs');
 function escribir(ruta,contenido,cb){
    fs.writeFile(ruta,contenido,(err)=>{
       if(err){
           console.error('no se escribió')
       }
       else console.log('se escribió correctamente')
    });
}

escribir(__dirname+'/archivo1.txt','Soy nuevo archivo',console.log);