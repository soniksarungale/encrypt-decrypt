function copyToClipboard(elem) {
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);

    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }

    if (isInput) {
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        target.textContent = "";
    }

		$("#copied").fadeIn();


	var delayMillis = 1000;

setTimeout(function() {
$("#copied").fadeOut();
}, delayMillis);
    return succeed;
}




$(".eybox").click(function(){
$(".eyndisplay").show();
$(".table").hide();
$(".eybox").addClass('active');
$(".dybox").removeClass("active");
$(".deydisplay").hide();
});
$(".dybox").click(function(){
$(".dybox").addClass('active');
$(".eybox").removeClass("active");
$(".deydisplay").show();
$(".eyndisplay").hide();
$(".table").hide();
});
function cheackatt(){
var att_type=document.getElementById("atttype").value;
if(att_type=="numatt"){
$(".numrange").show();
}
else{
$(".numrange").hide();
}
}
$(document).ready(function () {
    $('#dform').on('submit', function(e) {
        e.preventDefault();
		$(".loading").fadeIn();;
		$.ajax({
            url : "crack.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $(".doutput").html(data);
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });

    });
});
