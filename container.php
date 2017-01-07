<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>







    <div class="container">
      <?php 
          include ("db-connect.php");
          /*while($row = mysqli_fetch_array($result)) {
          	echo $row['cell_phone_name'] . "<br>";
		  }*/

          /*while($row = $result->fetch_assoc()) {
			  echo '<div class="row"><div class="col-md-4"><h2>' . $row["cell_phone_name"]. '</h2></div></div>';
		  }*/

	    echo '<div class="container">';
		$i=1;
		while($row = mysqli_fetch_array($result)) {
		    if(is_int(($i - 1) / 3) || ($i - 1) == 0) {
		        echo '<div class="row">';
		}
		echo '<div class="col-md-4">';
		echo '<h2>' . $row['cell_phone_name'] . '</h2>';
		echo '</div>';
		if(is_int($i / 3)) {
		    echo '</div>';
		}
		$i++;
		}
		echo '</div>';

		/* рабочий! while($row = $result->fetch_assoc()) {
				  echo '<div class="container">';
		$i=1;
		while($row = mysqli_fetch_array($result)) {
		    if(is_int(($i - 1) / 3) || ($i - 1) == 0) {
		        echo '<div class="row">';
		}
		echo '<div class="col-md-4">';
		echo '<h2>' . $row['cell_phone_name'] . '</h2>';
		echo '</div>';
		if(is_int($i / 3)) {
		    echo '</div>';
		}
		$i++;
		}
		echo '</div>';
		}*/
		
      ?>

      <?php 
      /*$howMuchChunks = 2;
		$result = mysqli_fetch_array($result);
		$divideAt = round(count($result) / $howMuchChunks);
		$arrays = array_chunk($result, $divideAt);
      for ($i = 0; $i < $howMuchChunks; $i++) {
		     while($row = $arrays[$i]) {
		         ?>
		              <div class="row">
		                   <div class="col-md-4">
		                       <h2>  <?php echo $array[$i]['cell_phone_name'] ?> </h2>
		                   </div> 
		              </div>
		         <?php 
		     }
		}*/
      ?>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
    </div> <!-- /container -->