$(document).ready(function(){
	
	$.get('dashboard/xhrGetListings',function(o){
		for(var i=0;i < o.length; i++){
			$('#listInserts').append(o[i].text+"<br/>");
		}
	}, 'json');
	
	
	
	$('#form').submit(function(){
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url,data,function(o){
			$('#listInserts').append(o+'<br/>');
		});
		return false;
	});
});