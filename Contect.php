  <?php
include 'MENU.php';
include 'connection.php';

if(isset($_REQUEST['editId'])){
  $editId=$_REQUEST['editId'];
  $select="select * from contact where id=$editId";
  $selectexc=mysqli_query($conn,$select);
  $selectRow=mysqli_fetch_assoc($selectexc);
}

?>



<title>BOOTSTRAP</title>
	<style>
		body{
			background-image: url("https://img.freepik.com/free-vector/blue-abstract-gradient-wave-vector-background_53876-111548.jpg?w=2000");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
		}

		.form-control{
			border: 1px solid #f70000 !important;
		}
		.form-select{
			border: 1px solid #f70000 !important;
		}
		
	</style>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
</head>
<body>
	<div><h1 style="text-align:center;color: black " class="mt-4"> CONTACT</h1></div>
	<div class="row">
		<div class="col">
	<section class="container-lg">
	<form action="contactdis.php" method="POST">
    <input type="hidden" name="id" value="<?php if(isset($_REQUEST['editId'])){ echo $selectRow['id'];}else{echo "";} ?>"/>

		<div class="mt-4">
    <label for="exampleInputEmail1" class="form-label">Name</label>

    
    <div class="row">
  <div class="col">
    
    <input type="text" name="First_Name" class="form-control" placeholder="First name" value="<?php if(isset($_REQUEST['editId'])){ echo $selectRow['First_Name'];}else{echo "";} ?>"/>
  </div>
  <div class="col">
    
    <input type="text" name="Last_Name" class="form-control" placeholder="Last name" value="<?php if(isset($_REQUEST['editId'])){ echo $selectRow['Last_Name'];}else{echo "";} ?>"/>
  </div>
</div>
  <div class="mt-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" value="<?php if(isset($_REQUEST['editId'])){ echo $selectRow['Email'];}else{echo "";} ?>"/>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
 
    <div class="mt-4">
    	<label for="inputPassword5" class="form-label">Password</label>
<input type="password" name="Password" id="inputPassword5" class="form-control" value="<?php if(isset($_REQUEST['editId'])){ echo $selectRow['Password'];}else{echo "";} ?>"/>
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
   
   <div class="mt-4">
      <label for="inputPassword5" class="form-label">Select Country</label>
      <select id="disabledSelect" name="Country"class="form-select">       
        <option value="">Select</option>
        <option value="INDIA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="INDIA")){ echo 'selected="selected"';} ?> >INDIA</option>
        <option value="CANADA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="CANADA")) { echo 'selected="selected"'; }?>>CANADA</option>
        <option value="USA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="USA") ){ echo 'selected="selected"';} ?>>USA</option>
        <option value="UK" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="UK")) { echo 'selected="selected"';} ?>>UK</option>
        <option value="NEW YORK" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="NEW YORK")) { echo 'selected="selected"';} ?>>NEW YORK</option>
        <option value="UGANDA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="UGANDA")) { echo 'selected="selected"'; }?>>UGANDA</option>
        <option value="WEST INDIES" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="WEST INDIES")){ echo 'selected="selected"'; }?>>WEST INDIES</option>
        <option value="ZIMBABWE" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="ZIMBABWE")) { echo 'selected="selected"'; }?>>ZIMBABWE</option>
        <option value="CHINA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="CHINA")){ echo 'selected="selected"'; }?>>CHINA</option>
        <option value="KOREA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="KOREA")){ echo 'selected="selected"'; }?>>KOREA</option>
        <option value="RUSSIA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="RUSSIA")){ echo 'selected="selected"'; }?>>RUSSIA</option>
        <option value="PAKISTAN" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="PAKISTAN")){ echo 'selected="selected"'; }?>>PAKISTAN</option>
        <option value="NAGALAND" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="NAGALAND")) { echo 'selected="selected"';} ?>>NAGALAND</option>
        <option value="ZAMBIA" <?php if(isset($_REQUEST['editId']) && ($selectRow['Country']=="ZAMBIA")) { echo 'selected="selected"'; }?>>ZAMBIA</option>
        <option value="AFGHANISTAN" <?php if (isset($_REQUEST['editId']) && ($selectRow['Country']=="AFGHANISTAN")){ echo 'selected="selected"'; }?>>AFGHANISTAN</option>
        

      </select></div>

       

      



  
  <div class="mt-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div>
      <?php if(isset($_REQUEST['editId'])){?>
  <div class="mt-5" style="text-align: right;"><button type="submit" name="update" class="btn btn-outline-dark">Update</button></div>
      <?php } else { ?>
  <div class="mt-5" style="text-align: right;"><button type="submit" name="save" class="btn btn-outline-dark">SUBMIT</button></div>
      <?php } ?>

</div>
  
  
</form>
</section>
</div>


<div class="col">
 
	

	<section class="mt-5">
	<div id="carouselExampleFade" class=" carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://m.media-amazon.com/images/G/31/img21/Wireless/katariy/Apple/2022/i14/Aplus_14pro/iPhone_14_Pro_Product_Page_Flex_Module_Avail_Amazon_Desktop__en-IN_01._CB609619398_.jpg" class="d-block" width="95%" height="400px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://c8.alamy.com/zooms/9/1f53963cc4e248fb9bca1b81d064b262/2h2j7wg.jpg" class="d-block" width="95%" height="400px"  alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="https://sm.mashable.com/t/mashable_in/photo/default/a5c6c357-d324-4679-b469-00f93f441921_yk21.1248.jpg" class="d-block" width="95%" height="400px"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button></div></section>
	


	<div class="mt-2"><img src="https://www.apple.com/newsroom/images/product/apps/standard/Apple_Maps_01302020_LP_hero.jpg.og.jpg" width="95%" height="15%"></div>
	


</div>


</div>
<!-- row end -->
<div class="mt-5"><center><img src="https://www.freepnglogos.com/uploads/thank-you-png/thank-you-png-you-completed-your-skills-review-myskills-11.png" width="30%" width="30%"></center></div>



<center><a class="btn top-btn" href="#navbar"> <img class="topbtnimg" src="https://uxwing.com/wp-content/themes/uxwing/download/arrow-direction/double-arrow-top-icon.png" width="10%" height="10%"> </a></center>



<?php
include 'FOOTER.php';
?>