<!-- header -->
    <?php include("layout/header.php"); ?>
<!-- header is here -->
 </head>
  <body>
    <!-- navbar -->
    <?php include("layout/navbar.php"); ?>
    <!-- navbar is here -->
                <div class="container">
                    <div class="card">
                        <div class="card-header" style="background-color:teal;">
                            <strong style="color:white;">Update staff</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="post" action="stfupdate">
                                    <input type="hidden" class="form-control" name="id" value="<?php if(isset($member)){ foreach($member as $val){ echo $val['id']; } } ?>" required>
                                    <div class="form-group">
                                        <label for="username">username:</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($member)){ foreach($member as $val){ echo $val['username']; } } ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" class="form-control" name="email" value="<?php if(isset($member)){ foreach($member as $val){ echo $val['email']; } } ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" id="password" class="form-control" name="password" value="<?php if(isset($member)){ foreach($member as $val){ echo $val['password']; } } ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" id="address" class="form-control" name="address" value="<?php if(isset($member)){ foreach($member as $val){ echo $val['address']; } } ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Complaint</label>
                                        <select name="cpnt_asgn" class="form-control">
                                        <?php if(isset($complaint)){
                                                foreach($complaint as $val){
                                                    if($val['status']==2){

                                                    }else{ ?>
                                                <option value="<?php echo $val['id'];?>"><?php echo $val['id'];?></option>
                                                <?php }
                                                }
                                            }?>
                                        </select>
                                    </div>

                                    <div><button type="submit" class="btn btn-primary">Done</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- footer -->
    <?php include("layout/footer.php"); ?>
<!-- footer is here -->