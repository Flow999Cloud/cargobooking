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
        <li class="active">Customers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <a href="<?php echo base_url('dashboard/AddNewCustomer'); ?>" class="btn btn-success">Add New Customer</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Orders</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="orders" class="dataTables_wrapper table table-bordered table-responsive table-striped">
                <thead>
               
                 <th>Name</th>
                 <th>Email</th>
                   <th>Created On</th>
                   
                   <th>Status</th>
                   <th>Action</th>
                </thead>
                <tbody>
                    <?php  
                   
                        if(count($customer)){
                            foreach($customer as $cus){ ?>
                                
                          
                    <tr>
                        <td><?php echo $cus->fname .' ' . $cus->lname; ?></td>
                        <td><?php echo $cus->email ; ?></td>
                        <td><?php echo $cus->created_at ; ?></td>
                       <td><?php if($cus->status==0){ 
                                 echo "Inactive";}
                             else{ echo "Active";}?></td>
                       <td><a href="<?php echo site_url('dashboard/editcustomer').'/'.$cus->user_id; ?>" class="btn-warning">Edit</a><span>/</span><a href="<?php echo site_url('dashboard/deletecustomer').'/'.$cus->user_id; ?>" class="btn-warning">Delete</a></td>
                    </tr>
                   
                     <?php  }
                        }
                    ?>
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