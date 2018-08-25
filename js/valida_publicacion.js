with(document.publicacion){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && publicacion.value==""){
			ok=false;
			alert("Debe escribir algo");
			search.focus();
		}
		if(ok){ submit(); }
	}
}
