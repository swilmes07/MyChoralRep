
<form id='update' action='editProfile.php' method='post'
    accept-charset='UTF-8'>

<h2>Please Update Your Information</h2>

<p>
<label for='FirstName' >First Name*:</label>
<input type='text' name='FirstName' id='FirstName' value='<?php echo $login_name?>' maxlength='30'/>
</p>

<p><label for='Lastname' >Last Name*:</label>
<input type='text' name='LastName' id='LastName' value='<?php echo $login_last?>' maxlength="30" />
</p>

<p>
<label for='Email' >Email Address*:</label>
<input type='text' name='Email' id='Email' value='<?php echo $login_session?>' maxlength="50" />
</p>

<p>
<label for='Password' >Password*:</label>
<input type='password' name='Password' id='Password' value='<?php echo $login_pass?>' maxlength="30" />
</p>

<p>
<label for='Password2' >Re-enter Password*:</label>
<input type='password' name='Password2' id='Password2' value='<?php echo $login_pass?>' maxlength="30" />
</p>

<p>
<label for='School' >Employment:</label>
<input type='text' name='School' id='School' value='<?php echo $login_school?>'maxlength="50"/>

<p>
<label for='Job' >Job Title:</label>
<input type='text' name='Job' id='Job' value='<?php echo $login_job?>'maxlength="50"/>
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
<input type='submit' name='Submit' value='Submit' />

</form>
