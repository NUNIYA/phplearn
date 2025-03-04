<?php
if (isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif'); //only image files are allowed 
    if (!empty($_FILES['upload']['name'])) {
        //print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/" . $file_name;
        //get file extension pf uploaded file and check if there extension matches with the allowed once
        $file_ext = explode('.', $file_name); //explode function creates and array from string so in this case it will split it using . $file_name wich will return the uploaded file name for e.g. pp.png so the spliting is done on pp and png and stored as an array
        $file_ext = strtolower(end($file_ext)); //now what this does is from the array on the above it will take the end which will be the uploaded file end extension for eg if the uploaded file is pp.png first it split it in to pp and png and the ned of the array will be png  which this line of code extracts   

        echo $file_ext;
        //validate file extension if its image or not 
        if (in_array($file_ext, $allowed_ext)) //so the in_array checks is the extracted extension is in the allowed_ext array
        {

            if ($file_size <= 100000) // what thids does is if the file even if its image and the size is greater than the given value it will say file to large
            {
                move_uploaded_file($file_tmp, $target_dir); //if everythign works fine it moves the uploaded file to this directory

                $message = '<p style="color:green;">file uploaded syccesfully</p>';
            } else {
                $message = '<p style="color:red;">file is to large</p>';
            }
        } else {
            $message = '<p style="color:red;">invalid file type</p>';
        }
    } else {
        $message = '<p style="color:red;">plesae choose a file</p>';
    }
}
