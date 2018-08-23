function addInfo(){
	let name = document.getElementById("name").value;
	let surname = document.getElementById("surname").value;
	let faculty = document.getElementById("faculty").value;

	if(name==""){
		document.getElementById("name").style.border="3px solid red";
		return;
	}
  if(surname==""){
		document.getElementById("surname").style.border="3px solid red";
		return;
	}
	if(faculty==""){
		document.getElementById("faculty").style.border="3px solid red";
		return;
	}


	let tr =  document.createElement("tr");
	let td1 = document.createElement("td");
	let td2 = document.createElement("td");
	let td3 = document.createElement("td");

	td1.innerHTML = name;
	td2.innerHTML = surname;
	td3.innerHTML = "<strong>" + faculty + "</strong>";
	document.getElementById("name").style.border="";
	document.getElementById("surname").style.border="";
	document.getElementById("faculty").style.border="";

	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);

	var table = document.getElementById("students");
	table.appendChild(tr);

}
