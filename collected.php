<?php  
  
if (isset($_POST['time']) && isset($_POST['clicks'])) {  
      
    if (file_exists('collection.json')) {  
          
        //if file exists open the file and append the data  
          
        $json_file = fopen("collection.json", "a") or die("Unable to open file!");  
          
        $current_data = file_get_contents('collection.json');  
          
        $array_data = json_decode($current_data, true);  
          
        $extra = array(  
            'time' => $_POST['time'],
            'clicks' => $_POST['clicks']  
        );  
          
        $array_data[] = $extra;  
          
        $final_data = json_encode($array_data);  
          
        file_put_contents('collection.json', $final_data);  
          
        fclose($json_file);  
          
    } else {  
          
        //create a json file and save the data in it  
          
        $json_file = fopen("collection.json", "a") or die("Unable to open file!");  
          
        $current_data = file_get_contents('collection.json');  
          
        $array_data = json_decode($current_data, true);  
          
        $extra = array(  
            'time' => $_POST['time'],
            'clicks' => $_POST['clicks'] 
        );  
          
        $array_data[] = $extra;  
          
        $final_data = json_encode($array_data);  
          
        file_put_contents('collection.json', $final_data);  
          
        fclose($json_file);  
          
    }  
      
} 
  
?>  