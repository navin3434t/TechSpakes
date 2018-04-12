
<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable-tabletools.js"></script>

<script type="text/javascript">

    /* Datatables basic */

    $(document).ready(function() {
        $('#datatable-example').dataTable();
    });

    /* Datatables hide columns */

    $(document).ready(function() {
        var table = $('#datatable-hide-columns').DataTable( {
            "scrollY": "300px",
            "paging": false
        } );

        $('#datatable-hide-columns_filter').hide();

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );
    } );

    /* Datatable row highlight */

    $(document).ready(function() {
        var table = $('#datatable-row-highlight').DataTable();

        $('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });



    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>

<div id="page-title">
    <h2>System Configuration</h2>
    <p>Tables with a lot of advanced, easy to use features and options.</p>
	<?php $this->load->view($this->config->item("techspake_sidebar_dir")."themeswitcher");?>
   </div>

<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
    Configuration
</h3>
<div class="example-box-wrapper">

<table id="datatable-row-highlight" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Sr. No.</th>
    <th>Site Title</th>
    <th>Last Update</th>
    <th>Description</th>
    <th>Action</th>
</tr>
</thead>

<tfoot>
<tr>
    <th>Sr. No.</th>
    <th>Site Title</th>
    <th>Last Update</th>
    <th>Description</th>
    <th>Action</th>
</tr>
</tfoot>

<tbody>
<tr>
    <td>Tiger Nixon</td>
    <td>System Architect</td>
    <td>Edinburgh</td>
    <td>61</td>
    <td>2011/04/25</td>

</tr>

</tbody>
</table>
</div>
</div>
</div>
              