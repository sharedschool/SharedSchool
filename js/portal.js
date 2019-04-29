//--- explore.php ---//
function suggestedSearch(query){
	var xhr = new XMLHttpRequest();
	xhr.open('GET','search_suggestions.php?s='+query);
	xhr.onprogress = function() {
		//loading response
	};
	xhr.onload = function() {
		
	};
	xhr.send();
}