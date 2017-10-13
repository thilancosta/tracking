<?php include 'partials/header.php' ?>

<script type="text/javascript">
    function validatenum(){
        var number=document.getElementById("t1").value;
        var len=number.length;
        var phcode=number.substr(0,3);
        if(number==""){
            document.getElementById("err").innerHTML="empty";
            document.getElementById("t1").style.borderColor="red";
        }

        <!--NaN = add numbers only-->
        else if(isNaN(number)){
            document.getElementById("err").innerHTML="numbers only";
            document.getElementById("t1").style.borderColor="red";
        }

        else if(number!=0 && len!=10){
            document.getElementById("err").innerHTML="number is not valid";
            document.getElementById("t1").style.borderColor="red";
        }


        // else if(phcode !=071 ||phcode !=072 ||phcode !=076 ||phcode !=077 ||phcode !=075||phcode !=078){
        //   document.getElementById("err").innerHTML="code is not valid";
        //  document.getElementById("t1").style.borderColor="red";
        // }

        else{
            document.getElementById("err").innerHTML="";
            document.getElementById("t1").style.borderColor="";
        }

    }

    function confirmPwd() {
        var pwddd = document.getElementById("pwdd").value;
        var cpwddd = document.getElementById("cpwdd").value;

        if (pwddd != cpwddd) {
            document.getElementById("confm").innerHTML = "password not matched";
            document.getElementById("cpwdd").style.borderColor = "red";
        } else  {
            document.getElementById("cpwdd").style.borderColor = "";
            document.getElementById("confm").innerHTML = "";
        }

    }


</script>


<div class="container-fluid" >

    <h2>Person Registration</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#Admin">Admin</a></li>
        <li><a href="#SalesEmployee">Sales Employee</a></li>
        <li><a href="#VehicleOwner">Vehicle Owner</a></li>
    </ul>

    <div class="tab-content">
        <div id="Admin" class="tab-pane fade in active">
            <div class="row">
                <h2>Registration for Admin</h2>
                <form action = "db/addPersonAction.php" method = "POST">
                    <div class="form-group">
                        <label for="usr">First Name</label>
                        <input type="text" class="form-control" name = "fname" required>
                    </div>

                    <div class="form-group">
                        <label for="usr">Last Name</label>
                        <input type="text" class="form-control" name = "lname" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Gender</label>
                        <select class = "form-control" name="gender">
                            <option value="Male" name="Male">Male</option>
                            <option value="Female" name = "Female">Female</option>
                            <option value="Other" name = "Other">Other</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="usr">NIC</label>
                        <input type="text" class="form-control" name = "nic" required>
                    </div>

                    <div class="form-group">
                        <label for="usr">Address</label>
                        <input type="text" class="form-control" name = "address" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Contact NO</label>
                        <input type="text" class="form-control" id = "t1" name = "contact" required onkeyup="validatenum()">
                        <span id="err" Style="color:red"></span>
                    </div>

                    <div class="form-group">
                        <label for="pwd">User Type</label>
                        <select class = "form-control" name="type">
                            <option value="Super Admin" name="superadmin">Super Admin</option>
                            <option value="Admin" name = "admin">Admin</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Manager ID</label>
                        <input type="text" class="form-control" name="managerid" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" name="password" required id = "pwdd">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Confirm Password</label>
                        <input type="password" class="form-control" required id = "cpwdd" onkeyup="confirmPwd()">
                        <span id="confm" Style="color:red"></span>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Registration Date</label>
                        <input type="date" class="form-control" name = "date" required>
                    </div>


                    </br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div id="SalesEmployee" class="tab-pane fade">
            <h2>Registration For Sales Employee</h2>
            <form action = "db/addEmployeeAction.php" method = "POST">
                <div class="form-group">
                    <label for="usr">First Name</label>
                    <input type="text" class="form-control" name="fname" required>
                </div>

                <div class="form-group">
                    <label for="usr">Last Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Gender</label>
                    <select class = "form-control" name="gender">
                        <option value="Male" name="Male">Male</option>
                        <option value="Female" name = "Female">Female</option>
                        <option value="Other" name = "Other">Other</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="usr">NIC</label>
                    <input type="text" class="form-control" name = "nic" required>
                </div>

                <div class="form-group">
                    <label for="usr">Address</label>
                    <input type="text" class="form-control" name = "address" required>
                </div>

                <div class="form-group">
                    <label for="usr">Employee ID</label>
                    <input type="text" class="form-control" name="empid" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Manager ID</label>
                    <input type="text" class="form-control" name="managerid" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Contact NO</label>
                    <input type="text" class="form-control"  name = "contact" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Registration Date</label>
                    <input type="date" class="form-control" name = "date" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Vehicle No</label>
                    <input type="text" class="form-control" name = "vehicleno" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Availablity</label>
                    <select class = "form-control" name="availability">
                        <option value="Engaged" name="Engaged">Engaged</option>
                        <option value="Available" name = "Available">Available</option required>

                    </select>
                </div>

                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div id="VehicleOwner" class="tab-pane fade">
            <h2>Registration for Vehicle Owner</h2>
            <form action = "db/addVehicleownerAction.php" method = "POST">
                <div class="form-group">
                    <label for="usr">First Name</label>
                    <input type="text" class="form-control" name="fname" required>
                </div>

                <div class="form-group">
                    <label for="usr">Last Name</label>
                    <input type="text" class="form-control" name="lname" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Gender</label>
                    <select class = "form-control" name="gender">
                        <option value="Male" name="Male">Male</option>
                        <option value="Female" name = "Female">Female</option>
                        <option value="Other" name = "Other">Other</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="usr">NIC</label>
                    <input type="text" class="form-control" name = "nic" required>
                </div>

                <div class="form-group">
                    <label for="usr">Address</label>
                    <input type="text" class="form-control" name = "address" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Vehicle Owner ID</label>
                    <input type="text" class="form-control" name="ownerid" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Contact NO</label>
                    <input type="text" class="form-control" name = "contact" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Registration Date</label>
                    <input type="date" class="form-control" name = "date" required>
                </div>

                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>

<script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });
</script>


<?php include 'partials/footer.php' ?>