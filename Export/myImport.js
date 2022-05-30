import hello from '/myExport.js';
//import {hello} from './myExport.js';
//Funciona si viene con export{} en el navegador
//El script debe ser type="module"
//hello(); //No funciona por node
//const hello = require('./myExport');//Viene con module.exports
console.log(hello());//Funciona bien con node, navegador?