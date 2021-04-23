<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $subtitle = $_POST['edit_subtitle'];
    $description = $_POST['edit_description'];
    $links = $_POST['edit_links'];


    $query = "UPDATE abouts SET title='$title', subtitle='$subtitle', description='$description', links='$links' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
          
            $_SESSION['success'] = "Your Post is Updated";
            header('Location: aboutus.php');
        }
        else
        {
           
            $_SESSION['status'] = "Your Post is NOT Updated";
            header('Location: aboutus.php');
        }

}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM abouts WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
        {
        
            $_SESSION['success'] = "Your Post is Deleted";
            header('Location: aboutus.php');
        }
        else
        {
            
            $_SESSION['status'] = "Your Post is NOT Deleted";
            header('Location: aboutus.php');
        }
}





if(isset($_POST['about_save']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $links = $_POST['links'];

    $query = "INSERT INTO abouts (title,subtitle,description,links) VALUES ('$title','$subtitle','$description','$links')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Abouts Us Added";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status'] = "Abouts Us NOT Added";
        header('Location: aboutus.php');
    }


}



