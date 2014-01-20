<?php


?>
<div class="container"><p></p></div>
<div class="container">
    <form name="addNewPixel" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="inputLabelName" class="col-sm-2 control-label">White Label Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLabelName" name="inputLabelName" placeholder="White Label Name ">
            </div>
        </div>
        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="client" checked>
              Client Side Pixel
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="server">
              Server Side Pixel
            </label>
          </div>
        </div>
        
        <div class="col-sm-offset-2 col-sm-10">
            
            <button type="submit" class="btn btn-default">Submit</button>
            
        </div>
        
        
    </form>

</div>