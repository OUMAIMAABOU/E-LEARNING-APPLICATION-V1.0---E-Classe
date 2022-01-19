
  <tbody> 
    <?php  
    
     $student=[
        [
            'Name'  =>'Uername',
            'Email' =>'user@gmail.com',
            'Phone' =>'12333445',
            'Enroll Number' =>'123456789',
            'Date of admission' =>'08-DEC,2021',
            'u' => '<i class="fas fa-pen  " style="font-size:28px;color:#00C1FE ;">',
        
        

      ],
      [
        'Name'  =>'Uername',
        'Email' =>'user@gmail.com',
        'Phone' =>'12333445',
        'Enroll Number' =>'123456789',
        'Date of admission' =>'08-DEC,2021',
    
    

  ],
  [
    'Name'  =>'Uername',
    'Email' =>'user@gmail.com',
    'Phone' =>'12333445',
    'Enroll Number' =>'123456789',
    'Date of admission' =>'08-DEC,2021',

]



     ];
      foreach($student as $key=>$student){
          echo"<tr>   
          <td>".$key."</td>
          <td>".echo "<img src=img/86bc08c6e40f8d41ee54bd655ffbc696.jpg" alt="p" style="WIDTH: 10vh;>"; "</td>
          <td>".$student['Name'] ."</td>
          <td>". $student['Email']."</td>
          <td>".$student['Phone']."</td>
          <td>".$student['Enroll Number']."</td>
          <td>". $student['Date of admission']."</td>
          <td>". $student['u']."</td>
          </tr>";
       }
       
  
    ?>  
   </tbody> 
