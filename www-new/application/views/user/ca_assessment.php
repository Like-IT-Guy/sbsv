<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title"></div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<div class="col-md-6">
							<h2>Canada Leads<small></small></h2>
						</div>
						<div class="clearfix"></div>
					</div> 
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Destination</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone No</th>
								<th>Occupation</th>
								<th>Date</th>
								<th>File</th>
								<th>Work Experience</th>
								<th>Age</th>
								<th>Education</th>
								<th>English Language Skills</th>
								<th>Spouse English Language Skills</th>
								<th>Imidiate Relative in Canada</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($ca_leads as $key => $value) { ?>                     
							<tr>
								<td><?= $value->id ?></td>
								<td><?= $value->destination ?></td>
								<td><?= $value->name ?></td>
								<td><?= $value->email ?></td>
								<td><?= $value->phone_no ?></td>
								<td><?= $value->occupation ?></td>
								<td><?= $value->date_added ?></td>
								<td>
								<?php
								if($value->datafile != "") {
								?>
								<a target="blank" href="<?php echo base_url().'assets/admin/images/file/'?><?= $value->datafile ?>"><?= 'download' ?></a>
								<?php }
								else
								{
									echo "No Document Found";
								}
								?>
								</td>          
								<td><?= $value->work_exprience ?></td>
								<td><?= $value->age ?></td>
								<td><?= $value->education ?></td>
								<td><?= $value->english_language_skills ?></td>
								<td><?= $value->spouse_english_language_skills ?></td>
								<td><?= $value->imediate_relative_canada ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>