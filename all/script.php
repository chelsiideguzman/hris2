<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="js/dropdown/jquery.dropdown.js"></script>
<script src="js/timepicker/timedropper.min.js" charset="utf-8"></script>
<script src="js/bootstrap-datepicker.min.js" charset="utf-8"></script>

<script type="text/javascript">
function goBack() {
    window.history.back();
}
    $.material.init();
    $("#a-3-workinghours-fromtime").timeDropper();
    $("#a-3-workinghours-totime").timeDropper();
    $("#a-6-aboutus-fromtime1").timeDropper();
    $("#a-6-aboutus-totime1").timeDropper();
    $("#a-6-aboutus-fromtime2").timeDropper();
    $("#a-6-aboutus-totime2").timeDropper();
    $("#a-6-aboutus-fromtime3").timeDropper();
    $("#a-6-aboutus-totime3").timeDropper();
    $('#sandbox-container #u-1-recruitment-dateposted').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-1-employee-bday').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-2-timesheet-fromdate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-2-timesheet-todate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-3-payroll-fromdate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-3-payroll-todate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-coe-dateneeded1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-coe-dateneeded2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-laf-fromdate1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-laf-todate1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-laf-fromdate2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-laf-todate2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-ow-fromdate1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-ow-todate1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-ow-fromdate2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #e-4-ow-todate2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-1-vacancy-fromdate1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-1-vacancy-todate1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-1-vacancy-fromdate2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-1-vacancy-todate2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-2-employee-bday').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-3-timesheet-fromdate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-3-timesheet-todate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-4-payroll-fromdate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('#sandbox-container #h-4-payroll-todate').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $(document).ready(function() {
        $("#e-1-department").dropdown();
        $("#e-1-branchname").dropdown();
        $("#e-1-gender").dropdown();
    });
</script>
