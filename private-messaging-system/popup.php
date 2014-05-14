<!--Code for popup box-->


<div id="test" class="popup" >
<form action="index.php" name="myform" id="myform" method="post">
<p>To:<input name="to" id="to" size="40" /></p>
<p>Subject: <input name="subject" id="subject" type="text" size="40" maxlength="80" /></p>
<p>
Body:<br>
<div id="wysiwyg_cp" style="padding:8px; width:700px;">
<input type="button" onclick="iBold()" value="B">
<input type="button" onclick="iUnderline()" value="U">
<input type="button" onclick="iItalic()" value="I">
<input type="button" onclick="iFontSize()" value="Text Size">

</div>
<!-- Hide(but keep)your normal textarea and place in the iFrame replacement for it -->
<textarea style="display:none;" name="myTextArea" id="myTextArea" cols="100" rows="14"></textarea>
<iframe name="richTextField" id="richTextField" style="border:#000000 1px solid; width:500px; height:300px;"></iframe>
<!-- End replacing your normal textarea -->
<br /><br /><input name="myBtn" type="button" value="Submit Data" onclick="javascript:submit_form();" />
</p>

</form>

<!--<div class="cancel" onclick="closePopup();">Log</div>-->
</div>

<!--end of popup-->

<!--textarea code-->
