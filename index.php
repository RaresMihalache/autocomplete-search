<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Autocomplete Search </title>
        <script src="script.js"></script>
    </head>
    <body>
        <div id-="main">
            <!--Make sure the form has the autocomplete function switched off:-->
            <form autocomplete="off" action="page.php" method="get">
                <div class="autocomplete" style="width:300px;">
                <input id="myInput" type="text" name="myCountry" placeholder="Country">
                <script>
                    autocomplete(document.getElementById("myInput"), countries);
                </script>    
                </div>
                <input type="submit" value="Send">
            </form>
            <div id="footer">
                <div onclick="window.open('https://github.com/raresmihalache/autocomplete-search')" id="footer-git-icon">
                    <i class="fab fa-github"></i>
                </div>
            </div>
        </div>
    </body>
</html>
  