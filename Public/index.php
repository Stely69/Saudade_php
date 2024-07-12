<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SAUDAGE</title>
  <link rel="stylesheet" href="css/carga.css">
</head>
<body>
  <section id="global">
    <div id="top" class="mask">
      <div class="plane"></div>
    </div>
    <div id="middle" class="mask">
      <div class="plane"></div>
    </div>
    <div id="bottom" class="mask">
      <div class="plane"></div>
    </div>
    <font size=""><p>SAUDAGE</p></font>
  </section>
  <script>
    function redirectPage(url) {
        window.location.href = url;
    }
    setTimeout(function(){
        document.body.classList.add('fade-out');
        setTimeout(function() {
            redirectPage('../Views/inicio.php'); 
        }, 1000);
    }, 3000);
  </script>
</body>
</html>
