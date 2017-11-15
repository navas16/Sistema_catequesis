// JavaScript Doc
function validarEstudiante()
{

var nom=document.getElementById("nom_est");
var ape=document.getElementById("ape_est");
var ced=document.getElementById("ced_est");
error=0;

if(nom.value==""){
		nom.style.borderColor="#F00";
		error=1;
	}else{
		nom.style.borderColor="#FFF";	
		}

if(ape.value==""){
		ape.style.borderColor="#F00";
		error=1;
	}else{
		ape.style.borderColor="#FFF";	
		}
if(ced.value==""){
		ced.style.borderColor="#F00";
		error=1;
	}else{
		ced.style.borderColor="#FFF";	
		}

if(error==1)
		alert("Debe llenar los datos obligatorios")
	else
		var subm=document.getElementById("for_est").submit();
}

function validarFiltroEstudiante()
{
	var ced=document.getElementById("ced_est");
	if(ced.value=="")
		alert("Debes llenar los campos obligatorios");
		else
		document.getElementById("for_est").submit();

}