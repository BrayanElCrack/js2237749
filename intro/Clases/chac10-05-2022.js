//Clase, metodo constructor con parametros, almacenacion de parametros en propiedades
class Usuario{
    constructor(id, nombre, contraseña, correo){
    this._id = id;
    this._nombre = nombre;
    this._contraseña = contraseña;
    this._correo = correo;
    }
    //Metodos setter (modificar)
    set id(id){
        this._id = id;
    }
    set nombre(nombre){
        this._nombre = nombre;
    }
    set contraseña(contraseña){
        this._contraseña = contraseña;
    }
    set correo(correo){
        this._correo = correo;
    }
    //Metodos getter (obtener)
    get id(){
        return this._id;
    }
    get nombre(){
        return this._nombre;
    }
    get contraseña(){
        return this._contraseña;
    }
    get correo(){
        return this._correo;
    }
}

//Clase heredada de la super clase usuario, metodos constructor con parametros de la super clase y de esta clase, indicar que parametros pertenecen a la super clase mediante la palabra reservada super, almacenacion de parametros a las propiedades
class Cliente extends Usuario{
    constructor(id, nombre, contraseña, correo, direccion, telefono, carrito){
        super(id, nombre, contraseña, correo);
        this._direccion = direccion;
        this._telefono = telefono;
        this._carrito = carrito;
    }
    //Metodos setter (modificar)
    set direccion(direccion){
        this._direccion = direccion;
    }
    set telefono(telefono){
        this._telefono = telefono;
    }
    setCarrito(carrito){
        this._carrito = carrito;
    }
    //Metodos getter (obtener)
    get direccion(){
        return this._direccion;
    }
    get telefono(){
        return this._telefono;
    }
    getCarrito(){
        return this._carrito;
    }
}

//Clase, metodo constructor con parametros, asignacion de parametros a propiedades
class Carrito{
    constructor(id, producto, cantidad, fecha){
        this._id = id;
        this._producto = producto;
        this._cantidad = cantidad;
        this._fecha = fecha;
    }
}
//
//Arreglo
var car = [];
//Objetos instanciados
var c = new Carrito(1, "Manga", 5, Date());
var obj = new Cliente(1, "lol", "123aa", "b@.com", "cr11", 12345, car);
//Metodo setter desde el objeto
obj.setCarrito(c);
//Impresion
console.log(obj);