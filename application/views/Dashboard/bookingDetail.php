<?php $this->load->view('Dashboard/header'); ?> 
<!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('Dashboard/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <?php //$this->load->view('Dashboard/message');?>
        <div class="row">
            <div class="col-md-12">
                
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Booking Detail</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2> Customer Name:</h2> <?php echo $bookingDetail->fname.' '.$bookingDetail->lname; ?>
                    </div>
                </div>
              <div class="row">
                    <div class="col-md-4">
                        <h2> Booking Date</h2> <?php echo $bookingDetail->bookingDate; ?>
                    </div>
                  <div class="col-md-4">
                      <h2>Booking Status</h2><?php echo $bookingDetail->bookingStatus; ?>
                  </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                         <h2>Sender Information</h2>
                     <?php  echo $bookingDetail->scountry.', '.$bookingDetail->sstate.', '.$bookingDetail->stown.', '.$bookingDetail->szipcode.', '.$bookingDetail->scountry.', '
                             .$bookingDetail->sstreetaddress.', '.$bookingDetail->sapartment.', '.$bookingDetail->scompanyname;?>   
                    </div>
                    <div class="col-md-6">
                      <h2>Receiver Information</h2>
                     <?php  echo $bookingDetail->rcountry.', '.$bookingDetail->rstate.', '.$bookingDetail->rtown.', '.$bookingDetail->rzipcode.', '.$bookingDetail->rcountry.', '
                             .$bookingDetail->rstreet.', '.$bookingDetail->rapartment.', '.$bookingDetail->rcompanyname;?>   
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Pick Up Information</h2>
                        <p><b>Shipping Mode:</b> <?php echo $bookingDetail->shipmode ?></p>
                        <p><b>Cargo Name:</b> <?php echo $bookingDetail->cargoname ?></p>
                        <p><b>Weight:</b> <?php echo  $bookingDetail->weight;?></p>
                        <p><b>Weight Unit: </b> <?php  echo $bookingDetail->weightunit;?></p>
                        <p><b>Packing Type: </b> <?php echo $bookingDetail->pakingtype; ?></p>
                        <p><b>Quantity: </b> <?php echo $bookingDetail->quantity; ?></p>
                        <p><b>Cargo Type: </b> <?php echo $bookingDetail->cargotype; ?></p>
                         <p><b>Insurance: </b> <?php echo $bookingDetail->insurance; ?></p>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo site_url('dashboard/confirmBooking').'/'.$bookingDetail->bookingID; ?>" class="btn btn-info">Confirm</a> 
                        <a href="<?php echo site_url('dashboard/booking'); ?>" class="btn btn-danger">Go back</a>
                    </div>
                </div>
            </div>
        </div>
       
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('Dashboard/footer'); ?> 
