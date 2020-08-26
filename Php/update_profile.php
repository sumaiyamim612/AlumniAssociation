<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumni Association</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Google+Sans"
      as="style"
    />
    <link rel="stylesheet" href="assets/css/minified/materializecss.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header>
      <nav class="nav-extended nav-fixed teal lighten-3 z-depth-1">
        <div class="nav-wrapper">
          <a class="brand-logo" id="logo">Alumni Association</a>
          <a href="#" class="sidenav-trigger menu" data-target="mobile-nav">
            <i class="material-icons">menu</i>
          </a>
          <ul id="nav-mobile" class="right">
            <li>
              <a href="index.html" class="btn-flat" id="logout">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <ul class="sidenav" id="mobile-nav">
        <li><a href="index.html.html">Logout</a></li>
        <li><a href="profile.html">Profile</a></li>
      </ul> 
    </header>

   
    <main>
      <div class="container">
        <div class="row topMargin">
          <div class="col s12">


          <div id="update_profile" class="col s12">
        <div class="row">
          <div class="center-align">
            <h3 class="title"> Profile</h3>
          </div>
          <div class="right-align">
            <a href="profile.html" class="waves-effect waves-light btn-flat right profileDlt"
              ><i class="material-icons right">update</i>Update
              Profile</a
            >
          </div>
        </div>
        <div class="card rounded">
          <div class="card-content">
            <div class="row">
              <form action="profile" method="post">
                <div class="row">
                  <div class="col s12 l6 m6">
                    <div class="input-field col s12">
                      <input
                        id="name"
                        name="name"
                        type="text"
                        class="validate"
                        required
                      />
                      <label for="name">Name</label>
                    </div>
                  </div>
                  <div class="col s12 l6 m6">
                    <div class="input-field col s12">
                      <input
                        id="address"
                        name="address"
                        type="text"
                        class="validate"
                        required
                      />
                      <label for="address">Address</label>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col s12 l6 m6">
                    <div class="input-field col s12">
                      <input
                        id="batch"
                        name="batch"
                        type="text"
                        class="validate"
                        required
                      />
                      <label for="batch">Batch</label>
                    </div>
                  </div>
                  <div class="col s12 l6 m6">
                    <div class="input-field col s12">
                      <input
                        id="passing_year"
                        name="passing_year"
                        type="text"
                        class="validate"
                        required
                      />
                      <label for="passing_year">Passing Year</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l6 m6">
                    <div class="input-field col s12">
                      <input
                        id="job"
                        name="job"
                        type="text"
                        class="validate"
                        required
                      />
                      <label for="job">Job</label>
                    </div>
                  </div>
                  <div class="col s12 l6 m6">
                    <div class="input-field col s12">
                      <input
                        id="company"
                        name="company"
                        type="text"
                        class="validate"
                        required
                      />
                      <label for="company">Compnay</label>
                    </div>
                  </div>
                </div>
                <div class="center-align">
                  <button
                    type="submit"
                    class="waves-effect btn blue darken-3 btnRounded"
                  >
                    Save Info
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- CHANGE PASSWORD -->
      
      </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="assets/js/javascript.js"></script>
  </body>
</html>
