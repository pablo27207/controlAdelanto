  /* Formating function for row details */
      function fnFormatDetails ( oTable, nTr )
      {
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
          sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
          sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
          sOut += '</table>';

          return sOut;
      }

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="assets/js/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#hidden-table-info thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#hidden-table-info tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#hidden-table-info').dataTable(  {
              "language": {
        			"sProcessing":     "Procesando...",
        			"sLengthMenu":     "Mostrar _MENU_ registros",
        			"sZeroRecords":    "No se encontraron resultados",
        			"sEmptyTable":     "NingÃºn dato disponible en esta tabla",
        			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        			"sInfoPostFix":    "",
        			"sSearch":         "Buscar:",
        			"sUrl":            "",
        			"sInfoThousands":  ",",
        			"sLoadingRecords": "Cargando...",
        			"oPaginate": {
        				"sFirst":    "Primero",
        				"sLast":     "Ãšltimo",
        				"sNext":     "Siguiente",
        				"sPrevious": "Anterior"
        			},
        			"oAria": {
        				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
        			}
        		},
        		"oAria": {
        			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
        		},
        	  
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              "aaSorting": [[1, 'asc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#hidden-table-info tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "assets/js/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "assets/js/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
              }
          } );
      } );
