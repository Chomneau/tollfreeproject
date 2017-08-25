<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>add New</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form_template_style.css"/>
</head>

<body>
<br />
<div class="inner contact">
    <!-- Form Area -->
    <div class="contact-form">
        <!-- Form -->
        <form id="contact-us" method="post" action="#">
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                    <!-- Name -->
                    <input type="text" name="name" id="name" required="required" class="form" placeholder="Title" />
                    <!-- Message -->
                    <textarea name="message" id="message" class="form textarea"  placeholder="Description"></textarea>
                </div><!-- End Right Inputs -->
            </div><!-- End Left Inputs -->
            <!-- Right Inputs -->
            <!-- Input Khmer Description-->
            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                <!-- ចំណងជើង -->
                <input type="text" name="name" id="name" required="required" class="form" placeholder="ចំណងជើង" />
                <!-- ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ -->
                <textarea name="message" id="message" class="form textarea"  placeholder="ព័ត៌មាន​លំអិត សូម​សរសេរ​នៅ​ទីនេះ "></textarea>
            </div><!-- End Right Inputs -->



            <!-- Bottom Submit -->

            <div class="relative fullwidth col-xs-12">
                <!-- Send Button -->
                <button type="submit" id="submit" name="submit" class="form-btn semibold">Save Now</button>
            </div><!-- End Bottom Submit -->
            <!-- Clear -->
            <div class="clear"></div>
        </form>

        <!-- Your Mail Message -->
        <div class="mail-message-area">
            <!-- Message -->
            <div class="alert gray-bg mail-message not-visible-message">
                <strong>Thank You !</strong> Your email has been delivered.
            </div>
        </div>

    </div><!-- End Contact Form Area -->
</div><!-- End Inner -->




</body>
</html>
