$(document).ready(function () {

     
    
    $("#Supdate").click(function(){ 
     
      console.log(localStorage.getItem("id"));
      var name = $("#nameupdate").val();
      var email = $("#emailupdate").val();
      var address = $("#addresseupdate").val();
      var phone = $("#phoneupdate").val();
           $.ajax({
              url:'/Update',
              type:'post',
              data:{index:localStorage.getItem("id"),tache:{name,email,address,phone}},
              success:function(response){
                getData(response);
              }
             
          }); 

          
      
  });

});