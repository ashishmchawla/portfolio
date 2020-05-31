<h2 class="sectionHeadingLight"> Reach Out </h2>
<br>
<div class="container">
    <form id="contactForm">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" required class="form-control" placeholder="Enter your name" id="name"> 
                    <span id="nameBlank" style="display:none;">Please enter your name</span>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" required class="form-control" placeholder="Enter your Email" id="email"> 
                    <span id="emailBlank" style="display:none;">Please enter your email</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" id="phone"> 
                </div>
                <div class="form-group">
                    <label for="msg">Messsage</label>
                    <textarea id="msg" name="message" class="form-control" placeholder="Type in your message..."></textarea>
                </div>
                <br>
            </div>
            <div class="col-md-12">
                <center>
                    <button id="submitForm"  rows="1" class="btn btn-themed-dark">Reach Out</button>
                </center>
            </div>
        </div>
    </form>
    <div id="received" style="display:none;padding:10%">
        <h4>Your messaged has been received, I'll get in touch with you shortly!</h4>
    </div>
</div>

<script>
    $(document).on('click', '#submitForm', function(e){
        e.preventDefault();
        var errors = 0; 
        var dataLog = $('#contactForm').serialize();

        if( $('#name').val() == '' || $('#name').val() == null ) {
            $('#name').css('border-bottom-color:red');
            $('#nameBlank').css('display', 'block');
            errors++;
        } else {
            $('#name').css('border-bottom-color:#2b7a78');
            $('#nameBlank').css('display', 'none');
        }

        if( $('#email').val() == '' || $('#email').val() == null ) {
            $('#email').css('border-bottom-color:red');
            $('#emailBlank').css('display', 'block');
            errors++;
        } else {
            $('#email').css('border-bottom-color:#2b7a78');
            $('#emailBlank').css('display', 'none');
           
        }
        if( errors == 0 ) {
            $.ajax({
                url: './enquiry.php',
                data: dataLog, 
                type: 'POST'
            }).done(function(response) {
                console.log(response);
                $("#contactForm").css('display','none');
                $("#received").css('display','block');
            
            });
        }

    });
</script>