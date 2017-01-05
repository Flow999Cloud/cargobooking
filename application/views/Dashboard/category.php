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
        <li class="active">Orders</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <a href="<?php echo base_url('dashboard/AddNewCategory'); ?>" class="btn btn-success">Add New Category</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="orders" class="dataTables_wrapper table table-bordered table-responsive table-striped">
                <thead>
               
                 <th>Name</th>
                   <th>Created On</th>
                   
                   <th>Status</th>
                   <th>Action</th>
                </thead>
                <tbody>
                    <?php  
                   
                        if(count($cat)){
                            foreach($cat as $c){ ?>
                                
                          
                    <tr>
                        <td><?php echo $c->cat_name ; ?></td>
                        <td><?php echo $c->created_at ; ?></td>
                       <td><?php if($c->status==0){ 
                                 echo "Inactive";}
                             else{ echo "Active";}?></td>
                       <td><a href="<?php echo site_url('dashboard/editcategory').'/'.$c->cat_id; ?>" class="btn-warning">Edit</a><span>/</span><a href="<?php echo site_url('dashboard/deletecategory').'/'.$c->cat_id; ?>" class="btn-warning">Delete</a></td>
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