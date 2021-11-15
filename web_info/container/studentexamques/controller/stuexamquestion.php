<?php

class Stuexamquestion extends Controller{

	function __construct(){
		parent::__construct();
		
		$this->view->script=$this->script();
		Session::init();
		
        if(!Session::get('loggedIn')){
			
            header('location: '. URL .'studentlogin');
            exit;
        }

	}
	
	function init(){
        Session::init();

		$course = Session::get('courseCode');
		$lesson = Session::get('lessonCode');
				// Logdebug::appendlog($course);
		$questions = $this->model->getquestions($course,$lesson);
				// Logdebug::appendlog(print_r($questions,true));

			
		// echo 'test';die;
		// $courses = $this->model->getenrolledcourses();
				// Logdebug::appendlog(print_r($courses,true));
		$answers = array();
		
				// Logdebug::appendlog(print_r($questions,true));

		// foreach($questions as $question){
		// 	$option = json_decode($question["xoption"]);
		// 		// Logdebug::appendlog(print_r($option,true));
		// 	// foreach($option as $key=>$val){

		// 	// 	Logdebug::appendlog(print_r($val,true));
		// 	// }
		// 	// $option=[];

		// 	$answers[] = $question["xans"];
		// }

		// Logdebug::appendlog(print_r($answers,true));
		// $question = json_decode($questions[0]["xoption"]);
        // Logdebug::appendlog(print_r($question,true));
        // Logdebug::appendlog(serialize($question));

		// $this->view->courses = $courses;
		$this->view->questions = $questions;

		// $this->view->answers = $answers;
		$this->view->render("dashboard","abr/stuexamquestion_view");
		
	}

	function getlessons(){
		$course = $_POST["courseValue"];
		$lessons = $this->model->getlessons($course);
		// Logdebug::appendlog(print_r($lessons,true));

		if($lessons){
			
			echo json_encode(array('message'=>'Lessons Found','result'=>'success','keycode'=>$lessons));
			
		}else{
			echo json_encode(array('message'=>'Lessons Not Found','result'=>'error','keycode'=>''));
		}
	}

	function getexams(){
		$course = $_POST["courseValue"];
		$lesson = $_POST["lessonValue"];
		$exams = $this->model->getexams($course,$lesson);
		// Logdebug::appendlog(print_r($exams,true));
		
		if($exams){
			
			echo json_encode(array('message'=>'Exams Found','result'=>'success','keycode'=>$exams));
			
		}else{
			echo json_encode(array('message'=>'Exams Not Found','result'=>'error','keycode'=>''));
		}
		
	}

	function getquestions(){
		$course = $_POST["courseValue"];
				// Logdebug::appendlog($course);
		$questions = $this->model->getquestions($course);
				// Logdebug::appendlog(print_r($questions,true));
		
		if($questions){
			echo json_encode(array('message'=>'Questions Found','result'=>'success','keycode'=>$questions));
				
		}else{
			echo json_encode(array('message'=>'Questions Not Found','result'=>'error','keycode'=>''));
		}

		$this->view->questions = $questions;
		$this->view->render("dashboard","abr/stuexam_view");
	}

	

	function getanswers(){
		$course = Session::get('courseCode');
		$lesson = Session::get('lessonCode');
		$questions = $this->model->getquestions($course,$lesson);

		$answers = array();
		
				// Logdebug::appendlog(print_r($questions,true));

		foreach($questions as $question){

			$answers[] = $question["xans"];
		}
		// Logdebug::appendlog(print_r($answers,true));

		if($answers){
			
				echo json_encode(array('message'=>'Answers Found','result'=>'success','keycode'=>$answers));
				
			}else{
				echo json_encode(array('message'=>'Answers Not Found','result'=>'error','keycode'=>''));
			}

	}
	
	

	function script(){
		return "
		<script>

		$(document).ready(function(){
				$('#courses').on('change',function(e){
					e.preventDefault();
					var courseValue = $(this).find(\":selected\").val();
					var url = '".URL."stuexam/getquestions';
					
					$.ajax({
						url:url, 
						type : 'POST',	
						dataType : 'json',					
						data : {courseValue:courseValue}, 
						
						success : function(result) {
							
							console.log(result);

							if(result.result=='success'){
								$('#questionSection').show();
								
							}else{
								
								
								
							}
							   
							
									
						},
						error: function(xhr, resp, text) {
							console.log(xhr, resp, text);
						}
					});

				})
			});

			$('#anssubmit').submit(function(e){
		 		e.preventDefault();
				 $(\"#showResult\").html('');
				// console.log('test');
				var submittedAns = [];

				//  console.log($(\"input[type='radio']:checked\"));
				 $($(\"input[type='radio']:checked\")).each((e,f)=>{
					// console.log(e,f.value);
					submittedAns.push(f.value);

				 });


				$.ajax({
                        
					url:\"".URL."stuexamquestion/getanswers\", 
					type : \"GET\",
					 
					
					beforeSend:function(){	
						// loaderon();   
						
					},
					success : function(result) {
						// loaderoff();
						const resultobj = JSON.parse(result);

						if(resultobj['result']=='success'){
							var correctResult = [];
							var totalNumber = 0;
							var correctNumber = 0;
							var answers = resultobj['keycode'];
							for (var i=0; i<answers.length; i++){
								correctResult.push(answers[i] - submittedAns[i]);
								if(correctResult[i]=='0'){
									correctResult[i]=1;
									correctNumber += 1;

								}else{
									correctResult[i]=0;
								}
								totalNumber +=1; 
							}

							// console.log(answers);
							
							// console.log(submittedAns);
							// console.log(correctResult);
							// console.log(totalNumber);
							// console.log(correctNumber);

							$(\"#showResult\").append(`
								<h3>You Got: `+correctNumber+`/`+totalNumber+` number.</h3>
							`);
							var idVal = [];

							$($(\"input[type='radio']:checked\")).each((e,f)=>{
								console.log(answers[e]+[e]);
								$(\"label[for='\"+idVal[e]+\"']\").removeClass(\"red\");

								// console.log($(\"input[type='radio']:checked\"));
								submittedAns.push(f.value);
								
								idVal.push($(f).attr(\"id\"));
								console.log(idVal);

								if(answers[e] == f.value){
									console.log('correct');
									$(\"label[for='\"+idVal[e]+\"']\").css({\"color\":\"green\"});
								}else{
								console.log($(\"label[for='answers[e]+[e]']\"));
								$(\"label[for='\"+answers[e]+[e]+\"']\").css({\"color\":\"green\"});
								$(\"label[for='\"+idVal[e]+\"']\").css({\"color\":\"red\"});
								}
			
							 });
							

						}
						
						
					},error: function(xhr, resp, text) {
						// loaderoff();
						
					}
				})

				console.log();
				
			});
			
			
	   

	
		</script>
		";
	}
} 