         </div>
     </div>

     <script>
        var resizefunc = [];
    </script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/waves.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../assets/jquery-detectmobile/detect.js"></script>
    <script src="../assets/fastclick/fastclick.js"></script>
    <script src="../assets/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/jquery-blockui/jquery.blockUI.js"></script>
    <script src="../js/jquery.app.js"></script>
    <script src="../assets/tagsinput/jquery.tagsinput.min.js"></script>
    <script src="../assets/toggles/toggles.min.js"></script>
    <script src="../assets/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../assets/timepicker/bootstrap-datepicker.js"></script>
    <script type="../text/javascript" src="assets/colorpicker/bootstrap-colorpicker.js"></script>
    <script type="../text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
    <script type="../text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
    <script src="../assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script type="../text/javascript" src="assets/spinner/spinner.min.js"></script>
    <script src="../assets/select2/select2.min.js" type="text/javascript"></script>

    <script src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables/dataTables.bootstrap.js"></script>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        } );

			// Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple1').datepicker();
            jQuery('#datepicker-multiple2').datepicker();
            jQuery('#datepicker-multiple').datepicker({
                numberOfMonths: 5,
                showButtonPanel: true
            });
				 // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });


            </script>

        </body>
        </html>