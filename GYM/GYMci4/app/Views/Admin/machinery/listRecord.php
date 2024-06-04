 
  <div class="content-body">
               <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"  style="color:white !important; margin-top:40px; font-weight:1000;">Gym Machine List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                
                            </nav>
                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('/Machinery')?>" aria-expanded="false">
                             
							 <button class="btn btn-primary sw-btn-next" type="button" style="margin-right:50px; background:#dec53c; border-color:#dec53c;">Add Category Master</button>
                             </a>
					   </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                 
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
											
                                                <th>Action</th>
												<th>ID</th>
                                                <th>Machine Name</th>
                                                <th>Machine No</th>
												<th>Brand</th>
                                                <th>Branch Name</th>
                                                <th>Purchase Cost</th>
                                                <th>Purchase Date</th>
                                                <th>Machine Type</th>
												<th>Purchase Type</th>
												<th>Purchase No </th>
												<th>Insurance</th>
												<th>Insurance No</th>
												<th>Insurance Name</th>
												<th>Purchase Date</th>
												<th>Renew Date </th>
												<th>Depreciation</th>
												 
                                            </tr>
                                        </thead>
										 <tbody>
										 <?php foreach($MachineData as $row): 
										 		echo "<tr>";
											 echo '<td>
											 <a href="'.base_url().'/Machinery/edit/'.$row["id"].'" class="btn btn-primary" data-toggle="tooltip" title="Edit GymMachine" style="padding:3px;background:#dec53c;"><i class="fa fa-pencil" aria-hidden="true"  style="color:black;"></i></a>
											 <a href="'.base_url().'/Machinery/delete/'.$row["id"].'" class="btn btn-primary" title="Delete GymMachine" data-toggle="tooltip" style="padding:3px;background:#dec53c;"><i class="fa fa-trash" aria-hidden="true"  style="color:black;"></i></a>
											 </td>';
                                              
											 echo  "<td>".$row['id']."</td>"; 		
											 echo  "<td>".$row['machinename']."</td>";											 
											 echo  "<td>".$row['machineno']."</td>";
											 echo  "<td>".$row['brand']."</td>";
											 echo  "<td>".$row['branchname']."</td>";
											 echo  "<td>".$row['purchasecost']."</td>";
											 echo  "<td>".$row['date']."</td>";
											  echo  "<td>".$row['machinetype']."</td>";
											 echo  "<td>".$row['purchasetype']."</td>";
											 echo  "<td>".$row['purchaseno']."</td>";
											 echo  "<td>".$row['insurance']."</td>";
											 echo  "<td>".$row['insuranceno']."</td>";
											  echo  "<td>".$row['insurancename']."</td>";
											 echo  "<td>".$row['purchasedate']."</td>";
											 echo  "<td>".$row['renewdate']."</td>";
											 echo  "<td>".$row['depreciation']."</td>";
											  
											echo "</tr>";
											
											  endforeach; ?>
											 
                                             
                                             
                                        </tbody>
                                    </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		 