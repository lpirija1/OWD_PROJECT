
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pregled predmeta</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
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
    /*background-color: #60a5fa;*/
    background-color: #3b82f6; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #3b82f6, #34d399);
}

.container .display-4 {
  font-size: 40px;
  color: #000000;
  font-weight: 700;
  text-align: left;
  margin-top: 50px;
  margin-bottom: 50px;
}

.container .text {
  font-size: 24px;
  color: #000000;
  font-weight: 700;
  text-align: left;
}

.container .selectpicker{
  font-size: 22px;
  color: #000000;
  background-color: #fcd34d;
  text-align: center;
  margin-bottom: 30px;
  width: 325px;
}

.container .row .Primary{
  font-size: 24px;
  color: #000000;
  font-weight: 700;
  text-align: left;
  margin: 8px;
}

.container  .row  .Secondary{
  font-size: 24px;
  color: #000000;
  font-weight: 700;
  text-align: center;
  margin: 8px;
}

.container  .row  .Fax{
  font-size: 24px;
  color: #000000;
  font-weight: 700;
  text-align: right;
  margin: 8px;
} 

.list-group .list-group-item-action{
  background-color: #fcd34d;
  color: #000000;
}

.form-group{
  margin: 10px auto 0;
}
.form-group .btn-primary{
  font-size: 22px;
  background-color: #fbbf24; /*#f87171; #fbbf24; #312e81;*/
  color: black; /*#34d399;*/
  border: none;             
  border-radius: 6px;
  margin-top: 10px;
  margin-bottom: 20px;
  padding: 12px;
}


    </style>
</head>
<body>


 <div class="container" >

  <div >
    <h1 class="display-4">Izaberite nivo obrazovanja i predmet</h1>
    <br>
  </div>   

 <div class="row">
    <div class="Primary">
      <h3 class="text">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
          <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
        </svg>
        Osnovna škola      
      </h3>
      <select class="selectpicker">  
        <br>
        <option selected>Izaberi predmet</option>
        <option value="0">Matematika</option>
        <option value="1">Fizika</option>
        <option value="2">Engleski jezik</option>
        <option value="3">Hemija</option>      
        
      </select>
    </div>

    <div class="Secondary">
      <h3 class="text">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
          <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
        </svg>
        Srednja škola
      </h3>
      <select class="selectpicker" >
        <br>
        <option selected>Izaberi predmet</option>
        <option value="0">Matematika</option>
        <option value="1">Fizika</option>
        <option value="2">Engleski jezik</option>
        <option value="3">Hemija</option>
      </select>
    </div>

    <div class="Fax">
      <h3 class="text">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
        </svg>
        Fakultet
      </h3>
      <select class="selectpicker">
        <br>
        <option selected>Izaberi predmet</option>
        <option value="0">Matematika</option>
        <option value="1">Fizika</option>
        <option value="2">Engleski jezik</option>
        <option value="3">Hemija</option>
        <option value="4">C programski jezik</option>
        <option value="5">Java programski jezik</option>
        <option value="6">Osnove elektrotehnike</option>
        <option value="7">C++ programski jezik</option>
      </select>
    </div>
  </div> 
  
</div> 
  <br>
  <div class="container">
    <div >
      <h1 class="display-4">Lista instruktora/ca za određene predmet</h1>
      <br>
    </div>   

    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Mujo Mujić</h5>
          <small>3 days ago</small>
        </div>
        <p class="mb-1">Matematika i fizika za učenike osnovnih i srednjih škola.</p>
        <small>Kontakt: mujo.mujic@proba.com.</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Suljo Suljić</h5>
          <small>4 days ago</small>
        </div>
        <p class="mb-1">Engleski jezik za učenike srednjih škola.</p>
        <small>Kontakt: suljo.suljic@proba.com</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Fata Fatić</h5>
          <small>5 days ago</small>
        </div>
        <p class="mb-1">Osnove elektrotehnike za studente Elektrotehničkog fakulteta.</p>
        <small>Kontakt: fata.fatic@proba.com.</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Habiba Habibić</h5>
          <small>5 days ago</small>
        </div>
        <p class="mb-1">C, C++ i Java programski jezici za studente Elektrotehničkog fakulteta.</p>
        <small>Kontakt: habiba.habibic@proba.com.</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Ana Anić</h5>
          <small>6 days ago</small>
        </div>
        <p class="mb-1">Hemija za učenike osnovnih i srednjih škola i studente Prirodno-matematičkog fakulteta.</p>
        <small>Kontakt: ana.anic@proba.com.</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Ramo Ramić</h5>
          <small>7 days ago</small>
        </div>
        <p class="mb-1">Engleski jezik za učenike osnovnih i srednjih škola.</p>
        <small>Kontakt: ramo.ramic@proba.com.</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Zijad Zijić</h5>
          <small>7 days ago</small>
        </div>
        <p class="mb-1">Matematika i fizika za učenike osnovnih i srednjih škola i studenate na tehničkim fakultetima.</p>
        <small>Kontakt: zijad.zijić@proba.com.</small>
      </a>

      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Selma Selmić</h5>
          <small>8 days ago</small>
        </div>
        <p class="mb-1">Osnove elektrotehnike i C, C++ prgramski jezici za studentte Elektrotehničkog fakulteta.</p>
        <small>Kontakt: selma.selmić@proba.com.</small>
      </a>

    </div>
  
  <br>
  
  <form>
    <div class="form-group">      
      <div class="col-sm-10">
        <button type="submit" class="btn-primary">Spasi</button>
      </div>
    </div>
  </form>

</div> 




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
</body>



</html>

