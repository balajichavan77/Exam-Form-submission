<HTML>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="datepicker.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
  <script language="javascript" type="text/javascript">
     var subjectObject = {
  "BCA": {
    "1st Year": ["I", "II"],
    "2nd Year": ["III", "IV"],
    "3rd Year": ["V", "VI"]    
  },
  "BCS": {
    "1st Year": ["I", "II"],
    "2nd Year": ["III", "IV"],
    "3rd Year": ["V", "VI"]    
  },
  "BT": {
    "1st Year": ["I", "II"],
    "2nd Year": ["III", "IV"],
    "3rd Year": ["V", "VI"]    
  },
  "BI": {
    "1st Year": ["I", "II"],
    "2nd Year": ["III", "IV"],
    "3rd Year": ["V", "VI"]    
  }

}
window.onload = function() {
  var subjectSel = document.getElementById("course");
  var topicSel = document.getElementById("year");
  var chapterSel = document.getElementById("sem");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
function showsubject()
   {
       var course=document.getElementById('course').value;
       var year=document.getElementById('year').value;
       var sem=document.getElementById('sem').value;
       
       if(sem=="I")
       {
         if(course=="BCA")
         {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>C Programming</td><td>BCA-101</td></tr> <tr><th scope='row'>2</th><td>Office Automation</td><td>BCA-102</td></tr> <tr><th scope='row'>3</th><td>Fundamental of Computer Application</td><td>BCA-103</td></tr> <tr><th scope='row'>4</th><td> Element of Statistics</td><td>BCA-104</td></tr> <tr><th scope='row'>5</th><td>Communication Skills</td><td>BCA-105</td></tr> <tr><th scope='row'>6</th><td>Lab Course-1: C Programming</td><td>BCA-106</td></tr> <tr><th scope='row'>7</th><td>Lab Course-2: Office Automation</td><td>BCA-107</td></tr></tbody></table>";
          return false;
         }
         else if(course=="BCS")
         {
          document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Basic of Computer Science</td><td>BCS-101</td></tr> <tr><th scope='row'>2</th><td>Intro to Prog Lang using C-1</td><td>BCS-102</td></tr> <tr><th scope='row'>3</th><td>Web Technologies</td><td>BCS-103</td></tr> <tr><th scope='row'>4</th><td>Fundamental of Digital Electronics</td><td>BCS-104</td></tr> <tr><th scope='row'>5</th><td>Communication Skills-1</td><td>BCS-105</td></tr> <tr><th scope='row'>6</th><td>Lab Course-1: C Programming-1</td><td>BCS-106</td></tr> <tr><th scope='row'>7</th><td>Lab Course-2: Web Tech & O.A.</td><td>BCS-107</td></tr></tbody></table>";
          return false;
         }
         else
         {
          document.getElementById('subject').innerHTML="";
         }
       }
       else if(sem=="II")
       {
        if(course=="BCA")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Business Accounting with Tally</td><td>BCA-201</td></tr> <tr><th scope='row'>2</th><td>Organizational Behaviour</td><td>BCA-202</td></tr> <tr><th scope='row'>3</th><td>Web Technology</td><td>BCA-203</td></tr> <tr><th scope='row'>4</th><td>Web Technology</td><td>BCA-204</td></tr> <tr><th scope='row'>5</th><td>E-Commerce</td><td>BCA-205</td></tr> <tr><th scope='row'>6</th><td>Lab Course-3: Tally ERP9</td><td>BCA-206</td></tr> <tr><th scope='row'>7</th><td>Lab Course-4: Web Technology</td><td>BCA-207</td></tr></tbody></table>";
         return false;
        }
        else if(course=="BCS")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Operating System</td><td>BCS-201</td></tr> <tr><th scope='row'>2</th><td>Intro to Prog Lang using C-2</td><td>BCS-202</td></tr> <tr><th scope='row'>3</th><td>Data Management System</td><td>BCS-203</td></tr> <tr><th scope='row'>4</th><td>8085 Microprocessor</td><td>BCS-204</td></tr> <tr><th scope='row'>5</th><td>Communication Skills-2</td><td>BCS-205</td></tr> <tr><th scope='row'>6</th><td>Lab Course-3: C Programming-2</td><td>BCS-206</td></tr> <tr><th scope='row'>7</th><td>Lab Course-4: DBMS & DTP</td><td>BCS-207</td></tr></tbody></table>";
         return false;
        } 
       }
       else if(sem=="III")
       {
        if(course=="BCA")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Programming in C++</td><td>BCA-301</td></tr> <tr><th scope='row'>2</th><td>Operating System Concepts</td><td>BCA-302</td></tr> <tr><th scope='row'>3</th><td>Database Management System</td><td>BCA-303</td></tr> <tr><th scope='row'>4</th><td>Business Application and ERP</td><td>BCA-304</td></tr> <tr><th scope='row'>5</th><td>Numerical Aptitude</td><td>BCA-305</td></tr> <tr><th scope='row'>6</th><td>Lab Course-1: C++ Programming</td><td>BCA-306</td></tr> <tr><th scope='row'>7</th><td>Lab Course-1: DBMS</td><td>BCA-307</td></tr></tbody></table>";
         return false;
        }
        else if(course=="BCS")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Object Oriented Programming</td><td>BCS-301</td></tr> <tr><th scope='row'>2</th><td>Computer Networks</td><td>BCS-302</td></tr> <tr><th scope='row'>3</th><td>Data Structure and Algorithms</td><td>BCS-303</td></tr> <tr><th scope='row'>4</th><td>Discrete Mathematics</td><td>BCS-304</td></tr> <tr><th scope='row'>5</th><td>Numerical Abilities</td><td>BCS-305</td></tr> <tr><th scope='row'>6</th><td>Lab Course-1: C++ Programming</td><td>BCS-306</td></tr> <tr><th scope='row'>7</th><td>Lab Course-2: Data Structure & Algorithm</td><td>BCS-307</td></tr></tbody></table>";
         return false;
        }  
       }
       else if(sem=="IV")
       {
        if(course=="BCA")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Programming in Java</td><td>BCA-401</td></tr> <tr><th scope='row'>2</th><td>Data Structure and Algorithm</td><td>BCA-402</td></tr> <tr><th scope='row'>3</th><td>RDBMS</td><td>BCA-403</td></tr> <tr><th scope='row'>4</th><td>Computer Graphics</td><td>BCA-404</td></tr> <tr><th scope='row'>5</th><td>Logical Reasoning</td><td>BCA-405</td></tr> <tr><th scope='row'>6</th><td>Lab Course-3: Java Programming</td><td>BCA-406</td></tr> <tr><th scope='row'>7</th><td>Lab Course-4: RDBMS</td><td>BCA-407</td></tr></tbody></table>";
         return false;
        }
        else if(course=="BCS")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Programming in Java</td><td>BCS-401</td></tr> <tr><th scope='row'>2</th><td>Software Engineering</td><td>BCS-402</td></tr> <tr><th scope='row'>3</th><td>RDBMS</td><td>BCS-403</td></tr> <tr><th scope='row'>4</th><td>Principle of Compiler Design</td><td>BCS-404</td></tr> <tr><th scope='row'>5</th><td>Logical Reasoning</td><td>BCS-405</td></tr> <tr><th scope='row'>6</th><td>Lab Course-3: RDBMS</td><td>BCS-406</td></tr> <tr><th scope='row'>7</th><td>Lab Course-4: Java Programming</td><td>BCS-407</td></tr></tbody></table>";
         return false;
        } 
       }
       else if(sem=="V")
       {
         if(course=="BCA")
         {
          document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>System Analysis and Design</td><td>BCA-501</td></tr> <tr><th scope='row'>2</th><td>Web Development and PHP Programming</td><td>BCA-502</td></tr> <tr><th scope='row'>3</th><td>Mobile Application Development</td><td>BCA-503</td></tr> <tr><th scope='row'>4</th><td>Linux Operating System</td><td>BCA-504</td></tr> <tr><th scope='row'>5</th><td>Environmental Studies</td><td>BCA-505</td></tr> <tr><th scope='row'>6</th><td>Lab Course-1: PHP Programming</td><td>BCA-506</td></tr> <tr><th scope='row'>7</th><td>Lab Course-2: Mobile Application Development</td><td>BCA-507</td></tr></tbody></table>";
          return false;
         }
         else if(course=="BCS")
         {
          document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Windows Programming</td><td>BCS-501</td></tr> <tr><th scope='row'>2</th><td>Python</td><td>BCS-502</td></tr> <tr><th scope='row'>3</th><td>Data Science</td><td>BCS-503</td></tr> <tr><th scope='row'>4</th><td>System Analysis and Design</td><td>BCS-504</td></tr> <tr><th scope='row'>5</th><td>Software Testing</td><td>BCS-505</td></tr> <tr><th scope='row'>6</th><td>Lab Course-1: Windows Programming</td><td>BCS-506</td></tr> <tr><th scope='row'>7</th><td>Lab Course-2: Python</td><td>BCS-507</td></tr></tbody></table>";
          return false;
         }
       }
       else if(sem=="VI")
       {
        if(course=="BCA")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Python</td><td>BCA-601</td></tr> <tr><th scope='row'>2</th><td>Windows Programming</td><td>BCA-602</td></tr> <tr><th scope='row'>3</th><td>Software Engineering</td><td>BCA-603</td></tr>  <tr><th scope='row'>4</th><td>Lab Course-4: Python</td><td>BCA-604</td></tr> <tr><th scope='row'>5</th><td>Lab Course-4: Windows Programming</td><td>BCA-605</td></tr></tbody></table>";
         return false;
        }
        else if(course=="BCS")
        {
         document.getElementById('subject').innerHTML="<table class='table table-striped table-hover'><thead><tr><th scope='col'>Sr. no.</th><th scope='col'>SUBJECT</th><th>Code</th></tr></thead><tbody><tr><th scope='row'>1</th><td>Linux</td><td>BCS-601</td></tr> <tr><th scope='row'>2</th><td>Android</td><td>BCS-602</td></tr> <tr><th scope='row'>3</th><td>Networking Essential</td><td>BCS-603</td></tr> <tr><th scope='row'>4</th><td>Fundamental Image Processing</td><td>BCS-604</td></tr> <tr><th scope='row'>5</th><td>Lab Course-3: Android</td><td>BCS-605</td></tr> <tr><th scope='row'>6</th><td>Lab Course-4: Fundamental Image Processing</td><td>BCS-606</td></tr></tbody></table>";
         return false;
        }
       }
      }
    

      
    $(function() {
        $('.date-picker').datepicker( {
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) { 
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, month, 1));
            },
            beforeShow : function(input, inst) {
                var datestr;
                if ((datestr = $(this).val()).length > 0) {
                    year = datestr.substring(datestr.length-4, datestr.length);
                    month = jQuery.inArray(datestr.substring(0, datestr.length-5), $(this).datepicker('option', 'monthNamesShort'));
                    $(this).datepicker('option', 'defaultDate', new Date(year, month, 1));
                    $(this).datepicker('setDate', new Date(year, month, 1));
                }
            }
        });
    });
     
  </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
