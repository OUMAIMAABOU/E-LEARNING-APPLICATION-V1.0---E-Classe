
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



</head>
<body class="row">
  <main>
  <div class="d-flex font-weight-400" id="dashboard">

    <div class="bg" id="sidebar-dashboard">
      <?php include 'sidebare.php'?>
   
      </div>



    
     <div id="page-content-dashboard">

    
      <div class=" py-0  ">
      <?php include 'navbar.php'?>
                
      </div>
        
      <div class=" py-2">
            <div class=" navbar-expand-md ">
              <div class="d-flex justify-content-between border-bottom ">
                  
              <a href="#" class="navbar-brand  fs-4 fw-bold text-dark px-2 ">Student List</a>
              <form class="d-flex my-2 px-3 ">
                <i class="fas fa-sort mx-4 " style="font-size:48px;color:#00C1FE ;" ></i>
                <button class="form-control me-2 bg-info text-light px-3 ">ADD NEW STUDENT </button>
              </form>
                            
              </div>
            </div>
            <div class=" table-responsive-sm table-responsive-md py-3">
              <table class="table bg-white table-borderless table-hover  mx-3 ">
                <thead>
                  <tr class="bg_table text-table" style="background: #e5e5e57e;color: #ACACAC;">
                    <th></th>
                    <th >Name</th>
                    <th >Email</th>
                    <th >Phone</th>
                    <th >Enroll Number</th>
                    <th >Date of admission</th>
                    <th></th>
                    <th></th>
      
                  </tr>
                </thead>
                <tbody class="font-weight-400">
                <?php  
    

                    for($i=0;$i<9;$i++){
                      $student[]= 
                        [  
                      '<img src="img/86bc08c6e40f8d41ee54bd655ffbc696.jpg" alt="p" style="WIDTH: 100px;">','Uername', 'user@gmail.com',
                      '12333445','123456789','08-DEC,2021','<i class="fas fa-pen  " style="font-size:28px;color:#00C1FE ;">',
                      '<i class="fas fa-trash "  style="font-size:28px;color:#00C1FE ;">'
                        
                        ];

                    }

                    for ($row = 0; $row <9; $row++) {
                      echo"<tr style='border-top: solid 20px #e5e5e57e'>";
                  for ($COL = 0; $COL <8; $COL++) {
                    
                      echo "<td>".$student[$row][$COL]."</td>";
                    }
                    "</tr>";
                  }
                  



                ?>   
                </tbody>
              </table>
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