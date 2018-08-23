function isEmpty(){
  let pizza = document.getElementById("pizza").value;
  if(pizza==""){
    document.getElementById("pizza").style.border="3px solid red";
    return;
  }
  else{
    document.getElementById("pizza").style.border="";
    return
  }
}
