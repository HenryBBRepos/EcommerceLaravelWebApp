@extends('sales.layout.app')

@section('content')

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">


        <div class="row">
    <div class="col s12 m6 l6">
      <div id="basic-form" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Basic Form</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" id="fn">
                <label for="fn">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with placeholder -->
    <div class="col s12 m6 l6">
      <div id="placeholder" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form with placeholder</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="John Doe" id="name2" type="text">
                <label for="name2">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="john@domainname.com" id="email2" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="YourPassword" id="password2" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea placeholder="Oh WoW! Let me check this one too." id="message2"
                  class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with icon prefixes -->
    <div class="col s12 m6 l6">
      <div id="prefixes" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form with icon prefixes</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="name3" type="text">
                <label for="name3">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email3" type="email">
                <label for="email3">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="password3" type="password">
                <label for="password3">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">question_answer</i>
                <textarea id="message3" class="materialize-textarea"></textarea>
                <label for="message3">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with validation -->
    <div class="col s12 m6 l6">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form with validation</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="name4" type="text" class="validate">
                <label for="name4">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email4" type="email" class="validate">
                <label for="email4">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="password5" type="password" class="validate">
                <label for="password5">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">question_answer</i>
                <textarea id="message4" class="materialize-textarea validate"></textarea>
                <label for="message4">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with validation -->
    <div class="col s12 m12 l12">
      <div id="inline-form" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Inline form</h4>
          <form>
            <div class="row">
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix1" type="text" class="validate">
                <label for="icon_prefix1">First Name</label>
              </div>
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">lock_outline</i>
                <input id="icon_password" type="password" class="validate">
                <label for="icon_password">Password</label>
              </div>
              <div class="input-field col m4 s12">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons left">lock_open</i> Login</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with validation -->
    <div class="col s12 m12 l12">
      <div id="form-with-validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Inline form with placeholder</h4>
          <form>
            <div class="row">
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="icon_prefix2" type="text" class="validate">
                <label for="icon_prefix2">First Name</label>
              </div>
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">email</i>
                <input placeholder="john@mydomain.com" id="icon_email" type="email" class="validate">
                <label for="icon_email">Email</label>
              </div>
              <div class="input-field col m4 s12">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons left">perm_identity</i> Signup</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form Advance -->
    <div class="col s12 m12 l12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Advance</h4>
          <form>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name01" type="text">
                <label for="first_name01">First Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="last_name" type="text">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email5" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password6" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <select>
                  <option value="" disabled selected>Choose your profile</option>
                  <option value="1">Manager</option>
                  <option value="2">Developer</option>
                  <option value="3">Business</option>
                </select>
                <label>Select Profile</label>
              </div>
              <div class="input-field col m6 s12">
                <input type="text" class="datepicker" id="dob">
                <label for="dob">DOB</label>
              </div>
            </div>
            <div class="row">
              <div class="col m6 s12 file-field input-field">
                <div class="btn float-right">
                  <span>File</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              <div class="input-field col m6 s12">
                <span>Range</span>
                <p class="range-field">
                  <input type="range" id="test5" min="0" max="100" />
                </p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="message5" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>






          <div class="container">

            <div class="section">
               <!--card stats start-->
               <div id="card-stats" class="pt-0">
                  <div class="row">
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">add_shopping_cart</i>
                                    <p>Orders</p>
                                 </div>
                                 <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">690</h5>
                                    <p class="no-margin">New</p>
                                    <p>6,00,00</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">perm_identity</i>
                                    <p>Clients</p>
                                 </div>
                                 <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">1885</h5>
                                    <p class="no-margin">New</p>
                                    <p>1,12,900</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">timeline</i>
                                    <p>Sales</p>
                                 </div>
                                 <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">80%</h5>
                                    <p class="no-margin">Growth</p>
                                    <p>3,42,230</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">attach_money</i>
                                    <p>Profit</p>
                                 </div>
                                 <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">GH890</h5>
                                    <p class="no-margin">Today</p>
                                    <p>GH25,000</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--card stats end-->
               <!--yearly & weekly revenue chart start-->
               <div id="sales-chart">
                  <div class="row">
                     <div class="col s12 m8 l8">
                        <div id="revenue-chart" class="card animate fadeUp">
                           <div class="card-content">
                              <h4 class="header mt-0">
                                 REVENUE FOR 2017
                                 <span class="purple-text small text-darken-1 ml-1">
                                    <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                                 <a
                                    class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                              </h4>
                              <div class="row">
                                 <div class="col s12">
                                    <div class="yearly-revenue-chart">
                                       <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
                                       <canvas id="lastYearRevenue" height="350"></canvas>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m4 l4">
                        <div id="weekly-earning" class="card animate fadeUp">
                           <div class="card-content">
                              <h4 class="header m-0">Earning <i class="material-icons right grey-text lighten-3">more_vert</i></h4>
                              <p class="no-margin grey-text lighten-3 medium-small">Mon 15 - Sun 21</p>
                              <h3 class="header">$899.39 <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                              </h3>
                              <canvas id="monthlyEarning" class="" height="150"></canvas>
                              <div class="center-align">
                                 <p class="lighten-3">Total Weekly Earning</p>
                                 <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">View
                                    Full</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div><!-- START RIGHT SIDEBAR NAV -->

               <!-- END RIGHT SIDEBAR NAV -->
          </div>
          <div class="content-overlay"></div>








        </div>
      </div>
    </div>
    <!-- END: Page Main-->
@endsection