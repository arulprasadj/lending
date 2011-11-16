		<div class="clearFix"></div>
		<div class="contentBody">
			<div class="contentTitle">View Borrowers</div>
			<div class="clearFix"></div>
			<div class="leftcontentBody">
				<ul>
					<li><a href="<?php echo base_url(); ?>loan/view/">Loan</a></li>
					<li><a href="<?php echo base_url(); ?>borrower/">Borrower</a></li>
					<li class="submenu"><a href="<?php echo base_url(); ?>borrower/add">Add Borrower</a></li>
					<li class="submenu"><a href="<?php echo base_url(); ?>borrower/viewall">View Borrowers</a></li>
					<li><a href="<?php echo base_url(); ?>stats/payments">Payments</a></li>
					
				</ul>
	        </div>
	        <div class="rightcontentBody">
	        	<table class="tablesorter">
	        		<thead>
	        			<tr>
	        				<th>Name</th>
	        				<th width="200">Address</th>
	        				<th width="100">Contact #</th>
	        				<th width="45">Edit</th>
	        				<th width="45">Delete</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<?php $borrowers = $this->Borrower_model->view_all();?>
	        			<?php foreach ($borrowers->result() as $borrower) :?>
	        			<tr>
	        				<td><?php echo anchor('borrower/view/?id='.$borrower->id, $borrower->lname.', '.$borrower->fname, 'style="text-decoration: none; font-size: 12px; color: #191970; font-weight: 900;"') ; ?></td>
	        				<td><?php echo $borrower->address; ?></td>
	        				<td><?php echo $borrower->phone_cell; ?></td>
	        				<td><a href="<?php echo base_url(); ?>borrower/edit/?id=<?php echo $borrower->id; ?>" style="margin-left: 12px;"><img src="<?php echo base_url(); ?>css/document_edit.png" /></a></td>
	        				<td><a href="<?php echo base_url(); ?>borrower/delete/<?php echo $borrower->id; ?>" style="margin-left: 12px;"><img src="<?php echo base_url(); ?>css/document_delete.png" /></a></td>
	        			</tr>
	        			<?php endforeach; ?>
	        		</tbody>
	        	</table>
	        </div>
	        <div class="clearFix"></div>
		</div>