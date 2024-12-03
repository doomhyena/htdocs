<?php 

	// $kulso_tomb = array();
	
	// for($i=0;$i<10;$i++){
		
		// $belso_tomb = array();
		
		// for($j=0;$j<20;$j++){
		
			// $randomszam = rand(0, 50);
			
			// array_push($belso_tomb, $randomszam);
			
		// }
		
		// array_push($kulso_tomb, $belso_tomb);
		
	// }
	
	// print_r($kulso_tomb);
	
	$vezeteknevek = array("Nagy", "Kovács", "Tóth", "Szabó", "Horváth", "Varga", "Kiss", "Molnár");
	
	$keresztnevek = array("András", "Borbála", "Cecília", "Dénes", "Emese", "Ferenc", "Géza", "Hanna");
	
	$kulso_tomb = array();
	
	for($i=0;$i<10;$i++){
		
		$belso_tomb = array();
		
		// Random vezetéknév
		$randindex = rand(0, count($vezeteknevek)-1);
		
		$belso_tomb['vezeteknev'] = $vezeteknevek[$randindex];
		
		// Random keresztnév
		$randindex = rand(0, count($keresztnevek)-1);
		
		$belso_tomb['keresztnev'] = $keresztnevek[$randindex];
		
		// Életkor
		$belso_tomb['eletkor'] = rand(0, 50);
		
		array_push($kulso_tomb, $belso_tomb);
		
	}
	
	print_r($kulso_tomb);
	echo "<br>";
	
	$huszonotalatt = 0;
	
	for($i=0;$i<count($kulso_tomb);$i++){
		
		if($kulso_tomb[$i]['eletkor'] < 25){
			
			$huszonotalatt++;
			
		}
		
	}
	
	echo "$huszonotalatt személy fiatalabb 25 évnél.";
	echo "<br>";
	
	for($i=0;$i<count($kulso_tomb);$i++){
		
		$kulso_tomb[$i]['eletkor'] = $kulso_tomb[$i]['eletkor'] + rand(1, 10);
		
	}
	
	print_r($kulso_tomb);
	
	for($i=0;$i<count($kulso_tomb);$i++){
		
		echo $kulso_tomb[$i]['vezeteknev']." ".$kulso_tomb[$i]['keresztnev']." ".$kulso_tomb[$i]['eletkor']." éves.<br>";
		
	}