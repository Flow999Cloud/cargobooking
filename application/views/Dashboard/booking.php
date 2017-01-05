<?php $this->load->view('Dashboard/header'); ?> 
<!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('Dashboard/sidebar'); ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <a href="<?php echo base_url('dashboard/'); ?>" class="btn btn-success">Add New Booking</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Booking</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="orders" class="dataTables_wrapper table table-bordered table-responsive table-striped">
                <thead>
                <th>ID</th>
                 <th>User Name</th>
                 <th>Date</th>
                
                 <th>Status</th>
                 <th>Action</th>
                </thead>
                <tbody>
                    <?php if(count($bookings)){
                        foreach($bookings as $bk){
                        ?>
                    <tr>
                        <td><?php echo $bk->bookingID; ?></td>
                         <td><?php echo $bk->fname; ?></td>
                        <td><?php echo $bk->bookingDate; ?></td>
                       <td><?php echo $bk->bookingStatus; ?></td>  
                       <td>
                           <a href="<?php echo site_url('dashboard/confirmBooking').'/'.$bk->bookingID; ?>" class="btn-success">Confirm</a> |
                           <a href="<?php echo site_url('dashboard/bookingDetail').'/'.$bk->bookingID; ?>" class="btn-info">Detail</a>
                           
                       </td>
                       
                    </tr>
                        <?php }}?>
                </tbody>
            </table>
            </div>
            
        </div>
     
    </section>
    <!-- /.content -->
   
  </div>
            
            <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 

 <script type="text/javascript">
    $(document).ready(function() {
    $('#orders').DataTable( {
        dom: 'lBfrtip',
        buttons: [
             'csv', 'excel', 'pdf',
        ]
    } );
} );</script>