function CargarDatos(datos,img) {
       d=datos.split("||");
       alert(d);
       id=d[0]
       $('#name').val(d[1]);
       $('#detalle').val(d[3]);
       $('#precio').val(d[4]);
       $('#categoria').val(d[2]);
       $('#stock').val(d[5]);
       $('#imagen').src="data:image/png;base64,'img'"
       
   }
   