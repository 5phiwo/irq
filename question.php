<?Php
	require_once("inc/config/db.php");
	session_start();
	
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
	}
?>

<?Php require_once("inc/templates/header.php"); ?>
	<div class="row">
		<div style="margin-top: 100px; margin-bottom: 100px" class="text-center">
			<div class="col-lg-12">
				<?Php
					/*$sql = "select * from question";
					$query = mysql_query($sql) or die(mysql_error());
					
					if($query)
					{
						$questions = array();
						$count = 0;
						
						//fetch question
						while($q = mysql_fetch_assoc($query))
						{
							$questions[$count] = array(
								'question_id' 	=> $q['question_id'],
								'question_code' => $q['qustion_code'],
								'question'		=> $q['question']
							);
							
							++$count;
						}
						
						if(count($questions) > 0)
						{
							$_SESSION['questions'] = $questions;
						}
					}*/
				?>
			</div>
			<div class="col-lg-6 col-lg-offset-3">
				<div class="row">
					<form action="question.php" method="post">
						<?Php
							switch($page)
							{
								case 1: 
									require_once("inc/pages/q1.php");
									break;
								case 2:
									require_once("inc/pages/q2.php");
									break;
								case 3:
									require_once("inc/pages/q2.php");
									break;
								default:
									echo "No data";
									break;
							}
							
							//require_once("inc/pages/qnav.php");
						?>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
<?Php require_once("inc/templates/header.php"); ?>