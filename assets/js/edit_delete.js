$( document ).ready(function() {
    
});

function edit_data1(id){
	$("#edit_form").html("<div class='material_block'><svg class='spinner' width='65px' height='65px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='circle' fill='none' stroke-width='6' stroke-linecap='round' cx='33' cy='33' r='30'></circle></svg></div>");
	$('#myModal').modal('show');
	 $.get("/showdata/getdatabyid/"+ id, function (data) {
         
          $("#edit_form").html(data);
        });
	
}

function update_data1(){
	$(".modal-footer").html("<div class='material_block'><svg class='spinner' width='35px' height='35px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='circle' fill='none' stroke-width='6' stroke-linecap='round' cx='33' cy='33' r='30'></circle></svg></div>");
	
	var id = $("#id").val();
	var date = $("#date").val();
	var note = $("#note").val();
	var name = $("#name").val();
	var ac = $("#ac").val();
	var vl = $("#vl").val();
	var u1 = $("#u1").val();
	var u2 = $("#u2").val();
	var amount = $("#amount").val();
	//console.log(myData);
	
	$.ajax({
        url: "/showdata/updatedatabyid/",
        type: "post",
        data: {id:id,date:date,note:note,name:name,ac:ac,vl:vl,u1:u1,u2:u2,amount:amount},
		success: function(res){
		$("#edit_form").html(res);	
		}
    });

	
}

function delete_data1(id){
		
		$("#edit_form").html("<h2 style='color:red;text-align:center;'>Are You Sure</h2></div><div class='modal-footer' style='text-align:center;'><button type='button' class='btn btn-info' data-dismiss='modal'>No</button><button type='button' class='btn btn-danger' onclick='confirm_delete_data1("+id+")'>Yes</button>");
	$('#myModal').modal('show');
	}
	
function confirm_delete_data1(id){
	$("#edit_form").html("<div class='material_block'><svg class='spinner' width='65px' height='65px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='circle' fill='none' stroke-width='6' stroke-linecap='round' cx='33' cy='33' r='30'></circle></svg></div>");
	$('#myModal').modal('show');
	 $.get("/showdata/deletedatabyid/"+ id, function (data) {
         
          $("#edit_form").html(data);
        });
}