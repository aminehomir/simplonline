<?php

if(isset($_POST['submit'])){
  
    save();
   
}




function save(){

   global $wpdb;
    $username= $_POST['username'];  
    $option= $_POST['option'];
    $description= $_POST['description'];
    $tablename = $wpdb->prefix."myplugin0";
    
         

    
    if(empty($_POST['username']) || empty($_POST['option'] || empty($_POST['description']) ))
    {
         
    }
    else
    {
         $query="insert into ".$tablename."(nom,option,description) VALUES ('$username', '$option', '$description')";
         $wpdb->query($query);
        
    }
}
    


 
?>

<style type="text/css">
    .form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
    
    </style>
   
 <?php if(isset($_POST['submit'])):?>
  <div id="message" class="updated below-h2">
    <p>Saved !</p>
  </div>
  <?php endif;?>
   
   <form action="" method="post">
<ul class="form-style-1">
    <li><label>Username <span class="required">*</span></label><input type="text" name="username" class="field-divided" placeholder="username" /> </li>
    
    <li>
        <label>Theme</label>
        <select name="option" class="field-select">
        <option value="noir">noir</option>
        <option value="blanc">blanc</option>
       
        </select>
    </li>
    <li>
        <label>Description <span class="required">*</span></label>
        <textarea name="description" id="field5" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <input type="submit" name="submit" value="Register" />
    </li>
</ul>
</form>
  
    
