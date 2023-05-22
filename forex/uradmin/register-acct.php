<?php
include("dbcon.php");
include('session.php');
$finalcode = "";

                  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citizens Financial Bank | Register New Account Details</title>

    <!-- Bootstrap -->
     <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><img src="images/new_logo.png" width="150px" height="40px"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
          -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                 <li><a href="index"><i class="fa fa-home"></i> Home</a>

                  <li><a href="process"><i class="fa fa-shopping-cart"></i> Add New Shippment</a>
                  <li><a href="shippment-details"><i class="fa fa-shopping-cart"></i> View Shippment</a>

                  <li><a href="admin-user"><i class="fa fa-shopping-cart"></i> Add Admin</a>
                  <li><a href="user-log"><i class="fa fa-shopping-cart"></i> User Log</a>
                  <li><a href="system-log"><i class="fa fa-shopping-cart"></i> Activities Log</a>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php include('bottom_menu.php')?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include("top_nav.php")?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
           <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-user"></i>  Registered New User <a href="account-holder"><button type="button" class="btn btn-round btn-primary"><i class="fa fa-arrow-left"></i> Back</button></a></h3>
              </div>

              
            </div>


            <?php //include("user_graphReport.php")?>
            
            <br><br>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Enter details to register new admin</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
          
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

              
               <form id="add_student" method="post" enctype="multipart/form-data" action="save_student">
                 <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    First Name
                    <input type="text" name="fn" placeholder="First Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Last Name
                    <input type="text" name="ln" placeholder="Last Name" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                    Sex
                    <select name="sex" class="form-control">
                    <option value="select"> Select</option>
                    <option value="Female"> Female</option>
                    <option value="Male"> Male </option>
                    </select>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Date of Birth
                  <input name="dob" class="form-control" id="focusedInput" type="date" placeholder = "Date of Birth" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Country
                  <select class="form-control" name="country" required>
                                                            <option></option>
    <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
  <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
  <option value="Albania" title="Albania">Albania</option>
  <option value="Algeria" title="Algeria">Algeria</option>
  <option value="American Samoa" title="American Samoa">American Samoa</option>
  <option value="Andorra" title="Andorra">Andorra</option>
  <option value="Angola" title="Angola">Angola</option>
  <option value="Anguilla" title="Anguilla">Anguilla</option>
  <option value="Antarctica" title="Antarctica">Antarctica</option>
  <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
  <option value="Argentina" title="Argentina">Argentina</option>
  <option value="Armenia" title="Armenia">Armenia</option>
  <option value="Aruba" title="Aruba">Aruba</option>
  <option value="Australia" title="Australia">Australia</option>
  <option value="Austria" title="Austria">Austria</option>
  <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
  <option value="Bahamas" title="Bahamas">Bahamas</option>
  <option value="Bahrain" title="Bahrain">Bahrain</option>
  <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
  <option value="Barbados" title="Barbados">Barbados</option>
  <option value="Belarus" title="Belarus">Belarus</option>
  <option value="Belgium" title="Belgium">Belgium</option>
  <option value="Belize" title="Belize">Belize</option>
  <option value="Benin" title="Benin">Benin</option>
  <option value="Bermuda" title="Bermuda">Bermuda</option>
  <option value="Bhutan" title="Bhutan">Bhutan</option>
  <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
  <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
  <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
  <option value="Botswana" title="Botswana">Botswana</option>
  <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
  <option value="Brazil" title="Brazil">Brazil</option>
  <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
  <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
  <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
  <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
  <option value="Burundi" title="Burundi">Burundi</option>
  <option value="Cambodia" title="Cambodia">Cambodia</option>
  <option value="Cameroon" title="Cameroon">Cameroon</option>
  <option value="Canada" title="Canada">Canada</option>
  <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
  <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
  <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
  <option value="Chad" title="Chad">Chad</option>
  <option value="Chile" title="Chile">Chile</option>
  <option value="China" title="China">China</option>
  <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
  <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
  <option value="Colombia" title="Colombia">Colombia</option>
  <option value="Comoros" title="Comoros">Comoros</option>
  <option value="Congo" title="Congo">Congo</option>
  <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
  <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
  <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
  <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
  <option value="Croatia" title="Croatia">Croatia</option>
  <option value="Cuba" title="Cuba">Cuba</option>
  <option value="Curaçao" title="Curaçao">Curaçao</option>
  <option value="Cyprus" title="Cyprus">Cyprus</option>
  <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
  <option value="Denmark" title="Denmark">Denmark</option>
  <option value="Djibouti" title="Djibouti">Djibouti</option>
  <option value="Dominica" title="Dominica">Dominica</option>
  <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
  <option value="Ecuador" title="Ecuador">Ecuador</option>
  <option value="Egypt" title="Egypt">Egypt</option>
  <option value="El Salvador" title="El Salvador">El Salvador</option>
  <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
  <option value="Eritrea" title="Eritrea">Eritrea</option>
  <option value="Estonia" title="Estonia">Estonia</option>
  <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
  <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
  <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
  <option value="Fiji" title="Fiji">Fiji</option>
  <option value="Finland" title="Finland">Finland</option>
  <option value="France" title="France">France</option>
  <option value="French Guiana" title="French Guiana">French Guiana</option>
  <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
  <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
  <option value="Gabon" title="Gabon">Gabon</option>
  <option value="Gambia" title="Gambia">Gambia</option>
  <option value="Georgia" title="Georgia">Georgia</option>
  <option value="Germany" title="Germany">Germany</option>
  <option value="Ghana" title="Ghana">Ghana</option>
  <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
  <option value="Greece" title="Greece">Greece</option>
  <option value="Greenland" title="Greenland">Greenland</option>
  <option value="Grenada" title="Grenada">Grenada</option>
  <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
  <option value="Guam" title="Guam">Guam</option>
  <option value="Guatemala" title="Guatemala">Guatemala</option>
  <option value="Guernsey" title="Guernsey">Guernsey</option>
  <option value="Guinea" title="Guinea">Guinea</option>
  <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
  <option value="Guyana" title="Guyana">Guyana</option>
  <option value="Haiti" title="Haiti">Haiti</option>
  <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
  <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
  <option value="Honduras" title="Honduras">Honduras</option>
  <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
  <option value="Hungary" title="Hungary">Hungary</option>
  <option value="Iceland" title="Iceland">Iceland</option>
  <option value="India" title="India">India</option>
  <option value="Indonesia" title="Indonesia">Indonesia</option>
  <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
  <option value="Iraq" title="Iraq">Iraq</option>
  <option value="Ireland" title="Ireland">Ireland</option>
  <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
  <option value="Israel" title="Israel">Israel</option>
  <option value="Italy" title="Italy">Italy</option>
  <option value="Jamaica" title="Jamaica">Jamaica</option>
  <option value="Japan" title="Japan">Japan</option>
  <option value="Jersey" title="Jersey">Jersey</option>
  <option value="Jordan" title="Jordan">Jordan</option>
  <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
  <option value="Kenya" title="Kenya">Kenya</option>
  <option value="Kiribati" title="Kiribati">Kiribati</option>
  <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
  <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
  <option value="Kuwait" title="Kuwait">Kuwait</option>
  <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
  <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
  <option value="Latvia" title="Latvia">Latvia</option>
  <option value="Lebanon" title="Lebanon">Lebanon</option>
  <option value="Lesotho" title="Lesotho">Lesotho</option>
  <option value="Liberia" title="Liberia">Liberia</option>
  <option value="Libya" title="Libya">Libya</option>
  <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
  <option value="Lithuania" title="Lithuania">Lithuania</option>
  <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
  <option value="Macao" title="Macao">Macao</option>
  <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
  <option value="Madagascar" title="Madagascar">Madagascar</option>
  <option value="Malawi" title="Malawi">Malawi</option>
  <option value="Malaysia" title="Malaysia">Malaysia</option>
  <option value="Maldives" title="Maldives">Maldives</option>
  <option value="Mali" title="Mali">Mali</option>
  <option value="Malta" title="Malta">Malta</option>
  <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
  <option value="Martinique" title="Martinique">Martinique</option>
  <option value="Mauritania" title="Mauritania">Mauritania</option>
  <option value="Mauritius" title="Mauritius">Mauritius</option>
  <option value="Mayotte" title="Mayotte">Mayotte</option>
  <option value="Mexico" title="Mexico">Mexico</option>
  <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
  <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
  <option value="Monaco" title="Monaco">Monaco</option>
  <option value="Mongolia" title="Mongolia">Mongolia</option>
  <option value="Montenegro" title="Montenegro">Montenegro</option>
  <option value="Montserrat" title="Montserrat">Montserrat</option>
  <option value="Morocco" title="Morocco">Morocco</option>
  <option value="Mozambique" title="Mozambique">Mozambique</option>
  <option value="Myanmar" title="Myanmar">Myanmar</option>
  <option value="Namibia" title="Namibia">Namibia</option>
  <option value="Nauru" title="Nauru">Nauru</option>
  <option value="Nepal" title="Nepal">Nepal</option>
  <option value="Netherlands" title="Netherlands">Netherlands</option>
  <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
  <option value="New Zealand" title="New Zealand">New Zealand</option>
  <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
  <option value="Niger" title="Niger">Niger</option>
  <option value="Nigeria" title="Nigeria">Nigeria</option>
  <option value="Niue" title="Niue">Niue</option>
  <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
  <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
  <option value="Norway" title="Norway">Norway</option>
  <option value="Oman" title="Oman">Oman</option>
  <option value="Pakistan" title="Pakistan">Pakistan</option>
  <option value="Palau" title="Palau">Palau</option>
  <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
  <option value="Panama" title="Panama">Panama</option>
  <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
  <option value="Paraguay" title="Paraguay">Paraguay</option>
  <option value="Peru" title="Peru">Peru</option>
  <option value="Philippines" title="Philippines">Philippines</option>
  <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
  <option value="Poland" title="Poland">Poland</option>
  <option value="Portugal" title="Portugal">Portugal</option>
  <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
  <option value="Qatar" title="Qatar">Qatar</option>
  <option value="Réunion" title="Réunion">Réunion</option>
  <option value="Romania" title="Romania">Romania</option>
  <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
  <option value="Rwanda" title="Rwanda">Rwanda</option>
  <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
  <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
  <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
  <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
  <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
  <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
  <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
  <option value="Samoa" title="Samoa">Samoa</option>
  <option value="San Marino" title="San Marino">San Marino</option>
  <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
  <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
  <option value="Senegal" title="Senegal">Senegal</option>
  <option value="Serbia" title="Serbia">Serbia</option>
  <option value="Seychelles" title="Seychelles">Seychelles</option>
  <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
  <option value="Singapore" title="Singapore">Singapore</option>
  <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
  <option value="Slovakia" title="Slovakia">Slovakia</option>
  <option value="Slovenia" title="Slovenia">Slovenia</option>
  <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
  <option value="Somalia" title="Somalia">Somalia</option>
  <option value="South Africa" title="South Africa">South Africa</option>
  <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
  <option value="South Sudan" title="South Sudan">South Sudan</option>
  <option value="Spain" title="Spain">Spain</option>
  <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
  <option value="Sudan" title="Sudan">Sudan</option>
  <option value="Suriname" title="Suriname">Suriname</option>
  <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
  <option value="Swaziland" title="Swaziland">Swaziland</option>
  <option value="Sweden" title="Sweden">Sweden</option>
  <option value="Switzerland" title="Switzerland">Switzerland</option>
  <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
  <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
  <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
  <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
  <option value="Thailand" title="Thailand">Thailand</option>
  <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
  <option value="Togo" title="Togo">Togo</option>
  <option value="Tokelau" title="Tokelau">Tokelau</option>
  <option value="Tonga" title="Tonga">Tonga</option>
  <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
  <option value="Tunisia" title="Tunisia">Tunisia</option>
  <option value="Turkey" title="Turkey">Turkey</option>
  <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
  <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
  <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
  <option value="Uganda" title="Uganda">Uganda</option>
  <option value="Ukraine" title="Ukraine">Ukraine</option>
  <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
  <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
  <option value="United States" title="United States">United States</option>
  <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
  <option value="Uruguay" title="Uruguay">Uruguay</option>
  <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
  <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
  <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
  <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
  <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
  <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
  <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
  <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
  <option value="Yemen" title="Yemen">Yemen</option>
  <option value="Zambia" title="Zambia">Zambia</option>
  <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                </select>
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  City
                  <input name="city" class="form-control" id="focusedInput" type="text" placeholder = "City">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  State
                  <input name="state" class="form-control" id="focusedInput" type="text" placeholder = "State">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Phone
                  <input name="phone" class="form-control" id="focusedInput" type="text" placeholder = "Phone Number">
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Email Address
                  <input name="email" class="form-control" id="focusedInput" type="text" placeholder = "Email Address">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Bank Name
                   <input name="bank_name" class="form-control" id="focusedInput" type="text" placeholder = "Bank Name">
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Number
                  <input name="acct_number" class="form-control" id="focusedInput" type="text" placeholder = "Account Number" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Type
                  <select class="form-control" name="acctype" required>
                  <option></option>
                  <option value="Checking Account">Checking Account</option>
                  <option value="Saving Account">Saving Account</option>
                  <option value="Fixed Deposit Account">Fixed Deposit Account</option>
              </select> 
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Currency Type
                  <select class="form-control" name="currency_type">
                  <option></option>
                  <option value="€">€</option>
                  <option value="£">£</option>
                  <option value="$">$</option>
                  </select>
                  </div>


                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Pin
                  <input name="pin" class="form-control" id="focusedInput" type="text" placeholder = "Pin Number" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Cot Code
                  <input name="cot" class="form-control" id="focusedInput" type="text" placeholder = "COT Code" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Tax Code
                  <input name="tax_code" class="form-control" id="focusedInput" type="text" placeholder = "Tax Code" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account IMF Code
                  <input name="imf_code" class="form-control" id="focusedInput" type="text" placeholder = "IMF Code" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Image/Picture
                  <input name="image" class="form-control" id="focusedInput" type="file" placeholder = "Profile Picture" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Account Password
                  <input name="pass" class="form-control" id="focusedInput" type="text" placeholder = "Enter Password" required>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  Home Address
                  <textarea name="address" placeholder="Address" class="form-control"></textarea>
                  </div>
                  
                  <br>
                  <div class="">
                    <br>
                  </div>
            
                </div>
             
              <br><br><div align="Center">
                <button type="submit" id="save" name="save" class="btn btn-round btn-primary align-center"><i class="fa fa-paper-plane"></i> Submit</button>
                </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
      

            <br>

            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include('footNote.php')?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>

  <?php
$code = '';
                include('dbcon.php');
        
        if (isset($_POST['save'])){
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $username = $_POST['username'];
          $password = $_POST['password'];


$query = mysqli_query($conn, "select * from users where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ");
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('User Details Already Exist');
</script>
<?php
}else{
mysqli_query($conn, "insert into users (username,password,firstname,lastname,userlevel) values('$username','$password','$firstname','$lastname', '1')");

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add User $username')");
?>
<script>
window.location = "admin-user.php";
</script>
<?php
}
}

?>
  // 
</html>