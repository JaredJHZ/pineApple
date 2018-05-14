mandarAsistencia = (curp)=>{
        alert("xd");
        let horas = document.getElementById(curp).value;
        alert(horas);
       if(curp.length ==0){
              return console.error("invalid curp");
       }
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function(){
              if(this.readyState == 4 && this.status ==200){
                     alert(this.responseText);
              }      
       };
    
       xmlhttp.open("POST","verificar.php?curp="+curp+"&horas="+horas,true);
       xmlhttp.send();

}