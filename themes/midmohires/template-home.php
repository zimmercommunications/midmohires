<?php

  /*
  Template Name: Home Page
  */

get_header(); ?>
      <!-- Loader -->
      <div id="preloader">
          <div id="status">
              <div class="spinner">
                  <div class="double-bounce1"></div>
                  <div class="double-bounce2"></div>
              </div>
          </div>
      </div>
      <!-- Loader -->

      <!-- Navigation Bar-->
      <header id="topnav" class="defaultscroll scroll-active">
          <!-- Tagline STart -->
          <div class="tagline">
              <div class="container">
                  <div class="float-left">
                      <div class="phone">
                          <i class="mdi mdi-phone-classic"></i> +1 800 123 45 67
                      </div>
                      <div class="email">
                          <a href="#">
                              <i class="mdi mdi-email"></i> Support@mail.com
                          </a>
                      </div>
                  </div>
                  <div class="float-right">
                      <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                          <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Benny Simpson</a></li>
                          <li class="list-inline-item">
                              <select id="select-lang" class="demo-default">
                                  <option value="">Language</option>
                                  <option value="4">English</option>
                                  <option value="1">Spanish</option>
                                  <option value="3">French</option>
                                  <option value="5">Hindi</option>
                              </select>
                          </li>
                      </ul>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
          <!-- Tagline End -->

          <!-- Menu Start -->
          <div class="container">
              <!-- Logo container-->
              <div>
                  <a href="index.html" class="logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/long-logo.png" alt="" class="logo-light" height="25" />
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/long-logo.png" alt="" class="logo-dark" height="25" />
                  </a>
              </div>
              <div class="buy-button">
                  <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
              </div><!--end login button-->
              <!-- End Logo container-->
              <div class="menu-extras">
                  <div class="menu-item">
                      <!-- Mobile menu toggle-->
                      <a class="navbar-toggle">
                          <div class="lines">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div>
                      </a>
                      <!-- End mobile menu toggle-->
                  </div>
              </div>

              <div id="navigation">
                  <!-- Navigation Menu-->
                  <ul class="navigation-menu">
                      <li><a href="index.html">Home</a></li>
                      <li class="has-submenu">
                          <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                          <ul class="submenu">
                              <li><a href="job-list.html">Job List</a></li>
                              <li><a href="job-grid.html">Job Grid</a></li>
                              <li><a href="job-details.html">Job Details</a></li>
                              <li><a href="job-details-2.html">Job Details-2</a></li>
                          </ul>
                      </li>

                      <li class="has-submenu">
                          <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                          <ul class="submenu">
                              <li><a href="about.html">About us</a></li>
                              <li><a href="services.html">Services</a></li>
                              <li><a href="team.html">Team</a></li>
                              <li><a href="faq.html">Faqs</a></li>
                              <li><a href="pricing.html">Pricing plans</a></li>
                              <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                                  <ul class="submenu">
                                      <li><a href="candidates-listing.html">Candidates Listing</a></li>
                                      <li><a href="candidates-profile.html">Candidates Profile</a></li>
                                      <li><a href="create-resume.html">Create Resume</a></li>
                                  </ul>
                              </li>
                              <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                  <ul class="submenu">
                                      <li><a href="blog-grid.html">Blogs</a></li>
                                      <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                      <li><a href="blog-details.html">Blog Details</a></li>
                                  </ul>
                              </li>
                              <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                                  <ul class="submenu">
                                      <li><a href="employers-list.html">Employers List</a></li>
                                      <li><a href="company-detail.html">Company Detail</a></li>
                                  </ul>
                              </li>
                              <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                                  <ul class="submenu">
                                      <li><a href="login.html">Login</a></li>
                                      <li><a href="signup.html">Signup</a></li>
                                      <li><a href="recovery_passward.html">Forgot Password</a></li>
                                  </ul>
                              </li>
                              <li><a href="components.html"> Components</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="contact.html">contact</a>
                      </li>
                  </ul><!--end navigation menu-->
              </div><!--end navigation-->
          </div><!--end container-->
          <!--end end-->
      </header><!--end header-->
      <!-- Navbar End -->

      <!-- Start Home -->
      <section class="bg-home">
          <div class="back">
              <div class="bg-layer"></div>
              <img class="people" src="<?php echo get_template_directory_uri() . '/assets/img/job-fair-dude.jpg'; ?>" />
              <img class="hands blend--color-dodge" src="<?php echo get_template_directory_uri() . '/assets/img/handshake.png'; ?>" />
          </div>
          <div class="home-center">
              <div class="home-desc-center">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-12">
                              <div class="title-heading text-center text-white">
                                  <h6 class="small-title text-uppercase text-light mb-3">Find jobs, create trackable resumes and enrich your applications.</h6>
                                  <h1 class="heading font-weight-bold mb-4">The Easiest Way to Get Your New Job</h1>
                              </div>
                          </div>
                      </div>
                      <div class="home-form-position">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="home-registration-form p-4 mb-3">
                                      <form class="registration-form">
                                          <div class="row">
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="registration-form-box">
                                                      <i class="fa fa-briefcase"></i>
                                                      <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="registration-form-box">
                                                      <i class="fa fa-location-arrow"></i>
                                                      <select id="select-country" class="form-control rounded registration-input-box">
                                                          <option value="">Location</option>
                                                          <option value="AF">Afghanistan</option>
                                                          <option value="AX">&Aring;land Islands</option>
                                                          <option value="AL">Albania</option>
                                                          <option value="DZ">Algeria</option>
                                                          <option value="AS">American Samoa</option>
                                                          <option value="AD">Andorra</option>
                                                          <option value="AO">Angola</option>
                                                          <option value="AI">Anguilla</option>
                                                          <option value="AQ">Antarctica</option>
                                                          <option value="AG">Antigua and Barbuda</option>
                                                          <option value="AR">Argentina</option>
                                                          <option value="AM">Armenia</option>
                                                          <option value="AW">Aruba</option>
                                                          <option value="AU">Australia</option>
                                                          <option value="AT">Austria</option>
                                                          <option value="AZ">Azerbaijan</option>
                                                          <option value="BS">Bahamas</option>
                                                          <option value="BH">Bahrain</option>
                                                          <option value="BD">Bangladesh</option>
                                                          <option value="BB">Barbados</option>
                                                          <option value="BY">Belarus</option>
                                                          <option value="BE">Belgium</option>
                                                          <option value="BZ">Belize</option>
                                                          <option value="BJ">Benin</option>
                                                          <option value="BM">Bermuda</option>
                                                          <option value="BT">Bhutan</option>
                                                          <option value="BO">Bolivia, Plurinational State of</option>
                                                          <option value="BA">Bosnia and Herzegovina</option>
                                                          <option value="BW">Botswana</option>
                                                          <option value="BV">Bouvet Island</option>
                                                          <option value="BR">Brazil</option>
                                                          <option value="IO">British Indian Ocean Territory</option>
                                                          <option value="BN">Brunei Darussalam</option>
                                                          <option value="BG">Bulgaria</option>
                                                          <option value="BF">Burkina Faso</option>
                                                          <option value="BI">Burundi</option>
                                                          <option value="KH">Cambodia</option>
                                                          <option value="CM">Cameroon</option>
                                                          <option value="CA">Canada</option>
                                                          <option value="CV">Cape Verde</option>
                                                          <option value="KY">Cayman Islands</option>
                                                          <option value="CF">Central African Republic</option>
                                                          <option value="TD">Chad</option>
                                                          <option value="CL">Chile</option>
                                                          <option value="CN">China</option>
                                                          <option value="CX">Christmas Island</option>
                                                          <option value="CC">Cocos (Keeling) Islands</option>
                                                          <option value="CO">Colombia</option>
                                                          <option value="KM">Comoros</option>
                                                          <option value="CG">Congo</option>
                                                          <option value="CD">Congo, the Democratic Republic of the</option>
                                                          <option value="CK">Cook Islands</option>
                                                          <option value="CR">Costa Rica</option>
                                                          <option value="CI">C&ocirc;te d'Ivoire</option>
                                                          <option value="HR">Croatia</option>
                                                          <option value="CU">Cuba</option>
                                                          <option value="CY">Cyprus</option>
                                                          <option value="CZ">Czech Republic</option>
                                                          <option value="DK">Denmark</option>
                                                          <option value="DJ">Djibouti</option>
                                                          <option value="DM">Dominica</option>
                                                          <option value="DO">Dominican Republic</option>
                                                          <option value="EC">Ecuador</option>
                                                          <option value="EG">Egypt</option>
                                                          <option value="SV">El Salvador</option>
                                                          <option value="GQ">Equatorial Guinea</option>
                                                          <option value="ER">Eritrea</option>
                                                          <option value="EE">Estonia</option>
                                                          <option value="ET">Ethiopia</option>
                                                          <option value="FK">Falkland Islands (Malvinas)</option>
                                                          <option value="FO">Faroe Islands</option>
                                                          <option value="FJ">Fiji</option>
                                                          <option value="FI">Finland</option>
                                                          <option value="FR">France</option>
                                                          <option value="GF">French Guiana</option>
                                                          <option value="PF">French Polynesia</option>
                                                          <option value="TF">French Southern Territories</option>
                                                          <option value="GA">Gabon</option>
                                                          <option value="GM">Gambia</option>
                                                          <option value="GE">Georgia</option>
                                                          <option value="DE">Germany</option>
                                                          <option value="GH">Ghana</option>
                                                          <option value="GI">Gibraltar</option>
                                                          <option value="GR">Greece</option>
                                                          <option value="GL">Greenland</option>
                                                          <option value="GD">Grenada</option>
                                                          <option value="GP">Guadeloupe</option>
                                                          <option value="GU">Guam</option>
                                                          <option value="GT">Guatemala</option>
                                                          <option value="GG">Guernsey</option>
                                                          <option value="GN">Guinea</option>
                                                          <option value="GW">Guinea-Bissau</option>
                                                          <option value="GY">Guyana</option>
                                                          <option value="HT">Haiti</option>
                                                          <option value="HM">Heard Island and McDonald Islands</option>
                                                          <option value="VA">Holy See (Vatican City State)</option>
                                                          <option value="HN">Honduras</option>
                                                          <option value="HK">Hong Kong</option>
                                                          <option value="HU">Hungary</option>
                                                          <option value="IS">Iceland</option>
                                                          <option value="IN">India</option>
                                                          <option value="ID">Indonesia</option>
                                                          <option value="IR">Iran, Islamic Republic of</option>
                                                          <option value="IQ">Iraq</option>
                                                          <option value="IE">Ireland</option>
                                                          <option value="IM">Isle of Man</option>
                                                          <option value="IL">Israel</option>
                                                          <option value="IT">Italy</option>
                                                          <option value="JM">Jamaica</option>
                                                          <option value="JP">Japan</option>
                                                          <option value="JE">Jersey</option>
                                                          <option value="JO">Jordan</option>
                                                          <option value="KZ">Kazakhstan</option>
                                                          <option value="KE">Kenya</option>
                                                          <option value="KI">Kiribati</option>
                                                          <option value="KP">Korea, Democratic People's Republic of</option>
                                                          <option value="KR">Korea, Republic of</option>
                                                          <option value="KW">Kuwait</option>
                                                          <option value="KG">Kyrgyzstan</option>
                                                          <option value="LA">Lao People's Democratic Republic</option>
                                                          <option value="LV">Latvia</option>
                                                          <option value="LB">Lebanon</option>
                                                          <option value="LS">Lesotho</option>
                                                          <option value="LR">Liberia</option>
                                                          <option value="LY">Libyan Arab Jamahiriya</option>
                                                          <option value="LI">Liechtenstein</option>
                                                          <option value="LT">Lithuania</option>
                                                          <option value="LU">Luxembourg</option>
                                                          <option value="MO">Macao</option>
                                                          <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                          <option value="MG">Madagascar</option>
                                                          <option value="MW">Malawi</option>
                                                          <option value="MY">Malaysia</option>
                                                          <option value="MV">Maldives</option>
                                                          <option value="ML">Mali</option>
                                                          <option value="MT">Malta</option>
                                                          <option value="MH">Marshall Islands</option>
                                                          <option value="MQ">Martinique</option>
                                                          <option value="MR">Mauritania</option>
                                                          <option value="MU">Mauritius</option>
                                                          <option value="YT">Mayotte</option>
                                                          <option value="MX">Mexico</option>
                                                          <option value="FM">Micronesia, Federated States of</option>
                                                          <option value="MD">Moldova, Republic of</option>
                                                          <option value="MC">Monaco</option>
                                                          <option value="MN">Mongolia</option>
                                                          <option value="ME">Montenegro</option>
                                                          <option value="MS">Montserrat</option>
                                                          <option value="MA">Morocco</option>
                                                          <option value="MZ">Mozambique</option>
                                                          <option value="MM">Myanmar</option>
                                                          <option value="NA">Namibia</option>
                                                          <option value="NR">Nauru</option>
                                                          <option value="NP">Nepal</option>
                                                          <option value="NL">Netherlands</option>
                                                          <option value="AN">Netherlands Antilles</option>
                                                          <option value="NC">New Caledonia</option>
                                                          <option value="NZ">New Zealand</option>
                                                          <option value="NI">Nicaragua</option>
                                                          <option value="NE">Niger</option>
                                                          <option value="NG">Nigeria</option>
                                                          <option value="NU">Niue</option>
                                                          <option value="NF">Norfolk Island</option>
                                                          <option value="MP">Northern Mariana Islands</option>
                                                          <option value="NO">Norway</option>
                                                          <option value="OM">Oman</option>
                                                          <option value="PK">Pakistan</option>
                                                          <option value="PW">Palau</option>
                                                          <option value="PS">Palestinian Territory, Occupied</option>
                                                          <option value="PA">Panama</option>
                                                          <option value="PG">Papua New Guinea</option>
                                                          <option value="PY">Paraguay</option>
                                                          <option value="PE">Peru</option>
                                                          <option value="PH">Philippines</option>
                                                          <option value="PN">Pitcairn</option>
                                                          <option value="PL">Poland</option>
                                                          <option value="PT">Portugal</option>
                                                          <option value="PR">Puerto Rico</option>
                                                          <option value="QA">Qatar</option>
                                                          <option value="RE">R&eacute;union</option>
                                                          <option value="RO">Romania</option>
                                                          <option value="RU">Russian Federation</option>
                                                          <option value="RW">Rwanda</option>
                                                          <option value="BL">Saint Barth&eacute;lemy</option>
                                                          <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                          <option value="KN">Saint Kitts and Nevis</option>
                                                          <option value="LC">Saint Lucia</option>
                                                          <option value="MF">Saint Martin (French part)</option>
                                                          <option value="PM">Saint Pierre and Miquelon</option>
                                                          <option value="VC">Saint Vincent and the Grenadines</option>
                                                          <option value="WS">Samoa</option>
                                                          <option value="SM">San Marino</option>
                                                          <option value="ST">Sao Tome and Principe</option>
                                                          <option value="SA">Saudi Arabia</option>
                                                          <option value="SN">Senegal</option>
                                                          <option value="RS">Serbia</option>
                                                          <option value="SC">Seychelles</option>
                                                          <option value="SL">Sierra Leone</option>
                                                          <option value="SG">Singapore</option>
                                                          <option value="SK">Slovakia</option>
                                                          <option value="SI">Slovenia</option>
                                                          <option value="SB">Solomon Islands</option>
                                                          <option value="SO">Somalia</option>
                                                          <option value="ZA">South Africa</option>
                                                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                          <option value="ES">Spain</option>
                                                          <option value="LK">Sri Lanka</option>
                                                          <option value="SD">Sudan</option>
                                                          <option value="SR">Suriname</option>
                                                          <option value="SJ">Svalbard and Jan Mayen</option>
                                                          <option value="SZ">Swaziland</option>
                                                          <option value="SE">Sweden</option>
                                                          <option value="CH">Switzerland</option>
                                                          <option value="SY">Syrian Arab Republic</option>
                                                          <option value="TW">Taiwan, Province of China</option>
                                                          <option value="TJ">Tajikistan</option>
                                                          <option value="TZ">Tanzania, United Republic of</option>
                                                          <option value="TH">Thailand</option>
                                                          <option value="TL">Timor-Leste</option>
                                                          <option value="TG">Togo</option>
                                                          <option value="TK">Tokelau</option>
                                                          <option value="TO">Tonga</option>
                                                          <option value="TT">Trinidad and Tobago</option>
                                                          <option value="TN">Tunisia</option>
                                                          <option value="TR">Turkey</option>
                                                          <option value="TM">Turkmenistan</option>
                                                          <option value="TC">Turks and Caicos Islands</option>
                                                          <option value="TV">Tuvalu</option>
                                                          <option value="UG">Uganda</option>
                                                          <option value="UA">Ukraine</option>
                                                          <option value="AE">United Arab Emirates</option>
                                                          <option value="GB">United Kingdom</option>
                                                          <option value="US">United States</option>
                                                          <option value="UM">United States Minor Outlying Islands</option>
                                                          <option value="UY">Uruguay</option>
                                                          <option value="UZ">Uzbekistan</option>
                                                          <option value="VU">Vanuatu</option>
                                                          <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                          <option value="VN">Viet Nam</option>
                                                          <option value="VG">Virgin Islands, British</option>
                                                          <option value="VI">Virgin Islands, U.S.</option>
                                                          <option value="WF">Wallis and Futuna</option>
                                                          <option value="EH">Western Sahara</option>
                                                          <option value="YE">Yemen</option>
                                                          <option value="ZM">Zambia</option>
                                                          <option value="ZW">Zimbabwe</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="registration-form-box">
                                                      <i class="fa fa-list-alt"></i>
                                                      <select id="select-category" class="demo-default">
                                                          <option value="">Categories...</option>
                                                          <option value="4">Accounting</option>
                                                          <option value="1">IT & Software</option>
                                                          <option value="3">Marketing</option>
                                                          <option value="5">Banking</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="registration-form-box">
                                                      <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- end home -->

      <!-- popular category start -->
      <section class="section">
      <?php

        get_template_part("template-parts/categories", 'featured');

      ?>
      </section>
      <!-- popular category end -->

      <!-- all jobs start -->
      <section class="section bg-light">
        <?php get_template_part("template-parts/jobs", "preview"); ?>
          <!-- end containar -->
      </section>
      <!-- all jobs end -->

      <!-- How it Work start -->
      <section class="section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-12">
                      <div class="section-title text-center mb-4 pb-2">
                          <h4 class="title title-line pb-5">How It Works</h4>
                          <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <?php get_template_part("content", ) ?>
                  <div class="col-md-4 mt-4 pt-2">
                      <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                          <div class="how-it-work-img position-relative rounded-pill mb-3">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/how-it-work/img-2.png" alt="" class="mx-auto d-block" height="50">
                          </div>
                          <div>
                              <h5>Learn about job</h5>
                              <p class="text-muted">Aliquam lorem ante dapibus in, viverra feugiatquis a tellus. Phasellus viverra nulla ut Quisque rutrum.</p>
                              <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mt-4 pt-2">
                      <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                          <div class="how-it-work-img position-relative rounded-pill mb-3">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/how-it-work/img-3.png" alt="" class="mx-auto d-block" height="50">
                          </div>
                          <div>
                              <h5>Apply for job</h5>
                              <p class="text-muted">Nullam dictum felis eu pede mollis pretiumetus Integer tincidunt. Cras dapibus. semper nisi.</p>
                              <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- How it Work end -->


      <!-- counter start -->
      <section class="section bg-counter position-relative" style="background: url('https://via.placeholder.com/200X700//88929f/5a6270C/O https://placeholder.com/') center center;">
          <div class="bg-overlay bg-overlay-gradient"></div>
          <div class="container">
              <div class="row" id="counter">
                  <div class="col-md-3 col-6">
                      <div class="home-counter pt-4 pb-4">
                          <div class="float-left counter-icon mr-3">
                              <i class="mdi mdi-bank h1 text-white"></i>
                          </div>
                          <div class="counter-content overflow-hidden">
                              <h1 class="counter-value text-white mb-1" data-count="120">10</h1>
                              <p class="counter-name text-white text-uppercase mb-0">Companies</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-3 col-6">
                      <div class="home-counter pt-4 pb-4">
                          <div class="float-left counter-icon mr-3">
                              <i class="mdi mdi-file-document-box h1 text-white"></i>
                          </div>
                          <div class="counter-content overflow-hidden">
                              <h1 class="counter-value text-white mb-1" data-count="480">80</h1>
                              <p class="counter-name text-white text-uppercase mb-0">Applications</p>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-3 col-6">
                      <div class="home-counter pt-4 pb-4">
                          <div class="float-left counter-icon mr-3">
                              <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                          </div>
                          <div class="counter-content overflow-hidden">
                              <h1 class="counter-value text-white mb-1" data-count="120">10</h1>
                              <p class="counter-name text-white text-uppercase mb-0">Job Posted</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-6">
                      <div class="home-counter pt-4 pb-4">
                          <div class="float-left counter-icon mr-3">
                              <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                          </div>
                          <div class="counter-content overflow-hidden">
                              <h1 class="counter-value text-white mb-1" data-count="200">10</h1>
                              <p class="counter-name text-white text-uppercase mb-0">Member</p>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>
      <!-- counter end -->

      <!-- testimonial start -->
      <section class="section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-12">
                      <div class="section-title text-center mb-4 pb-2">
                          <h4 class="title title-line pb-5">Our Success Stories</h4>
                          <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                      </div>
                  </div>
              </div>
              <div class="row pt-4">
                  <div class="col-lg-12">
                      <div id="owl-testi" class="owl-carousel owl-theme">
                          <div class="item testi-box rounded p-4 mr-3 ml-2 mb-4 bg-light position-relative">
                              <p class="text-muted mb-5">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consecteturqui adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                              <div class="clearfix">
                                  <div class="testi-img float-left mr-3">
                                      <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="64" alt="" class="rounded-circle shadow">
                                  </div>
                                  <h5 class="f-18 pt-1">Kevin Stewart</h5>
                                  <p class="text-muted mb-0">Web Designer at xyz Company</p>
                                  <div class="testi-icon">
                                      <i class="mdi mdi-format-quote-open display-2"></i>
                                  </div>
                              </div>
                          </div>

                          <div class="item testi-box rounded p-4 mr-3 ml-2 bg-light position-relative">
                              <p class="text-muted mb-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                              <div class="clearfix">
                                  <div class="testi-img float-left mr-3">
                                      <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="64" alt="" class="rounded-circle shadow">
                                  </div>
                                  <h5 class="f-18 pt-1">Charles Garrett</h5>
                                  <p class="text-muted mb-0">Marketing manager at abc Company</p>
                                  <div class="testi-icon">
                                      <i class="mdi mdi-format-quote-open display-2"></i>
                                  </div>
                              </div>
                          </div>

                          <div class="item testi-box rounded p-4 mr-3 ml-2 bg-light position-relative">
                              <p class="text-muted mb-5">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consecteturqui adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                              <div class="clearfix">
                                  <div class="testi-img float-left mr-3">
                                      <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" height="64" alt="" class="rounded-circle shadow">
                                  </div>
                                  <h5 class="f-18 pt-1">Perry Martinez</h5>
                                  <p class="text-muted mb-0">Marketing manager at abc Company</p>
                                  <div class="testi-icon">
                                      <i class="mdi mdi-format-quote-open display-2"></i>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
        </section> <!-- testimonial end -->
        <section> <!-- Companies -->
          <?php get_template_part("template-parts/categories", "companies"); ?>
        </section> <!-- Companies -->

      <!-- blog start -->
      <section class="section bg-light">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-12">
                      <div class="section-title text-center mb-4 pb-2">
                          <h4 class="title title-line pb-5">Career advice</h4>
                          <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-6 mt-4 pt-2">
                      <div class="blog position-relative overflow-hidden shadow rounded">
                          <div class="position-relative overflow-hidden">
                              <img src="https://via.placeholder.com/800X533//88929f/5a6270C/O https://placeholder.com/" class="img-fluid rounded-top" alt="">
                              <div class="overlay rounded-top bg-dark"></div>
                              <div class="likes">
                                  <ul class="list-unstyled mb-0">
                                      <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                      <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="content p-4">
                              <h4><a href="javascript:void(0)" class="title text-dark">How apps is the IT world</a></h4>
                              <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                              <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                          </div>
                          <div class="author">
                              <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                              <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="col-lg-4 col-md-6 mt-4 pt-2">
                      <div class="blog position-relative overflow-hidden shadow rounded">
                          <div class="position-relative overflow-hidden">
                              <img src="https://via.placeholder.com/800X533//88929f/5a6270C/O https://placeholder.com/" class="img-fluid rounded-top" alt="">
                              <div class="overlay rounded-top bg-dark"></div>
                              <div class="likes">
                                  <ul class="list-unstyled mb-0">
                                      <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                      <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="content p-4">
                              <h4><a href="javascript:void(0)" class="title text-dark">Vestibulum ante ipsum primis</a></h4>
                              <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                              <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                          </div>
                          <div class="author">
                              <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                              <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="col-lg-4 col-md-6 mt-4 pt-2">
                      <div class="blog position-relative overflow-hidden shadow rounded">
                          <div class="position-relative overflow-hidden">
                              <img src="https://via.placeholder.com/800X533//88929f/5a6270C/O https://placeholder.com/" class="img-fluid rounded-top" alt="">
                              <div class="overlay rounded-top bg-dark"></div>
                              <div class="likes">
                                  <ul class="list-unstyled mb-0">
                                      <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                      <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="content p-4">
                              <h4><a href="javascript:void(0)" class="title text-dark">Maecenas tempus tellus eget</a></h4>
                              <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam</p>
                              <a href="#" class="text-dark readmore">Read more <i class="mdi mdi-chevron-right"></i></a>
                          </div>
                          <div class="author">
                              <p class=" mb-0"><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                              <p class="text-light mb-0 date"><i class="mdi mdi-calendar-check"></i> 25 Sep, 2019</p>
                          </div>
                      </div>
                  </div><!--end col-->
              </div>
          </div>
      </section>
      <!-- blog end -->

      <!-- subscribe start -->
      <section class="section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-5">
                      <div class="float-left position-relative notification-icon mr-2">
                          <i class="mdi mdi-bell-outline text-primary"></i>
                          <span class="badge badge-pill badge-danger">1</span>
                      </div>
                      <h5 class="mt-2 mb-0">Your Job Notification</h5>
                  </div>
                  <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                      <form>
                          <div class="form-group mb-0">
                              <div class="input-group mb-0">
                                  <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                  <div class="input-group-append">
                                      <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      <!-- subscribe end -->

  <?php get_footer(); ?>
