<form id='register' action='insert.php' method='post'
    accept-charset='UTF-8' enctype='multipart/form-data'>

<h2>Register</h2>
<p>
<label for='FirstName' >First Name*:</label>
<input type='text' name='FirstName' id='FirstName' maxlength='30'/>

<p>
<label for='Lastname' >Last Name*:</label>
<input type='text' name='LastName' id='LastName' maxlength="30" />
</p>

<p>
<label for='Email' >Email Address*:</label>
<input type='text' name='Email' id='Email' maxlength="50" />
</p>

<p>
<label for='Password' >Password*:</label>
<input type='password' name='Password' id='Password' maxlength="30" />
</p>

<p>
<label for='Password2' >Re-enter Password* :</label>
<input type='password' name='Password2' id='Password2' maxlength="30" />
</p>

<p>
<label for='School' >Employment:</label>
<input type='text' name='School' id='School' maxlength="50"/>

<p>
<label for='Job' >Job Title:</label>
<input type='text' name='Job' id='Job' maxlength="50"/>
</p>

<div id='checkbox'>
<p>Teaching Level*: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <br/>
<input type="checkbox" name="skill[]" id ='1' value="Elementary">Elementary<br/>
<input type="checkbox" name="skill[]" id ='2' value="Junior High">Junior High<br/>
<input type="checkbox" name="skill[]" id ='3' value="High School">High School<br/>
<input type="checkbox" name="skill[]" id ='4' value="University">University<br/>
<input type="checkbox" name="skill[]" id ='5' value="Community Chorus">Community Chorus<br/>
</p>
</div>


<p id='fileUpload'>
<label for='myfile'>Profile Picture:</label>
<input type='file' name="myfile"/>
</p>

<input type='submit' name="submit" value='Submit' />

</form>

