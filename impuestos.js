function calcularImpuestos(edad, ingresos){
    if(edad>=18 && ingresos>=100){
      return ingresos * 0.4;
    }else{
      return 0
    }
  }

  calcularImpuestos(18,1000);