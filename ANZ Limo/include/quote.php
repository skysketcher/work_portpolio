<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Request a Quote</h4>
                          </div>
                          <div class="modal-body">
                          <form name="contact_form" method="post" action="quote.php">
                              <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                              </div>
                              <div class="form-group">
                                <input type="tel" class="form-control" id="number" name="number" placeholder="Contact Number">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                              </div>
                              <div class="form-group">
           					<div class="input-group input-append date" id="datePicker">
                                <input type="text" class="form-control" placeholder="Pick Up Date" name="date" id="date" />
                                <span class="input-group-addon add-on" ><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            
            				</div>
            				<div class="form-group">
                            	<input name="time" type="text" id="timepicker1" class="form-control" placeholder="Pick Up Time">
                            </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Pick Up Location">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="destination" name="destination" placeholder="Destination">
                              </div>
                             <div class="form-group"> 
                                    <select name="event-type" id="event-type" class="form-control">
                                        <option value="0">Event Type</option>
                                        <option>Airport Transportation</option>
                                        <option>Corporate Transportation</option>
                                        <option>Wedding Limousine</option>
                                        <option>Bachelorette Party</option>
                                        <option>Just a Night Out</option>
                                        <option>Birthdays</option>
                                        <option>Anniversary</option>
                                        <option>Others</option>
                                    </select>
                            </div>
                             <div class="form-group"> 
                                    <select name="vehicle-type" id="vehicle-type" class="form-control">
                                        <option value="0">Vehicle Type</option>
                                        <option>Lincoln Town Car</option>
                                        <option>Lincoln Stretch Limousine</option>
                                        <option>Excursion SUV Stretch Limousine</option>
                                        <option>Hummer SUV Stretch Limo</option>
                                        <option>Limo Bus</option>
                                        <option>Expedition SUV Stretched Limousine</option>
                                    </select>
                            </div>
                            <div class="form-group">
                              <div>
                                <p>
                                    <img src="captcha/blank.png" class="captcha" id="captcha_image" alt="" />
                                    <a href="#" id="captcha_refresh"><!--<img src="img/reload.png">--><i class="fa fa-refresh fa-2x"></i></a>
                                </p>
                              </div>
                                <label for="securuty">Security Code</label>
                                <input type="text" class="form-control" id="securuty" name="security_code">
                                </div>
                          <div class="modal-footer">
                              <button type="submit" id="submit" name="submit" class=" btn btn-default">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>