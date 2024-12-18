<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * Template Name: Course List File Listing
 */
?>
<script language="javascript">
	function showHide(targetName) {
		if( document.getElementById ) { // NS6+
			target = document.getElementById(targetName);
		} else if( document.all ) { // IE4+
			target = document.all[targetName];
		}

		if( target ) {
			if( target.style.display == "none" ) {
				target.style.display = "";
			} else {
				target.style.display = "none";
			}
		}
	}
</script>

<style>
.searchCourseHeader {
    padding: 20px;
    margin: 0px;
    background: white;
    width: 100%;
}
.searchCourseHeader ul {
    display: inline-block;
    list-style: none;
    padding: 0px;
    margin: 0px;
    background: white;
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
}
.searchCourseHeader ul li {
    display: inline-block;
    list-style: none;
    padding: 0px;
    margin: 0px;
    background: white;
    width: 32%;
    text-align: left;
}
.searchHeaderSubmit {
    border: 0px;
    background: black;
    color: white;
    text-align: center;
}

select{background-color: #f2f1f1!important;}

.ub-button-container {
    width: 40%;
    color: white;
    background-color: black;
}
.courseListContainer {
    background: #f9f9f8;
    padding: 15px;
    border: 1px solid #E2E1DD;
    margin: 60px 0px;
}
.courseListContainer h2 {
    padding-top: 20px;
}
.courseListContainer h4 {
    padding-top: 20px;
    text-transform: uppercase;
    font-weight: 700;
}
.courseListDropDown {
    line-height: normal;
    background-color: #f4f4f3;
}
.courseListDropDown li:nth-of-type(1) {
    width: auto !important;
    padding: 15px 20px 0px;
}
.courseListHeader ul {
    width: 100%;
    list-style: none;
    padding: 0px;
    font-size: 16px;
    text-align: left;
    font-weight: bold;
    line-height: normal;
    margin: 0px;
    border-bottom: solid 1px #d1cfc9;
}
.courseListHeader ul li, .courseListContent ul li {
    padding: 5px;
    padding-top: 7px;
    margin: 0;
    display: inline-block;
    vertical-align: top;
    line-height: 1.3;
}
.courseListHeader ul li:nth-of-type(1), .courseListContent ul li:nth-of-type(1) {
    width: 7%;
}
.courseListHeader ul li:nth-of-type(2), .courseListContent ul li:nth-of-type(2) {
    width: 13%;
}
.courseListHeader ul li:nth-of-type(3), .courseListContent ul li:nth-of-type(3) {
    width: 24%;
}
.courseListHeader ul li:nth-of-type(4), .courseListContent ul li:nth-of-type(4) {
    width: 15%;
}
.courseListHeader ul li:nth-of-type(5), .courseListContent ul li:nth-of-type(5) {
    width: 8%;
    text-align: right;
}
.courseListHeader ul li:nth-of-type(6), .courseListContent ul li:nth-of-type(6) {
    width: 13%;
}
.courseListHeader ul li:nth-of-type(7), .courseListContent ul li:nth-of-type(7) {
}
.courseListContent ul {
    width: 100%;
    list-style: none;
    padding: 1px;
    font-size: 14px;
    text-align: left;
    margin: 0px;
    border-bottom: solid 1px #d1cfc9;
}
.align-button-center {
    text-align: center;
}
.wp-block-button__link:after {
    content: "" !important;
}
.wp-block-button__link {
    padding: 24px 60px !important;
}
#closedCourse {
    background-color: #ebebeb;
    color: #646464;
    text-decoration: none;
}
#closedcourse a:link, #closedcourse a:visited, #closedcourse a:active {
    color: #f44;
    font-weight: 600;
    font-size: 14px;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
}

.link-gap{margin:0 20px;}

@media screen and (max-width: 992px) {
.courseListHeader ul li, .courseListContent ul li {
    line-height: normal;
}
.courseListHeader ul {
    font-size: 15px;
}
.courseListHeader ul li:nth-of-type(1), .courseListContent ul li:nth-of-type(1) {
    width: 7%;
}
.courseListHeader ul li:nth-of-type(2), .courseListContent ul li:nth-of-type(2) {
    width: 14%;
}
.courseListHeader ul li:nth-of-type(3), .courseListContent ul li:nth-of-type(3) {
    width: 23%;
}
.courseListHeader ul li:nth-of-type(4), .courseListContent ul li:nth-of-type(4) {
    width: 16%;
}
.courseListHeader ul li:nth-of-type(5), .courseListContent ul li:nth-of-type(5) {
    width: 8%;
    text-align: right;
}
.courseListHeader ul li:nth-of-type(6), .courseListContent ul li:nth-of-type(6) {
    width: 13%;
}
.courseListHeader ul li:nth-of-type(7), .courseListContent ul li:nth-of-type(7) {
    width: 18%;
}

.link-gap{margin: 0px;}
}

