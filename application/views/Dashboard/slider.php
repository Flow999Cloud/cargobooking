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
        <li class="active">Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <a href="<?php echo base_url('dashboard/AddNewSlider'); ?>" class="btn btn-success">Add New Slider</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="orders" class="dataTables_wrapper table table-bordered table-responsive table-striped">
                <thead>
                <th>ID</th>
                 <th>Slider Image</th>
                 <th>Text</th> 
                   <th>Status</th>
                   <th>Action</th>
                </thead>
                <tbody>
                    <?php  
                   $i=1;
                        if(count($slider)){
                            foreach($slider as $sl){ ?>
                                
                          
                    <tr>
                        <td> <?php echo $i ; ?></td>
                        <td><img src="<?php echo site_url('upload').'/'.$sl->slider; ?>" width="50" height="50"></td>
                        <td><?php echo $sl->text ; ?></td>
                       <td><?php if($sl->status==0){ 
                                 echo "Inactive";}
                             else{ echo "Active";}?></td>
                       <td><a href="<?php echo site_url('dashboard/editslider').'/'.$sl->slider_id; ?>" class="btn btn-warning">Edit</a><span>/</span><a href="<?php echo site_url('dashboard/deleteslider').'/'.$sl->slider_id; ?>" class="btn btn-warning">Delete</a></td>
                    </tr>
                   
                     <?php $i++; }
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