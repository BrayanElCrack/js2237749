//clase
class Carro{
    //constructor, parametros y almacenacion de parametros en propiedades
    constructor(marca, modelo){
        this._marca = marca;
        this._modelo = modelo;
    }
    //metodos getter y setter
    set marca(marca){
        this._marca = marca;
    }
    set modelo(modelo){
        this._modelo = modelo;
    }
    get marca(){
        return this._marca;
    }
    get modelo(){
        return this._modelo;
    }
    infocarro(){
        return `Automovil ${this._marca} modelo ${this.modelo}`
    }
}
//instanciamiento de objetos
var obj = new Carro();
var obj1 = new Carro("Chevrolet", "fgfh56");
//metodos
obj.marca="espn";
obj1.modelo="Bgfh57";
//Impresiones
console.log(obj1.marca);
console.log(obj1.modelo);
console.log(obj1.infocarro());
console.log(obj.marca);

//EJERCICIO 1
//clase de un libro, titulo, editorial, año, #paginas
//clase con metodo constructor
//Ejercicio sin resolver...
class Libros{
    constructor(titulo, paginas, impresion, lectura){
        this._titulo = titulo;
        this._paginas = paginas;
        this._impresion = impresion;
        this._lectura = lectura;
    }
    //metodos setter
    set titulo(titulo){
        this._titulo = titulo;
    }
    set paginas(paginas){
        this._paginas = paginas;
    }
    set impresion(impresion){
        this._impresion = impresion;
    }
    set lectura(lectura){
        this._lectura = lectura;
    }
    //metodos getter
    get titulo(){
        return this._titulo;
    }
    get paginas(){
        return this._paginas;
    }
    get impresion(){
        return this._impresion;
    }
    get lectura(){
        return this._lectura;
    }
    //funciones
    infoLibro(){
        return `el libro ${this._titulo} tiene ${this._paginas} paginas con fecha de impresion en ${this._impresion}
        y su tiempo de lectura de ${this._lectura}`
    }
}
var obj = new Libros("Game Of Thrones", 200, Date(), );
console.log(obj.titulo);
console.log(obj.paginas);
console.log(obj.infoLibro());