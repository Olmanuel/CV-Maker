    <!DOCTYPE html>
      <html>
        <head>
        <title>CELVC Youth CV</title>
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <!-- Bootstraps -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Navigation -->
        <nav>
        <div class="nav-wrapper blue-grey darken-1" align="center" >
            <a href="#"  style="font-family: roboto" img src="img/Celvz-youth-church-logo-white.png"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
        </nav>
        </head>
            <!-- Body -->
          <body>
          <div align="center" style="font-family: roboto">
              <h4>Welcome to the CELVZ Youth Church CV Maker</h4>
              <h5>Fill the form below</h5>
          </div>
              <form>
          <!--Basic Information-->
           <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Basic Information</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
              <input id="phone_number" type="text" data-length="11" class="validate" >
              <label for="phone_number">Phone Number</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="address" class="materialize-textarea"></textarea>
              <label for="address">Address</label>
            </div>
          </div>

      </div>
      </div>
      </div>
          <!--Work Experience-->
                  <form action="action.php" >
                      
            <div class="input-group control-group after-add-more">
              <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
              <div class="input-group-btn"> 
                <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
              </div>
            </div>
                      
            </form>
             <div class="body">     
           <div class="card blue-grey darken-1 after-add-more">
            <div class="card-content white-text">
              <span class="card-title">Work Experience</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s6">
              <input id="job_title" type="text" class="validate">
              <label for="job_title">Job Title</label>
            </div>
            <div class="input-field col s6">
              <input id="company_name" type="text" class="validate">
              <label for="company_name">Company Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="E.g Jan 2016" id="start_date" type="text" class="validate">
              <label for="start_date">Start Date</label>
            </div>
            <div class="input-field col s6">
               <input placeholder="E.g Aug 2017" id="end_date" type="text" class="validate">
              <label for="end_date">End Date</label>
            </div>
          </div>
        <div class="col s6">
            <button class="btn waves-effect waves-light add-more"><i class="material-icons left">add</i>Add More</button>
        </div>

      </div>
      </div>
      </div>
                  </div>
      <!--Copy Hide-->
        <div class="copy hide">
            <div class="card blue-grey darken-1 after-add-more">
            <div class="card-content white-text">
              <span class="card-title">Work Experience</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s6">
              <input id="job_title" type="text" class="validate">
              <label for="job_title">Job Title</label>
            </div>
            <div class="input-field col s6">
              <input id="company_name" type="text" class="validate">
              <label for="company_name">Company Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="E.g Jan 2016" id="start_date" type="text" class="validate">
              <label for="start_date">Start Date</label>
            </div>
            <div class="input-field col s6">
               <input placeholder="E.g Aug 2017" id="end_date" type="text" class="validate">
              <label for="end_date">End Date</label>
            </div>
          </div>
        <div class="col s6">
            <button id="remove" name="remove" class="btn waves-effect waves-light remove"><i class="material-icons left">minus</i>Remove</button>
        </div>

      </div>
      </div>
      </div>          
        </div>

              <!--Qualifications-->
       <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Qualifications</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s12">
              <textarea id="qualification" class="materialize-textarea"></textarea>
              <label for="qualification">Qualifications</label>
            </div>
          </div>

      </div>
      </div>
      </div> 
                  

            <!--Education-->
           <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Education</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s6">
              <input id="course_name" type="text" class="validate">
              <label for="course_name">Course Name</label>
            </div>
            <div class="input-field col s6">
              <input id="institute_name" type="text" class="validate">
              <label for="institute_name">Institute Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="E.g Jan 2014" id="start_date" type="text" class="validate">
              <label for="start_date">Start Date</label>
            </div>
            <div class="input-field col s6">
               <input placeholder="E.g Sep 2018" id="end_date" type="text" class="validate">
              <label for="end_date">End Date</label>
            </div>
          </div>
          <div class="col s6">
                <button id="add-moree" name="add-moree" class="btn waves-effect waves-light"><i class="material-icons left">add</i>Add More</button>
          </div>

      </div>
      </div>
      </div>
              <!--Interest-->
       <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Interests</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s12">
              <textarea id="interests" class="materialize-textarea"></textarea>
              <label for="interests">Interests</label>
            </div>
          </div>

      </div>
      </div>
      </div>
              <!--References-->
       <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">References</span>
           <div class="row">

          <div class="row">
            <div class="input-field col s12">
              <textarea id="references" class="materialize-textarea"></textarea>
              <label for="references">References</label>
            </div>
          </div>

      </div>
      </div>
      </div>
      <div align="center">

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
        </button> 
       </div>
    </form> <br />

        <footer class="page-footer blue-grey darken-1">
             <div class="footer-copyright">
                <div class="container" align="center">
                © 2019 Copyright CELVZ Youth Church
                </div>
              </div>      
        </footer>


          <!--JavaScript at end of body for optimized loading-->
          <script type="text/javascript" src="js/materialize.min.js"></script>

        </body>


          <!--CSS -->
        <style>

        </style>

          <!-- JAVASCRIPT -->
          <script type='text/javascript'>
            $(document).ready(function() {


          $(".add-more").click(function(){ 
              var html = $(".copy").html();
              $(".after-add-more").after(html);
          });


          $("body").on("click",".remove",function(){ 
              $(this).parents(".card").remove();
          });


        });
          </script>
      </html>