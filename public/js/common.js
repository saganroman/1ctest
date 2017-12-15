$(document).ready(function () {
//set datatables

    $('#dataTableShort').DataTable();
$(".employee").on( "click", function() {
    var id = $( this ).data('id')*1;
    //console.log(id)
    $("#employeeContact tr").not(":first").remove()
    $.ajax({
        type: "GET",
        url: "/public/getEContact/" + id,
        //cache: false,
        success: function (result) {
            var users = JSON.parse(result);
            console.log(users);
            users.forEach(function(item, i, arr) {
                var index = i+1;
                $('#employeeContact').append("<tr> <td>"+item.type+"</td>  <td>"+item.contact+"</td>  </tr>");
            });
            //$("#karma").html(user.karma);
        }
    });

})
});