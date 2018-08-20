<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<style>
h1 {
    font-size: 40px;
    font-weight: bold;
    font-family : "Courier New", Courier, monospace ;
}

</style>

<body style="background-color:powderblue;">
  <br>
  <br>
  <br>
  <br>
  <div style="background-color:pink;height:150px; text-align:center;">
    <br>
    <div style="margin-left:15px">
          <h1> Register
          </h1>
        </select></div>
</div>
<br>
<center>
<div class="container">
    <h2>Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="text" name="first_name" placeholder="FIRST NAME" required="">
            <br>
            <input type="text" name="last_name" placeholder="LAST NAME" required="">
            <br>
            <input type="email" name="email" placeholder="EMAIL" required="">
            <br>
            <input type="text" name="phone" placeholder="PHONE NUMBER" required="">
            <br>
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <br>
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            <br>
            <div class="send-button">
              <button class="button button1">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">

            </div>
        </form>
    </div>
</div>
</center>
<head>
  <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
