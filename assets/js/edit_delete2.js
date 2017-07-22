$( document ).ready(function() {
   $("#fixTable").tableHeadFixer({"head" : false, "right" : 1}); 
});

function edit_data2(id){
	$("#edit_form").html("<div class='material_block'><svg class='spinner' width='65px' height='65px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='circle' fill='none' stroke-width='6' stroke-linecap='round' cx='33' cy='33' r='30'></circle></svg></div>");
	$('#myModal').modal('show');
	 $.get("/showdata/getdata2byid/"+ id, function (data) {
         
          $("#edit_form").html(data);
        });
	
}

function update_data2(){
	$(".modal-footer").html("<div class='material_block'><svg class='spinner' width='35px' height='35px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='circle' fill='none' stroke-width='6' stroke-linecap='round' cx='33' cy='33' r='30'></circle></svg></div>");
	
	var id = $("#id").val();
	var date = $("#date").val();
	var value = $("#value").val();
	var name1 = $("#name1").val();
	var name2 = $("#name2").val();
	var account_iban = $("#account_iban").val();
	var bic_swift = $("#bic_swift").val();
	var note = $("#note").val();
	var currency = $("#currency").val();
	var amount = $("#amount").val();
	//console.log(myData);
	
	$.ajax({
        url: "/showdata/updatedata2byid/",
        type: "post",
        data: {id:id,date:date,value:value,name1:name1,name2:name2,account_iban:account_iban,bic_swift:bic_swift,note:note,currency:currency,amount:amount},
		success: function(res){
		$("#edit_form").html(res);	
		}
    });

	
}

function delete_data2(id){
		
		$("#edit_form").html("<h2 style='color:red;text-align:center;'>Are You Sure</h2></div><div class='modal-footer' style='text-align:center;'><button type='button' class='btn btn-info' data-dismiss='modal'>No</button><button type='button' class='btn btn-danger' onclick='confirm_delete_data2("+id+")'>Yes</button>");
	$('#myModal').modal('show');
	}
	
function confirm_delete_data2(id){
	$("#edit_form").html("<div class='material_block'><svg class='spinner' width='65px' height='65px' viewBox='0 0 66 66' xmlns='http://www.w3.org/2000/svg'><circle class='circle' fill='none' stroke-width='6' stroke-linecap='round' cx='33' cy='33' r='30'></circle></svg></div>");
	$('#myModal').modal('show');
	 $.get("/showdata/deletedata2byid/"+ id, function (data) {
         
          $("#edit_form").html(data);
        });
}