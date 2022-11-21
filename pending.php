<?php
require 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>.

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>to do</title>
    <style>
        #list1 .form-control {
            border-color: transparent;
        }

        #list1 .form-control:focus {
            border-color: transparent;
            box-shadow: none;
        }

        #list1 .select-input.form-control[readonly]:not([disabled]) {
            background-color: #fbfbfb;
        }

        .modal-content {
            width: 80%;
            margin: 0 auto;
        }

        .modal-body {
            padding: 0;
        }

        .btn-close {
            position: absolute;
            right: 0;
            padding: 1em;
        }

        h1 {
            font-size: 2.3em;
            font-weight: bold;
        }

        .myform {
            padding: 2em;
            max-width: 100%;
            color: #fff;
            box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
        }

        @media (max-width: 576px) {
            .myform {
                max-width: 90%;
                margin: 0 auto;
            }
        }

        .form-control:focus {
            box-shadow: inset 0 -1px 0 #7e7e7e;
        }

        .form-control {
            background-color: inherit;
            color: #fff;
            padding-left: 0;
            border: 0;
            border-radius: 0;
            border-bottom: 1px solid #fff;
        }

        .myform .btn {
            width: 100%;
            font-weight: 800;
            background-color: #fff;
            border-radius: 0;
            padding: 0.5em 0;
        }

        .myform .btn:hover {
            background-color: inherit;
            color: #fff;
            border-color: #fff;
        }

        p {
            text-align: center;
            padding-top: 2em;
            color: grey;
        }

        p a {
            color: #e1e1e1;
            text-decoration: none;
        }

        p a:hover {
            color: #fff;
        }
    </style>
</head>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card" id="list1" style="border-radius: .75rem; background-color: rgba(255, 255, 128, .5);">
                        <div class="card-body py-4 px-4 px-md-5">

                            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                <i class="fas fa-check-square me-1"></i>
                                <u>My Todo List</u>
                            </p>
                            <div class="pb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row align-items-center " style="float: right">
                                            <!-- <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Add new..."> -->
                                            <div>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#ModalForm" class="btn btn-primary align-items-right">Add Task +</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="myform bg-dark">
                                                <h1 class="text-center">Add Task</h1>

                                                <form action="addtask.php" method="post">
                                                    <div class="mb-3 mt-4">
                                                        <label for="exampleInputText" class="form-label">Task name</label>
                                                        <input type="text" name="name" class="form-control" id="exampleInputText" required>
                                                    </div>
                                                    <div class="mb-3 mt-4">
                                                        <label for="exampleFormControlTextarea1">Task description</label>
                                                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                                    </div>
                                                    <div class="mb-3 mt-4">
                                                        <label for="exampleInputText" class="form-label">Asign to</label>
                                                        <input type="text" class="form-control" name="asign" id="exampleInputText" required>
                                                    </div>
                                                    <div class="mb-3 mt-4">
                                                        <div class='input-group date' id='startDate'>
                                                            <span class="input-group-addon input-group-text"><span class="fa fa-calendar"></span>
                                                            </span>
                                                            <input type='text' class="form-control" name="startDate" required />
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-light mt-3" name="submit">ADD</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-4">

                                    
                                        <div class="d-flex flex-row align-items-center " style="float: right">
                                        <h5 style="text-align: right; margin-right:50px;">Fillter</h5>
                                            <div class="mr-3">
                                                <a href="index.php" class="btn btn-secondary mr-3" style="margin-right: 15px;">All Task</a>
                                            </div>
                                            <div class="mr-3">
                                            <a href="complete.php" class="btn btn-success mr-3">Compleate Task</a>
        
                                            </div>
                                        </div>
                              
                            </div>  
                            <hr class="my-4">

            

                            <?php
                            // select all tasks if page is visited or refreshed
                            $tasks = mysqli_query($db, "SELECT * FROM task where is_deleted = 0 AND status = 0");

                            $i = 1;
                            while ($row = mysqli_fetch_array($tasks)) { ?>


                                <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                                    <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                                        <div>
                                            <p><?php echo $i; ?></p>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                        <p class="lead fw-normal mb-0"><?php echo $row['title']; ?><span>- <?php echo $row['desci']; ?></span></p>
                                    </li>
                                    <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                                        <div class="d-flex flex-row justify-content-end mb-1">
                                            <ul class="list-inline m-0">

                                                <li class="list-inline-item">
                                                    <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                                                        <p class="small mb-0"><i class="fas fa-info-circle me-2"></i><?php echo $row['created_at'] ?>
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <?php if ($row['status'] == 1) { ?>
                                                        <span class="btn btn-block btn-success btn-sm status" onclick="updatestatus(<?php echo $row['id'] ?>,<?php echo $row['status'] ?>)">Compleate</span><?php } else { ?>

                                                        <span class="btn btn-block btn-danger btn-sm status" onclick="updatestatus(<?php echo $row['id'] ?>,<?php echo $row['status'] ?>)">Pending</span><?php } ?>


                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-danger btn-sm rounded-0" onclick="Delete(<?php echo $row['id'] ?>)" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <div class="text-end text-muted">
                                        <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                                            <p class="small mb-0"><i class="fas fa-info-circle me-2"></i><?php echo $row['created_at'] ?>
                                            </p>
                                        </a>
                                     </div> -->
                                    </li>
                                </ul>

                            <?php $i++;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {

        $(function() {
            $('#startDate').datepicker({
                format: 'dd/mm/yyyy'
            });
        });


    });


    function updatestatus(id, status) {
        $.ajax({
            type: "POST",
            url: 'updatestatus.php',
            data: {
                'status': status,
                'id': id
            },
            success: function(data) {
                location.reload(true);
            }
        });
    }


    function Delete(id, status) {
        $.ajax({
            type: "POST",
            url: 'delete.php',
            data: {
                'id': id
            },
            success: function(data) {
                location.reload(true);
            }
        });
    }
</script>