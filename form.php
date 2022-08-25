<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    
<!-- <?php 
if(isset($_POST['submit']))
{
    $result=$_POST;
}
?> -->
    <main>
    <section class="container">
        <h1>LOGIN FORM</h1>
        <section class="form_section">
    <form action="" method="POST">
<label class="txt">FIRST NAME</label>
<input type="text" name="fname">
<label  class="txt">LAST NAME</label>
<input type="text" name="lname">
<label class="txt">EMAIL</label>
<input type="email" name="email">
<label class="txt">GENDER</label>
<input type="radio" name="gender" value="MALE">MALE
<input type="radio" name="gender" value="FEMALE">FEMALE
<label class="txt">PASSWORD</label>
<input type="password" name="pwd">
<label class="txt">ADDRESS</label>
<textarea name="address"></textarea>
<label class="txt">SELECT COUNTRY</label>
<select name="country[]" class="select_tag" multiple size="3">
    <option>INDIA</option>
    <OPTION>USA</OPTION>
    <OPTION>CANADA</OPTION>
</select><br>
<input type="checkbox" name="hobby[]" value="SINGING" >SINGING
<input type="checkbox" name="hobby[]" value="DANCING">DANCING
<input type="submit" value="SUBMIT" name="submit" class="submit_btn">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $result=$_POST;
    }
if(count($result)>0)
{
?>

<ul>
<li>FIRST NAME <?php echo $result['fname']?$result['fname']:"N/A"; ?></li>
<li>LAST NAME <?php echo $result['lname']?$result['lname']:"N/A"; ?></li>
<li>COUNTRY <?php echo isset($result['country'])?implode(",",$result['country']):"N/A"; ?></li>
<li>GENDER <?php echo isset($result['gender'])?$result['gender']:"N/A"; ?></li>
<li>ADDRESS <?php echo $result['address']?$result['address']:"N/A"; ?></li>
<li>EMAIL <?php echo $result['email']?$result['email']:"N/A"; ?></li>
<li>HOBBIES <?php echo isset($result['hobby'])?implode(",",$result['hobby']):"N/A"; ?></li>
</ul>

<?php
}
?>

    </section>
    </section>
</main>
</body>
</html>
