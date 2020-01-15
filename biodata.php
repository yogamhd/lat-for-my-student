<?php

function cetakBiodata(){
  
	$biodata = array(
		'nama' => 'Yoga Pratama',
		'address' => 'Ogan Ilir, Sumatera Selatan',
    
		'hobbies' => ['Membaca'],
		'is_married' => false,
		'school' => array('highSchool' => 'SMK Negeri 1 Indralaya Selatan', 'university' => '^_^'),
    
		'skills' => [
			array('id' => 0, 'skill' => 'Html Dasar'),
			array('id' => 1, 'skill' => 'CSS Dasar'),
			array('id' => 2, 'skill' => 'PHP Dasar')
		]
	);
  
	return json_encode([$biodata]);
}


echo cetakBiodata();