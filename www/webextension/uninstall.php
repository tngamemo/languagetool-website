<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "other";
    $title = "Uninstallation successful";
    ?>
    <?php include("../../include/header.php"); ?>
    <script>
        function checkLength() {
            var textArea = document.getElementById("message");
            if (textArea.value.length < 15) {
                alert("Please be more specific and describe *exactly* what the issue was");
                return false;
            }
            return true;
        }
        function show(id, messageFieldId) {
            hide('site-fail-detail', 'message1');
            hide('error-not-found-detail', 'message2');
            hide('too-many-false-alarms-detail', 'message3');
            hide('something-else-detail', 'message4');
            var elem = document.getElementById(id);
            if (elem) {
                elem.style.display = 'block';
                document.getElementById(messageFieldId).required = true;
            }
        }
        function hide(id, messageFieldId) {
            var elem = document.getElementById(id);
            if (elem) {
                elem.style.display = 'none';
                document.getElementById(messageFieldId).required = false;
            }
        }
    </script>
    <style>
        .detail {
            margin-left: 20px;
            display: none;
        }
        .detailBox {
            width: 300px;
            height: 100px
        }
        .detailInput {
            width: 400px;
        }
    </style>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

    <h1>Uninstallation successful</h1>

    <p>Sorry to see you've uninstalled our extension. Please
    <noscript>email the developer (turn on Javascript to see the email address)</noscript>
    <script>
    <!--
      var firstPart = "daniel.naber";
      var lastPart = "languagetool.org";
      document.write("<a href='mail" + "to:" + firstPart + "@" + lastPart + "'>email the developer<" + "/a>");
    // -->
    </script>
    if there was a problem. We'd like to fix it. Or tell us your feedback here:</p>

    <form action="submit-feedback.php" method="post" onsubmit="return checkLength()">
        <label><input name="reason" value="site-fail" type="radio" onclick="show('site-fail-detail', 'message1')"> it did not work on a site I use</label><br>
        <div id="site-fail-detail" class="detail">
            <input class="detailInput" id="message1" name="message1" placeholder="Link to the site that didn't work"><br>
        </div>

        <label><input name="reason" value="error-not-found" type="radio" onclick="show('error-not-found-detail', 'message2')"> it did not find errors</label><br>
        <div id="error-not-found-detail" class="detail">
            <textarea class="detailBox" id="message2" name="message2" placeholder="Please add the sentence or text for which no errors where found"></textarea><br>
        </div>

        <label><input name="reason" value="too-many-false-alarms" type="radio" onclick="show('too-many-false-alarms-detail', 'message3')"> found too many 'errors' that are not really errors</label><br>
        <div id="too-many-false-alarms-detail" class="detail">
            <textarea class="detailBox" id="message3" name="message3" placeholder="Please add the sentence or text for which incorrect errors were reported"></textarea><br>
        </div>

        <label><input name="reason" value="something-else" type="radio" onclick="show('something-else-detail', 'message4')"> something else</label><br>
        <div id="something-else-detail" class="detail">
            <textarea class="detailBox" id="message4" name="message4" placeholder="Please describe *exactly* what didn't work as expected."></textarea><br>
        </div>
        <input required style="width:300px" type="text" name="email" placeholder="your email address"><br>
        <input style="margin-top: 10px;margin-bottom: 15px" type="submit" value="Submit feedback">
    </form>
    <!--
    <iframe src="https://www.speakpipe.com/widget/inline/am45pg807w9he467icv1xj45wq4i0lfp" frameborder="0" width="100%" height="180px"></iframe>
    -->

    <p>You can always use the latest version of LanguageTool without installing
    anything on <a href="/">our homepage</a>. To stay up to date on news about
    LanguageTool, <a href="/contact/newsletter.php">subscribe to our newsletter</a>.</p>
    
</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
