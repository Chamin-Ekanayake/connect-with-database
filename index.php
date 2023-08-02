<html>
    <link rel="stylesheet" href="assest/css/styles.css">
    <!-- <script src="assest/js/main.js"> </script> -->
   
    <head>
        <title>
        ABC University.com
        </title>
    </head>

    <body>

    <center> <h1> Welcome to ABC University </h1> </center>
    <center> <h2>  Registration Form </h2> </center>
   
    <form action="Data.php" method="post">

<table align="center" cellpadding-="10">

<tr>
    <td> First_Name :- </td>
     <td> <input type=" text" name="First_Name" maxlength="50" placeholder="Enter Your First Name"> (Max 50 Characters only) </td>
</tr>

<tr>
<td> Last_Name :- </td>
<td> <input type=" text" name="Last_Name" maxlength="50" placeholder="Enter Your Last Name"> (Max 50 Characters only) </td>
</tr>

<tr>
    <td> ID_Number :- </td>
    <td> <input type=" text" name="ID_Number" maxlength="10" placeholder="Enter Your ID Number"> (Max 10 Characters only) </td>
    </tr>

    <tr>
        <td> Email :- </td>
        <td> <input type=" email" name="Email"  placeholder="Enter Your Email">  </td>
        </tr>

        <tr>
            <td> Telephone_Number :- </td>
            <td> <input type=" text" name="Telephone_Number"  placeholder="Enter Your Telephone Number">  </td>
            </tr>

            <tr>
                <td> Gender :- </td>
                <td> <input type="radio" name="Gender" value="Male"> Male <input type="radio" name="Gender" value="Female"> Female </td> 
                </tr>

                <tr>
                    <td> Addrese :- </td>
                    <td><Textarea name="Addrese" rows="10" cols="50"></Textarea></td>
                </tr>

                <tr>
                    <td colspan="2" align="center"> 
                        <input type="submit" value="Submit">
                        <input type="submit" value="Reset">
                    </td>
                </tr>

</table> 
</form>

 



        
       
</html>