<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
	xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="x-apple-disable-message-reformatting">
	<title>Format for Audit Acknowledgement email</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet" />

	<style>
		@media  only screen and (min-device-width: 375px) and (max-device-width: 413px) {
			u~div .email-container {
				min-width: 375px !important;
			}
		}

		@media  only screen and (min-device-width: 414px) {
			u~div .email-container {
				min-width: 414px !important;
			}
		}

		.dashboard-button {
			font-weight: 800;
			font-size: 14px;
			padding: 10px;
			margin: 10px;
			background-color: #d8d8d8;
			border: none;
			color: #374e9e;
			font-family: 'Lato', sans-serif;
		}

		.btn.btn-black-outline {
			border-radius: 0px;
			background: transparent;
			font-weight: 500;
			color: #374e9e;
		}

		.line_rating {
			border: 0px solid;
			border-image-slice: 1;
			border-bottom: 5px;
			border-image-source: linear-gradient(270deg, #364c9d, #ff0057);
		}

		.email-container {
			border-right: 0px solid;
			border-left: 0px solid;
			border-image-slice: 1;
			border-width: 0px;
			line-height: 30px;
			font-size: 15px;
			text-align: justify;
			border-image-source: linear-gradient(to left, #364c9d, #FF0057);
			font-family: 'Lato', sans-serif;
			color: rgba(0, 0, 0, 0.877);
		}

		.g-id {
			margin: auto;
			padding: 0 2.0em;
			font-family: 'Work Sans', sans-serif;
			text-align: left;
			background-color: #d8d8d8;
			width: 400px;
		}

		table,
		th,
		td {
			border: 1px solid black;
  			border-collapse: collapse;
		}
		

	</style>
</head>

<body>

	<center style="width: 100%; background-color: white">

		<div style="max-width: 950px; margin: 0 auto;" class="email-container">

			<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
				style="margin: auto;">
				<tr>
					<td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">

						<hr class="line_rating">
						<div class="text" style="padding: 2em 0.5em; text-align: left;">

							<strong style="font-family: 'Work Sans', sans-serif; color:red; font-size: 16px;">Hi <?php echo e($audit->collectionManagerData->name); ?>,</strong>
							<br/>
							<br/>
							<div>
								<div class="text" style="padding: 0.5em; text-align: left;">
									<strong
										style="font-family: 'Work Sans', sans-serif;color:red; font-size: 16x;"><ins>Greetings!</ins></strong>
								</div>

                                <br/>
								<strong style=" font-family: 'Work Sans', sans-serif; padding-top: 20px;">This is to
									apprise you that schedule <strong style="color:red;"><?php echo e(ucfirst($audit->qmsheet->type)); ?></strong> audit has
									been successfully performed on following parameters..</strong>
	                            <br/>
								<table style="width:100%; font-family:'Courier New', Courier, monospace; font-size:80%">
									<tr bgcolor="red" style="color: white;">

										<th>Branch</th>
										<th>Audit Type</th>
										<th>Name of Agency/Yard</th>
										<th>Collection Manager Name</th>
										<th>Product</th>
										<th>Date of Audit Performed</th>

									</tr>
									<tr>
									    <?php 
									    $nameAudit="";
									    
									    if($audit->branchRepo && $audit->branchRepo->name != "" && !is_null($audit->branchRepo->name)) {
									        $nameAudit=$audit->branchRepo->name;
									    }
									    elseif($audit->agency && $audit->agency->name != "" && !is_null($audit->agency->name)) {
									        $nameAudit=$audit->agency->name;
									    }
									    elseif($audit->agencyRepo && $audit->agencyRepo->name != "" && !is_null($audit->agencyRepo->name)) {
									        $nameAudit=$audit->agencyRepo->name;
									    }
									    elseif($audit->yard && $audit->yard->name != "" && !is_null($audit->yard->name)) {
									        $nameAudit=$audit->yard->name;
									    }
									    else {
									        $nameAudit=$audit->branchnew->name;
									    }
									    
									    ?>
										<td><?php echo e($audit->branchnew->name); ?></td>
										<td><?php echo e(ucfirst($audit->qmsheet->type)); ?></td>
										<td><?php echo e($nameAudit); ?></td>
										<td><?php echo e($audit->collectionManagerData->name); ?></td>
										<td><?php echo e($audit->productnew->name); ?></td>
                                        <td><?php echo e($audit->audit_date_by_aud); ?></td>
									</tr>
								
									
								</table>

							</div>
                            <br/>
							<div>

								<div class="text" style="padding: 0.5em; text-align: left;">
									<strong style="font-family: 'Work Sans', sans-serif; font-size: 16x;"><ins>
										Key Observations:</ins></strong>
								</div>
								<table style="width:100%">
									<tr bgcolor="red" style="color: white;">
										<th>Main Parameter</th>
										<th>Sub Parameter</th>
										<th>Observation Remarks</th>
									</tr>
									<?php if(count($audit_data) > 0): ?>
									<?php $__currentLoopData = $audit_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        <td><?php echo e($ad->sub_parameter_detail->sub_parameter); ?></td>
										<td><?php echo e($ad->remark); ?></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									

								</table>
								<br>
								<div class="text" style="padding: 0.5em; text-align: left;">
									<strong style="font-family: 'Work Sans', sans-serif; font-size: 16x;"><ins>
										FOS Details:-</ins></strong>
								</div>
								<table style="width:100%">
									<tr bgcolor="red" style="color: white;">
										<th>Location</th>
										<th>Agency Name</th>
										<th>Agency code</th>
										<th>Agent Name</th>
										<th>Agent SFDC ID</th>
										<th>Collection Manager</th>
										<th>Product</th>
										<th>DRA</th>
										<th>PVR</th>
										<th>Endo Card</th>
									</tr>
									<?php if(count($audit_data) > 0): ?>
									<?php $__currentLoopData = $audit_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        <td><?php echo e($ad->sub_parameter_detail->sub_parameter); ?></td>
										<td><?php echo e($ad->remark); ?></td>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        <td><?php echo e($ad->sub_parameter_detail->sub_parameter); ?></td>
										<td><?php echo e($ad->remark); ?></td>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        <td><?php echo e($ad->sub_parameter_detail->sub_parameter); ?></td>
										<td><?php echo e($ad->remark); ?></td>
										<td><?php echo e($ad->remark); ?></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									

								</table>
								<br>
								<div class="text" style="padding: 0.5em; text-align: left;">
									<strong style="font-family: 'Work Sans', sans-serif; font-size: 16x;"><ins>
										COC Posters & Declaration:</ins></strong>
								</div>
								<table style="width:100%">
									<tr bgcolor="red" style="color: white;">
										<th>Location</th>
										<th>Agency Name</th>
										<th>Agency code</th>
										<th>COC posters</th>
										<th>No. of COC posters</th>
										<th>Declaration Form</th>
										<th>Hoardings</th>
										
									</tr>
									<?php if(count($audit_data) > 0): ?>
									<?php $__currentLoopData = $audit_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        <td><?php echo e($ad->sub_parameter_detail->sub_parameter); ?></td>
										<td><?php echo e($ad->remark); ?></td>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        <td><?php echo e($ad->sub_parameter_detail->sub_parameter); ?></td>
										<td><?php echo e($ad->remark); ?></td>
										<td><?php echo e($ad->parameter_detail->parameter); ?></td>
                                        
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									

								</table>

                                <br/>
								<div>
									<div class="text" style="padding: 0.5em; text-align: left;">
										<strong
											style="font-family: 'Work Sans', sans-serif; color:red; font-size: 16x;"><ins>Note:-</ins></strong>
									</div>
                                    
									<ul>
										<li>
											This is to apprise you that, on the basis of the performed audit and this
											acknowledgement e-mail, the below points are to be taken with utmost care:-

										</li>
										<li>
											In case if there is any gap or disconnect identified in shared findings,
											please reach out to respective auditor within 48 Hours on <?=$audit->qa_qtl_detail->email; ?>

										</li>
										<li>
											Post 48 Hours timeline completion, we do the submission of reports in the
											system hence NO correction allowed in any further reports

										</li>
										<li>
											All the report is going to be submitted, as per the data received by you and
											the Central team
										</li>
									</ul>

									<p style="font-family: 'Work Sans', sans-serif; text-align: center;">Thanks for your
										support during audit completion!</p>

									<hr class="line_rating">
								</div>

					</td>
				</tr>
			</table>


		</div>
	</center>
</body>

</html><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/audit/test_mail.blade.php ENDPATH**/ ?>