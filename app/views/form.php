<?php
$msg = isset($error) ? $error['msg'] : null;
$visibility = $msg ? 'visible' : 'hidden';
?>
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
</HEAD>
<BODY>
<div class="container">
    <div class="alert alert-danger" role="alert" style="height: 50px; visibility: <? echo $visibility ?>">
        <? echo $msg?>
    </div>


    <div class="container px-1 px-sm-5 mx-auto">
        <form autocomplete="off" action = "/convertor" method = "post">
            <div class="flex-row d-flex justify-content-center">
                <div class="col-lg-6 col-11 px-1">
                    <div class="input-group input-daterange">
                        <input type="text" id="start" name="start" class="form-control text-left mr-2" required>
                        <label class="ml-3 form-control-placeholder" id="start-p" for="start">Start Date</label>
                        <span class="fa fa-calendar" id="fa-1"></span>
                        <input type="text" id="end" name="end" class="form-control text-left ml-2" required>
                        <label class="ml-3 form-control-placeholder" id="end-p" for="end">End Date</label>
                        <span class="fa fa-calendar" id="fa-2"></span>
                    </div>
                    <input type="submit" value="Submit" id ="submit" style="width: 100%; margin-top: 10px; padding: 10px !important;">
                </div>
            </div>

        </form>
<script>
    $(document).ready(function(){
        $('.input-daterange').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            calendarWeeks : true,
            clearBtn: true,
            disableTouchKeyboard: true
        });
    });
</script>
    </div>

<!--    <form action = "/convertor" method = "get">-->
<!--        <div class="mb-3">-->
<!--            <label for="start" class="form-label">Start Date</label>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    class="form-control"-->
<!--                    name="start"-->
<!--                    id='start'-->
<!--                    required>-->
<!--        </div>-->
<!--        <div class="mb-3">-->
<!--            <label for="end" class="form-label">Start Date</label>-->
<!--            <input-->
<!--                    type="date"-->
<!--                    class="form-control"-->
<!--                    name="end"-->
<!--                    id='end'-->
<!--                    required>-->
<!--        </div>-->
<!---->
<!--        <input type="submit" value="Submit" id ="submit">-->
<!--    </form>-->
<!--    <script>-->
<!--        $(function() {-->
<!--            $(".datepicker").datepicker({});-->
<!--        });-->
<!--    </script>-->
</div>

</BODY>
</HTML>
