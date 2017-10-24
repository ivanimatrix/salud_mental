<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<script src="{{ url ('/public/js/plugins/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js?' .uniqid()) }}" type="text/javascript"></script>

<link href="{{ url ('/public/js/plugins/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css?' .uniqid()) }}" rel="stylesheet" />
<script src="{{ url ('/public/js/plugins/bootstrap3-dialog/modal.js?' .uniqid()) }}" type="text/javascript"></script>

<script src="{{ url ('/public/js/plugins/main.js?' .uniqid() ) }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
