<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $no = $_POST['no'];
    $materi=$_POST['materi'];
    $jam_mulai=$_POST['jam_mulai'];
    $jam_selesai=$_POST['jam_selesai'];

    // update user data
    $result = mysqli_query($no, "UPDATE rundown SET materi='$materi',jam_mulai='$jam_mulai',jam_selesai='$jam_selesai' WHERE no=$no");

    // Redirect to homepage to display updated user in list
    header("Location: inputadmin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$no = $_GET['no'];

// Fetech user data based on id
$result = mysqli_query ($conn,"SELECT * FROM rundown WHERE no = $no");

while($data = mysqli_fetch_array($result))
{
    $materi = $data['materi'];
    $jam_mulai = $data['jam_mulai'];
    $jam_selesai = $data['jam_selesai'];
}
?>
<html>
<head>  
    <title>Edit Rundown</title>
</head>

<body>
    

    <form name="update_user" method="post" action="update.php">
        <table border="0">
            <tr> 
                <td>Materi</td>
                <td><input type="text" name="materi" value=<?php echo $materi;?>></td>
            </tr>
            <tr> 
                <td>Jam Mulai</td>
                <td><input type="text" name="jam_mulai" value=<?php echo $jam_mulai;?>></td>
            </tr>
            <tr> 
                <td>Jam Selesai</td>
                <td><input type="text" name="jam_selesai" value=<?php echo $jam_selesai;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="no" value=<?php echo $_GET['no'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>