<?php
include('common.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>seat booking</title>
<style>
.container
{
    width: 100%;
    height: auto;
    background-image: url("IMG/seats1.jpg");

}
.abc
    {
        display: table-cell;
        border: 1px solid black;
        padding: 20px;
        text-align: center;
        
    }

.abc1
    {
        border:solid 1px black;
        width:700px;
        height:400px;
        box-shadow: 5px 5px 5px red;
        border-radius: 50px 30px;
        background-color:#D3D3D3;
    }
.box
{   
    width:20px;
    length:20px;
    background-color: white;
}
h3
{
    text-shadow: 2px 2px 5px red;
}
i {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}
.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

</style>
</head>


<body>
    <div class="container" >
    
        <div class="abc">
            <img src="IMG/seats2.jpg" width="1300px" height="100px">
        </div>
        <center><span >
        <p style="color:white"><i class="arrow up"></i> screen this side <i class="arrow up"></i></p>
        </span></center>
        

        <div class="seatStructure" ">
<center>
<form method='post' name='template' action="echo.php" >
<table id="seatsBlock" style="width:500px;height:400px; border:2px solid black; background-color:white;
border: 2px solid red;border-radius: 25px;opacity: 0.75; filter: alpha(opacity=50);">
 <p id="notification"></p>
  <tr>
    <td rowspan="20">
      <br><br><div class="smallBox greenBox">Selected Seat</div> <br/>
      <br><br><div class="smallBox redBox">Reserved Seat</div><br/>
      <br><br><div class="smallBox emptyBox">Empty Seat</div><br/>
    </td>
    
    <br/>
  </tr>
  
  <tr>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td></td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
</tr>
  
<tr>
    <td>A</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A3"></td>
    <!-- <td><input type="checkbox" class="seats" value="A3"></td> -->
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A5"></td>
    <td class="seatGap"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="A12"></td>
  </tr>
  
  <tr>
    <td>B</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="B12"></td>
  </tr>
  
  <tr>
    <td>C</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="C12"></td>
</tr>
  
<tr>
    <td>D</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="D12"></td>
</tr>
  
<tr>
    <td>E</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="E12"></td>
</tr>
  
<tr class="seatVGap"></tr>
  
<tr>
    <td>F</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="F12"></td>
</tr>
  
<tr>
    <td>G</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="G12"></td>
</tr>
  
<tr>
    <td>H</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="H12"></td>
</tr>
  
<tr>
    <td>I</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="I12"></td>
</tr>
  
<tr>
    <td>J</td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J1"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J2"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J3"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J4"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J5"></td>
    <td></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J6"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J7"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J8"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J9"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J10"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J11"></td>
    <td><input type="checkbox" class="seats" name='checkboxName[]' value="J12"></td>
</tr>
  
  
</table>

<button class="button" onclick="updateTextArea()"><span>Confirm </span></button>
</center>
</div>
 </form>
<style>
    body
{
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

#Username
{
  border:none;
  border-bottom:1px solid;
}

.screen
{
  width:100%;
  height:20px;
  background:#4388cc;
  color:#fff;
  line-height:20px;
  font-size:15px;
}

.smallBox::before
{
  content:".";
  width:15px;
  height:15px;
  float:left;
  margin-right:10px;
}
.greenBox::before
{
  content:"";
  background:#800000;
}
.redBox::before
{
  content:"";
  background:Red;
}
.emptyBox::before
{
  /* content=" "; */
  box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    background-color:#ccc;
}

.seats
{
  border:1px solid red;background:yellow;
} 



.seatGap
{
  width:40px;
}

.seatVGap
{
  height:40px;
}

table
{
  text-align:center;
}


.Displaytable
{
  text-align:center;
}
.Displaytable td, .Displaytable th {
    border: 1px solid;
    text-align: left;
}

textarea
{
  border:none;
  background:transparent;
}

input[type=checkbox] {
    width:0px;
    margin-right:18px;
}

input[type=checkbox]:before {
    content: "";
    width: 15px;
    height: 15px;
    display: inline-block;
    vertical-align:middle;
    text-align: center;
    box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    background-color:#ccc;
}

input[type=checkbox]:checked:before {
    background-color:#800000;
    font-size: 15px;
}
/* ///////////////////////////// */
.button {
  border-radius: 4px;
  background-color: white;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>

<script>
    function updateTextArea()
    {
    <?php
  
      foreach($_POST['checkboxName'] as $value)
      {
        echo $value.'<br>';
        $i++;
      }
    ?>
    }
  
    </script>
    <?php
include 'footer.php';
 ?>
</body>
</html>