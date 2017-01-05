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
        <?php $this->load->view('Dashboard/message');?>
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
               
                 <th>Date</th>
                 <th>Consignment#</th>
                 <th>Shipper <br/>Name</th>
                   <th>Shipper <br/>City</th>
                    <th>Consignee <br/>Name</th>
                    <th>Consignee<br/>City</th>
                    <th>Consignee<br/>Address</th>
                    <th>Contact#</th>
                    <th>COD Amount</th>
                   <th>Status</th>
                   <th>Action</th>
                </thead>
                <tbody>
                    <?php if(count($AllOrders)){?>
                    <?php foreach ($AllOrders as $order){?>
                     <tr>
                   
                         <td><?php echo date('Y/m/d',  strtotime($order->OrderDate)) ; ?></td>
                         
                        <td><?php echo $order->orderNumber; ?></td>
                        <td><?php echo $order->sName; ?></td>
                        <td><?php 
                        if(!empty($order->sCityId)){
                        $cityName1 = $this->db->where('cityid',$order->sCityId)->get('cities')->row()->cityname;
                        }
                        ?>
                         <?= $cityName1?$cityName1:''?>
                        </td>
                        <td><?php echo $order->Name; ?></td>
                        <td><?php
                        if(!empty($order->CityId)){
                        $cityName2 =  $this->db->where('cityid',$order->CityId)->get('cities')->row()->cityname; 
                        }
                        ?>
                        <?= $cityName2?$cityName2:''?>
                        </td>
                        <td><?php echo $order->Address; ?></td>
                        <td><?php echo $order->Mobile; ?></td>
                        <td><?php echo $order->Amount; ?></td>
                        <td><?php $order->orderStatus; ?>
                            <?= $order->orderStatus?$order->orderStatus:''?>
                        </td>
                        <td>
                        <a class="" data-toggle="modal" data-target="#myModal<?php echo $order->OrderId;?>">Change Status</a> |
                        <a class="" href="<?php echo site_url('orders/orderDetail').'/'.$order->OrderId; ?>">View</a> | 
                        <br/>
                        <a href="<?php echo site_url('orders/deleteOrder').'/'.$order->OrderId; ?>">Delete</a>
                      <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $order->OrderId;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form  action="<?php echo site_url('orders/changeStatus'); ?>" method="post" enctype="multipart/form-data"> 
     <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Select Status</h4>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-10">
                  <input type="hidden" name="orderid" class="form-control" style="width:100%;" value="<?php echo $order->OrderId;?>" placeholder="">
                   <input type="hidden" name="customerId" class="form-control" style="width:100%;" value="<?php echo $order->CustomerId;?>" placeholder="">
                  
                  <select name="status" class="form-control" style="width:100%;">
                      <option value="Pending" <?= $order->orderStatus=="Pending"?"selected":'' ?>>Pending</option> 
                       <option value="Confirmed" <?= $order->orderStatus=="Confirmed"?"selected":'' ?>>Confirmed</option> 
                      <option value="Parcel Picked" <?= $order->orderStatus=="Parcel Picked"?"selected":'' ?>>Parcel Picked</option> 
                      <option value="In Transit" <?= $order->orderStatus=="In Transit"?"selected":'' ?>>In Transit</option> 
                      <option value="At Destination City" <?= $order->orderStatus=="At Destination City"?"selected":'' ?>>At Destination City</option> 
                      <option value="With Rider" <?= $order->orderStatus=="With Rider"?"selected":'' ?>>With Rider</option> 
                       <option value="Returned" <?= $order->orderStatus=="Returned"?"selected":'' ?>>Returned</option> 
                        <option value="Delivered" <?= $order->orderStatus=="Delivered"?"selected":'' ?>>Delivered</option> 
                         
                  </select>
              </div>
              <div class="col-md-10" style="margin-top:10px;">
                  <textarea class="form-control" name="remarks" style="width:100%;" placeholder="Remarks"></textarea>
              </div>
              
              <div class="col-md-2">
                  <input type="submit" name="cityadd" class="btn btn-success" value="Update">
              </div>
          </div>
           
          </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
       
      </div>
    </div>
          </form>
  </div>
</div>
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