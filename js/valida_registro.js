with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			fullname.focus();
		}
		if(ok &&last_name.value==""){
			ok=false;
			alert("Debe escribir su apellido");
			fullname.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su contraseñas");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de contraseñas");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los contraseñas no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
