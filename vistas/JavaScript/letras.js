function wordnum(data) // Valida que solo sean Palabras o letras
  {
    var nonum = /^\d+$/;
    return nonum.test(data);
  }
 
  function numword(data) // valida que solo sean numeros
  {
    var nonum = /^\d+$/;
    return !nonum.test(data);
  }