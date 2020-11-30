<script>

    //ajax function to update 
    function ajaxCard(name, desc, phone)
    {

        //ajax function
        $.ajax({

            type: "POST",
            url: "./Controller/ajax-record.php",
            data: "name=" + name + "&desc=" + desc + "&phone=" + phone,
            success: function(data){
                $("#nah").html(data);
            },
            error: function(){
                alert('An error occured while trying to add your Hot Sauce Jot');
            },
        })

    }
 
</script>