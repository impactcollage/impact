<!DOCTYPE html>
<html>
<head><h2>IMPACT POLYTECHNIC</h2>
</head>
<body>
<form action="" method="POST">
<br>
     <input type="text" name="regno" placeholder="REG NO">
     <br>
     <br>
     <SELECT name="course">
     <option value='civil'>civil</option>
     <option value='ec'>electrical </option>
     <option value='ee'>electrical and electronics</option>
     <option value='cs'>computer science</option>
     <option value='inf'>information and science</option>
     <option value='' selected>Select a sem</option>
    </SELECT>
     <br>
     <br>
     <SELECT name="sem">
<option value='1st'>1st sem</option>
<option value='2nd'>2nd sem</option>
<option value='3rd'>3rd sem</option>
<option value='4th'>4th sem</option>
<option value='5th'>5th sem</option>
<option value='6th'>6th sem</option>
<option value='' selected>Select a sem</option>
</SELECT>
     <button type="submit" name="submit">SUBMIT</button>
     <br>
     <br>
     <form action="atendencelist" method="POST">    
     <ul>ATENDENCE LIST</ul>
     <SELECT name="month">
     <option value='jan'>January</option>
<option value='feb'>February</option>
<option value='mar'>March </option>
<option value='april'>April </option>
<option value='may'>May </option>
<option value='june'>June </option>
<option value='july'>July</option>
<option value='aug'>August </option>
<option value='sept'>September </option>
<option value='oct'>October </option>
<option value='nov'>November </option>
<option value='dec'>December  </option>
<option value='' selected>Select a month</option>
</SELECT>
<button type="submit" name="submiti">SUBMIT</button>
</form>
<form class="iamarks" method="POST">
<ul>IA MARKS LIST</ul>
<SELECT name="sem">
<option value='1st'>1st sem</option>
<option value='2nd'>2nd sem</option>
<option value='3rd'>3rd sem</option>
<option value='4th'>4th sem</option>
<option value='5th'>5th sem</option>
<option value='6th'>6th sem</option>
<option value='' selected>Select a sem</option>
</SELECT>
     <button type="submit" name="submit">SUBMIT</button>
     </form>
    
</body>
</html>