<?php $this->load->view('includes/head'); ?>
<body>

 <style type="text/css">
     body{
          background:#ffffff;  
     } 
</style>
<div calss="container-fluid">
<?php $this->load->view('includes/menuWrap'); ?>
 
    
</div>
<div class="container-fluid">
    <div class="row breadcrumbswrp" style="margin-bottom:33px;">
             <center>
                 <h1>Dashboard</h1>
                 <p><a href="#">Home</a>/ Dashboard</p>
             </center>
         </div>
     </div>
 <div class="container-fluid">
     <table class="table table-bordered table-responsive table-condensed">
         <thead>
             <tr>
                 <th>Order #</th>
                  <th>Customer</th>
                  <th>Shipment</th>
                  <th>Order total</th>
                  <th>Payment</th>
                  <th>Status</th>
             </tr>
         </thead>
     </table>
     
    </div>
  

    <?php $this->load->view('includes/footer'); ?>