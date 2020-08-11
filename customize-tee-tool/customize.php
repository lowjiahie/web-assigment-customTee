<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dynamic and Resizable Tee Designer</title>
           <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                background-color:#DCDCDC;
            }
            .drawing-area{
                position: absolute;
                top: 80px;
                left: 145px;
                z-index: 10;
                width: 235px;
                height: 400px;
            }

            .canvas-container{
                width: 235px; 
                height: 400px; 
                position: relative; 
                user-select: none;
            }

            #tshirt-div{
                width: 480px;
                height: 600px;
                position: relative;
                background-color: #fff;
            }

            #canvas{
                position: absolute;
                width: 200px;
                height: 400px; 
                left: 0px; 
                top: 0px; 
                user-select: none; 
                cursor: default;
            }
        </style>
    </head>
    <body>
   <div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i>&nbsp; Design Tool</div>
                 <div class="card-body">
                 <label for="tshirt-design">T-Shirt Design:</label>
                <select id="tshirt-design">
                    <option value="">Select one of our designs ...</option>
                    <option value="../img/custom/yes.png">Yes.png</option>
                </select><br><br>

                <!-- The Select that allows the user to change the color of the T-Shirt -->

                <label for="tshirt-color">T-Shirt Color:</label>
                <select id="tshirt-color">
                    <!-- You can add any color with a new option and definings its hex code -->
                    <option value="#fff">White</option>
                    <option value="#000">Black</option>
                    <option value="#f00">Red</option>
                    <option value="#008000">Green</option>
                    <option value="#ff0">Yellow</option>
                </select>
                
                <br><br>
                <label for="tshirt-size">T-Shirt SIze:</label>
                <select id="tshirt-size"  name="size" >
                    <option selected="selected" value="XS">XS</option>    
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>
                    <option value="3XL">3XL</option>
                </select>
                <br><br>
                <label for="quantity">QTY:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="50" value="1">
                <br><br>
                
                <button id="add_text">Add Text</button>  
            <div id="text-wrapper" style="margin-top: 10px">

                    <div id="text-controls">
                      <input type="color" value="" id="text-color" size="10">
                      <label for="font-family" style="display:inline-block">Font family:</label>
                      <select id="font-family">
                        <option value="">Select Font</option>
                        <option value="arial" >Arial</option>
                        <option value="helvetica">Helvetica</option>
                        <option value="myriad pro">Myriad Pro</option>
                        <option value="delicious">Delicious</option>
                        <option value="verdana">Verdana</option>
                        <option value="georgia">Georgia</option>
                        <option value="courier">Courier</option>
                        <option value="comic sans ms">Comic Sans MS</option>
                        <option value="impact">Impact</option>
                        <option value="monaco">Monaco</option>
                        <option value="optima">Optima</option>
                        <option value="hoefler text">Hoefler Text</option>
                        <option value="plaster">Plaster</option>
                        <option value="engagement">Engagement</option>
                      </select>
                      <br>
                      <label for="text-align" style="display:inline-block">Text align:</label>
                      <select id="text-align">
                        <option value="left">Left</option>
                        <option value="center">Center</option>
                        <option value="right">Right</option>
                        <option value="justify">Justify</option>
                      </select>
                      <div>
                        <label for="text-bg-color">Background color:</label>
                        <input type="color" value="" id="text-bg-color" size="10">
                      </div>
                      <div>
                        <label for="text-lines-bg-color">Background text color:</label>
                        <input type="color" value="" id="text-lines-bg-color" size="10">
                      </div>
                      <div>
                        <label for="text-stroke-color">Stroke color:</label>
                        <input type="color" value="" id="text-stroke-color">
                      </div>
                    <div>
                      <label for="text-stroke-width">Stroke width:</label>
                      <input type="range" value="1" min="1" max="5" id="text-stroke-width">
                    </div>
                    <div>
                      <label for="text-font-size">Font size:</label>
                      <input type="range" value="" min="1" max="120" step="1" id="text-font-size">
                    </div>
                    <div>
                        <label for="text-line-height">Line height:</label>
                        <input type="range" value="" min="0" max="10" step="0.1" id="text-line-height">
                    </div>
                </div>
                <div id="text-controls-additional">
                  <input type='checkbox' name='fonttype' id="text-cmd-bold">
                    Bold

                  <input type='checkbox' name='fonttype' id="text-cmd-italic">
                    Italic

                  <input type='checkbox' name='fonttype' id="text-cmd-underline" >
                    Underline

                  <input type='checkbox' name='fonttype'  id="text-cmd-linethrough">
                    Linethrough

                  <input type='checkbox' name='fonttype'  id="text-cmd-overline" >
                    Overline

                </div>
            </div>
                <label for="tshirt-custompicture">Upload your own design:</label>
                <input type="file" id="tshirt-custompicture" />
               
                  </div>
            </div>
            <div class="card bg-light ">
                <div class="card-header bg-success text-white text-uppercase"><i class="fas fa-dollar-sign"></i>&nbsp;Price</div>
                <div class="card-body">
                    <table class="table table-striped">
                 <tbody>
                        
                        <tr>
                            <td>Front :</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">RM 15.00</td>
                            
                        </tr>
                        <tr>
                            <td>Back :</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">RM 15.00</td>
                        </tr>
                        <tr>
                            <td>QTY :</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">RM 30.00 X 2</td>
                        </tr>
                        <tr>
                            <td><strong>Total :</strong></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>RM 60.00</strong></td>
                        </tr>
                    </tbody>
                    </table> 
                    <button class="btn btn-success btn-block"><i class="fas fa-shopping-cart"></i>&nbsp;Add to Cart</button>
                </div>
        </div>
           </div>
        <div class="col">
            <div class="row ">
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="card border-0">
                       
                         <!-- Create the container of the tool -->
                        <div id="tshirt-div">
                            <!-- 
                                Initially, the image will have the background tshirt that has transparency
                                So we can simply update the color with CSS or JavaScript dinamically
                            -->
                            <img id="tshirt-backgroundpicture" src="../img/custom/crew_front.png"/>

                            <div id="drawingArea" class="drawing-area">					
                                <div class="canvas-container">
                                    <canvas id="tshirt-canvas" width="235" height="400" style="border: 1px solid black;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
        </div>
        </div>
        </div>
       
        
       
        
        <!-- Include Fabric.js in the page -->
        <script src="fabric.js"></script>
        <script src="customize.js"></script>
         <script>
            let canvas = new fabric.Canvas('tshirt-canvas');

            function updateTshirtImage(imageURL){
                fabric.Image.fromURL(imageURL, function(img) {                   
                    img.scaleToHeight(150);
                    img.scaleToWidth(150); 
                    canvas.centerObject(img);
                    canvas.add(img);
                    canvas.renderAll();
                });
            }
            
            // Update the TShirt color according to the selected color by the user
            document.getElementById("tshirt-color").addEventListener("change", function(){
                document.getElementById("tshirt-div").style.backgroundColor = this.value;
            }, false);

            // Update the TShirt color according to the selected color by the user
            document.getElementById("tshirt-design").addEventListener("change", function(){

                // Call the updateTshirtImage method providing as first argument the URL
                // of the image provided by the select
                updateTshirtImage(this.value);
            }, false);

            // When the user clicks on upload a custom picture
            document.getElementById('tshirt-custompicture').addEventListener("change", function(e){
                var reader = new FileReader();
                
                reader.onload = function (event){
                    var imgObj = new Image();
                    imgObj.src = event.target.result;

                    // When the picture loads, create the image in Fabric.js
                    imgObj.onload = function () {
                        var img = new fabric.Image(imgObj);

                        img.scaleToHeight(150);
                        img.scaleToWidth(150); 
                        canvas.centerObject(img);
                        canvas.add(img);
                        canvas.renderAll();
                    };
                };

                // If the user selected a picture, load it
                if(e.target.files[0]){
                    reader.readAsDataURL(e.target.files[0]);
                }
            }, false);

            // When the user selects a picture that has been added and press the DEL key
            // The object will be removed !
            document.addEventListener("keydown", function(e) {
                var keyCode = e.keyCode;

                if(keyCode == 46){
                    console.log("Removing selected element on Fabric.js on DELETE key !");
                    canvas.remove(canvas.getActiveObject());
                }
            }, false);
           
           
        </script>

      
    </body>
</html>