body {
/* fallback for old browsers */
background: #E2E2E2;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
.input-data{
border:none;
border-bottom: 2px solid;
}
table, th, td {
  border: 1px solid black;
}

.error{
   background:#F2DEDE;
   color: #A94442;
   padding:7px;
   width: 85%;
   border-radius: 5px;
   margin:20px;
}
.success{
   background:#D4EDDA;
   color: #40754C;
   padding:7px;
   width: 85%;
   border-radius: 5px;
   margin:20px;
}

</style>

</head><body>
<section class="vh-200 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-20 col-lg-10 col-xl-15">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-3"></h3>
            <form method="POST" action="examformtry.php">
            <?php if(isset($_GET['error'])) { ?>
                 <p class="error"><?php echo $_GET['error']; ?></p>
                 <?php } ?>

                 <?php if(isset($_GET['success'])) { ?>
                 <p class="success"><?php echo $_GET['success']; ?></p>
                 <?php } ?>

              <div class="row">
                <CENTER STYLE="font-size: x-large;text-align: center; font-family: 'Times New Roman', Times, serif; color: black;"><b>SWAMI RAMANAND TEERTH MARATHWADA UNIVERSITY,</b></CENTER>
                <CENTER STYLE="font-size: x-large;text-align: center; font-family: 'Times New Roman', Times, serif; color: black;"><b> NANDED - 431605. </b></CENTER>
                <div class="input-data p-1">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Application Form for Examination to be held in Summer/Winter 
                <input type="text" size="8" name="exam_year" placeholder="Enter Year...." required>
                </div>
                
                <div class="col-md-4 mb-4 p-3">

                  <div class="form-outline">
                    <input type="text" style="font-size:20px" id="firstName" name="fname" class="form-control form-control-lg" required />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4 p-3">

                  <div class="form-outline">
                    <input type="text"  style="font-size:20px" id="lastName" name="mname" class="form-control form-control-lg" required />
                    <label class="form-label" for="lastName">Middle Name</label>
                  </div>

                </div>

                <div class="col-md-4 mb-4 p-3">

                    <div class="form-outline">
                      <input type="text"  style="font-size:20px" id="lastName" name="lname" class="form-control form-control-lg" required/>
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
  
                  </div>
              </div>

              <div class="row">
                <div class="col-md-4 mb-4">

                    <div class="form-outline">
                      <input type="text"  style="font-size:20px" id="lastName" name="mother_name" class="form-control form-control-lg" required/>
                      <label class="form-label" for="lastName">Mother's Name</label>
                    </div>
  
                  </div>

                <div class="col-md-5 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" name="dob"  style="font-size:20px" id="birthdayDate" required/>
                    <label for="birthdayDate" class="form-label">DOB</label>
                  </div>

                </div>
                
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1"><font size="4px"><b>Gender:</b></font> </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender"  id="femaleGender"
                      value="Female" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Other" required/>
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" style="font-size:20px" id="emailAddress" name="email" class="form-control form-control-lg" required/>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="number"  style="font-size:20px" id="phoneNumber" name="phone_num" class="form-control form-control-lg" required/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea class="form-control" name="address" style="font-size:20px" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                  
                  <div class="col-md-12 mb-4">

                    <h6 class="mb-2 pb-1"><font size="4px"><b>CASTE:</b></font> </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input"  type="radio" name="caste" id="sc"
                        value="SC" required />
                      <label class="form-check-label" for="sc">SC</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="caste" id="st"
                        value="ST" required/>
                      <label class="form-check-label" for="st">ST</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="caste" id="nt1"
                        value="NT1" required/>
                      <label class="form-check-label" for="nt1">NT1</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="caste" id="nt2"
                          value="NT2"  required/>
                        <label class="form-check-label" for="nt2">NT2</label>
                      </div>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="caste" id="nt3"
                          value="NT3" required/>
                        <label class="form-check-label" for="nt3">NT3</label>
                      </div>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="caste" id="vj"
                          value="VJ" required/>
                        <label class="form-check-label" for="vj">VJ</label>
                      </div>
                      
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="caste" id="obc"
                          value="OBC"  required/>
                        <label class="form-check-label" for="obc">OBC</label>
                      </div>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="caste" id="sbc"
                          value="SBC" required/>
                        <label class="form-check-label" for="sbc">SBC</label>
                      </div>
    
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="caste" id="other"
                          value="OTHER" required/>
                        <label class="form-check-label" for="other">OTHER</label>
                      </div>
                  </div>
                  <h6 class="mb-2 pb-1"> <font size="4px"><b>DETAILS OF PREVIOUS EXAMINATION:</b></font> </h6>
                  <div class="col-md-4 mb-4 p-3">

                    <div class="form-outline">
                      <select class="form-select" name="exam_name" style="font-size:20px" id="examname" required>
                        <option value="-Select-">-Select-</option>
                        <option>Summer Examination</option>
                        <option>Winter Examination</option>
                      </select> 
                      <label class="form-label" for="examname"> Name of Exam</label>
                    </div>
  
                  </div>
                  <div class="col-md-4 mb-4 p-3">
  
                    <div class="form-outline">
                      <input type="text" style="font-size:20px" id="seatno" name="seat_num" class="form-control form-control-md" required/>
                      <label class="form-label" for="seatno">Seat Number</label>
                    </div>
  
                  </div>
  
                  <div class="col-md-4 mb-4 p-3">
  
                      <div class="form-outline">
                        <input type='month' style="font-size:20px" id='txtDate' name="month_year" class="form-control form-control-md" required/>
                        <label class="form-label" for="txtDate">Month & Year</label>
                      </div>
    
                    </div>
                    <div class="col-md-4 mb-4 p-3">

                        <div class="form-outline">
                          <input type="text" style="font-size:20px" id="college" name="college" class="form-control form-control-md" value="MGM College of CS and IT" />
                          <label class="form-label" for="college"> College</label>
                        </div>
      
                      </div>
                      <div class="col-md-4 mb-4 p-3">
      
                        <div class="form-outline">
                          <input type="text" style="font-size:20px" id="board" name="board" class="form-control form-control-md" value="SRTMUN" />
                          <label class="form-label" for="board">University/Board</label>
                        </div>
      
                      </div>

                      <div class="col-md-4 mb-4 p-3">
      
                          <div class="form-outline">
                            <select class="form-select" name="result" style="font-size:20px" id="result" required/>
                              <option value="-Select-">-Select-</option>
                              <option>PASS</option>
                              <option>FAIL</option>
                            </select>
                            <label class="form-label" for="result">Result</label>
                          </div>
        
                        </div>

                        <div class="col-md-4 mb-4">

                          <select class="form-select" style="font-size:20px" id="course" name="course" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                            <option value="">Select course</option>
                          </select>
                        </div>

                        <div class="col-md-4 mb-4">

                            <select class="form-select" name="year" style="font-size:20px" id="year">
                                <option value="-Select Year-">-Select Year-</option>
                            </select>
                        </div>

                            <div class="col-md-4 mb-4">

                                <select class="form-select" style="font-size:20px" id="sem" name="sem" aria-label="Default select example" onchange="return showsubject()">
                                  <option>--SELECT SEMESTER--</option>
                                  </select>
                                       
                            </div>
                            <p id="subject"></p>
              </div>

              
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit"  />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</HTML>


