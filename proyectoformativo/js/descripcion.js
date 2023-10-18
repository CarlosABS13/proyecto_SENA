function resizeInput() {
  
    var valueLength = $(this).prop('value').length;
    
      // Para que no arroje error si el input se vacía
      if (valueLength > 0) {
        
        $(this).prop('size', valueLength);
      }
  }
  
  $('input[type="text"]').on('keyup', resizeInput).each(resizeInput);