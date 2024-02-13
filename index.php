<html>
    <head>
        <title>Secure Online Voting System - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <style>
           *
            {
                font-size:18px;
            }
            #headerSection h1
            {
                font-size:1.8em;
                color:#FFFFFF;
            }
           #loginSection
           {
            background: #0008;
            display: block;
            width: 40%;
            margin-top: 50px;
           } 
           #loginSection  h2
           {
                font-size:34px;
           }
           #loginSection  input,.upload
           {
            width:80%;
            margin: 5 10%;
           }
           
           #newUser
           {
            font-size:30px;
           }
           @media (max-width:500px)
           {
            #loginSection
            {
                width:90%;
            }
           }
           .upload h4
           {
            font-size:22px;
             display:inline;
             float:left;
             transform: translateY(-12px);
           }
           .upload > *
           {
            color:white;
           }
           .tnsf
           {
            /* transform:translateY(-32px) !important;  */
            display:inline;
            float:left;
            /* background:red; */
           }
           select
           {
            width:45%;
            /* background:red; */
           }
           .upload input
           {
            display:inline;
            width:10px;
            background:white;
            max-width:50%;
           }
           .short
           {
            margin:5px !important;
            width: 10px !important;
            
           }
           a:visited
           {
            color: #FFFFFF;
           }
           .tnsf
           {
            /* transform:translateY(-32px) !important;  */
           }
           .upload> label
           {
            font-size:22px !important;
           }
           #loginbtn
           {
            display:block;
            margin:0px auto;
            width:30%;
            
            border-color:transparent;
            border-radius:20px;
           }
       
        </style>
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>Secure Online Voting System</h1>  
            </div>
            <hr>
           
           <!-- <img src="/Images/water.jpg" alt="Backgr" width="500" height="600"> --> 

            <div id="loginSection">
                <h2>Login Page</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <div class="upload" >
                      <h4 class="tnsf">  Select your role:</h4>
                      
                        <select name="role">
                            <option value="1" style="color:black;">Voter</option>
                            <option value="2" style="color:black;">Party</option>
                        </select> 
                       <!-- <input type="radio" name="role" value="Voter" class="short"> <label for="role"> Voter</label>
                        <input type="radio" name="role" value="Voter" class="short"> <label for="role"> Party</label> -->
                                         
                    </div><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                   <h2 > <b>New user? &nbsp; </b><a href="routes/register.php"><b>Register here</b></a></h2>
                </form>
            </div>
         </center> 
    </body>
</html>