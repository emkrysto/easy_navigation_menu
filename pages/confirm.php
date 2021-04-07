<h1>Confirm box</h1>
<h2>I'll show you how to use JQuery UI Dialog Window</h2>

<script>
    $(document).ready(function () {   
        $("body").uiConfirm("This is the JQuery UI dialog box which is useful for Confirm action!", function () {
                $("body").uiAlert("Confirmed!", "", "", "Info" );
            }, function () { 
                $("body").uiAlert("Not confirmed!", "", "", "Info" );
            },
            'Confirm'
        );
     })
</script>