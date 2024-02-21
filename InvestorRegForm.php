<!DOCTYPE html>
<head></head>
<style>
.container {
  position: relative;
  width: 50%;
  margin:0 auto;
  padding:0px;
  text-align: center;
  font-family: Arial;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<body>
<form action="InvesterReg.php" method="post">


    <div class="container">
    
    <h1>Welcome Investors to our website</h1>
    
    <p>Enter the values respectively</p>
    
    
    <label for="name"><b>Enter Name</b></label>
    <input type="text" name="name" required />
    <br/>
    <label for="Mobile Numer"><b>Mobile Number</b></label>
    <input type="text" name="mobno" required />
    <br />
    <label for="businessemail"><b>Business Email</b></label>
    <input type="text" name="be" required />
    <br/>
    <label for="typeofinvestment"><b>Type Of Invester</b></label>
    <input type="text" name="toi" required />
    <br />
    <label for="investedamt"><b>Invested Amout</b></label>
    <input type="text" name="ia" required />
    <br />
    <label for="Project"><b>Project Invested</b></label>
    <input type="text" name="pro" required />
    <br/> 
    <label for="ProjectOwner"><b>Project Owner</b></label>
    <input type="text" name="prown" required />
    <label for="Password"><b>Password</b></label>
    <input type="text" name="password" required />
    <input type="submit" name="Submit" value="Register" onclick="ilogin.php">
    
    
    
    
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    </form>
    
    
    
    </div>

</body>

 </html>   