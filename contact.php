<h2 class="sectionHeadingLight"> Reach Out </h2>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6" id="contactImage">
            <center>
                <img src="images/contact.png" class="img-fluid">
            </center>
        </div>
        <div class="col-md-6">
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" id="name"> 
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your Email" id="email"> 
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" id="phone"> 
                </div>
                <div class="form-group">
                    <label for="msg">Messsage</label>
                    <textarea id="msg" name="message" class="form-control" placeholder="Type in your message..."></textarea>
                </div>
                <br>
                <center>
                    <button id="submitForm" class="btn btn-themed-dark">Reach Out</button>
                </center>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '#submitForm', function(e){
        e.preventDefault();
        var data = $('#contactForm').serialize();
        console.log(data);
    });
</script>