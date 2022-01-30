<?php 
               
                if(isset($_POST['save'])) {
                    $js =  file_get_contents('data.json');
                    $js = json_decode($js, true);
                    
                  

                    $st = array(
                        "id"=>uniqid(),
                        "Name" => $_POST['name'], 
                        "Email" => $_POST['email'], 
                        "phone" => $_POST['phone'], 
                        "EnrollNumber" => $_POST['Number'], 
                        "Date" => $_POST['date']
                    );

                    $js[] = $st;
                    $js = json_encode($js, JSON_PRETTY_PRINT);
                    file_put_contents('data.json', $js);
                    header("location:student.php");


                }


            ?>
