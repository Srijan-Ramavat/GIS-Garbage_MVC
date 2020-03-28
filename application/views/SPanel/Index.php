<?php
 include("layout/header.php");
?>
</head>
<body>
<?php
 include("layout/navbar.php");
?>
<div class="container">
    <?php if($staff){
     foreach($staff as $val){ $i=0;?>
    <div class="jumbotron">
        <center><h1>Complaint No. <?php echo $val['id'];?></h1>
        <form action="staff/uploadStaffFile" method="post" enctype='multipart/form-data'>
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $val['id'];?>">
            </div>
            <h4>Address : <?php echo $val['address'];?></h4>
            <div class="form-group">
            <label for="image">Select Image</label>
            <input type="file" name="image" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        </center>
    </div>
    <?php $i++; }
    if($i ==0){?>
        <div class="jumbotron">
            <center><h1>No Complaint Assigned</h1>
            </center>
        </div>
    <?php }
    }else{ ?>
        <div class="jumbotron">
            <center><h1>No Complaint Assigned</h1>
            </center>
        </div>
    <?php }?>
</div>
<?php
 include("layout/footer.php");
?>