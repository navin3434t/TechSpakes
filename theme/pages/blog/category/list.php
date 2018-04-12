
<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('techspake_site_base_url');?>/assets/widgets/datatable/datatable-tabletools.js"></script>



<div id="page-title">
    <h2>Blog Category</h2>
    <p>List of all blog categories.</p>
	<?php $this->load->view($this->config->item("techspake_sidebar_dir")."themeswitcher");?>
   </div>

<div class="panel">
<div class="panel-body">
<h3 class="title-hero">
    List of all blog categories.
</h3>
<div class="example-box-wrapper">

<table id="datatable-row-highlight" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Sr No</th>
    <th>Title</th>
    <th>User</th>
    <th>Created On</th>
    <th>Updated On</th>
    <th>Status</th>
</tr>
</thead>

<tfoot>
<tr>
    <th>Sr No</th>
    <th>Title</th>
    <th>User</th>
    <th>Created On</th>
    <th>Updated On</th>
    <th>Status</th>
</tr>
</tfoot>

<tbody>
<?php if(isset($dataListdataList) && !empty($dataListdataList)){ ?>
<?php foreach($dataListdataList as $key=>$data){?>
<tr>
    <td><?php echo $key+1;?></td>
    <td><?php echo $data->title;?></td>
    <td><?php echo $data->userFirstName;?></td>
    <td><?php echo $data->createDate;?></td>
    <td><?php echo $data->updateDate;?></td>
    <td><?php echo $data->updateDate;?></td>
</tr>
<?php } ?>
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
<?php } else { ?>
<tr>
	<td colspan="6">
	</td>
</tr>
<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
              