<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 4 - PAPER PITCHING DETAIL
          
    </div>
    <div>
    <?php echo anchor('administrator/plan/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
          
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
    <?php 
        foreach ($admplandetail as $abpd) : ?>
        <tr>
                           <th>CUSTOMER</th>
                           <td><?php echo $abpd->cust_plan ?></td>
                          

                           </tr>
                     <tr>
                           <th>VALUE PROPOSITIONS</th>
                           <td><?php echo $abpd->value_plan ?></td>
                        

                           </tr>
                     <tr>
                           <th>CHANNELS</th>
                           <td><?php echo $abpd->channels_plan ?></td>
                          
                           </tr>
                     <tr>
                           <th>RELATIONSHIPS</th>
                           <td><?php echo $abpd->relation_plan ?></td>
                         
                           </tr>
                     <tr>
                           <th>KEY ACTIVITIES</th>
                           <td><?php echo $abpd->key_act_plan ?></td>
                         
                           </tr>
                     <tr>
                           <th>KEY RESOURCE</th>
                           <td><?php echo $abpd->key_res_plan ?></td>
                          
                           </tr>
                     <tr>
                           <th>KEY PARTNERS</th>
                           <td><?php echo $abpd->key_partner_plan ?></td>
                        
                           </tr>
                     <tr>
                           <th>COST STRUCTURE</th>
                           <td><?php echo $abpd->cost_plan ?></td>
                        

                           </tr>
                     <tr>
                           <th>REVENUE STREAMS</th>
                           <td><?php echo $abpd->revenue_plan ?></td>
                       
                     </tr>
        <?php endforeach; ?>

</div>