 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                 
                <!-- row -->
                <div class="row">

					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Gym Branch</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="<?php echo base_url('GymBranch/save')?>" method="POST" enctype="multipart/form-data">
										<div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Branch Name</label>
                                                <input type="text" name="branchname" id="branchname" class="form-control"  >
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Branch Head</label>
                                                <select class="form-control" name="ownername" id="ownername"  >
													<option value="">Select Branch Head</option>
														<?php foreach($master as $row):
															echo'<option value="'.$row['ownername'].'"> '.$row['ownername'].'</option>';
															endforeach;
														?>
												</select>
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Address</label>
                                                <input type="text" name="branchaddress" id="branchaddress" class="form-control">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" id="email" class="form-control"  >
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>Landline No</label>
                                                <input type="text" name="landline" id="landline" class="form-control">
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Mobile No</label>
                                                <input type="text" name="phoneno" id="phoneno" class="form-control"  >
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>City</label>
                                                <input type="text" name="city" id="city" class="form-control"  >
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Pincode</label>
                                                <input type="text" name="pincode" id="pincode" class="form-control"  >
                                            </div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-4">
                                                <label>State</label>
                                                <input type="text" name="state" id="state" class="form-control"  >
                                            </div>
											<div class="form-group col-md-2"></div>
											<div class="form-group col-md-4">
                                                <label>Country</label>
                                                <input type="text" name="country" id="country" class="form-control">
                                            </div>
										</div>
                                   
                                        <button type="submit" class="btn btn-primary" style="background:#dec53c;">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		
<!--**********************************
            Content body end
        ***********************************-->


         