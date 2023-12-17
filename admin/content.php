<?php

if( isset( $_GET['content'] ) ) {
    $content =  $_GET['content'] ;

switch ($content) {
    case 'item0':
        echo '<h2>Add users</h2>';
        include("pages/add-users.php");
        break;
    case 'item1':
        echo '<h2>All Student Data</h2>';
        include("pages/all-student.php");
        break;
    case 'item2':
        echo '<h2>Admission Form</h2>';
        include("pages/admission-form.php");
        break;
    case 'item3':
        echo '<h2>All Teachers Data</h2>';
        include("pages/all-teachers.php");
        break;
    case 'item4':
        echo '<h2>Add Teachers Data</h2>';
        include("pages/add-teachers.php");
        break;
    case 'item5':
        echo '<h2>All Teachers Payment History</h2>';
        include("pages/teachers-payments.php");
        break;
    case 'item6':
        echo '<h2>Class Routine</h2>';
        include("pages/class-routine.php");
        break;
    case 'item7':
        echo '<h2>All Parents Data</h2>';
        include("pages/all-parents.php");
        break;
    case 'item8':
        echo '<h2>Add New Parents</h2>';
        include("pages/add-parents.php");
        break;
    case 'item9':
        echo '<h2>Class Attendence</h2>';
        include("pages/attendence.php");
        break;
    case 'item10':
        echo '<h2>All Books</h2>';
        include("pages/all-books.php");
        break;
    case 'item11':
        echo '<h2>All Books</h2>';
        include("pages/add-books.php");
        break;
    case 'item12':
        echo '<h2>All Fee Collection</h2>';
        include("pages/all-fee-collection.php");
        break;
    case 'item13':
        echo '<h2>Add New Expenses</h2>';
        include("pages/add-new-expenses.php");
        break;
    case 'item14':
        echo '<h2>Notice Board</h2>';
        include("pages/notice.php");
        break;
    case 'item15':
        echo '<h2>All Classes</h2>';
        include("pages/all-classes.php");
        break;
    case 'item16':
        echo "<h2>Add New Classes</h2>";
        include("pages/add-new-classes.php");
        break;
    case 'item17':
        echo '<h2>Messaging</h2>';
        include("pages/message.php");
        break;
    case 'item18':
        echo '<h2>Exam Schedule</h2>';
        include("pages/exam-schedule.php");
        break;
    case 'item19':
        echo '<h2>Examination</h2>';
        include("pages/examination.php");
        break;
    case 'item20':
        include("pages/map.php");
        break;
    case 'allusers':
        echo '<h2>All Users</h2>';
        include("pages/allusers.php");
        break;

    case 'college-website':
        echo '<h2>College Name</h2>';
        include("pages/college-site/index.php");
        break;
    default:
        echo '<h2>Welcome to the Site</h2>';
        echo '<p>Please select an item from the sidebar to view its content.</p>';
        break;
}
}


?>
