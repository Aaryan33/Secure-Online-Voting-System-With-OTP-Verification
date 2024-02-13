<html>
    <head>
        <title>Secure Online Voting System - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <style>
            *
            {
                font-size:18px;
            }
            #headerSection h1
            {
                font-size:1.8em;
                color: blue;
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
            /* color:#3498db; */
            color: white;
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
           .upload> label
           {
            font-size:22px !important;
           }
           #loginbtn
           {
            display:block;
            float:left;
            margin:0px 200px !important;
            width:30%;
            
            border-color:transparent;
            border-radius:20px;
           }
           body {
            background-image: url("https://img.freepik.com/free-vector/tri-color-indian-flag-with-voting-hand_1017-17717.jpg?size=626&ext=jpg&ga=GA1.1.2020631148.1689317409&semt=ais");
            background-size: cover;
            }

        </style>
    <body>
        <center>
            <div id="headerSection">
            <h1>Secure Online Voting System</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Registration Page</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp;
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="email" name="email" placeholder="Email" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp;
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input  type="text" name="add" placeholder="Address" required><br><br>
                    <div class="upload" >
                       <h4> Upload image: </h4>
                       <input type="file" id="profile" placeholder="Upload Image" name="image" required>
                    </div><br>
                    <div class="upload" >
                      <h4 class="tnsf">  Select your role:</h4>
                      
                         <select name="role">
                            <option value="1" style="color:black;" >Voter</option>
                            <option value="2" style="color:black;">Party</option>
                        </select> 
                        <!--
                        <input type="radio" name="role" value="Voter" class="short"> <label for="role"> Voter</label>
                        <input type="radio" name="role" value="Voter" class="short"> <label for="role"> Party</label>
                          -->
                                         
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    <h3><b>Already user?</b> <a href="../"><b>Login here</b></a></h3>
                </form>
            </div>
            </center>
    </body>
</html>