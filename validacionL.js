
      $(document).ready (function(){
        $('#createLaptop').click(function(){

          if($('#cantidad').val()==0){
            swal("Debes ingresar una cantidad");
            return false;
          }else if($('#condicion').val()=="Condicion"){
            swal("Debes ingresar condición");
            return false;
          }else if($('#id_Fabricante').val()=="Fabricante"){
            swal("Debes ingresar fabricante");
            return false;
          }else if($('#modelo').val()==""){
            swal("Debes ingresar modelo");
            return false;
          }else if($('#precio').val()==0){
            swal("Debes ingresar precio");
            return false;
          }else if($('#imagen').val()==""){
            swal("Debes ingresar url de imagen");
            return false;
          }else if($('#gráficos').val()==""){
            swal("Debes ingresar tarjeta gráfica");
            return false;
          }else if($('#ram').val()=="RAM"){
            swal("Debes ingresar cantidad de RAM");
            return false;
          }else if($('#almacenamientoPrincipal').val()=="Almacenamiento Principal"){
            swal("Debes ingresar almacenamiento principal");
            return false;
          
          }else if($('#almacenamientoSecundario').val()=="Almacenamiento Secundario"){
            swal("Debes ingresar almacenamiento secundario");
            return false;
          
          }else if($('#puertos').val()==""){
            swal("Debes ingresar puertos");
            return false;
          
          }else if($('#garantia').val()=="Garantía"){
            swal("Debes ingresar garantía");
            return false;
          
          }else if($('#bateria').val()==""){
            swal("Debes ingresar bateria");
            return false;
          
          }
        })
        
      }

      )

      
    
 
 