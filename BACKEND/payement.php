<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



</head>

    <body class="row">
     
    <main>
        <div class="d-flex" id="dashboard">
        <div class="bg" id="sidebar-dashboard">
        <?php include 'sidebare.php'?>
        </div>

      

        <div id="page-content-dashboard">
          
          <div class=" px-0 ">
            <?php include 'navbar.php'?>
          </div>

            <div class=" px-2 ">
                <div class=" navbar-expand-md p-3 ">
                    <div class="d-flex justify-content-between border-bottom">
                      
                        <a href="#" class="navbar-brand  fs-4 fw-bold text-dark ">Payment Details</a> 
                
                            
                                <form class="d-flex my-2 ">
                                  <i class="fas fa-sort mx-4 " style="font-size:48px;color:#00C1FE ;" ></i>
                                    <button class="form-control me-2 bg-info text-light ">ADD NEW STUDENT </button>
                                  
                                  </form>
                    </div>
                </div>
              <div class=" table-responsive-sm table-responsive-md">
                <table class="table table-striped  table-borderless table-hover bg-white mx-3 ">
                    <thead>
                        <tr class="bg_table text-table">
              
                          <th>Name</th>
                          <th>Payment schedule</th>
                          <th>Bill Number</th>
                          <th> Amount paid</th>
                          <th>Balance amount</th>
                          <th>date</th>
                          <th></th>
          
                        
                        </tr>
                      </thead>
                      <tbody>
                    
          <?php  
        
              $PAYEMENT=[
              [   
                'Name'  =>'karthi', 'Payment schedule' =>'First', 'Bill Number' =>'001234','Amount paid' =>'Dhs 100.000','Balance amount' =>'Dhs 100.000',
                'date' =>'05-JAN,2022	', 'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
              ],
              [      
                'Name'  =>'karthi', 'Payment schedule' =>'First', 'Bill Number' =>'001234','Amount paid' =>'Dhs 100.000','Balance amount' =>'Dhs 100.000',
                'date' =>'05-JAN,2022	', 'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
              ],
              [      
                'Name'  =>'karthi', 'Payment schedule' =>'First', 'Bill Number' =>'001234','Amount paid' =>'Dhs 100.000','Balance amount' =>'Dhs 100.000',
                'date' =>'05-JAN,2022	', 'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
              ],
              [      
                'Name'  =>'karthi', 'Payment schedule' =>'First', 'Bill Number' =>'001234','Amount paid' =>'Dhs 100.000','Balance amount' =>'Dhs 100.000',
                'date' =>'05-JAN,2022	', 'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
              ],
              ];
          


              
                foreach($PAYEMENT as $PAYEMENT){
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
    
                      


                    </tbody>
                </table>
            </div>
    </div>  
    </div>    
    </div>  
   
      <script src="js/bootstrap.bundle.min.js" ></script>
      <script>
        var el = document.getElementById("dashboard");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
   </main> 
</body>
</html>