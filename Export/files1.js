const jsonData = require  ('./animals.json');
console.log(jsonData[0]);
//console.log(jsonData[1]);
for (const key in jsonData[0]){
    //console.log(key);
    console.log(`${key}: ${jsonData[0][key]}`);
}