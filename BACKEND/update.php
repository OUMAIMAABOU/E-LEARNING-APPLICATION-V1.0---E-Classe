<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<?php
    $student_edit = [
        "id" => "",
        "Name" => "",
        "Email" => "",
        "phone" => "",
        "EnrollNumber" => "",
        "Date" => ""

    ];
    if (isset($_GET['id'])) {
        $data = file_get_contents('data.json');
        $students = json_decode($data,true);
        foreach($students as $student){
            if($student['id'] == $_GET['id']){
                $student_edit = $student;
                break;
            }
        }
    }
?>

<body>
    <form method="POST" action="">

<div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $student_edit['Name'] ; ?>">
</div>

<div class="col-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $student_edit['Email'] ; ?>">
</div>

<div class="col-6">
    <label for="phone" class="form-label">Phone </label>
    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $student_edit['phone'] ; ?>">
</div>

<div class="col-md-6">
    <label for="Number" class="form-label">Enroll Number	</label>
    <input type="text" class="form-control" name="Number" value="<?php echo $student_edit['EnrollNumber'] ; ?>">
</div>
<div class="col-md-6">
    <label for="date" class="form-label">Date of admission		</label>
    <input type="date" class="form-control" name="date" value="<?php echo $student_edit['Date'] ; ?>">
</div>



<div class="col-12">
<input type="submit" name="save" value="UPDATE">
</div>
</form>        
</body>
</html>

<?php
    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['phone'])){
        $student_edit = [
            "id" => $_POST['id'],
            "Name" => $_POST['name'], 
            "Email" => $_POST['email'], 
            "phone" => $_POST['phone'], 
            "EnrollNumber" => $_POST['Number'], 
            "Date" => $_POST['date']
        ];
        $data = file_get_contents('data.json');
        $students = json_decode($data,true);

        

        foreach($students as $key => $student){
            if($student['id'] == $_GET['id']){
                $students[$key] = $student_edit;
                break;
            }
        }


        $data = json_encode($students , JSON_PRETTY_PRINT);
        file_put_contents('students.json', $data);
        echo "
            <script>
            window.location.href = 'index.php';
            </script>
        ";
    }
?>
