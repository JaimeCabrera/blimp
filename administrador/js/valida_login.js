with(document.login){
	$('#usuario').hide();
	$('#passwd').hide();
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			$('#usuario').show();
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			password.focus();
			$('#usuario').hide();
			$('#passwd').show();
		}
		if(ok){ submit(); }
		
	}
}

