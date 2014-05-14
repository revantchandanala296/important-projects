
function iFrameOn() {
    richTextField.document.designMode = 'On';
}
function openPopup() {
    document.getElementById('test').style.display = 'block';
}

// This is a javascript file named wysiwyg.js

function iBold() {
    richTextField.document.execCommand('bold', false, null);
}
function iUnderline() {
    richTextField.document.execCommand('underline', false, null);
}
function iItalic() {
    richTextField.document.execCommand('italic', false, null);
}
function iFontSize() {
    var size = prompt('Enter a size 1 - 7', '');
    richTextField.document.execCommand('FontSize', false, size);
}

function submit_form() {
    var theForm = document.getElementById("myform");
    theForm.elements["myTextArea"].value = window.frames['richTextField'].document.body.innerHTML;
    theForm.submit();
}

/**function change() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("insertText").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "file.php", true);
    xmlhttp.send();
}**/

/**function closePopup() {
    document.getElementById('test').style.display = 'none';
}**/
