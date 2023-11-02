<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/190a51af0f.js" crossorigin="anonymous"></script>

    <style>
.card {
    width: 798px;
    height: 400px;
    padding: 30px 90px 90px 90px;
    border: 6px solid rgba(0, 0, 0, 0.3);
    box-shadow: 20px 20px 0 rgba(0, 0, 0, 0.3);
    border-radius: 50px;
    position: relative;
    margin: 0 auto;
    margin-top: 0.5em;
}


.card h2 {
  color: rgba(0, 0, 0, 0.3);
  font-size: 30px;
  margin-top: -5.3rem;
    margin-bottom: 7rem;
  text-transform: uppercase;
}

.card .row {
  position: relative;
  right: 45%;
  top: -25%;
  width: 100%;
  display: grid;
  grid: auto / auto auto;
  grid-template-columns: repeat(auto-fit,minmax(50%, 1fr));
  grid-gap: 30px;
}

.card .row .col {
  position: relative;
  width: 100%;
  margin: 10px 20px 40px 0;

  transition: 0.5s;
}

.card .row .form-group {
  position: relative;
  width: 100%;
  height: 40px;
  color: #ffffff;
}

.card .row .form-group input,
.card .row .form-group textarea {
  position: absolute;
  width: 90%;
  height: 100%;
  background: transparent;
  outline: none;
  font-size: 24px;
  padding: 10px 0 10px 20px;
  border: 5px solid rgba(0, 0, 0, 0.3);
  box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.3);
  color: #ffffff;
  border-radius: 50px;
}

.card .row .form-group label {
  line-height: 40px;
  color: #ffffff;
  font-size: 24px;
  margin: 0 0 0 30px;
  display: block;
  pointer-events: none;
}

.row .col:nth-child(6) {
  margin-top: 64px;
}

.card .row .form-group input:focus,
.card .row .form-group textarea:focus {
  border: 5px solid #ffffff;
  transition: all 0.5s;
}

.card .row input[type="submit"] {
    border: 5px solid rgba(0, 0, 0, 0.3);
    box-shadow: 30px 10px 0 rgba(0, 0, 0, 0.3);
    padding: 10px;
    height: 60%;
    width: 50%;
    cursor: pointer;
    outline: none;
    background: transparent;
    text-transform: uppercase;
    color: #ffffff;
    line-height: 30px;
    font-size: 24px;
    font-weight: 700;
    border-radius: 45px;
    margin-left: 31em;
    transition: all 0.4s;
}

.card .row input[type="submit"]:hover {
  border: 5px solid rgba(255, 255, 255, 1);
  color: #ffffff;
  transition: all 0.4s;
}

.pesan{
    position: relative;
    top: 130%;
    left: 60%;
}
h4{
    font-weight: bold;
}
.btnkirim{
    margin-top: -1em;
}

@media screen and (max-width: 900px) {
  .card .row {
    grid-template-columns: repeat(auto-fit,minmax(70%, 1fr));
  }
  
  .card {
    padding: 20px;
  }
  
  .card h2 {
    font-size: 34px;
  }
  
  .card .row input[type="submit"] {
    width: 100%;
  }
}

    </style>
</head>
<body>
    <div class="card">
        <div class="pesan">
            <h4 style="color:rgb(255, 255, 255);">⚠️ Beri pesan maupun saran anda </h4>
        </div>
        <div class="row">
          <div class="col">
          <form method="post" action="proses.php">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama">
            </div>
          </div>
      
          <div class="col">
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email">
            </div>
          </div>
      
          <div class="col">
            <div class="form-group">
              <label>Pesan</label>
              <input type="text" name="pesan">
            </div>
          </div>
  
      
          <div class="col btnkirim">
           <input type="submit" name="submit" value="Submit">
      </div>    
          </form>
        </div>
      </div>


</body>
</html>