<?php include('partials-front/menu.php'); ?>


 <!-- fOOD sEARCH Section Starts Here -->
 <section class="food-contact text-center">
        <div class="container">
            
           <h1 style="color:white; font-size:30px; ">Contact Us</h1>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <div class="main-content">
    <div class="wrapper">
        <h1>Contact Us</h1>

        <br><br>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Email Address: </td>
                    <td>
                        <input type="email" name="email" placeholder="Your Email">
                    </td>
                </tr>

                <tr>
                    <td>Phone Number: </td>
                    <td>
                        <input type="text" name="Phone" placeholder="Your Phone Number">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-primary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>







<?php include('partials-front/footer.php'); ?>