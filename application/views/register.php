<div id="login_form" 
	 style="width:400px; margin:100px auto; border-radius:5px; border:1px solid #909090; pading:20px" >

	 <?php
	 	/*if (isset($error_menssage)){
	 		echo '<p>'.$error_menssage.'</p>';
	 	}*/
	 	echo form_open();

	 		echo form_label('Username : ');
		 	$data = array(
		 		'name'  => 'user_name',
		 		'id'    => 'user_name',
		 		'value' => set_value('username'),
		 		'style' => 'width:90%'
		 	);

		 	echo form_input($data);
		 	echo form_error('user_name');

		 	echo form_label('Password : ');
		 	$data = array(
		 		'name'  => 'password',
		 		'id'    => 'password',
		 		'value' => '',
		 		'style' => 'width:90%'
		 	);

		 	echo form_password($data);
		 	echo form_error('password');

		 	echo form_label('Password Confirm: ');
		 	$data = array(
		 		'name'  => 'passconf',
		 		'id'    => 'passconf',
		 		'value' => '',
		 		'style' => 'width:90%'
		 	);

		 	echo form_password($data);
		 	echo form_error('passconf');

		 	$data = array(
		 		'name'  => 'login',
		 		'id'    => 'login',
		 		'value' => 'Registrar',
		 		'style' => 'width:40%'
		 	);

		 	echo form_submit($data);

	 	echo form_close(); 
	 ?>
</div>