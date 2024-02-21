<!DOCTYPE html>
<head></head>

<style type="text/css">


body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f0f0f0;
    margin: 0 auto;
    padding: 0;
    width: 400px;
    font-size: 14px;
}

.container {
    text-align: center;
    background-color: #f1f1f1;
    padding: 20px;
    margin: 0 auto;
    width: 400px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 25px;
    text-align: center;
    margin: 10px 0;
    font-weight: bold;
}

label {
    font-size: 14px;
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

input[type="text"],
input[type="password"] {
    width: 300px;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    border-radius: 3px;
}

input[type="submit"] {
    padding: 10px;
    font-size: 14px;
    background-color: #4CAF50;
    border: 0;
    color: #fff;
    margin-top: 20px;
    cursor: pointer;
    border-radius: 3px;
}






















</style>

<body>
<form action="PitcherReg.php" method="post">


    <div class="container">
    
    <h1>Welcome Pitchers !</h1>
    
    <p>Enter the values respectively</p>
    
    <label for="firstname"><b>First Name</b></label>
    <input type="text" name="firstname" required />
    <br/>
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" name="lastname" required />
    <br />
    <label for="email"><b>Email</b></label>
    <input type="text" name="email" required />
    <br/>
    <label for="password"><b>Password</b></label>
    <input type="password" name="password" required />
    <br />
    <label for="phone"><b></b>Mobile Number</label>
    <input type="text" name="phoneno" required />
    <br />
    <br/> 
    <input type="submit" name="Submit" value="Register" onclick="pdashboard.php">
    
    
    
    
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    </form>
    
    
    
    </div>

</body>

 </html>   