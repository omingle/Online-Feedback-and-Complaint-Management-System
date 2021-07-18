<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style>

      .container {
        padding-top: 30px;
        border: 1px solid lightgray;
        border-radius: 5px;
        box-shadow: 0px 1px 4px 0px rgba(0,0,0,0.2);
        margin: 20px;
        vertical-align: middle;
        
      }


  </style>
  <script>


      $(document).ready(function() {
        $('#registrationForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                firstName: {
                    row: '.col-xs-4',
                    validators: {
                        notEmpty: {
                            message: 'The first name is required'
                        }
                    }
                },
                lastName: {
                    row: '.col-xs-4',
                    validators: {
                        notEmpty: {
                            message: 'The last name is required'
                        }
                    }
                },
                username: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        different: {
                            field: 'username',
                            message: 'The password cannot be the same as username'
                        }
                    }
                },
                gender: {
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'You must agree with the terms and conditions'
                        }
                    }
                }
            }
        });
    });




  </script>
  </script>
</head>
<body>
  <div class="container">
    <div class="row">
  <div class="col-xs-12" id="demoContainer">
                  <form id="registrationForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate">
                    <button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
      <div class="form-group">
          <label class="col-xs-3 control-label">Full name</label>
          <div class="col-xs-4">
              <input type="text" class="form-control" name="firstName" placeholder="First name" />
          </div>
          <div class="col-xs-4">
              <input type="text" class="form-control" name="lastName" placeholder="Last name" />
          </div>
      </div>
  
      <div class="form-group">
          <label class="col-xs-3 control-label">Username</label>
          <div class="col-xs-5">
              <input type="text" class="form-control" name="username" />
          </div>
      </div>
  
      <div class="form-group">
          <label class="col-xs-3 control-label">Email address</label>
          <div class="col-xs-5">
              <input type="text" class="form-control" name="email" />
          </div>
      </div>
  
      <div class="form-group">
          <label class="col-xs-3 control-label">Password</label>
          <div class="col-xs-5">
              <input type="password" class="form-control" name="password" />
          </div>
      </div>
  
      <div class="form-group">
          <label class="col-xs-3 control-label">Gender</label>
          <div class="col-xs-6">
              <div class="radio">
                  <label>
                      <input type="radio" name="gender" value="male" /> Male
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="gender" value="female" /> Female
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="gender" value="other" /> Other
                  </label>
              </div>
          </div>
      </div>
  
      <div class="form-group">
          <label class="col-xs-3 control-label">Terms of use</label>
          <div class="col-xs-9">
              <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                  <p>Lorem ipsum dolor sit amet, veniam numquam has te. No suas nonumes recusabo mea, est ut graeci definitiones. His ne melius vituperata scriptorem, cum paulo copiosae conclusionemque at. Facer inermis ius in, ad brute nominati referrentur vis. Dicat erant sit ex. Phaedrum imperdiet scribentur vix no, ad latine similique forensibus vel.</p>
                  <p>Dolore populo vivendum vis eu, mei quaestio liberavisse ex. Electram necessitatibus ut vel, quo at probatus oportere, molestie conclusionemque pri cu. Brute augue tincidunt vim id, ne munere fierent rationibus mei. Ut pro volutpat praesent qualisque, an iisque scripta intellegebat eam.</p>
                  <p>Mea ea nonumy labores lobortis, duo quaestio antiopam inimicus et. Ea natum solet iisque quo, prodesset mnesarchum ne vim. Sonet detraxit temporibus no has. Omnium blandit in vim, mea at omnium oblique.</p>
                  <p>Eum ea quidam oportere imperdiet, facer oportere vituperatoribus eu vix, mea ei iisque legendos hendrerit. Blandit comprehensam eu his, ad eros veniam ridens eum. Id odio lobortis elaboraret pro. Vix te fabulas partiendo.</p>
                  <p>Natum oportere et qui, vis graeco tincidunt instructior an, autem elitr noster per et. Mea eu mundi qualisque. Quo nemore nusquam vituperata et, mea ut abhorreant deseruisse, cu nostrud postulant dissentias qui. Postea tincidunt vel eu.</p>
                  <p>Ad eos alia inermis nominavi, eum nibh docendi definitionem no. Ius eu stet mucius nonumes, no mea facilis philosophia necessitatibus. Te eam vidit iisque legendos, vero meliore deserunt ius ea. An qui inimicus inciderint.</p>
              </div>
          </div>
      </div>
  
      <div class="form-group">
          <div class="col-xs-6 col-xs-offset-3">
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
                  </label>
              </div>
          </div>
      </div>
  
      <div class="form-group">
          <div class="col-xs-9 col-xs-offset-3">
              <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
          </div>
      </div>
  </form>
      </div>
    </div>
  
</body>
</html>