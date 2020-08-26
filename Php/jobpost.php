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
            <li>
              <a href="profile.html" class="btn-flat" id="profile"> Profile</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <div class="row">
          <div class="card center-align rounded credentialCard">
            <div class="card-content">
                  <form action="" method="post">
                  <div class="row">
                    <div class="input-field col s12">
                      <input
                        name='job_title'
                        placeholder="Job Title"
                        id="job_title"
                        type="text"
                        required
                      />
                      <label for="job_title">Job Title</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea
                          name='job_discription'
                          placeholder="Job Discription"
                          id="job_discription"
                          required>
                        </textarea>
                        <label for="job_discription">Job Discription</label>
                      </div>
                    <div class="input-field col s12">
                      <textarea
                          name='job_requirement'
                          placeholder="Job Requirement"
                          id="job_requirement"
                          required>
                        </textarea>
                        <label for="job_requirement">Job Requirement</label>
                    </div>
                    <div class="input-field col s12">
                    <input
                        name='cwebsite'
                        id="cwebsite"
                        type="text"
                        placeholder="www.example.com"
                        class="validate"
                        required
                      />
                      <label for="cwebsite">Company website</label>
                    </div>
                    <div class="input-field col s12">
                        <input
                          name='exprience'
                          placeholder="Exprience"
                          id="exprience"
                          type="text"
                          required
                        />
                        <label for="exprience">Exprience</label>
                      </div>
                    <div class="input-field col s12">
                      <input
                        name='position'
                        id="position"
                        type="text"
                        class="validate"
                        placeholder="Jr.Software developer"
                        required
                      />
                      <label for="position">Position</label>
                    </div>
                    <div class="input-field col s12">
                    <input
                        name='working_days'
                        id="working_days"
                        type="text"
                        class="validate"
                        placeholder="5 Days"
                        required
                      />
                      <label for="working_days">Working Days</label>
                    </div>
                    <div class="input-field col s12">
                    <input
                        name='apply'
                        id="apply"
                        type="text"
                        class="validate"
                        placeholder="Please send your CV at example@gmail.com"
                        required
                      />
                      <label for="apply">Apply Procedure</label>
                    </div>
                    <div class="input-field col s12">
                    <input
                        name='apply_date'
                        id="apply_date"
                        type="date"
                        class="validate"
                        required
                      />
                      <label for="apply_date">Apply Before</label>
                    </div>
                </div>
                    
                    <div class="center-align">
                      <button
                        type="submit"
                        class="waves-effect btn blue darken-3 btnRounded"
                      >
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="assets/js/plugin.js"></script>
  </body>
</html>
