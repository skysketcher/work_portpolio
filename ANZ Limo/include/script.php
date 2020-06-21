    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/timepicki.js"></script>
    <script>
	$('#timepicker1').timepicki();
    </script>
    <script src="js/bootstrap.min.js">
        </script>
	<script src="js/gen_validatorv31.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script> <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.bannerslider').slick({
	  infinite: true,
	  cssEase: 'linear',
	   fade: true,
	   speed: 950,
	    arrows: false,
	  autoplay: true,
	  autoplaySpeed: 4000,
	  });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.fleetslider').slick({
	 /* infinite: true,
	  speed: 1500,
	  fade: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 4000,
	  arrows:true,*/
	   centerMode: false,
  centerPadding: '30px',
  slidesToShow: 3,
  autoplay: true,
   autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
	  });
    });
  </script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.testimonialslider').slick({
	  infinite: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 4000,
	  });
    });
  </script>
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>--><script src="js/datetimepicker.min.js"></script>
     <script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'eventDate');
        });

    $('#eventForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required'
                        }
                    }
                },
                eventDate: {
                    validators: {
                        notEmpty: {
                            message: 'The date is required'
                        },
                        date: {
                            format: 'MM/DD/YYYY',
                            message: 'The date is not a valid'
                        }
                    }
                }
            }
        })
        .on('success.validator.fv', function(e, data) {
            if (data.field === 'eventDate' && data.validator === 'date' && data.result.date) {
                // The eventDate field passes the date validator
                // We can get the current date as a Javascript Date object
                var currentDate = data.result.date,
                    day         = currentDate.getDay();

                // If the selected date is Sunday
                if (day === 0) {
                    // Treat the field as invalid
                    data.fv
                        .updateStatus(data.field, data.fv.STATUS_INVALID, data.validator)
                        .updateMessage(data.field, data.validator, 'Please choose a day except Sunday');
                } else {
                    // Reset the message
                    data.fv.updateMessage(data.field, data.validator, 'The date is not valid');
                }
            }
        });
});
</script>