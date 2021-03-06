<?php
    require_once('../config.php');    
?>

<!DOCTYPE html>
<html class="page-index" dir="ltr" lang="en-EN">
<head>
  <meta charset="UTF-8"/>
  <meta name="robots" content="noindex, nofollow">
    
  <title>M A R K — Bookmarklet</title>
    
  <style>
    * {
      padding: 0;
      margin: 0;	
    }
    
    body {
      font-family: 'Eurostile', 'EurostileTEE-Regu', 'Arial', sans-serif;
      font-weight: normal;
      font-size: 40pt;
      letter-spacing: 1px;
    }
    
    div {
      line-height: 100px;
      width: 100%;
      position: absolute;
      top: 50%;
      height: 100px;
      margin-top: -50px;
    }
    
    a {
      color: #000;
      text-decoration: none;
      text-align: center;
      display: block;
      margin: 0 auto;
      background: #eee;
      width: 400px;
    }
    
    p {
       padding: 30px;        		
    }
  style>
</head>
<body>
    <div>
        <a href="javascript:(function()%7Bif(window.MARK!==undefined)%7Bmark();%7D else %7Binstalldir = '<?php echo urlencode($installdir) ?>';document.body.appendChild(document.createElement('script')).src='<?php echo urlencode($installdir) ?>%2Fbookmarklet.js';%7D%7D)();">→ M A R K</a>
    </div>
    <p>Drag the box to your bookmark bar or long press and add to your bookmarks on mobile devices.</p>
</body>
</html>