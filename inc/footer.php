<section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur obcaecati quae labore deleniti asperiores voluptatibus, unde vel quam placeat aperiam laboriosam itaque possimus perspiciatis quis eaque tempore, porro, nesciunt ipsum!</p>
                </div>
                <div class="footer-center">
                    <h3>USEFUL LINKS</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="booking.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>Sudal-9,Bhaktapur <br>+977 --------<br>www.swiftstay.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        
                        Sun: 6AM-10PM
                    </div>
                  
                    <div>
                       
                       Mon-wed: 8AM-9PM
                    </div>
                    <div>
                       Thu: 7AM-10PM
                    </div>
                    <div>
                   Fri & Sat: 5AM-11PM
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>