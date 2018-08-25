with(document.search){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && search.value==""){
			ok=false;
			alert("Debe escribir algo que buscar");
			search.focus();
		}
		if(ok){ submit(); }
	}
}
