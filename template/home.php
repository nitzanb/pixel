    
<?php generatePixelsTable() ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Generate new pixel!</h1>
        <p>This is a This is the pixel generator page, you can use it to create your own pixel for tracking</p>
        <p><a class="btn btn-primary btn-lg">GIMMI &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>What is a pixel</h2>
          <p>Pixel is used for marketing tracking and is usually being used by affiliates. The pixel event allows a 3rd party to track the user over the site flow. Pixels are usually used in a funnel such as registration, leads, deposits, sales or any other converting event</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Server Side pixel</h2>
          <p>The server side pixel, is being use as part of the site framework and sent to the tracker before the page is loaded.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Client Side pixle</h2>
          <p>The client side pixel is sent through the browser.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
      <section id="generator">
          <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
          
      </section>
      
      <section id="pixels">
         <table class="table table-hover">
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Client IP</th>
                    <th>Time Stamp</th>
                </tr>
             </thead>
             <tbody>
                 <tr>
                        <td>1</td>
                        <td>Server</td>
                        <td>192.168.1.1</td>
                        <td>12:54</td>
                 </tr>
                  <tr>
                         <td>1</td>
                        <td>Server</td>
                        <td>192.168.1.1</td>
                        <td>12:54</td>
                 </tr>
                  <tr>
                         <td>1</td>
                        <td>Server</td>
                        <td>192.168.1.1</td>
                        <td>12:54</td>
                 
                 </tr>
                  <tr>
                         <td>1</td>
                        <td>Server</td>
                        <td>192.168.1.1</td>
                        <td>12:54</td>
                 </tr>
             </tbody>
             
                 
             
         </table>          
      </section>
      <hr>