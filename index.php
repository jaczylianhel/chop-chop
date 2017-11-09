<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Merriweather" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <title>Chop-Chop</title>
</head>

<body>

    <div id="logo">
        <center><img src="logo.png" alt="logo"></center>
    </div>

    <header>
        <nav>
            <ul>
                <a class="class-menu menu active" href="potwierdzenie.html">Home</a><a class="menu" href="#">Products</a><a class="menu" href="#">About us</a><a class="menu" href="#">Contact</a>
            </ul>
        </nav>
    </header>

    <section>
        <div class="session_button">

            <?php 
            if(isset($_GET['text_c'])){
 echo '<h1 style="color:'.$_GET['text_c'].'">'.$_GET['text'].'</h1>'; // zmienne text_C - zmiana koloru  text - zmiana tekstu
            }else{ echo '<h1>This is just a sample page</h1>';}
            
            ?>
            <center><button id="ipsum"> push the button</button></center>
        </div>

        <table class="art">
            <thead>
                <td>A heading title</td>
                <td>A much longer heading title</td>
                <td>A heading title</td>
            </thead>
            <tbody id='ips'>
                <tr>
                    <td>
                        <img src="logo_greengo.jpg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
                        <p class="clear"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>
                        <p class="hide1">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </td>
                    <td>
                        <img src="logo_greengo.jpg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
                        <p class="clear"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <p class="hide2">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </td>
                    <td>
                        <img src="logo_greengo.jpg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
                        <p class="clear"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>
                        <p class="hide3">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </td>
                </tr>
                <tr class="more">
                    <td class='read1'>-read more</td>
                    <td class='read2'>-read more</td>
                    <td class='read3'>-read more</td>
                </tr>
            </tbody>
        </table>
    </section>
    <div class="contact">
        <h1>Contact us</h1>
        <form id="form" method="get" action="post.php">
            <div class="put-left">
                <input class="left" type="text" name="name" id="name" value="name" /><br>
                <input class="left" type="text" name="email" id="email" value="email" /></br>
                <input class="left" type="text" name="phone" id="phone" value="phone" /><br>
            </div>
            <div class="put-right">
                <textarea name="message" placeholder="Napisz tu wiadomość"></textarea>
            </div>
            <div class="put-clear">
                <input class="submit" name="submit" type="submit" value="send message">
            </div>
        </form>
    </div>

    <div id="info"></div>


    <center><button id="scroll" class="top">back to top </button></center>
    <footer>

        <div class='first foot'>
            <a href="#">-home</a><br>
            <a href="#">-products</a>
        </div>
        <div class="second foot">
            <a href="#">-about us</a><br>
            <a href="#">-contact</a>
        </div>

        <div class="third foot">
            <a href="#"><img src="twitter.png" alt="twitter"></a>
            <a href="#"><img src="facebook.png" alt="facebook"></a>
        </div>
        <div class="fourth foot"><span>Copyright &copy 2010 Sample & Pack, Inc. </span></div>
    </footer>



    <script>
        $(document).ready(function() {
            $('#scroll').click(function() {
                $('body, html').animate({
                    scrollTop: $('body').offset().top
                }, 1000);
            }); //koniec funkcji scroll

            $('.hide1').hide();
            $('.hide2').hide();
            $('.hide3').hide();
            $('.read1').click(function() {
                var $answer = $('.hide1');
                if ($answer.is(':hidden')) {
                    $answer.slideDown();
                } else {
                    $answer.fadeOut();
                }
            });
            $('.read2').click(function() {
                var $answer = $('.hide2');
                if ($answer.is(':hidden')) {
                    $answer.slideDown();
                } else {
                    $answer.fadeOut();
                }
            });
            $('.read3').click(function() {
                var $answer = $('.hide3');
                if ($answer.is(':hidden')) {
                    $answer.slideDown();
                } else {
                    $answer.fadeOut();
                }
            });
            $('.submit').click(function() {
                $('.contact').toggleClass("contact2");
                console.log('click');
                // return false;
            });
            $('#ipsum').hover(function() {
                $('header nav a').toggleClass('active');
            })
            $('#form').submit(function() {

                var dane = $(this).serialize();
                $.post('post.php', dane, processdata);

                function processdata(data) {
                    if (data) {
                        $('#info').html('<center><p>Dziękujemy za wysłanie formularza z następującymi danymi</p></center>');
                    } else {
                        $('#info').html('<center><p>Brak danych do wyświetlenia</p></center>')
                    }
                }
                return false;
            });
            $("#ipsum").click(function() {
                setTimeout(function() {
                    const word = 'ipsum';
                    t = document.getElementById('ips');
                    var tag = t.getElementsByTagName('td').length;
                    for (var j = 0; j < tag; j++) {
                        var td = t.getElementsByTagName('td')[j].innerHTML;

                        var arr = td.split(" ")
                        var length = arr.length;
                        for (var x = 0; x < length; x++) {
                            if (arr[x].toLowerCase() == word) {
                                arr.splice(x, 1, '<span class="red">' + word + '</span>');
                            }
                            var arrNew = arr.join(" ");
                            t.getElementsByTagName('td')[j].innerHTML = arrNew;
                        }
                    } //koniec pętli J
                }, 3000);
            }); //koniec funkcji ipsum
        });

    </script>
</body>

</html>
