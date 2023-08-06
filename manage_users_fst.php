<?php
    require_once('../connection.php');
    $con=mysqli_connect("localhost","root","","crs");
if(!$con)
	die("Connection failed");
    $rst=mysqli_query($con,"select * from examform");

    if(mysqli_num_rows($rst)>0)
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Manage Users</title>
    <script src="jquery.js"></script>
    <script lang="javascript" src="xlsx.full.min.js"></script>
    <script lang="javascript" src="FileSaver.min.js"></script>
    <script>
        function DeleteUser(id)
        {
            if(confirm("Are You Sure..? You Want To Delete this User...?"))
            {
                window.location.href="delete_user_fst.php?id="+id;
            }
        }
    </script>
    <style type = "text/css">
        @import url('https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Patrick+Hand|Volkhov|Handlee|PT+Serif|Numans|Bitter|Odibee+Sans|Simonetta|Trade+Winds&display=swap');

        .mcon{
            font-family:'Acme';
        }
       
        
        .mtab{
            font-family:'Acme';
        }

        .mybtn{
            background-color: rgba(0,110,110,0.9);
            border: 2px solid black;
            border-radius: 5px;
            color: black;
        }

        .mybtn:hover{
            width: 15%;
            background-color: rgba(0,128,128,0.9);
            cursor: pointer;
            border:3px solid black;
            color: white;
            
        }

        table th{
            text-align: center;
        }

        table td{
            text-align: center;
        }
    </style>
</head>
<body>
    <img id="head" width="500px" style = "font-family:'PT Serif';" left:10 align='left' src = "../css/images/college.jpg">
    <br /><br /><br /><br /><br /><br />
    <h2 style="color:#ff0000;font-family:'Acme';" class = "page-header"><u>Students Registered For Examination</u></h2>
    
    <div class = "col-lg-12 mcon text-center">
        <table id="mytab1" width = "100%" class="mtab table table-bordered table-hover table-responsive" style="margin-top:0;">
    	    <tr style = "background-color:rgba(128,128,147,0.5);color:black;font-size:25px;font-family: 'PT serif';" class="table-info">
                <th style='border:2px solid black'>Sr. No.</th>
                <th style='border:2px solid black'>Name</th>
		        <th style='border:2px solid black'>Mother's Name</th>
		        <th style='border:2px solid black'>DOB</th>
		        <th style='border:2px solid black'>Gender</th>
		        <th style='border:2px solid black'>Email</th>
		        <th style='border:2px solid black'>Phone No. </th>
		        <th style='border:2px solid black'>Address</th>
                <th style='border:2px solid black'>Caste</th>
		        <th style='border:2px solid black'>Exam Name</th>
		        <th style='border:2px solid black'>Seat No. </th>
		        <th style='border:2px solid black'>Exam Month</th>
                <th style='border:2px solid black'>College</th>
		        <th style='border:2px solid black'>Board</th>
		        <th style='border:2px solid black'>Result </th>
		        <th style='border:2px solid black'>Course</th>
                <th style='border:2px solid black'>Year</th>
		        <th style='border:2px solid black'>Semester</th>
		    </tr>
            <?php
                $i=1;
                while($row = mysqli_fetch_array($rst)) 
                    {
                        echo "<tr style='color:black;border-bottom:2px solid black;font-size:18px;border-right:2px solid black;border-top:2px solid black;border-left:2px solid black;'>";
                        echo "<td style='border:2px solid black'>".$i."</td>";
                        echo "<td style='border:2px solid black'>".$row['fname'].' '.$row['mname'].' '.$row['lname']."</td>";
                        echo"<td style='border:2px solid black'>".$row['mother_name']."</td>";
                        echo"<td style='border:2px solid black'>".$row['dob']."</td>";
                        echo"<td style='border:2px solid black'>".$row['gender']."</td>";
                        echo"<td style='border:2px solid black'>".$row['email']."</td>";
                        echo"<td style='border:2px solid black'>".$row['phone_num']."</td>";
                        echo"<td style='border:2px solid black'>".$row['adrress']."</td>";
                        echo"<td style='border:2px solid black'>".$row['caste']."</td>";
                        echo"<td style='border:2px solid black'>".$row['exam_name']."</td>";
                        echo"<td style='border:2px solid black'>".$row['seat_num']."</td>";
                        echo"<td style='border:2px solid black'>".$row['month_year']."</td>";
                        echo"<td style='border:2px solid black'>".$row['college']."</td>";
                        echo"<td style='border:2px solid black'>".$row['board']."</td>";
                        echo"<td style='border:2px solid black'>".$row['result']."</td>";
                        echo"<td style='border:2px solid black'>".$row['course']."</td>";
                        echo"<td style='border:2px solid black'>".$row['sel_year']."</td>";
                        echo"<td style='border:2px solid black'>".$row['sem']."</td>";
            ?>
                
                        
            <?php
                echo "<tr />";
                $i++;
                
                }
            ?> 
        </table>
        <button id = "mbtn-a" class = "mybtn" style = "padding:10px;font-size:20px;">Create Excel</button>
        <?php
                }
                else{
                    echo "<h2 style='color:red;color:#ff0000;font-family:Acme;position:relative;top:35px;left:30%;''>No Students have Registered For Examination.</h2>";
    
                }
            ?>
    </div>
<script>
        var wb = XLSX.utils.table_to_book(document.getElementById('mytab1'), {sheet:"Sheet JS"});
        var wbout = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});
        function s2ab(s) {
                        var buf = new ArrayBuffer(s.length);
                        var view = new Uint8Array(buf);
                        for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                        return buf;
        }
        $("#mbtn-a").click(function(){
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'fastrack.xlsx');
        });
</script>
</script>

</body>
</html>