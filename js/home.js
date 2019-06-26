$(document).ready(function() {
	$(".demo-btn").click(function(){
		$("#demoModal").modal();
	});
	if ($("#demo-alert").length){
		setTimeout(function(){
			$("#demo-alert").remove()
		}, 3000);
	}
	$("#demo-form").on("submit", function(event){
		event.preventDefault();
		var name = $("#demo-name").val();
		var inst = $("#demo-inst").val();
		var email = $("#demo-email").val();
		if (name.length == 0 || inst.length == 0 || email.length == 0){
			alert("Please fill out every field.");
		} else {
			this.submit();
		}
	});
});
