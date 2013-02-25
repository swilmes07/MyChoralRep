<form id='register' action='insert.php' method='post'
    accept-charset='UTF-8' enctype='multipart/form-data'>
<fieldset >
<legend>Register</legend>
<label for='FirstName' >First Name*:   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='FirstName' id='FirstName' maxlength='30'/></br></br>

<label for='Lastname' >Last Name*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='LastName' id='LastName' maxlength="30" /></br></br>

<label for='Email' >Email Address*:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='Email' id='Email' maxlength="50" /></br></br>

<label for='Password' >Password*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='password' name='Password' id='Password' maxlength="30" /></br></br>

<label for='Password2' >Re-enter Password* : &nbsp &nbsp &nbsp </label>
<input type='password' name='Password2' id='Password2' maxlength="30" /></br></br>

<label for='School' >School:    &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='School' id='School' maxlength="50"/><br/><br/>

<label for='Job' >Job Title:  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input type='text' name='Job' id='Job' maxlength="50"/><br/><br/>

Teaching Level*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <br/>
<input type="checkbox" name="skill[]" id ='1' value="Elementary">Elementary<br/>
<input type="checkbox" name="skill[]" id ='2' value="Junior High">Junior High<br/>
<input type="checkbox" name="skill[]" id ='3' value="High School">High School<br/>
<input type="checkbox" name="skill[]" id ='4' value="University">University<br/>
<input type="checkbox" name="skill[]" id ='5' value="Community Chorus">Community Chorus<br/>

<br/>
<label for='myfile'>Profile Picture:</label>

File: <input type='file' name="myfile"/>

<br/>
<input type='submit' name="submit" value='Submit' />
</fieldset>
</form>

