document.write('<link href="' + url_base+ '/public/plugins/jquery.dataTables.min.css?' + Math.random() + '" type="text/css" rel="stylesheet"/>');
//document.write('<link href="' + url_base +'/public/plugins/dataTables.bootstrap.min.css?' + Math.random() + '" rel="stylesheet" type="text/css" />');
document.write('<link href="' + url_base+ '/public/plugins/buttons.dataTables.min.css?' + Math.random() + '" type="text/css" rel="stylesheet"/>');

document.write('<script src="'+ url_base + '/public/plugins/jquery.dataTables.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="'+ url_base + '/public/plugins/dataTables.bootstrap.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="'+ url_base + '/public/plugins/dataTables.responsive.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="'+ url_base + '/public/plugins/dataTables.tableTools.min.js?' + Math.random() + '" type="text/javascript"></script>');


document.write('<script src="' + url_base + '/public/plugins/dataTables.buttons.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="' + url_base + '/public/plugins/buttons.html5.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="' + url_base + '/public/plugins/jszip.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="' + url_base + '/public/plugins/pdfmake.min.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="' + url_base + '/public/plugins/vfs_fonts.js?' + Math.random() + '" type="text/javascript"></script>');
document.write('<script src="' + url_base + '/public/plugins/buttons.print.min.js?' + Math.random() + '" type="text/javascript"></script>');


var Dtables = {

    initTable : function(tabla, options){

        if($("#"+tabla).parent().attr('data-row')) {
            var filas = parseInt($(this).parent().attr("data-row"));
        } else {
            var filas = 10;
        }

        var buttons = [];
        if($("#"+tabla).data("export")){
            buttons = [
                'excelHtml5'
            ];
        }

        var dataOptions = {
            "lengthMenu": [[5,10, 20, 25, 50, 100], [5, 10, 20, 25, 50, 100]],
            "pageLength": filas,
            "destroy" : true,
            "aaSorting": [],
            "deferRender": true,
            responsive: true,
            "dom": '<"top"fl>Brt<"bottom"ip><"clear">',
            buttons: buttons,
            language:
                {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
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
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

        };


        if(options !== undefined && (typeof options === 'object')){
            dataOptions.push(options);
        }

        var table = $("#" + tabla).DataTable(dataOptions);

    }

};