@media screen and (max-width: 720px) {
.courseListHeader ul li, .courseListContent ul li {
    line-height: normal;
}
.courseListHeader ul li:nth-of-type(1), .courseListContent ul li:nth-of-type(1) {
    width: 8%;
}
.courseListHeader ul li:nth-of-type(2), .courseListContent ul li:nth-of-type(2) {
    width: 11%;
}
.courseListHeader ul li:nth-of-type(3), .courseListContent ul li:nth-of-type(3) {
    width: 25%;
}
.courseListHeader ul li:nth-of-type(4), .courseListContent ul li:nth-of-type(4) {
    width: 20%;
}
.courseListHeader ul li:nth-of-type(5), .courseListContent ul li:nth-of-type(5) {
    width: 7%;
    text-align: right;
}
.courseListHeader ul li:nth-of-type(6), .courseListContent ul li:nth-of-type(6) {
    width: 10%;
}
.courseListHeader ul li:nth-of-type(7), .courseListContent ul li:nth-of-type(7) {
    width: 13%;
}
.courseListContainer {
    padding: 5px;
}

.link-gap{margin: 0px;}
}

@media screen and (max-width: 640px) {
.courseListHeader ul li, .courseListContent ul li {
    line-height: normal;
}
.courseListHeader {
    display: none;
}
.courseListHeader ul li:nth-of-type(1), .courseListContent ul li:nth-of-type(1) {
    width: 100%;
}
.courseListHeader ul li:nth-of-type(2), .courseListContent ul li:nth-of-type(2) {
    width: 100%;
}
.courseListHeader ul li:nth-of-type(3), .courseListContent ul li:nth-of-type(3) {
    width: 100%;
}
.courseListHeader ul li:nth-of-type(4), .courseListContent ul li:nth-of-type(4) {
    width: 100%;
}
.courseListHeader ul li:nth-of-type(5), .courseListContent ul li:nth-of-type(5) {
    width: 100%;
    text-align: left;
}
.courseListHeader ul li:nth-of-type(6), .courseListContent ul li:nth-of-type(6) {
    width: 100%;
}
.courseListHeader ul li:nth-of-type(7), .courseListContent ul li:nth-of-type(7) {
    width: 100%;
}

.courseListDropDown li:nth-of-type(1):before {
    content: "";
    font-weight: bold;
}

.courseListHeader ul li:nth-of-type(1), .courseListContentTOP li:nth-of-type(1):before {
    content: "SYNM: ";
    font-weight: bold;
}

.courseListHeader ul li:nth-of-type(2), .courseListContent ul li:nth-of-type(2):before {
    content: "Course No.: ";
    font-weight: bold;
}
.courseListHeader ul li:nth-of-type(3), .courseListContent ul li:nth-of-type(3):before {
    content: "Title: ";
    font-weight: bold;
}
.courseListHeader ul li:nth-of-type(4), .courseListContent ul li:nth-of-type(4):before {
    content: "Instructor: ";
    font-weight: bold;
}
.courseListHeader ul li:nth-of-type(5), .courseListContent ul li:nth-of-type(5):before {
    content: "Days: ";
    font-weight: bold;
    text-align: left;
}
.courseListHeader ul li:nth-of-type(6), .courseListContent ul li:nth-of-type(6):before {
    content: "Times: ";
    font-weight: bold;
}
.courseListHeader ul li:nth-of-type(7), .courseListContent ul li:nth-of-type(7):before {
    content: "Meeting Dates: ";
    font-weight: bold;
}
.courseListContainer {
    padding: 10px;
    width: 100%;
}
.courseListContent ul {
    padding: 20px 0px;
}
.searchCourseHeader ul li {
    width: 100%;
    padding: 5px 0px;
}
.announcement-banner .body-content {
    padding-top: 50px !important;
}

.link-gap{margin: 0px;}
}
</style>
<?php
use \Propaganda3\WPO\WPOUtilityBase as WPOUtilityBase;
get_header();
?>

