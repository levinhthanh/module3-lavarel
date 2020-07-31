var table;
var urlUsers = "https://jsonplaceholder.typicode.com/users";
function initTableData() {
    $.get(urlUsers, function(responseData) {
    	var modifiedUsers = responseData.map(eachUser => {
    		return {
    			id: eachUser.id,
    			name: eachUser.name,
  				email: eachUser.email,
  				address: `${eachUser.address.street}, ${eachUser.address.suite}, ${eachUser.address.city}`,
  				phone: eachUser.phone
    		};
    	});
    	table = $('#users').DataTable({
    	"processing": true,
    	data: modifiedUsers,
    	columns:[
    		{ data: 'id' },
    		{ data: 'name' },
    		{ data: 'email' },
    		{ data: 'address' },
    		{ data: 'phone' }
    	]
    	});
    }).fail(function() {
    	alert( "Cannot get data from URL" );
    });
}

$(document).ready(function (){
	initTableData();
	$("#list-header").on({
		mouseenter: function() {
			$(this).css("background-color", "lightgray");
		},
		mouseleave: function(){
        	$(this).css("background-color", "lightblue");
    	},
	});
	$("#btnReloadData").on("click", function(){
		//alert("reload data...")
		table.ajax.reload();
	});
});
    // var table;
    // function initTableData() {
    //     $.ajax({
    //         url: '/get_products',
    //         type: 'get',
    //         dataType: 'json',
    //     }).done(function(products) {
    //         var modifieProducts = products.map(product => {
    //             return {
    //                 id: product.id,
    //                 name: product.name,
    //                 image: product.image,
    //                 price: product.price
    //             };
    //         });
    //         table = $('#products').DataTable({
    //             "processing": true,
    //             data: modifieProducts,
    //             columns: [{
    //                     data: 'id'
    //                 },
    //                 {
    //                     data: 'name'
    //                 },
    //                 {
    //                     data: 'image'
    //                 },
    //                 {
    //                     data: 'price'
    //                 }
    //             ]
    //         });
    //     });
    // };

    // $(document).ready(function() {
    //     initTableData();
    //     $("#list-header").on({
    //         mouseenter: function() {
    //             $(this).css("background-color", "lightgray");
    //         },
    //         mouseleave: function() {
    //             $(this).css("background-color", "lightblue");
    //         },
    //     });
    //     $("#btnReloadData").on("click", function() {
    //         //alert("reload data...")
    //         table.ajax.reload();
    //     });
    // });
