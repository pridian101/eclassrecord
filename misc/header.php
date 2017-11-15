
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        
        <title>Dashboard</title>
        
        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <link href="css/dashboard.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 sidebar1">
                    <div class="logo">
                        <img src="http://sbis.deped.gov.ph/seal.gif" class="img-fluid center-block" alt="Logo">
                    </div>
                    <br>
                    <div class="left-navigation">

                            <ul class="list">
                                <h5><strong>Data Sheet</strong></h5>
                                <li>Students</li>
                                <li>Archive</li>
                            </ul>

                            <ul class="list">
                                <h5><strong>Quarters</strong></h5>
                                <li>Quarter 1</li>
                                <li>Quarter 2</li>
                                <li>Quarter 3</li>
                                <li>Quarter 4</li>
                            </ul>

                            <ul class="list">
                                <li>Summary</li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-8 main-content">
                    <h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#profileModal" 
                        data-fname=<?php echo $first_name; ?>
                        data-lname=<?php echo $last_name; ?>
                        data-region=<?php echo $region; ?>
                        data-division=<?php echo $division; ?>
                        data-district=<?php echo $district; ?>
                        data-school=<?php echo $school_name; ?>
                        data-sid=<?php echo $school_id; ?>
                        >
                        <?php echo $first_name." ".$last_name ?>
                        </button>
                        <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                        </button>
                    </h1>
                    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="profileModalLabel">Personal Profile</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><p style="font-weight: bold">First name: </p></td>
                                                <td id="fname"></td>
                                            </tr>
                                            <tr>
                                                <td><p style="font-weight: bold">Last name: </p></td>
                                                <td id="lname"></td>
                                            </tr>
                                            <tr>
                                                <td><p style="font-weight: bold">Region: </p></td>
                                                <td id="region"></td>
                                            </tr>
                                            <tr>
                                                <td><p style="font-weight: bold">Division: </p></td>
                                                <td id="division"></td>
                                            </tr>
                                            <tr>
                                                <td><p style="font-weight: bold">District: </p></td>
                                                <td id="district"></td>
                                            </tr>   
                                            <tr>
                                                <td><p style="font-weight: bold">School name: </p></td>
                                                <td id="school"></td>
                                            </tr>
                                            <tr>
                                                <td><p style="font-weight: bold">First name: </p></td>
                                                <td id="sid"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
