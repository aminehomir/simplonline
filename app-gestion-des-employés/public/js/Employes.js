$(document).ready(function () {

   
    if (localStorage.getItem("username") === null) {

        window.location.href = "login.html";

    }

    else {

        $("#username").html(localStorage.getItem("username"));
        getData();
        $("#SaveData").click(function(){
          
            var name = $("#name").val();
            var email = $("#email").val();
            var address = $("#address").val();
            var phone = $("#phone").val();
          
            if( name != "" && email != "" && address !="" && phone !=""){
                $("#SaveData").load("Employes.html?");
                 $.ajax({
                    url:'/Addemployes',
                    type:'post',
                    data:{name,email,address,phone},
                    success:function(response){
                        if(response.request){
                           
                            getData(response);
                            $("#nameupdate").val('');
                            $("#emailupdate").val('');
                            $("#addresseupdate").val('');
                            $("#phoneupdate").val('');
                        }  
                    }
                });
            }
        });  
        
    }
   



});


function getData(fetched){
    if(fetched===undefined){
    $.ajax({
        url: '/Employes',
        type: 'get',
        success: function (response) {
            if (response.request) {

                AddToTable(response.data);
                
            }
        },
    });
}else{
    AddToTable(fetched.data);
}
}


function AddToTable(data){
    
   
    var employes_Data = '';
    $("#TableEmployes").html(employes_Data);
    $.each(data, function (index, value) {
        
        employes_Data += '<tr>';
        employes_Data += '<td>' + '</td>';
        employes_Data += '<td>' + value.name + '</td>';
        employes_Data += '<td>' + value.email + '</td>';
        employes_Data += '<td>' + value.address + '</td>';
        employes_Data += '<td>' + value.phone + '</td>';
        employes_Data += '<td ><a href="#editEmployeeModal" class="edit"  onclick="show(' + index +')" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" onclick="show(' + index +')"  data-toggle="tooltip" title="Delete">&#xE872;</i></a> </td>';
        employes_Data += '</tr>';
    });
    $("#TableEmployes").append(employes_Data);
    
}

function show(index,name,email,address,phone) { 
localStorage.setItem("id",index);
$("#nameupdate").val(name);
$("#emailupdate").val(email);
$("#addresseupdate").val(address);
$("#phoneupdate").val(phone);
}