<?php


?>
<!doctype html>
<html lang="en">
<head>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCXS5FS"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="myModal" class="visible-modal">

    <!-- Modal content -->
    <div class="modal-content">

        <h2>Give us a way to send you a ticket</h2>
        <form class="text-center">
            <div class="form-group">
                <div>
                    <label class="form-label">
                        Phone number:
                        <input type="text" name="phone number"
                               class="form-control"
                               autofocus>
                    </label>
                </div>
                <br>
                <label class="form-label">
                    email:
                    <input type="text" name="phone number"
                           class="form-control"
                           autofocus>
                </label>
            </div>

        </form>
        <div class="container">
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-3">
                    <button id="cancelBtn" type="button" ><div id="cancelText" >Cancel</div></button>
                </div>
                <div class="col-3">
                    <button id="ticketBtn" type="button" ><div id="ticketText" >Get My ticket</div></button>

                </div>
            </div>

        </div>

    </div>

</div>

<style>

    .dark-green-text{

        position: static;
        width: 123px;
        height: 24px;
        left: 38.5px;
        top: 12px;

        /* Button/semibold/large */

        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height, or 150% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 1.25px;

        /* white */

        color: #FFFFFF;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 0px 8px;
    }

    .light-green-text{
        position: static;
        width: 61px;
        height: 24px;
        left: 69.5px;
        top: 12px;

        /* Button/semibold/large */

        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height, or 150% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 1.25px;

        /* Primary/500 */

        color: #209F85;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 0px 8px;
    }
    .dark-green-button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        padding: 12px 20px;

        /*position: absolute;*/
        width: 200px;
        height: 48px;
        left: 727px;
        top: 543px;

        /* Primary/500 */

        background: #209F85;
        border: #209F85;
        border-radius: 24px;
    }

    .light-green-button{
        /* Auto layout */

        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        padding: 12px 20px;

        /*position: absolute;*/
        width: 200px;
        height: 48px;
        left: 507px;
        top: 543px;

        /* white */

        background: #FFFFFF;
        /* Primary/500 */

        border: 2px solid #209F85;
        box-sizing: border-box;
        border-radius: 24px;
    }

    /*red*/

    .dark-red-text{

        position: static;
        width: 123px;
        height: 24px;
        left: 38.5px;
        top: 12px;

        /* Button/semibold/large */

        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height, or 150% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 1.25px;

        /* white */

        color: #FFFFFF;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 0px 8px;
    }

    .light-red-text{
        position: static;
        width: 61px;
        height: 24px;
        left: 69.5px;
        top: 12px;

        /* Button/semibold/large */

        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height, or 150% */

        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 1.25px;

        /* Primary/500 */

        color: #8B0000;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 0px 8px;
    }
    .dark-red-button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        padding: 12px 20px;

        /*position: absolute;*/
        width: 200px;
        height: 48px;
        left: 727px;
        top: 543px;

        /* Primary/500 */

        background: #8B0000;
        border: #8B0000;
        border-radius: 24px;
    }

    .light-red-button{
        /* Auto layout */

        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        padding: 12px 20px;

        /*position: absolute;*/
        width: 200px;
        height: 48px;
        left: 507px;
        top: 543px;

        /* white */

        background: #FFFFFF;
        /* Primary/500 */

        border: 2px solid #8B0000;
        box-sizing: border-box;
        border-radius: 24px;
    }

    .visible-modal {
        /*display:?/ none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        align-items: center;
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

</body>
</html>
<script>
    function main() {
        var color = chooseColor();

        document.getElementById("ticketBtn").addEventListener("click", function () {
            console.log("Sending request!")
            $.ajax({
                method: "POST",
                url: "postData.php",
                dataType: 'json',
                data: {click: '1', color: color}
            })
                .done(function (response) {
                    $("p.broken").html(response);
                });

        });
        document.getElementById("cancelBtn").addEventListener("click", function () {

            $.ajax({
                method: "POST",
                url: "postData.php",
                dataType: 'json',
                data: {click: '0', color: color}
            })
                .done(function (response) {
                    $("p.broken").html(response);
                });
        });
    }
    window.onload = main;

    function chooseColor(){
       var i = getRndInteger(0,100);
       if(i >= 50){
           document.getElementById("ticketBtn").classList.add("dark-red-button");
           document.getElementById("ticketText").classList.add("dark-red-text");
           document.getElementById("cancelBtn").classList.add("light-red-button");
           document.getElementById("cancelText").classList.add("light-red-text");
           return "red";
       }else{
           document.getElementById("ticketBtn").classList.add("dark-green-button");
           document.getElementById("ticketText").classList.add("dark-green-text");
           document.getElementById("cancelBtn").classList.add("light-green-button");
           document.getElementById("cancelText").classList.add("light-green-text");
           return "green";
       }
    }

    function getRndInteger(min, max) {
        return Math.floor(Math.random() * (max - min + 1) ) + min;
    }
</script>