<?php
// FUNCTION TO ORDER THE ARRAY SCHEDULE
function array_orderby() {
  $args = func_get_args();
  $data = array_shift( $args );
  foreach ( $args as $n => $field ) {
    if ( is_string( $field ) ) {
      $tmp = array();
      foreach ( $data as $key => $row )
        $tmp[ $key ] = $row[ $field ];
      $args[ $n ] = $tmp;
    }
  }
  $args[] = & $data;
  call_user_func_array( 'array_multisort', $args );
  return array_pop( $args );
}

// GET DATA FROM FILE FUNCTION
// function getfileTerm(){
    //LOAD DATABASE FROM FILE
    $upload_dir = get_stylesheet_directory_uri(); // wp_upload_dir(); 
    // echo $upload_dir."/content/courseListing/WebCourseSchedulesWordPressCurrentTerms.csv"; 
    $file = fopen( $upload_dir . "/content/courseListing/WebCourseSchedulesWordPressCurrentTerms.csv", "r" )or die( "Unable to open file!" ); // echo ' open file ';
    // Read CSV into an array.
    $lines = array();
    $result = array();
    $count = 0;
    $previous = array();
    while ( !feof( $file ) && ( $line = fgetcsv( $file ) ) !== false ) { // CHECK WHOLE FILE
        // $lines[] = $line; // 
        //print_r($line);
        // echo "this is a row ______________________________";
        // echo $lines[$count]['23'].' lines23 ';
        if ($line['1']=='TermDesc'){ continue; } // remove headings from data
        if (strpos($line['1'], 'Bonn')){ continue; } // remove German Campus from data
        //REMOVING UNWANTED INFORMATION ON THE DATES
        $line['3'] = str_replace('12:00:00 AM','',$line['3']);
        $line['4'] = str_replace('12:00:00 AM','',$line['4']); 
        $line['5'] = str_replace('12:00:00 AM','',$line['5']); 
        $line['6'] = str_replace('12:00:00 AM','',$line['6']); 
        $line['7'] = str_replace('12:00:00 AM','',$line['7']); 
        $line['8'] = str_replace('12:00:00 AM','',$line['8']); 
        $line['9'] = str_replace('12:00:00 AM','',$line['9']); 
        $line['10'] = str_replace('12:00:00 AM','',$line['10']); 
        $line['11'] = str_replace('12:00:00 AM','',$line['11']); 
        $line['12'] = strtotime($line['3']); // STARTING DATE FOR ORDER
        $line['13'] = strtotime($line['10']); // END REGISTRATION DATE
        $line['14'] = false; // IS IT STILL REGISTERING?
        $line['15'] = false; // IS 8WEEK? 
        $line['16'] = ''; // NAME FOR SELECTION DROPDOWN
        $line['17'] = ''; // TITLE OF THE PAGE
        if ((strpos($line['1'], '8-Week')) || (strpos($line['1'], '8-WEEK'))) { 
            $line['15'] = true;
            $names = explode(' ',$line['1']);
            $line['3'] = str_replace(' ','',$line['3']);
            $line['4'] = str_replace(' ','',$line['4']);
            $line['16'] = $names['0'].' '.$names['3'].' ('.$line['3'].' - '.$line['4'].')';
            $line['17'] = $names['0'].' '.$names['2'].' '.$names['3'];
        } else { $line['16'] = $line['1']; $line['17'] = $line['1']; }
    
        // echo date("m/d/Y");
        $today = date("m/d/Y"); $today = strtotime($today); $endReg = $line['13'];
        if (($today<$endReg)){ 
            // echo 'Today is higher than '.$line['0']; 
            $line['14'] = true;  } 
        // IF TODAY IS HIGHER THAN END OF REGISTRATION COMPARE AND SET AS AN ACTIVE TERM
         //print_r($line);
        
        $result[] = $line; // 
         // END FOR EACH
        $count++;    
    } // END WHILE FILE 
    //  echo '///  result:'; print_r($result);
    $return = array_orderby( $result, '13', SORT_ASC ); 
     // echo '///  return:'; print_r($return);
    // SORT BY STARTING DATE
    // echo 'SORTED DATABASE';
    // print_r($return); // PRINT THE SORTED DATABASE

    fclose( $file );//CLOSE FILE
    // return array($return); // RETURN THE FILE
// } // CLOSE FILE FUNCTION


