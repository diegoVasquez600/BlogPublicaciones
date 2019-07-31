
//VALIDAR FORMULARIO CAMPOS INGRESO
function validarFormulario(){
    var DNI=document.getElementById('DNI').value;
    var txtuser = document.getElementById('nombre').value;
    var txtNombre=document.getElementById('').value;
    var txtapellido=document.getElementById('').value;
    var  txtpass= document.getElementById('edad').value;
    var chkboxterm = document.getElementById('selector').selectedIndex;
    var passval = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    
    if (DNI==null||DNI.length==0) {
        alert('ERROR: El campo DNI no debe ir vacio o llenu unicamente de espacios')
        return false;
    }

    if(txtuser == null || txtuser.length == 0 || /^\s+$/.test(txtuser)){
        alert('ERROR: El campo Usuario no debe ir vacio o lleno solamente de espacios en blanco');
        return false;
      }
    if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
      alert('ERROR: El campo Nombre no debe ir vacio o lleno solamente de espacios en blanco');
      return false;
    }
    if(txtapellido == null || txtapellido.length == 0 || /^\s+$/.test(txtapellido)){
        alert('ERROR: El campo Apellido no debe ir vacio o lleno solamente de espacios en blanco');
        return false;
    }
    if(txtpass == null || txtpass.length == 0 || passval.test(txtpass)){
        alert('ERROR: El campo contraseña no cumple con los parametros establecidos');
        return false;
    }
    //Test checkBox
    if(!chkboxterm.checked){
        alert('ERROR: Debe seleccionar el checkbox');
        return false;
    }

}
function iniciosesion(){
    var txtNombre,;


}