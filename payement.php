<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pay</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link  href="css/all.min.css" rel="stylesheet">
    <link  href="css/dashboord.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



</head>

    <body class="row">
  <div class="d-flex" id="dashboard">
 
    <div class="bg" id="sidebar-dashboard">
    <?php include 'sidebare.php'?>
    </div>



    
    <div id="page-content-dashboard">
      
      <div class=" px-0 ">
        <?php include 'navbar.php'?>
      </div>

        <div class=" px-4 ">
            <div class=" navbar-expand-md p-3 ">
                <div class="d-flex justify-content-between border-bottom">
                   
                    <a href="#" class="navbar-brand  fs-4 fw-bold text-dark ">Payment Details</a>
            
                        
                            <form class="d-flex my-2 ">
                              <i class="fas fa-sort mx-4 " style="font-size:48px;color:#00C1FE ;" ></i>
                                <button class="form-control me-2 bg-info text-light ">ADD NEW STUDENT </button>
                              
                              </form>
                </div>
            </div>
     
            <table class="table table-striped  table-borderless table-hover table-responsive-sm table-responsive-md ">
                <thead>
                    <tr class="bg_table text-table">
          
                      <th scope="col">Name</th>
                      <th scope="col">Payment schedule</th>
                      <th scope="col">Bill Number</th>
                      <th scope="col"> Amount paid</th>
                      <th scope="col">Balance amount</th>
                      <th scope="col">date</th>
                      <th scope="col"></th>
      
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>karthi</td>
                      <td>First</td>
                      <td>001234</td>
                      <td>DHS 100,00</td>
                      <td>DHS 500,00</td>
                      <td>05-JAN,2022</td>
                      <td scope="row " ><i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i></td>
                     
                    </tr>
                    <tr>
                     
                        <td>karthi</td>
                        <td>First</td>
                        <td>001234</td>
                        <td>DHS 100,00</td>
                        <td>DHS 500,00</td>
                        <td>05-JAN,2022</td>
                        <td scope="row " ><i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i></td>
                      </tr>
                      <tr>
                     
                        <td>karthi</td>
                        <td>First</td>
                        <td>001234</td>
                        <td>DHS 100,00</td>
                        <td>DHS 500,00</td>
                        <td>05-JAN,2022</td>
                        <td scope="row " ><i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i></td>
                      </tr>
                      <tr>
                     
                        <td>karthi</td>
                        <td>First</td>
                        <td>001234</td>
                        <td>DHS 100,00</td>
                        <td>DHS 500,00</td>
                        <td>05-JAN,2022</td>
                        <td scope="row " ><i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i></td>
                      </tr>
                  


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
</body>
</html>