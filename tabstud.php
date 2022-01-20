<?php  
    
 
      for($i=0;$i<18;$i++){
        $student []=[  
          'img'=>'<img src="img/86bc08c6e40f8d41ee54bd655ffbc696.jpg" alt="p" style="WIDTH: 10vh;">',
          'Name'  =>'Uername',
          'Email' =>'user@gmail.com',
          'Phone' =>'12333445'.$i++,
          'Enroll Number' =>'123456789'.$i,
          'Date of admission' =>'08-DEC,2021',
          'icon1' =>'<i class="fas fa-pen  " style="font-size:28px;color:#00C1FE ;">',
          'icon2' =>'<i class="fas fa-trash "  style="font-size:28px;color:#00C1FE ;">',
   
        
      
      

        ];

      }



   
     foreach($student as $key=>$student){
         echo"<tr>   
       
         <td>".$student['img']."</td>
         <td>".$student['Name'] ."</td>
         <td>". $student['Email']."</td>
         <td>".$student['Phone']."</td>
         <td>".$student['Enroll Number']."</td>
         <td>". $student['Date of admission']."</td>
         <td>".$student['icon1']."</td>
         <td>". $student['icon2']."</td>
      
         </tr>";
      }

   ?>  