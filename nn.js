
function see(mes,tec){
	
	var mydate=new Date();
	
	alert(tec+"$"+"  "+"is transfer to "+mes+" on "+mydate);
}

function send(){
	var mes=document.getElementById("name").value;
	var tec=document.getElementById("n").value;
	
    if(document.getElementById("name").value=="" || document.getElementById("n").value=="" ){
		alert("Please enter your name or your current balance");
	}
	else{
	
	
	alert("Successful Transaction !!"+"  "+tec+"$"+"  "+"is transfer to"+" "+mes);
	}
	see(mes,tec);
	
}
