              <!DOCTYPE html>
              <html lang="en">

              <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
                <meta name="description" content="">
                <meta name="author" content="">
                <link rel="icon" href="../../favicon.ico">
                <title>Dot Web Technologies</title>
                <?php
                include ('inc/linkfiles-header.php');
                ?>
              </head>

              <body id="quote">
                <?php
                include ('inc/header.php');
                ?>
                <section class="heading">
                 <div class="container">
                   <div class="row">
                     <div class="col-xs-12">
                       <h1 class="text-center">Request A Quote</h1>
                       <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="quote.php">Request A Quote</a></li>
                      </ol>
                    </div>
                  </div>
                </div>
              </section>
              <section class="aboutContent quotePage content">
               <div class="container card">
                 <div class="row">
                   <div class="col-xs-12">
                    <p><strong><em>When you fill out our request form for a quote, we will get back to you quickly with an estimated cost for your project based on your specific needs. Since every project is unique, we need to know exactly what you are looking to have created. The more information you provide, the more accurate our estimate will be. If we have any suggestions that we think might help you, we’ll let you know.</em></strong></p>
                  </div>

                </div>
                <div class="row">
                 <div class="col-xs-12">
                  <h1>Your Information</h1>                   
                </div>
                <form>
                 <div class="col-xs-12"><legend>Your Name</legend></div>

                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <input type="text" class="form-control" placeholder="John">
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <input type="text" class="form-control" placeholder="Smith">
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <legend>Email Address</legend>
                   <fieldset class="form-group">
                     <input type="email" class="form-control" placeholder="John@smith.com">
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <legend>Contact Number</legend>
                   <fieldset class="form-group">
                     <input type="text" class="form-control" placeholder="9841123456">
                   </fieldset>
                 </div>                 
                 <div class="col-xs-12"><legend>Preferred Method of Contact</legend></div>

                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <div class="radio">
                       <label>
                         <input type="radio" name="optionsRadios" value="option1">
                         Phone
                       </label>
                     </div>
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <div class="radio">
                       <label>
                         <input type="radio" name="optionsRadios" value="option2">
                         Email
                       </label>
                     </div>
                   </fieldset>
                 </div>                 
                 <div class="col-xs-12 col-sm-6">
                   <legend>Business Name</legend>
                   <fieldset class="form-group">
                     <input type="text" class="form-control" placeholder="your business name">
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <legend>Current Website</legend>
                   <fieldset class="form-group">
                     <input type="text" class="form-control" placeholder="www.yourwebsite.com">
                   </fieldset>
                 </div> 
                 <div class="col-xs-12"> 
                 <hr>
                  <h1>Information on the website design project</h1> 
                  <legend>Size of the Website</legend>
                  <fieldset class="form-group">
                     <select class="form-control" id="eexampleSelect11">
                   <option>About 5 Pages</option>
                   <option>5 - 10 Pages</option>
                   <option>10 - 15 Pages</option>
                   <option>More than 15 Pages</option>
                 </select>
                  </fieldset>                  
                </div>  
                 <div class="col-xs-12"> 
                  <legend>Reference Website(s)</legend>
                  <fieldset class="form-group">
                     <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
                  </fieldset>                  
                </div>                 
                 <div class="col-xs-12">
                 <legend>Would you like to use a Content Management System (CMS)?</legend>
                 <small class="text-muted"><em>A CMS allows you to make updates to your website content with a web-based administration tool - no website knowledge is required</em></small>    </div>

                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <div class="radio">
                       <label>
                         <input type="radio" name="optionsRadios" value="option1">
                         Yes
                       </label>
                     </div>
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <div class="radio">
                       <label>
                         <input type="radio" name="optionsRadios" value="option2">
                         No
                       </label>
                     </div>
                   </fieldset>
                 </div>                  
                 <div class="col-xs-12">
                 <legend>Are you going to sell things from the website?</legend></div>

                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <div class="radio">
                       <label>
                         <input type="radio" name="optionsRadios" value="option1">
                         Yes
                       </label>
                     </div>
                   </fieldset>
                 </div>
                 <div class="col-xs-12 col-sm-6">
                   <fieldset class="form-group">
                     <div class="radio">
                       <label>
                         <input type="radio" name="optionsRadios" value="option2">
                         No
                       </label>
                     </div>
                   </fieldset>
                 </div>
                 <div class="col-xs-6"> 
                  <legend>I am also interested in...</legend>
                  <fieldset class="form-group">
                   <div class="checkbox">
                   <label>
                     <input type="checkbox"> Web Marketing
                   </label>
                 </div>
                   <div class="checkbox">
                   <label>
                     <input type="checkbox"> Search Engine Optimization
                   </label>
                 </div>
                   <div class="checkbox">
                   <label>
                     <input type="checkbox"> Email Marketing
                   </label>
                 </div>
                   <div class="checkbox">
                   <label>
                     <input type="checkbox"> Google AdWords / Pay-Per-Click Management
                   </label>
                 </div>
                  </fieldset>                  
                </div>      
                 <div class="col-xs-6"> 
                  <legend>Technical Needs</legend>
                   <fieldset class="form-group">
                   <div class="checkbox">
                   <label>
                     <input type="checkbox"> Domain Name
                   </label>
                 </div>
                   <div class="checkbox">
                   <label>
                     <input type="checkbox"> Web Hosting
                   </label>
                 </div>
                   <div class="checkbox">
                   <label>
                     <input type="checkbox">  Email accounts (you@yourdomain.com)
                   </label>
                 </div>
                  </fieldset>                
                </div>  

                 <div class="col-xs-12"> 
                 <hr>
                  <h1>Last few questions...</h1> 
                  <legend>What is your approximate website budget?</legend>
                  <fieldset class="form-group">
                  <input type="text" class="form-control">
                  <small class="text-muted"><em>There are many ways to build a website, each with different pros/cons and price points. Knowing a general budget allows us to make recommendations on how to help you get the most for your money.</em></small>
                  </fieldset>
                  </div>  
                  <div class="col-xs-12"> 
                  <legend>How soon do you need this done?</legend>
                  <fieldset class="form-group">
                     <select class="form-control" id="eexampleSelect11">
                   <option>I needed this up yesterday!</option>
                   <option>Very soon</option>
                   <option>Month or so is fine</option>
                   <option>No rush at all</option>
                   <option>I am just getting a feel for costs</option>
                 </select>
                  </fieldset>                  
                </div>  
                <div class="col-xs-12">
                  <legend>File Upload</legend>
                  <fieldset class="form-group">
                 <input type="file" class="form-control-file" id="exampleInputFile">
                 <small class="text-muted"><em>If you have a premade RFQ or any materials you think will help us in putting together a quote, please upload them here. Multiple files should be zipped into one. (doc, docx, pdf, zip files allowed) <br>
Additional comments, questions or notes</em></small>
                 </fieldset>
                </div>  
                <div class="col-xs-12 text-center">
<button type="submit" class="custom-btn btn btn-primary text-center">Submit</button>
</div>             
               </form>
              </div>
              </div>
              </section>


               <?php
               include ('inc/footer.php');
               include ('inc/linkfile-footer.php');
               ?>
              </body>

              </html>