<div id="login_form" 
	 style="width:400px; margin:100px auto; border-radius:5px; border:1px solid #909090; pading:20px" >

	 <?php
	 	//echo '<p>'.$error_message.'</p>';
	 	//echo validation_errors();
	 	if (isset($error_menssage)){
	 		echo '<p>'.$error_menssage.'</p>';
	 	}
	 	echo form_open();

	 		echo form_label('Username : ');
		 	$data = array(
		 		'name'  =>  'user_name',
		 		'id'    => 'user_name',
		 		'value' => set_value('username'),
		 		'style' => 'width:90%'
		 	);

		 	echo form_input($data);
		 	echo form_error('user_name');

		 	echo form_label('Password : ');
		 	$data = array(
		 		'name'  =>  'password',
		 		'id'    => 'password',
		 		'value' => '',
		 		'style' => 'width:90%'
		 	);

		 	echo form_password($data);
		 	echo form_error('password');

		 	echo form_label('Entrada ');

		 	$data = array(
		    	'name'    => 'type',
		    	'id'      => 'entrada',
		    	'value'   => '1',
		    	'checked' => TRUE
		    );

		echo form_radio($data);

		echo form_label('Salida ');

		 	$data = array(
		    	'name'    => 'type',
		    	'id'      => 'salida',
		    	'value'   => '0'
		    );

		echo form_radio($data);

		 	echo " <br /> <a href=" . base_url() . "register>Registro</a><br />";

		 	$data = array(
		 		'name'  =>  'login',
		 		'id'    => 'login',
		 		'value' => 'Login',
		 		'style' => 'width:40%'
		 	);

		 	echo form_submit($data);

	 	echo form_close(); 
	 ?>
</div>