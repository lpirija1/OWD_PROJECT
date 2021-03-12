
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Select options Checkbox</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>

  
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}


body{
    background-color:#5F9EA0
}

.wrapper {
  width: 780px;
  margin: 100px auto 0;
}

.wrapper .title {
  font-size: 24px;
  color: #fff;
  font-weight: 700;
  text-align: center;
  margin-bottom: 50px;
}

.container {
  display: flex;
  flex-wrap: wrap;
}

.container .option_item {
  display: block;
  position: relative;
  width: 175px;
  height: 175px;
  margin: 10px;
}

.container .option_item .checkbox {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  opacity: 0;
}

.option_item .option_inner {
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 5px;
 
  text-align: center;
  padding: 58px 40px;
  cursor: pointer;
  color: #585c68;
  display: block;
  border: 5px solid transparent;
  position: relative;
  border-width: 5px;
  border-color: ;
}

.option_item .option_inner .icon {
  margin-bottom: 10px;
}

.option_item .option_inner .icon .fab {
  font-size: 32px;
}

.option_item .option_inner .name {
  user-select: none;
}

.option_item .checkbox:checked ~ .option_inner.facebook {
  border-color: #3b5999;
  color: #3b5999;
}

.option_item .checkbox:checked ~ .option_inner.twitter {
  border-color: #55acee;
  color: #55acee;
}

.option_item .checkbox:checked ~ .option_inner.instagram {
  border-color: #e4405f;
  color: #e4405f;
}

.option_item .checkbox:checked ~ .option_inner.linkedin {
  border-color: #0077b5;
  color: #0077b5;
}

.option_item .checkbox:checked ~ .option_inner.whatsapp {
  border-color: #25d366;
  color: #25d366;
}

.option_item .checkbox:checked ~ .option_inner.google {
  border-color: #dd4b39;
  color: #dd4b39;
}

.option_item .checkbox:checked ~ .option_inner.reddit {
  border-color: #ff5700;
  color: #ff5700;
}

.option_item .checkbox:checked ~ .option_inner.quora {
  border-color: #b92b27;
  color: #b92b27;
}

.option_item .option_inner .tickmark {
  position: absolute;
  top: -1px;
  left: -1px;
  border: 20px solid;
  border-color: #000 transparent transparent #000;
  display: none;
}

.option_item .option_inner .tickmark:before {
  content: "";
  position: absolute;
  top: -18px;
  left: -18px;
  width: 15px;
  height: 5px;
  border: 3px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
}

.option_item .checkbox:checked ~ .option_inner .tickmark {
  display: block;
}

.option_item .option_inner.facebook .tickmark {
  border-color: #3b5999 transparent transparent #3b5999;
}

.option_item .option_inner.twitter .tickmark {
  border-color: #55acee transparent transparent #55acee;
}

.option_item .option_inner.instagram .tickmark {
  border-color: #e4405f transparent transparent #e4405f;
}

.option_item .option_inner.linkedin .tickmark {
  border-color: #0077b5 transparent transparent #0077b5;
}

.option_item .option_inner.whatsapp .tickmark {
  border-color: #25d366 transparent transparent #25d366;
}

.option_item .option_inner.google .tickmark {
  border-color: #dd4b39 transparent transparent #dd4b39;
}

.option_item .option_inner.reddit .tickmark {
  border-color: #ff5700 transparent transparent #ff5700;
}

.option_item .option_inner.quora .tickmark {
  border-color: #b92b27 transparent transparent #b92b27;
}

.form-group{
  width: 770px;
  margin: 10px auto 0;
}

.form-group #formGroupExampleInput{
  font-size: 22px;
  text-align: left;
  margin-top: 10px;
  margin-bottom: 20px;
}

.form-group #inputEmail3{
  font-size: 22px;
  text-align: left;
  margin-top: 10px;
  margin-bottom: 20px;
}

.form-group #inputPassword3{
  font-size: 22px;
  text-align: left;
  margin-top: 10px;
  margin-bottom: 20px;
}

.form-group .btn-primary{
  font-size: 24px;
  background-color: #fbbf24; /*#f87171; #fbbf24; #312e81;*/
  color: black; /*#34d399;*/
  border: none;             
  border-radius: 5px;
  margin-top: 10px;
  margin-bottom: 20px;
}

    </style>
</head>
<body>

<div class="wrapper">

  <div >
    <h1 class="display-4">Izaberite predmet</h1>
    <br>
    <div class="mx-auto" style="width: 300px;">
  	<input type="checkbox" id="osnovna" name="Osnovna" value="Osnovna">
    <label for="vehicle1" class="mb-0" > Osnovna</label>
    <input type="checkbox" id="srednja" name="Srednja" value="Srednja">
    <label for="vehicle2" class="mb-0"> Srednja</label>
    <input type="checkbox" id="fakultet" name="Fakultet" value="Fakultet">
    <label for="vehicle3" class="mb-0"> Fakultet</label>
  </div>
  
</div>
<br>


  <div class="container">
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner facebook">
        <div class="tickmark"></div>
        <div class="name">Matematika</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner twitter">
        <div class="tickmark"></div>
        <div class="name">Fizika</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner instagram">
        <div class="tickmark"></div>
        <div class="name">C programski jezik</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox" >
      <div class="option_inner linkedin">
        <div class="tickmark"></div>
        <div class="name">Java programski jezik</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox" >
      <div class="option_inner whatsapp">
        <div class="tickmark"></div>
        <div class="name">Engleski jezik</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner google">
        <div class="tickmark"></div>
        <div class="name">Osnove elektrotehnike</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox" >
      <div class="option_inner reddit">
        <div class="tickmark"></div>
        <div class="name">C++ programski jezik</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner quora">
      <div class="tickmark"></div>
        <div class="name">Hemija</div>
      </div>
    </label>
  </div>

</div>

<form>
  <div class="form-group">
    <label for="formGroupExampleInput" class="form-label">Ime i prezime</label>
    <div>
    <input type="text" class="text" id="formGroupExampleInput" placeholder="Example input">
    </div>
    
    <label for="inputEmail3" class="form-label"> Email </label>
    <div class="col-sm-10">
      <input type="email" class="email" id="inputEmail3" placeholder="Email">
    </div>
    
    <label for="inputPassword3" class="form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="password" id="inputPassword3" placeholder="Password">
    </div>
    
    <div class="col-sm-10">
      <button type="submit" class="btn-primary">Registriruj se</button>
    </div>
  </div>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
</body>



</html>

