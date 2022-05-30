var ob={
    nombre:"Daniel",
    documento:123456,
    ficha:2237749,
    datos:function(){return `Soy ${this.nombre},
    identificado con el documento numero ${this.documento},
    de la ficha ${this.ficha}
    mi telefono es ${this.telefono}`}
}
console.log(ob.datos());
ob.nombre="Santi";
console.log(ob.datos());
ob.telefono=2223344;
console.log(ob.datos());
console.log(ob.datos());
