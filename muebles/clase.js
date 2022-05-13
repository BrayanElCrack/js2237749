class Servicio{ 
    constructor(producto,categoria){
        this.producto=producto;
        this._categoria=categoria;
    }    
    get producto(){
        return this.producto;
    }
    set producto(producto){
       this.producto=producto;     
    }
    get categoria(){
        return this.producto;
    }
    set categoria(categoria){
       this._categoria=categoria;     
    }   
}







