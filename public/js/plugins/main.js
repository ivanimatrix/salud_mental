var url_base = window.location.protocol + "//" + window.location.hostname + ":" + window.location.port + window.location.pathname;

$(document).ready(function(){

    /* setear para ajax token para csrf */
    $.ajaxSetup({
        headers:
          { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
});
