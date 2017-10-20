
$(document).ready(function(){

    /* setear para ajax token para csrf */
    $.ajaxSetup({
        headers:
          { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
});
