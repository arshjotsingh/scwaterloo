function setCookie () {
	  		// body...
	  		var name=document.getElementById('inputName').value;
			var regex = /^[a-zA-Z']+$/;
			var res = regex.test(name);
			if(res == true)
			{
				var mydate = new Date();
				mydate.setTime(mydate.getTime()+1);
				var userName = document.getElementById('inputName').value;
				document.cookie = "name="+userName;	
				return true;
			}
	  		 
	  		 else
	  		 {
	  		 	alert('Invalid Entry');
	  		 	return false;
	  		 } 		
			
	  	}