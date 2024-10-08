<?php 
// $qry = $conn->query("SELECT * FROM `daily_verses` where `display_date` = '".date('Y-m-d')."' ");
// if($qry->num_rows>0){
//     foreach($qry->fetch_array() as $k => $v){
//         if(!is_numeric($k))
//             $dv[$k] = $v;
//     }
// }
?>
<style type="text/css">
    	body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>

<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
       <div class="col-12">
        
       <hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
<div class="card-header">Profile Picture</div>
<div class="card-body text-center">

<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt>

<div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

<button class="btn btn-primary" type="button">Upload new image</button>
</div>
</div>
</div>
<div class="col-xl-8">

<div class="card mb-4">
<div class="card-header">Account Details</div>
<div class="card-body">
<form>

<div class="mb-3">
<label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
<input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
</div>

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputFirstName">First name</label>
<input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputLastName">Last name</label>
<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
</div>
</div>

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputOrgName">Organization name</label>
<input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputLocation">Location</label>
<input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
</div>
</div>

<div class="mb-3">
<label class="small mb-1" for="inputEmailAddress">Email address</label>
<input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
</div>

<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputPhone">Phone number</label>
<input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
</div>

<div class="col-md-6">
<label class="small mb-1" for="inputBirthday">Birthday</label>
<input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
</div>
</div>

<button class="btn btn-primary" type="button">Save changes</button>
</form>
</div>
</div>
</div>
</div>

       </div>
    </div>
</section>
