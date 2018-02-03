
function validacao(){
	var usuario = document.form.user.value;	
 	var senha = document.form.pass.value;
	
	if(usuario==""){
	   alert( "Preencha o campo usuário!" );
	   document.form.user.focus();
	   return false; 
	}else{ if(senha==""){
	   	alert( "Preencha o campo senha!" );
	   	document.form.pass.focus();
	   	return false;
	      }}
} 



