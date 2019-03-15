function Comprobar(){
var nombre=document.getElementById('nombre').value
var apellidos=document.getElementById('apellidos').value
var edad=document.getElementById('edad').value
var curso=document.getElementById('curso').value
var error=true;
document.getElementById('nombOcult').style.display='none'
document.getElementById('apellOcult').style.display='none'
document.getElementById('edadOcult').style.display='none'
document.getElementById('cusOcult').style.display='none'
document.getElementById('cusOcult1').style.display='none'
document.getElementById('edadOcult1').style.display='none'
if (nombre=="") {
document.getElementById('nombOcult').style.display='block';
error=false;
}
if (apellidos=="") {
document.getElementById('apellOcult').style.display='block';
error=false;
}
if (edad=="") {
document.getElementById('edadOcult').style.display='block';
error=false;
}
if (curso=="") {
document.getElementById('cusOcult').style.display='block';
error=false;
}
if (isNaN(edad)) {
document.getElementById('cusOcult1').style.display='block';
error=false;
}
if (isNaN(curso)) {
document.getElementById('edadOcult1').style.display='block';
error=false;
}
if (error==false) {
  return false
}
}
