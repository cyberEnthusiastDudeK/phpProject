<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:400,500,600,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }
        html, body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image:url("bg3.jpg");
            background-repeat:no-repeat;
            background-position: center;
            background-size: cover;
            font-family: 'Lato', sans-serif;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .button-group {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }
        form h1{
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
        }
        .button-group button {
            margin: 10px;
            font-size: 24px;
            padding: 10px 20px;
            background-color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button-group button:focus {
            outline: none;
        }
        .button-group button:hover {
            background-color: #d9d9d9;
        }
        .button-group button:checked {
            background-color: #0069d9;
            color: white;
        }
    </style>
</head>
<body>
<h1>Pick Which User to Register As :</h1>
    <div class="wrapper">
        <form action="PitcherRegistrationform.php" target="_blank" method="post">      
            
        <div class="button-group">
         
        <label for="pbutton"><b><button>Pitcher</button></b></label>
        <input type="submit" name="opnpitcher" value="Pitcher" style="display: none;" onclick="PitcherReg.php">

       </form>
        
       <form action="InvestorRegForm.php" target="_blank" method="post">
        <label for="ibutton"><b><button>Invester</button></b></label>        
        <input type="submit" name="opninvester" value="Investor" style="display: none;"onclick="InvestorRegForm.php">
        
        </form>
        </div>
    </div>
</body>
</html>
