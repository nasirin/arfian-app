<!--Basic Scripts-->
<script src="/template/assets/js/jquery.min.js"></script>
<script src="/template/assets/js/bootstrap.min.js"></script>
<script src="/template/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

<!--Beyond Scripts-->
<script src="/template/assets/js/beyond.js"></script>


<!--Page Related Scripts-->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!-- <script src="/template/assets/js/datatable/jquery.datatables.min.js"></script>
<script src="/template/assets/js/datatable/datatables.bootstrap.min.js"></script>
<script src="/template/assets/js/datatable/datatables-init.js"></script> -->
<script src="/template/assets/js/datatable/jquery.datatables.min.js"></script>
<script src="/template/assets/js/datatable/zeroclipboard.js"></script>
<script src="/template/assets/js/datatable/datatables.tabletools.min.js"></script>
<script src="/template/assets/js/datatable/datatables.bootstrap.min.js"></script>
<script src="/template/assets/js/datatable/datatables-init.js"></script>

<!--Sparkline Charts Needed Scripts-->
<script src="/template/assets/js/charts/sparkline/jquery.sparkline.js"></script>
<script src="/template/assets/js/charts/sparkline/sparkline-init.js"></script>

<!--Easy Pie Charts Needed Scripts-->
<script src="/template/assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
<script src="/template/assets/js/charts/easypiechart/easypiechart-init.js"></script>

<!--Flot Charts Needed Scripts-->
<script src="/template/assets/js/charts/flot/jquery.flot.js"></script>
<script src="/template/assets/js/charts/flot/jquery.flot.resize.js"></script>
<script src="/template/assets/js/charts/flot/jquery.flot.pie.js"></script>
<script src="/template/assets/js/charts/flot/jquery.flot.tooltip.js"></script>
<script src="/template/assets/js/charts/flot/jquery.flot.orderbars.js"></script>
<script src="/template/assets/js/fuelux/wizard/wizard-custom.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        // $('#simpledatatable').DataTable();
        InitiateExpandableDataTable.init();
        InitiateSimpleDataTable.init();
        $('#simplewizard').wizard();
        $('#tabbedwizard').wizard().on('finished', function(e) {
            Notify('Thank You! All of your information saved successfully.', 'bottom-right', '5000', 'blue', 'fa-check', true);
        });
        $('#WiredWizard').wizard();
    });
</script>