


 function enviar(){
  
    var numtarjeta=1234567890123456;
    var monto= 300;
    var detalle="test";
  
   var datos= new FormData();
   datos.append(numtarjeta, monto, detalle);

   $.ajax({
    url:"https://spbank.herokuapp.com/api/payment",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    succes:function(respuesta){
      if(respuesta=="false"){
        console.log("respuesta", respuesta);
      }else{
        console.log("respuesta", respuesta)
      }
    },
    error:function(error){
      console.log("respues", error);
    }
   }); 
}