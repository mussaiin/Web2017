function findDeterminant(){
	const a1=document.querySelector("#t1");const a2=document.querySelector("#t2");const a3=document.querySelector("#t3");
	const b1=document.querySelector("#t4");const b2=document.querySelector("#t5");const b3=document.querySelector("#t6");
	const c1=document.querySelector("#t7");const c2=document.querySelector("#t8");const c3=document.querySelector("#t9");
	let determinant = (parseInt(a1.value)*parseInt(b2.value)*parseInt(c3.value))+(parseInt(b1.value)*parseInt(c2.value)*parseInt(a3.value))+(parseInt(a2.value)*parseInt(c1.value)*parseInt(b3.value))-(parseInt(c1.value)*parseInt(b2.value)*parseInt(a3.value))-(parseInt(a1.value)*parseInt(c2.value)*parseInt(b3.value))-( parseInt(a2.value)*parseInt(b1.value)*parseInt(c3.value));
	let other = (parseInt(a1.value)+parseInt(b2.value)+parseInt(c3.value))-(parseInt(c1.value)+parseInt(b2.value)+parseInt(a3.value));
  let mult = (parseInt(c1.value)*parseInt(b2.value)*parseInt(a3.value))
	document.querySelector("#demo").innerHTML = mult;
}
document.querySelector("#button").addEventListener('click', findDeterminant);