//GET FORM TERM, TYPE OR LOCATION DATA FORM OR DEFAULT VALUES
$formTerm = '';
$formType = '';
$formLocation = '';
$termsfile = array();
$termsfile = $return; // getfileTerm();
// echo '-----------TERMS FOR EACH: ';
// echo " <br><br><br><br><br><br> //  Term File "; print_r($termsfile); 
// $termsfile = array_orderby( $termsfile, '3', SORT_DESC );
$activeTerm = array();
$active8week = array();
$today = date("m/d/Y");
// echo '<BR> // TODAY '.$today; 
foreach ( $termsfile as $row ) { // CHECK FOR ACTIVE TERM REGISTRATION
    if ($row['14']==true) { $activeTerm = $row; break; }
}
foreach ( $termsfile as $row ) { // CHECK FOR ACTIVE 8WEEK TERM REGISTRATION
    if (($row['14']==true) && ($row['15']==true)) { $active8week = $row; break; }
     //echo '---------------row '; print_r($row);
}

// ---------------- UPDATE - DEFAULT TERM HERE
if ( isset( $_POST[ 'searchTerm' ] ) ) 
            {  $formTerm = sanitize_text_field( $_POST[ 'searchTerm' ] ); } 
            else {  $formTerm = $activeTerm['0']; } // UPDATE DEFAULT TERM HERE
// echo ' <br>  //   Active Term:'; print_r($activeTerm);
// echo ' <br>  //   Active 8week Term:'; print_r($active8week);

if ( isset( $_POST[ 'searchType' ] ) ) {
  $formType = sanitize_text_field( $_POST[ 'searchType' ] );
} else { $formType = 'Graduate'; }
if ( isset( $_POST[ 'searchLocation' ] ) ) {
  $formLocation = sanitize_text_field( $_POST[ 'searchLocation' ] );
} elseif ($activeTerm['15']==false) { $formLocation = 'Fort Worth'; } else { $formLocation = 'Online'; }

foreach ( $termsfile as $row ) { // ADD ALL TERMS
    if ($formTerm==$row['0']) { $formTitle = $row['17']; break; }
} 
// echo 'END FOR EACH';
//GET COURSE COMPARISON
$getCourse == '';
if ((isset($_GET['course']))&&(!isset($_POST[ 'searchTerm' ]))) { $getCourse = sanitize_text_field($_GET['course']); }
switch ( $getCourse ) { 
  case "8week":
    $formTerm = $active8week['0'];
    $formType = 'Graduate';
    $formLocation = 'Online';
    $formTitle = $active8week['17'];
        echo '8week';
    break;
}

