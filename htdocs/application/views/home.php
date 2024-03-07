<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Simple CRUD</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link"
						href="<?php echo base_url();?>home">Home
						<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link"
						href="<?php echo base_url();?>view">View
						<span class="sr-only">(current)</span></a>
				</li>
		</div>
	</nav>
</div>

<br><br>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php

            if(!empty($this->session->flashdata('message'))) {
                echo $this->session->flashdata('message');
            } elseif(!empty($this->session->flashdata('message1'))) {
                echo $this->session->flashdata('message1');
            }

						$attributes = array('class' => 'form-horizontal');
						$form_control = array('class' => 'form-control');
						echo form_open('home/create', $attributes);
						?>
			<?php
						echo form_label('Name', 'name');
						echo form_input('name', '', $form_control);
						?>
			<br><br>
			<?php
						echo form_label('Age', 'age');
						$data = array('type' => 'number','class' => 'form-control','id' => 'age');
						echo form_input($data);
						?>
			<br><br>
			<?php
						echo form_label('Address', 'address');
						echo form_textarea('address', '', $form_control);
						?>
			<br><br>
			<?php
						echo form_label('Gender', 'gender');
						echo form_radio('gender', 'male', false, ['id=male']);
						echo form_label('Male', 'male');
						echo form_radio('gender', 'female', false, ['id=female']);
						echo form_label('Female', 'female');
						?>
			<br><br>
			<?php
						echo form_label('Year', 'year');
						$options = array(
						    '2000' => 2000,
						    '2001' => 2001,
						    '2002' => 2002
						);
						echo form_dropdown('year', $options, '', $form_control);
						?>
			<br><br>
			<?php
						echo form_label('Interest', 'interest');
						echo form_checkbox('interest', 'games', false, ['id' => 'games']);
						echo form_label('Games', 'games');
						echo form_checkbox('interest', 'music', false, ['id' => 'music']);
						echo form_label('Music', 'music');
						?>
			<br><br>
			<?php
						echo form_submit('submit', 'Submit', ['class' => 'btn btn-success']);
						echo form_reset('reset', 'Reset', ['class' => 'btn btn-danger']);
						?>
			<?php form_close();?>
		</div>
	</div>
</div>