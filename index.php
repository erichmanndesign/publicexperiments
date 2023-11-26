<?php
 /**
  * @index template
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <base href="<?php echo $_SERVER['HTTP_HOST']; ?>" target="_top">

  <!-- https://htmlboilerplates.com/ -->
  <title>Experimental Public | Code Examples</title>
  <meta name="description" content="Experimental Public | Code Examples" />

  
  <link href="https://cdn.jsdelivr.net/npm/modern-normalize@v2.0.0/modern-normalize.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css" />
  
  
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <meta name="theme-color" content="">
  
  
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta name="twitter:card" content="" />
  <meta name="twitter:site" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="" />
  
  <script async src='https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX'></script>
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-XXXXXXXXXX');
  </script>

</head>
<body>
    <header>
        <div class="brand" id="brand">
            <figure class="brand-logo"> 
                <img src="https://via.placeholder.com/300x200/" alt="brand place holder image">
            </figure> 
        </div>

        <nav class="nav" id="nav">
            <ul class="menu">
                <li><a href="#">link</a>
                    <ul>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                        <li><a href="#">link</a></li>
                    </ul>
                </li>
                <li><a href="#">link</a></li>
                <li><a href="#">link</a></li>
            </ul>
        </nav>
    </header> 
 
    <main>
        <article>
            <h1>Hello, world!</h1>
            <section>
                <h2>Lorem Ipsum Dolar</h2>
                <img src="https://via.placeholder.com/800x600/" alt="place holder image">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do. </p> 
            </section>
            <section>                  
                <table class="table" cellspacing="0" cellpadding="0">
                    <tr>
                        <th>Header Row 1, Column 1</th>
                        <th>Header Row 1, Column 2</th>
                        <th>Header Row 1, Column 3</th>
                    </tr>
                    <tr>
                        <td>Row 1, Column 1</td>
                        <td>Row 1, Column 2</td>
                        <td>Row 1, Column 3</td>
                    </tr>
                    <tr>
                        <td>Row 2, Column 1</td>
                        <td>Row 2, Column 2</td>
                        <td>Row 2, Column 3</td>
                    </tr>
                </table>                
            </section>            
            <section> 
                <button class="accordion">
                    Accordion Section Heading 1<span class="accordion__indicator"></span>
                </button> 
            </section>
        </article>

        <aside>
            <form action="#">
                <input type="submit" value="Submit">
            </form> 
        </aside> 
    </main> 

    <footer>    
        <section>
            <small> &copy; <span class="year"><?php echo '2023'; ?></span> | Company name. All Rights Reserved.</small>
        </section>
    </footer> 
   
</body>
</html>