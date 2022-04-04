<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="index.css">
    
 

</head>

<body>

    <?php
include "validation.php";
 
 ?>

    <div class="form flex1">
        <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>"   method="post">

            <span>* Field Required </span>

            <h1>Basic Details</h1>

            <label for="">User Name :</label> <br>
            <input type="text" placeholder="User_Name..." name="userName" value="<?php echo $userName;?>" class="input"> <span>*
                <?php echo $userNameErr; ?>
            </span><br>


            <label for="">Password :</label><br>
            <input type="password" placeholder="Password..." name="password" class="input"> <span>*
                <?php echo $passwordErr; ?>
            </span><br>

            <label for="">Confirm Password :</label><br>
            <input type="password" placeholder="Confirm_Password..." name="cPassword" class="input"> <span>*
                <?php echo $cPasswordErr; ?>
            </span><br>

            <label for="">Preffered Language:</label><br>
            <select name="language" id="select" class="input">
                <option value="" disabled selected>----select_language</option>
                <option value="English">English</option>
                <option value="Hindi">Hindi</option>
                <option value="Gujarati">Gujarati</option>
            </select> <span>*
                <?php echo $languageErr; ?>
            </span><br>






            <h1>Personal Details</h1>

            <label for="">First Name :</label><br>
            <input type="text" placeholder="First_Name..." name="firstName" class="input"> <span>*
                <?php echo $fNameErr; ?>
            </span><br>

            <label for="">Middle Name :</label><br>
            <input type="text" placeholder="Middel_Name(Optional)" name="middleName" class="input"><br>

            <label for="">Last Name :</label><br>
            <input type="text" placeholder="Last_Name(Optional)..." name="lastName" class="input"><br>
            <!-- onfocus="(this.type='date')" onfocusout="(this.type='text')"  -->
            <label for="">Date Of Birth :</label><br>
            <input type="date" id="" name="dob" placeholder="Date Of Birth" class="input"> <span>*
                <?php echo $dobErr; ?>
            </span><br>

            

    </div>
     
    <div class="form flex2">

    <label for="">Marital Status :</label><br>
            Married<input type="radio" name="m">
            Unmarried<input type="radio" name="m"> <span>*
                <?php echo $MUErr; ?>
            </span> <br>

            <label for="">Gender :</label><br>
            Male<input type="radio" name="g" id="">
            Female<input type="radio" name="g" id=""> <span>*
                <?php echo $genderErr; ?>
            </span><br>

        <select name="cn" id=""><br>
            <option value="" disabled selected>-----select country/nationality</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="USA">USA</option>
            <option value="Korea">Korea</option>
        </select><span>*
            <?php echo $countryErr; ?>
        </span><br>

        <select name="occupation" id=""><br>
            <option value="" disabled selected>-----select Occupation</option>
            <option value="GOVERMENT">GOVERMENT</option>
            <option value="PUBLIC">PUBLIC</option>
            <option value="PRIVATE">PRIVATE</option>
            <option value="PROFESSIONAL">PROFESSIONAL</option>
            <option value="SELF EMPLOYED">SELF EMPLOYED</option>
            <option value="STUDENT">STUDENT</option>
            <option value="OTHER">OTHER</option>
        </select><span>*
            <?php echo $occupationErr; ?>
        </span><br>

        <label for="">Mobile Number :</label> <br>
        +91<input type="number" name="mn"> <span>*
            <?php echo $mobileNoErr; ?>
        </span> <br>

        <label for="">Email :</label><br>
        <input type="text" name="email" class="input"> <span>*
            <?php echo $emailErr; ?>
        </span><br>






        <h1>Addresss</h1>

        <input type="text" name="fdb" placeholder="Flat/Door/Block No." class="input"> <span>*
            <?php echo $fdbErr; ?>
        </span><br>
        <input type="text" name="sl" placeholder="Street/Lane (Optional)" class="input"><br>
        <input type="text" name="al" placeholder="Area/Locality (Optional)" class="input"><br>
        <input type="text" name="pincode" id="pincode" onkeyup="state_district()" placeholder="Pin Code" class="input"> <span>*
            <?php echo $pincodeErr; ?>
        </span><br>
        <input type="text" name="city" id="city" placeholder="City" class="input"> <span>*
            <?php echo $cityErr; ?>
        </span><br>
        <input type="text" name="state" id="state" placeholder="State" class="input"> <span>*
            <?php echo $stateErr; ?>
        </span><br>
        +0261<input type="number" name="pn" placeholder="Phone Number" class="input"> <span>*
            <?php echo $pnErr; ?>
        </span><br>

        <button type="submit" id="submit">Submit</button>



        </form>


    </div>


    <script src="index.js"> </script>



</body>

</html>

