$(document).ready(function () {

    
        $("#Delete").click(function(){  // Recuperation des valeurs
               
            console.log(localStorage.getItem("id"));
                 $.ajax({
                    url:'/Delete',
                    type:'delete',
                    data:{index:localStorage.getItem("id")},
                    success:function(response){
                      getData(response);
                    }
                   
                }); 

                
            
        });  
   
});
