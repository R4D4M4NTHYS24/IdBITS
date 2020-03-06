// Table 1

$(document).ready( function () {
    
    $('#table1').DataTable( {
      "dom": '<<t>>',
      "pagingType": "full_numbers"
    });

    var table = $('#table1').DataTable();
    var info = table.page.info();
     
    // #myInput is a <input type="text"> element
    $('#input_table1').on( 'keyup', function () {
    table.search( this.value ).draw();
    var info = table.page.info();
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    }); 

    $('#select1').change(function () {
    table.page.len(this.value ).draw();
    var info = table.page.info();
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });
    
    $('#table1_first').on( 'click', function () {
    table.page( 'first' ).draw( 'page' );
    var info = table.page.info();
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table1_previous').on( 'click', function () {
    table.page( 'previous' ).draw( 'page' );
    var info = table.page.info();
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table1_next').on( 'click', function () {
    table.page( 'next' ).draw( 'page' );
    var info = table.page.info();
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table1_last').on( 'click', function () {
    table.page( 'last' ).draw( 'page' );
    var info = table.page.info();
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });
  
    $('#table1_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );

  });  


  // Table 2

  $(document).ready( function () {
    
    $('#table2').DataTable( {
      "dom": '<<t>>',
      "pagingType": "full_numbers"
    });

    var table2 = $('#table2').DataTable();
    var info = table2.page.info();
     
    // #myInput is a <input type="text"> element
    $('#input_table2').on( 'keyup', function () {
    table2.search( this.value ).draw();
    var info = table2.page.info();
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    }); 

    $('#select2').change(function () {
    table2.page.len(this.value ).draw();
    var info = table2.page.info();
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });
    
    $('#table2_first').on( 'click', function () {
    table2.page( 'first' ).draw( 'page' );
    var info = table2.page.info();
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table2_previous').on( 'click', function () {
    table2.page( 'previous' ).draw( 'page' );
    var info = table2.page.info();
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table2_next').on( 'click', function () {
    table2.page( 'next' ).draw( 'page' );
    var info = table2.page.info();
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table2_last').on( 'click', function () {
    table2.page( 'last' ).draw( 'page' );
    var info = table2.page.info();
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });
  
    $('#table2_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );

  }); 

  // Table 3

  $(document).ready( function () {
    
    $('#table3').DataTable( {
      "dom": '<<t>>',
      "pagingType": "full_numbers"
    });

    var table3 = $('#table3').DataTable();
    var info = table3.page.info();
     
    // #myInput is a <input type="text"> element
    $('#input_table3').on( 'keyup', function () {
    table3.search( this.value ).draw();
    var info = table3.page.info();
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    }); 

    $('#select3').change(function () {
    table3.page.len(this.value ).draw();
    var info = table3.page.info();
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });
    
    $('#table3_first').on( 'click', function () {
    table3.page( 'first' ).draw( 'page' );
    var info = table3.page.info();
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table3_previous').on( 'click', function () {
    table3.page( 'previous' ).draw( 'page' );
    var info = table3.page.info();
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table3_next').on( 'click', function () {
    table3.page( 'next' ).draw( 'page' );
    var info = table3.page.info();
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });

    $('#table3_last').on( 'click', function () {
    table3.page( 'last' ).draw( 'page' );
    var info = table3.page.info();
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );
    });
  
    $('#table3_info').html(
    'showing page '+(info.page+1)+' of '+info.pages+' pages.'
    );

  }); 
