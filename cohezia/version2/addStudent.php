<?php
require 'dbconnection.php';
include 'AddnListLink.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

  $('a[data-modal-id]').click(function(e) {
    e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
    var modalBox = $(this).attr('data-modal-id');
    $('#'+modalBox).fadeIn($(this).data());
  });  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
  $(".modal-box, .modal-overlay").fadeOut(500, function() {
    $(".modal-overlay").remove();
  });
});
 
$(window).resize(function() {
  $(".modal-box").css({
    top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
    left: ($(window).width() - $(".modal-box").outerWidth()) / 2
  });
});
 
$(window).resize();
 
});
</script>

<div id="popup" class="modal-box">  
    <a href="#" class="js-modal-close close">X</a>
	<div class="modal-body">	
		<p>Read the terms and condition below</p>
	</div>
</div>

<form name="frm" action="" method="post">
	<table>
		<tr>
			<td>Student Name:</td>
			<td><input type="text" name="sname" id="sid"></td>
		</tr>
		<tr>
			<td>Roll No:</td>
			<td><input type="text" name="rollno" id="rollno"></td>
		</tr> 
		<tr>
			<td>Class:</td>
			<td><input type="text" name="class" id="class"></td>
		</tr> 
		<tr>
			<td>Phone No:</td>
			<td><input type="text" name="phone" id="phone"></td>
		</tr> 
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" id="email"></td>
		</tr> 
		<tr>
			<td>Gender:</td>
			<td><input type="text" name="sname" id="sid"></td>
		</tr> 
		<tr>
			<td colspna="2"><input type="checkbox" name="terms" value="terms">
				<a class="js-open-modal" href="#" data-modal-id="popup">Agree Terms and conditions</a>
			</td>
		</tr>
		<tr>
			<td colspna="2"><input type="submit" name="submit" value="Add Student"></td>
		</tr>
	</table>

</form>