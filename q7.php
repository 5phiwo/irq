<DOCTYPE html>
<head>
<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
	
	if(isset($_POST['next']))
	{
		$_SESSION['answers']['q7'] = $_POST['q7'];
		$_SESSION['answers']['q7']['sub']['q7a'] = $_POST['q7a'];
		$_SESSION['answers']['q7']['sub']['q7b'] = $_POST['q7b'];
		
		header("Location: q8.php");
	}
?>
<?Php require_once("inc/templates/header.php"); ?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
  jQuery(function($){
  
    // Prevents errors in old IE.
    if(!window.console || !window.console.log) window.console = {log: function(){}};
    
    // Enable debugging for complex logic.
    var debug = true;
  
    function checkConditions(inputs, views){
      views.each(function(){
        var view = $(this);
        var conditions = view.attr('data-view-conditions').split(',');
        var display = true;
        
        // Loop over all required conditions to be met.
        for(var i = 0; i < conditions.length; i++){
          var name = conditions[i].split(':')[0];
          var value = conditions[i].split(':')[1];
          var input = inputs.filter('[name="' + name + '"]:checked');
          
          if(debug) console.log('\nRecalculating view conditions.');
          
          if(!input.length){
            display = false;
            if(debug) console.log('View not show as no :checked input with the name "' + name + '" was found.');
          }else{
            if(value != undefined && input.val() != value){
              display = false;
              if(debug) console.log('View not show as no :checked input with the name "' + name + '" has the value of "' + input.val() + '". Value needed was: "' + value + '".');
            }
          }
        }
        
        if(display){
          view.css({display: 'block'});
        }else{
          view.css({display: 'none'});
        }
        
      });
    }

    $('form').each(function(){
      var form = $(this);
      var inputs = form.find('input[type="checkbox"], input[type="radio"]');
      var views = form.find('[data-view-conditions]');
      
      // Recalculate which views to be shown each time the inputs change.
      inputs.on('change', function(e){
        checkConditions(inputs, views);
      });
      
      // Check conditions to set up required view state on page load.
      checkConditions(inputs, views);
    });

  });
  </script>
</head>
<body>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="q7.php" method="post">
						<div class="col-lg-12 ">
							<div class="">
								<label for="i1">7. Do you know the third party(ies) you wish to use?</label>
							</div>
							<div class="">
								<div>
								<label> Yes <input id="i1" type="radio" name="q7" value="Yes"> </label>
								<label> No <input id="i2" type="radio" name="q7" value="No"> </label>
								</div>
								</br>
								<div data-view-conditions="name1:2">
    								<label>7A. Is there any possibility that as part of the product / service provided to the organisation the third party may use sub-contractors? </label>
      								<label> Yes <input id="i3" type="radio" name="q7a" value="Yes"> No <input id="14" type="radio" name="q7a" value="No"> </label>
      							</div>
								<div data-view-conditions="name1:1">
    								<label>7A. Would the product / service provided to the organisation be sub-contracted to third parties (whether on-shore or off-shore)?  </label>
      								<label> Yes <input id="i3" type="radio" name="q7b" value="Yes"> No <input id="14" type="radio" name="q7b" value="4"> </label>
      							</div>
								</div>
								</div>
								</div>
							</div>

						<div class="col-lg-6 col-lg-offset-3 text-center">
						<div style="margin-top:60px;">
							<div class="grp-input">
							<input type="submit" name="next" value="Next" class="btn btn-primary">
								</br> </br> </br> </br>
								<a href="q6.php" >Previous</a>
								</br></br></br></br>
								<h6>Question 7 of 13</h6>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>