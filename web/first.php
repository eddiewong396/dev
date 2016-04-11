<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Simple Site</title>
    </head>

    <body>
        <div id="header">
            <h1>Simple Site</h1>
            <ul class="nav global">
                <li><a href="#">Home</a></li>
            </ul>
        </div>
        
        <nav class="navbar navbar-default navbar-static-top navbar-inverse">
          <div class="container">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
              </li>
              <li>
                <a href="https://devcenter.heroku.com/articles/how-heroku-works"><span class="glyphicon glyphicon-user"></span> How Heroku Works</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-info-sign"></span> Getting Started Guides <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-ruby">Getting Started with Ruby on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-nodejs">Getting Started with Node on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started with PHP on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-python">Getting Started with Python on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-java">Getting Started with Java on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-go">Getting Started with Go on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-clojure">Getting Started with Clojure on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-scala">Getting Started with Scala on Heroku</a></li>
                    <li class="divider"></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-heroku-and-connect-without-local-dev">Getting Started on Heroku with Heroku Connect</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-jruby">Getting Started with Ruby on Heroku (Microsoft Windows)</a></li>
                  </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="navbar-right">
                <a href="https://devcenter.heroku.com"><span class="glyphicon glyphicon-book"></span> Heroku Dev Center</a>
              </li>
            </ul>
          </div>
        </nav>
        
        <?php
        echo "My first try from norizman";
        ?>
        <div id="siteControls">
            <ul class="categories">
                <li>PHP</li>
            </ul>
            <div class="ads">
                <!-- ads code -->
            </div>

        </div>

        <div id="footer">
            Footer
        </div>
    </body>
</html>