$locationDesc = "";
if ($formLocation=='Online'){ $locationDesc = "<br>Flexible: This format allows students the choice to view live class lectures via Zoom at the days and times listed or view the recorded lectures at their convenience each week.<br>
Synchronous (Live Interaction): This format requires online attendance via Zoom at the days and times listed.<br>
Asynchronous: This format presents course content through multimedia with weekly coursework that can be completed at any time during the week."; }

//echo "----------|";
//echo ' Term: ' . $formTerm;
//echo ' Type: ' . $formType;
//echo ' Location: ' . $formLocation;

// SWITCH Course Term and Type on Search Header
/*switch ( $formTerm ) { // ---------------------- UPDATE - ADD NEW TERMS HERE
  case "21/FA":
    $formTitle = "Fall 2021 ";
    break;
  case "21/FA8A":
    $formTitle = "Fall 8-week A ";
    break;
  case "21/FA8B":
    $formTitle = "Fall 8-week B ";
    break;
}*/
//SWITCH Location on Search Header
switch ( $formLocation ) {
  case "Fort Worth":
    $locationTitle = "Fort Worth";
    break;
  case "Online":
    $locationTitle = "Online";
    break;
  case "Church Plant":
    $locationTitle = "Church Plant";
    break;
}

 switch ( $formType ) { // CHECK FOR EACH TYPE
      case "Graduate":
        $typeTitle = "Graduate Courses";
        break;
      case "Doctoral":
        $typeTitle = "Doctoral Courses";
        break;
      case "CASW":
        $typeTitle = "College Courses";
        break;
      case "THM":
        $typeTitle = "Master of Theology Courses";
        break;
      case "DIPLOMA":
        $typeTitle = "Diploma, MACM, and Music Leveling Courses";
        break;
      case "CERT-UG":
        $typeTitle = "Undergraduate Certificates";
        break;
      case "CERT-GR":
        $typeTitle = "Graduate Certificates";
        break;
      case "AD":
        $typeTitle = "Adult Education Certificates";
        break;
      case "SP":
        $typeTitle = "Cursos en Espanol";
        break;
      case "KO":
        $typeTitle = "Courses Taught in Korean";
        break;
      case "CN":
        $typeTitle = "Courses Taught in Mandarin";
        break;
	  case "POR":
        $typeTitle = "Aulas em português";
        break;
    }

//LOAD DATABASE FROM FILE
//GETTING FILE FROM FORM   
$upload_dir = get_stylesheet_directory_uri(); // wp_upload_dir(); // echo 'upload dir. '; echo $upload_dir['baseurl']."/2020/12/CourseListing.csv";
// echo "---------------DIRECTORY: ".$upload_dir."/content/courseListing/WebCourseSchedulesWordPress.csv";
$file = fopen( $upload_dir . "/content/courseListing/WebCourseSchedulesWordPress.csv", "r" )or die( "Unable to open file!" ); // echo ' open file ';
// Read CSV into an array.
$lines = array();
$schedule = array();
$count = 0;
while ( !feof( $file ) && ( $line = fgetcsv( $file ) ) !== false ) { // CHECK WHOLE FILE
    $lines[] = $line; // echo "this is a row ______________________________";
    // print_r($line);
    // echo $lines[$count]['23'].' lines23 ';
    
    //FIRST NEED TO CHECK COURSE TYPES THAT ARE NOT IN THE TYPE COLUMN
    $courseTypesExploded = explode (",", $lines[ $count ]['32']);
    $courseTypes = array_values(array_filter($courseTypesExploded)); // REMOVE EMPTY SPACES AND WRONG TAGS FROM ARRAY
    // print_r($courseTypes);
    $languageCourse = false; //IS IT A LANGUAGE COURSE?
    $language = '';
    $onlineTypeValue = '';
    foreach  ($courseTypes as $value){ // CHECK VALUES
        if (($value == 'CN')||($value == 'KO')||($value == 'AD')||($value == 'SP')||($value == 'POR'))  {
            $languageCourse = true; $language = $value;        
        } elseif (($value == 'ASYNC') || ($value == 'SYNC') || ($value == 'FLEX')) {
            $onlineTypeValue = $value;
            // echo 'value:'.$value.' -- ';
        }
    } // END FOR EACH
    unset($courseTypesExploded);
    unset($courseTypes);
    
    //IF IT IS A LANGUAGE COURSE, ADD ONLY TO THE LANGUAGE TYPE LIST
    if  (  ($languageCourse == true) 
        && ( $lines[ $count ][ '7' ] != 'Seminary Core' ) // ELIMINATE SEMINARY CORE ONES
        && ( $lines[ $count ][ '25' ] == $formTerm ) // CHECK TERM
        && ( $language == $formType ) // CHECK CLASS TYPE IN THE APPROPRIATED COLUMN
        && ( $lines[ $count ][ '4' ] == $formLocation ) // CHECK CAMPUSDESC LOCATION
         ) // CHECKOUT SEMINARYCORE CLASSES
            { $schedule[] = $lines[ $count ];  
    } // ADD ONLY THE RIGHT ONES  
    
    //IF IS NOT LANGUAGE COURSE, ADD NORMAL LIST
    if ( ($languageCourse == false)
          && ( $lines[ $count ][ '7' ] != 'Seminary Core' ) // IF NOT ONE OF THOSE, ADD REGULAR COLUMNS
          && ( $lines[ $count ][ '25' ] == $formTerm ) // CHECK TERM
          && ( $lines[ $count ][ '1' ] == $formType ) // CHECK CLASS TYPE
          && ( $lines[ $count ][ '4' ] == $formLocation ) // CHECK CAMPUSDESC LOCATION
         ) // CHECKOUT SEMINARYCORE CLASSES
        { $schedule[] = $lines[ $count ];  } // ADD ONLY THE RIGHT ONES
    
    // IF IS GRADUATE, ADD GRAD CERTIFICATES TO LIST AS WELL
    if ( ($formType == 'Graduate')
          && ( $lines[ $count ][ '7' ] != 'Seminary Core' ) // IF NOT ONE OF THOSE, ADD REGULAR COLUMNS
          && ( $lines[ $count ][ '25' ] == $formTerm ) // CHECK TERM
          && ( $lines[ $count ][ '1' ] == 'CERT-GR' ) // CERTIFICATES SHOULD SHOW UP UNDER GRADUATE
          && ( $lines[ $count ][ '4' ] == $formLocation ) // CHECK CAMPUSDESC LOCATION
         ) // CHECKOUT SEMINARYCORE CLASSES
        { $schedule[] = $lines[ $count ];  } // ADD ONLY THE RIGHT ONES
    
    // IF IS UNDERGRAD, ADD UNDERGRAD CERTIFICATES TO LIST AS WELL
    if ( ($formType == 'CASW')
          && ( $lines[ $count ][ '7' ] != 'Seminary Core' ) // IF NOT ONE OF THOSE, ADD REGULAR COLUMNS
          && ( $lines[ $count ][ '25' ] == $formTerm ) // CHECK TERM
          && ( $lines[ $count ][ '1' ] == 'CERT-UG' ) // CERTIFICATES SHOULD SHOW UP UNDER GRADUATE
          && ( $lines[ $count ][ '4' ] == $formLocation ) // CHECK CAMPUSDESC LOCATION
         ) // CHECKOUT SEMINARYCORE CLASSES
        { $schedule[] = $lines[ $count ];  } // ADD ONLY THE RIGHT ONES
  $count++;
    
    
} // END WHILE FILE 

// print_r( $lines[ '0' ] );
// print_r($lines); // PRINT THE FULL DATABASE
//echo ' this is SCHEDULEs ---------------------->';
// print_r($schedule); // PRINT THE QUERIED DATABASE

$scheduleFinal = array_orderby( $schedule, '6', SORT_ASC, '7', SORT_ASC, '15', SORT_ASC ); 
// SORT BY School Department AND Academic Level

//print_r($scheduleFinal); // PRINT THE SORTED DATABASE

fclose( $file );
?>
<section class="body-content">
  <?php // the_content() ?>
  
  <div class="course-list-header">
  <h1>Course List</h1>
  </div>
  <div class="container admin-content pl-3 pr-0 pr-lg-3 pl-md-0">
    <form action="<?php the_permalink(); ?>" method="POST" >
      <input type="hidden" name="action" value="searchCourseListForm" />
      <div class="searchCourseHeader course-list-form">
        <ul>
          <li><span>Term:</span>
            <select name="searchTerm" required class="course-list-select">
              <!-- -------------------UPDATE - ADD NEW TERMS HERE -------------       -->
                <?php 
                $selected = '';
                // echo 'Terms file:'; print_r($termsfile);
                foreach ( $termsfile as $row ) { // ADD ALL TERMS
                        if ($formTerm==$row['0']) { $selected = 'selected="selected"'; }
                        echo '<option value="'.$row['0'].'" '.$selected.' >'.$row['16'].'</option>'; $selected = '';
                        // if ($row['14']==true) { $activeTerm = $row; break; } 
                } 
                ?>
            </select>
          </li>
          <li><span>Course Type:</span>
            <select name="searchType" required class="course-list-select">
              <option value="Graduate" <?php if ($formType=='Graduate') { echo 'selected="selected"'; } ?> >Graduate Courses</option>
              <option value="Doctoral" <?php if ($formType=='Doctoral') { echo 'selected="selected"'; } ?> >Doctoral Courses</option>
              <option value="CASW" <?php if ($formType=='CASW') { echo 'selected="selected"'; } ?> >College Courses</option>
              <option value="THM" <?php if ($formType=='THM') { echo 'selected="selected"'; } ?> >Master of Theology Courses</option>
              <option value="DIPLOMA" <?php if ($formType=='DIPLOMA') { echo 'selected="selected"'; } ?> >Diploma, MACM, and Music Leveling Courses</option>
              <option value="CERT-UG" <?php if ($formType=='CERT-UG') { echo 'selected="selected"'; } ?> >Undergraduate Certificates</option>
              <option value="CERT-GR" <?php if ($formType=='CERT-GR') { echo 'selected="selected"'; } ?> >Graduate Certificates</option>
              <option value="AD" <?php if ($formType=='AD') { echo 'selected="selected"'; } ?> >Adult Education Certificates</option>
              <option value="SP" <?php if ($formType=='SP') { echo 'selected="selected"'; } ?> >Cursos en Espanol</option>
              <option value="KO" <?php if ($formType=='KO') { echo 'selected="selected"'; } ?> >Courses Taught in Korean</option>
              <option value="CN" <?php if ($formType=='CN') { echo 'selected="selected"'; } ?> >Courses Taught in Mandarin</option>
			  <option value="POR" <?php if ($formType=='POR') { echo 'selected="selected"'; } ?> >Aulas em português</option>
            </select>
          </li>
          <li><span>Location:</span>
            <select name="searchLocation" required class="course-list-select">
              <option value="Fort Worth" <?php if ($formLocation=='Fort Worth') { echo 'selected="selected"'; } ?> >Fort Worth</option>
              <option value="Online" <?php if ($formLocation=='Online') { echo 'selected="selected"'; } ?> >Online Courses</option>
              <option value="Church Plant" <?php if ($formLocation=='Church Plant') { echo 'selected="selected"'; } ?> >Church Plant</option>
            </select>
          </li>
        </ul>
        <br>
        <div class="wp-block-buttons align-button-center">
          <div class="wp-block-button">
            <input class="wp-block-button__link" type="submit" value="Search Courses" name="submit">
          </div>
          <div class="wp-block-button"> <a href="https://colss-prod.ec.swbts.edu/Student/Account/SsoLogin?preserveSession=true" target="_blank" rel="noopener noreferrer nofollow" class="wp-block-button__link" role="button">Register Now</a> </div>
        </div>
        <?php  ?>
        <div class="wp-block-buttons align-button-center">
          <div class="course-list-link"> <a href="/2021-2022-academic-calendar/" target="_blank" rel="noopener noreferrer nofollow" >Current Academic Calendar</a> </div>
          <div class="link-gap"></div>
          <div class="course-list-link"> <a href="/campus-life/offices/financial-aid/student-fees-and-payment/" target="_blank" rel="noopener noreferrer nofollow">Student Fees and Payment</a> </div>
        </div>
        <?php  ?>
      </div>
    </form>
    <div class="wrapper-block course-list-detail" style="">
      <h3><?PHP echo $formTitle.' '.$typeTitle ?> </h3>
      <h4><?php echo $locationTitle; ?> <p><?php echo $locationDesc; ?> </p></h4> 
    </div>
    <div class="courseListContainer">
      <?php $school = ''; $dep=''; $firstLine = ''; ?>
      <?php
      foreach ( $scheduleFinal as $row ) { // GET THE SCHEDULE REORDERED AND LOOP 
        // REORDERING THE ARRAY ACCORDING TO EACH COLUMN
        $days = $row[ '22' ]; // Meeting Days
        //prepare days of meeting string
        $day = str_replace( 'Mon', 'M', $days ); // DAYS
        $day = str_replace( 'Wed', 'W', $day );
        $day = str_replace( 'Tue', 'T', $day );
        $day = str_replace( 'Thu', 'Th', $day );
        $day = str_replace( 'Fri', 'F', $day );
        //prepare credit hours as decimal
        $credits = number_format( ( float )$row[ '17' ], 2, '.', '' ); // credits

        $availability = $row[ '3' ]; // CourseAvailability
        $synm = $row[ '10' ]; // SYNM
        $courseNo = $row[ '14' ]; // COURSE NO
        $courseTitle = $row[ '16' ]; //COURSE TITLE
        $instructor = $row[ '26' ]; //COURSE INSTRUCTOR
        $courseTime = $row[ '21' ]; //COURSE TIME
        $courseMeeting = $row[ '11' ]; //COURSE MEETING
        $courseDescription = $row[ '8' ]; //COURSE DESCRIPTION
        $ipr = $row[ '9' ]; // IPR
        $courseFee = $row[ '23' ]; //COURSE FEE  
        $coursePrerequisite = $row[ '31' ]; //COURSE PREREQUISITE
        $courseRoom = $row[ '20' ]; //COURSE ROOM 
        $comment = $row[ '24' ]; //COMMENTS
        // TYPE OF ONLINE COURSE  
        $onlineTypeColumn = '';
        $onlineType1 = '';
        $onlineType2 = '';
        $onlineType3 = '';
        // use of explode
        $onlineTypes = explode (",", $row['32']); 
        $onlineTypes = array_values(array_filter($onlineTypes));
        // print_r($onlineTypes);
        
        foreach  ($onlineTypes as $value){
            if ($value == 'ASYNC')  {  
                $onlineTypeColumn = 'Type';  
                $onlineType1 = 'Asynchronous';
                $onlineType1Desc = 'This format presents course content through multimedia with weekly coursework that can be completed at any time during the week.'; }
            if ($value == 'SYNC')   {  
                $onlineTypeColumn = 'Type';  
                $onlineType2 = 'Synchronous';
                $onlineType2Desc = 'Live Interaction. This format requires online attendance at the days and times listed.'; }
            if ($value == 'FLEX')   {  
                $onlineTypeColumn = 'Type';  
                $onlineType3 = 'Flexible';    
                $onlineType3Desc = 'This format allow students the choice to participate live at the days and times listed or view the recorded lectures at their convenience each week.'; }
        }

        if ( $row[ '6' ] != $school ) {
          $school = $row[ '6' ]; // GET SCHOOL ?>
      <h4>
        <?php $deppadding = 'padding-top:0px;';  echo $school; // SCHOOL ?>
      </h4>
      <?php } else { $deppadding = 'padding-top:40px;'; }  ?>
      <?php  if ($row['7']!=$dep) { $dep = $row['7']; ?>
      <h5 style="text-transform: uppercase; <?php echo $deppadding; $deppadding = ''; //to make sure department for new school is close enough ?>"><?php echo $dep; // DEPARTMENT ?></h5>
      <div class="courseListHeader">
        <ul>
          <li>SYNM</li><li>Course No.</li><li>Title</li><li>Instructor</li><li>Days</li><li>Times</li><li><?php if (!empty($onlineTypeColumn)){ echo $onlineTypeColumn.'/'; }?>Meeting Dates</li>
        </ul>
      </div>
      <?php
      } //CLOSE IF  
      ?>
      <div class="courseListContent" <?php if ($availability=='CLOSED') { ?> id="closedCourse" <?php  } // CLOSE AVALIABILITY IF ?> >
        <ul class="courseListContentTOP">
          <li><?php echo $synm; // SYNM ?></li><li><?php echo $courseNo; // COURSE NO ?></li><li><a href="javascript:;" onClick="showHide('<?php echo $synm; //SYNM ?>');return true;"><?php echo $courseTitle; //COURSE TITLE ?></a></li><li><?php echo $instructor; //COURSE INSTRUCTOR ?></li><li><?php echo $day; //COURSE DAYS EDITED, SEE ABOVE ?></li><li><?php echo $courseTime; //COURSE TIME ?></li><li><?php // ADD ONLINE TYPE if any
          if (!empty($onlineTypeColumn)){
            if (!empty($onlineType1)){ echo '<span style="cursor: help;" title="'.$onlineType1Desc.'">'.$onlineType1.'</span><br> '; }
            elseif (!empty($onlineType2)){ echo '<span style="cursor: help;" title="'.$onlineType2Desc.'">'.$onlineType2.'</span><br> '; }
            elseif (!empty($onlineType3)){ echo '<span style="cursor: help;" title="'.$onlineType3Desc.'">'.$onlineType3.'</span><br> '; }
          }
          ?><?php echo $courseMeeting; //COURSE MEETING ?></li>
        </ul>
        <ul id="<?php echo $synm; //SYNM ?>" style="display:none" class="courseListDropDown">
          <li>
            <?php // if ($shedule.availability='closed'){ echo '<p>This class is closed. Please contact the <a href="/registrar" target="_blank">Office of the Registrar</a> for more information.</p>';} ?>
            <h5><?php echo $courseTitle; //COURSE TITLE ?></h5>
            <p><?php echo $courseDescription; //COURSE DESCRIPTION ?></p>
            <p><strong>Meeting Dates:</strong> <?php echo $courseMeeting; //COURSE MEETING ?></p>
            <p><strong>Credit Hours:</strong> <?php echo $credits; //COURSE CREDS CHECK ABOVE ?></p>
            <?php if ($ipr=='Y') { // IPR ?>
            <p><strong>Special Permission Required (see notes below)</strong></p>
            <?php } //CLOSE SPECIAL PERMISSION IF ?>
            <?php if ($coursePrerequisite!='') {?>
            <p><strong>Prerequisite:</strong> <?php echo $coursePrerequisite; //COURSE PREREQUISITE ?></p>
            <?php } //CLOSE PREREQUISITE IF ?>
            <?php if ($courseFee!='0') {  ?>
            <p><strong>Additional Course Fees: </strong> <?php echo $courseFee; //COURSE FEE ?></p>
            <?php } //CLOSE ADDITIONAL COURSE FEE IF ?>
            <p><strong>Room:</strong> <?php echo $courseRoom; //COURSE ROOM ?></p>
            <?php if ($comment!=''){ ?>
            <p><strong>Notes:</strong> <?php echo $row['24']; //COMMENTS ?></p>
            <?php } //endif ?>
          </li>
        </ul>
      </div>
      <?php 	} // CLOSE FOREACH LOOP OF SCHEDULE ORDER	?>
    </div>
  </div>
</section>
<?php get_footer(); ?>