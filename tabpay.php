<?php  
    
    $PAYEMENT=[
       [   
           
           'Name'  =>'karthi',
           'Payment schedule' =>'First',
           'Bill Number' =>'001234',
           'Amount paid' =>'Dhs 100.000',
           'Balance amount' =>'Dhs 100.000',
           'date' =>'05-JAN,2022	',
           'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
    
         
       
       

     ],
     [   
           
       'Name'  =>'karthi',
       'Payment schedule' =>'First',
       'Bill Number' =>'001234',
       'Amount paid' =>'Dhs 100.000',
       'Balance amount' =>'Dhs 100.000',
       'date' =>'05-JAN,2022	',
       'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
     
   
   

    ],
    [   
            
    'Name'  =>'karthi',
    'Payment schedule' =>'First',
    'Bill Number' =>'001234',
    'Amount paid' =>'Dhs 100.000',
    'Balance amount' =>'Dhs 100.000',
    'date' =>'05-JAN,2022	',
    'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',

    



    ],
    [   
            
    'Name'  =>'karthi',
    'Payment schedule' =>'First',
    'Bill Number' =>'001234',
    'Amount paid' =>'Dhs 100.000',
    'Balance amount' =>'Dhs 100.000',
    'date' =>'05-JAN,2022	',
    'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',





    ]
    ];
 


    
      foreach($PAYEMENT as $key=>$PAYEMENT){
       echo"<tr>   
     
       <td>".$PAYEMENT['Name']."</td>
       <td>".$PAYEMENT['Name'] ."</td>
       <td>". $PAYEMENT['Payment schedule']."</td>
       <td>".$PAYEMENT['Bill Number']."</td>
       <td>".$PAYEMENT['Amount paid']."</td>
       <td>". $PAYEMENT['Balance amount']."</td>
       <td>".$PAYEMENT['date']."</td>
       <td>". $PAYEMENT['icon1']."</td>
    
       </tr>";
    }

 ?>  

 