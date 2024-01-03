<!doctype html> 
<html>
<?php include("components/head.php") ?>
<body style="background-image:url('images/background.jpg')">
<?php include("components/header.php") ?>

    <div class="heading"><h2>HOME</h2></div>
    <br>
    <div id="container" style="margin-left: 45px;margin-right: 45px;">
<div class="row">
    <div class="col-sm-4">
<div class="card crd1 shadw">
            <div class="card-body">
                <div class="background" style="width:100%;">
                    <div class="transbox transbox-text">
                    <h2 style='font-weight:bold'>Welcome to the Bible Study Page</h2>
                    <p>Here you will find:
                        <ul>
                        <li>the <a href='schedule.php'>schedule</a> we will be following</li>
                        <li><a href='handouts.php'>copies of any handouts</a> from each session</li>
                        <li><a href='links.php'>a list of useful links</a></li>
                        </ul> 
                    </p>
                    <p>Please check this site often for updates.</p>
                    </div>
                </div>
            </div>
            <div class="card-footer" style="text-align: center;font: size 2em;">
                    <h5>Our Lady of Peace</h5>
                    <div class="row">
                        <div class="col">
                            26 Maple Ave.<br>
                        Edison, NJ  08837<br>
                        </div>
                        <div class="col">
                            <b>Phone: (732) 738-7940</b>
                        </div>
                    </div>
            </div>
            </div>
    </div>
    <div class="col-sm-4">
        <div class="card crd1 shadw">
            <img src="images/Ephesians_med.jpg" class="card-img-top" alt="">
            <div class="card-body ">
                <h5 style="font-weight:bold">Ephesians: Discovering Your Inheritance</h5>
                <hr>
            <table>
                <tr>
                    <td>
                    We would like for you to join us for this very informative Lesson.
                        <ul>
                <li>Dates:  Mondays: February 19 - April 22</li>
                <li>Time: 7:00pm</li>
                <li>Place: Parish Center</li>
                <li><span style="color:red">Registration Deadline: February 5, 2024</span></li>
            </ul>  
            <b>Click picture to order workbook <img src="images/arrow-right-solid.svg" style='width:95px;height:30px;'></b>
                    </td>
                    <td>
                        <a href="http://tinyurl.com/yqe5ueea" target="_blank">
                    <img src="images/Ephesians_workbook.jpg" class="brdr picstyle">
                </a>
                    </td>
                </tr>
            </table>
            
            <button type="button" class="buttn" data-bs-toggle="modal" data-bs-target="#description">More Info ...</button>
        </div>
        </div>
    </div>
    <!-- <div class="col">
        <div class="card crd1 shadw">
            <img src="images/Ephesians_med.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 style="font-weight:bold">Ephesians: Discover Your Inheritance</h5>
                <hr>
                We would like for you to join us for this very informative Lesson.
            <ul>
                <li>Dates:  Mondays: February 19-April 22</li>
                <li>Time: 6:00pm</li>
                <li>Place: Church Hall</li>
                <li><span style="color:red;">Registration Deadline: February 5, 2024</span></li>
            </ul>
            <b>Click picture to order workbook <img src="images/arrow-right-solid.svg" style='width:95px;height:30px;'></b>
            ><a href="https://tinyurl.com/yrkj44ov" target="_blank"><img src="images/Ephesians_sm.jpg" class="brdr picstyle"></a>
            
            <button type="button" class="buttn" data-bs-toggle="modal" data-bs-target="#description">More Info ...</button>
        </div>
        </div>
    </div> -->
    <div class="col-sm-4">
    <div class="card crd1 shadw">
        <div class="card-header crd-hdr" style="text-align:center">
            <h3>Registration for</h3>
                <h5>Unlocking the Mystery</h5></div>
        <div class="card-body">
        <iframe class="responsive-iframe" src="https://docs.google.com/forms/d/e/1FAIpQLSeAbcXsquZUO5q5DjqnmyeitmnNa2KiyucmovF8MUI7s7WcPQ/viewform?embedded=true" height="540" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeAbcXsquZUO5q5DjqnmyeitmnNa2KiyucmovF8MUI7s7WcPQ/viewform?embedded=true" width="465" height="440" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
        </div>
    </div>
    </div>
</div><br /><br />
</div>
    <?php include("components/footer.php"); ?>

    <!-- The Modal -->
    <div class="modal fade" id="description">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color:blanchedalmond">
        
            <div class="heading3">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>    
            <h2>COURSE DESCRIPTION</h2>
        </div>
            <br>
            <div class="card" style="background-color:blanchedalmond">
            <img src="images/bibletimeline.jpg" class="card-img-top" alt="">
                <!-- <div class="card-header" style="text-align:center"><h4>A Biblical Walk Through The Mass</h4></div> -->
                <div class="card-body">
                    <div class="background1">
                        <div class="transbox transbox-text">
                            <p>Have you ever been perplexed by the Bible and wanted to know how to understand it better?  Join us for a study on the fundamentals to understanding the Word of God.</p>
                        <p>What you can expect:</p>    
                            <ul style="list-style-type: none;">
                                <li>8 Sessions</li>
                                <li>Video-based presentations</li>
                                <li>Live supplemental material</li>
                                <li>Dynamic Discussions</li>
                                <li>A Better understanding of the Bible as a whole</li>
                            </ul>
                           For More Information at <a href="https://ascensionpress.com/collections/unlocking-the-mystery" target="_blank">Unlocking the Mystery of the Bible.</a>
                      </div>
                    </div>
                </div>
            </div>   
       
        </div>
    </div>
    </div>

    <!-- <script>
        function onOpen() {
            window.open("description.php", "_blank", "toolbar=yes,scrollbars=no,resizable=yes,top=200,left=400,width=1200,height=700");
        }
        
    </script> -->
</body>
</html>
