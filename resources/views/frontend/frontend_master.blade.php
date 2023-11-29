<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/img/logo-qwords-tb.png" />
        <!-- CSS LINK -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css?v=3') }}" />
        <!-- BOOTSTRAP LINK -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
        <!-- BOX ICON LINK -->
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
        <!-- FONT AWSOME LINK -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!-- SCROLL ANIMATION LINK -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
        <title>Qwords - Cloud Web Hosting</title>
    </head>
    <body>
        <!-- START NAVBAR -->
        @include('frontend.body.navbar')
        <!-- END NAVBAR -->

        <!-- START HEADER -->
        @include('frontend.body.header')
        <!-- END HEADER -->
        

        <!-- MAIN START -->
        @yield('main')
        <!-- MAIN END -->
       
        <div class="customer-service-icon">
            <img
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI0NyIgaGVpZ2h0PSIxMjQ3IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Ik0zNDYuNjY2IDk1Mi43MDhhMjQ2LjkwNiAyNDYuOTA2IDAgMSAxIDAtNDkzLjgxMnY0OTMuODEyWk05MDAuMzM0IDk1Mi43MDhhMjQ2Ljg5NCAyNDYuODk0IDAgMCAwIDE3NC41ODYtNzIuMzE2IDI0Ni44ODggMjQ2Ljg4OCAwIDAgMCA3Mi4zMi0xNzQuNTkgMjQ2Ljg4OCAyNDYuODg4IDAgMCAwLTcyLjMyLTE3NC41OSAyNDYuODk4IDI0Ni44OTggMCAwIDAtMTc0LjU4Ni03Mi4zMTZ2NDkzLjgxMloiIGZpbGw9IiNERDgzMUQiLz48cGF0aCBkPSJNMjU5LjM3NiA0OTguOGMwLTQ4MS41MSA3MzMuMjM2LTUwMi42NzUgNzMzLjIzNiAwIiBzdHJva2U9IiNCRDcwMTkiIHN0cm9rZS13aWR0aD0iMTgiLz48cGF0aCBkPSJtNjE4LjUxMiAxMTI5Ljc4IDMzOC41MDEtNzkuMzhWOTAyLjgyOCIgc3Ryb2tlPSIjQkQ3MDE5IiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiLz48cGF0aCBkPSJtNzcxLjk4OCAxMDI4Ljc4LTE3My4zOTkgMzIuNWMtMzMuMDc0IDYuMTktNTQuODYgMzguMDMtNDguNjYxIDcxLjEgNi4xOTggMzMuMDggMzguMDM1IDU0Ljg2IDcxLjEwOCA0OC42N2wxNzMuNC0zMi41YzMzLjA3My02LjIgNTQuODU5LTM4LjA0IDQ4LjY2MS03MS4xMS02LjE5OS0zMy4wOC0zOC4wMzYtNTQuODYtNzEuMTA5LTQ4LjY2WiIgZmlsbD0iI0REODMxRCIvPjwvc3ZnPg=="
                alt="Customer Service"
                id="customerServiceIcon" />
        </div>

        <div class="chat-room" id="chatRoom">
            <!-- Tombol untuk menutup kotak obrolan -->
            <div class="chat-header py-2 px-3">
                <h3 class="mb-0">Customer Service</h3>
                <button id="closeButton" class="btn btn-link p-0" style="text-decoration: none"><i class="bx bx-x"></i></button>
            </div>

            <!-- Isi kotak obrolan -->
            <div class="chat-messages">
                <div class="chat-bubble-container">
                    <div class="chat-bubble">Hi, Filla!</div>
                    <div class="chat-bubble">Ada yang bisa kami bantu??</div>
                    <div class="chat-bubble user">Ya, saya memiliki pertanyaan</div>
                </div>
            </div>
            <textarea id="chatInput" placeholder="Type your message..."></textarea>
            <!-- <button id="sendButton">Send</button> -->
        </div>

        <!-- Tombol untuk scroll ke atas -->
        <button id="scrollToTopButton" class="hidden btn btn-link" style="text-decoration: none"><i class="bx bxs-arrow-to-top"></i></button>

        <!-- START FOOTER -->
        @include('frontend.body.footer')
        <!-- END FOOTER -->

        <!-- SCRIPT LINK -->
        <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SCRIPT FONT AWSOME -->
        <script src="https://kit.fontawesome.com/16045a86f1.js" crossorigin="anonymous"></script>
        <!-- SCRIPT SCROLL ANIMATION -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
        <script>
            const navbar = document.querySelector("nav");
            window.onscroll = () => {
                if (window.scrollY > 300) {
                    navbar.classList.add("nav-active");
                } else {
                    navbar.classList.remove("nav-active");
                }
            };
        </script>
        <script>
            let navLinks = document.querySelector(".nav-links");
            let menuOpenBtn = document.querySelector(".navbar .bx-menu");
            let menuCloseBtn = document.querySelector(".nav-links .bx-x");
            menuOpenBtn.onclick = function () {
                navLinks.style.left = "0";
            };
            menuCloseBtn.onclick = function () {
                navLinks.style.left = "-100%";
            };

            // sidebar submenu open close js code
            let htmlcssArrow = document.querySelector(".htmlcss-arrow");
            htmlcssArrow.onclick = function () {
                navLinks.classList.toggle("show1");
            };
            let cloudhosArrow = document.querySelector(".cloudhos-arrow");
            cloudhosArrow.onclick = function () {
                navLinks.classList.toggle("show2");
            };
            let serverArrow = document.querySelector(".server-arrow");
            serverArrow.onclick = function () {
                navLinks.classList.toggle("show3");
            };
            let emailArrow = document.querySelector(".email-arrow");
            emailArrow.onclick = function () {
                navLinks.classList.toggle("show4");
            };
            let servicesArrow = document.querySelector(".services-arrow");
            servicesArrow.onclick = function () {
                navLinks.classList.toggle("show5");
            };
            let internetArrow = document.querySelector(".internet-arrow");
            internetArrow.onclick = function () {
                navLinks.classList.toggle("show6");
            };
        </script>
        <script>
            $(".app-slider").slick({
                arrows: true,
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                responsive: [
                    {
                        breakpoint: 920,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".your-class").slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            },
                        },
                    ],
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".your-class-2").slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                autoplay: true,
                                autoplaySpeed: 2000,
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            },
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                autoplay: true,
                                autoplaySpeed: 2000,
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            },
                        },
                    ],
                });
            });
        </script>
        <script>
            let faqLabel = document.querySelectorAll(".faq-label");

            faqLabel.forEach(
                (item) =>
                    (item.onclick = () => {
                        //selektuje Answer
                        item.nextElementSibling.classList.toggle("active");

                        let labelIcon = item.lastElementChild;
                        let icons = labelIcon.lastElementChild;
                        icons.classList.toggle("rotate");
                    })
            );
        </script>
        <script>
            var Countdown = function (options) {
                this.options = {
                    $elem: options.$elem || undefined,
                    elemSelector: options.elemSelector || "data-countdown",
                    startDate: options.startDate || new Date(),
                    endDate: options.endDate || new Date(new Date().getTime() + 5 * 24 * 60 * 60 * 1000),
                    leadingZero: options.leadingZero !== undefined ? options.leadingZero : true,
                    setCssProperties: options.setCssProperties !== undefined ? options.setCssProperties : true,
                    separateDigits: options.separateDigits !== undefined ? options.separateDigits : true,
                    nextDigits: options.nextDigits !== undefined ? options.nextDigits : true,
                    labels: options.labels || {
                        days: "Hari",
                        hours: "Jam",
                        minutes: "Menit",
                        seconds: "Detik",
                    },
                    ariaLabels: options.ariaLabels || {
                        time: "%days, %hours, %minutes, and %seconds remaining",
                        days: {
                            zero: "%d days",
                            single: "%d day",
                            plural: "%d days",
                        },
                        hours: {
                            zero: "%d hours",
                            single: "%d hour",
                            plural: "%d hours",
                        },
                        minutes: {
                            zero: "%d minutes",
                            single: "%d minute",
                            plural: "%d minutes",
                        },
                        seconds: {
                            zero: "%d seconds",
                            single: "%d second",
                            plural: "%d seconds",
                        },
                    },
                };

                // Initialise
                this.$elem = this.options.$elem || document.querySelector(options.elemSelector);
                this.startDate = new Date(this.options.startDate);
                this.endDate = new Date(this.options.endDate);
                this.ticker = 0;
                this.$elem.querySelector(".days .label").innerText = this.options.labels.days;
                this.$elem.querySelector(".hours .label").innerText = this.options.labels.hours;
                this.$elem.querySelector(".minutes .label").innerText = this.options.labels.minutes;
                this.$elem.querySelector(".seconds .label").innerText = this.options.labels.seconds;

                // Start ticker
                this.update();
                this.run();
            };

            Countdown.prototype.getLabel = function (labelSet, labelName, value) {
                if (["labels", "ariaLabels"].indexOf(labelSet) === -1) {
                    throw new Error("Invalid labelSet given: must be labels or ariaLabels");
                }
                if (["days", "hours", "minutes", "seconds"].indexOf(labelName) === -1) {
                    throw new Error("Invalid labelName given: must be days, hours, minutes or seconds");
                }
                var valueQuant = value === 0 ? "zero" : value === 1 ? "single" : "plural";
                return this.options[labelSet][labelName][valueQuant].replace("%d", value);
            };

            Countdown.prototype.leadingZero = function (value, length) {
                if (this.options.leadingZero && String(value).length < length) {
                    var padLength = length - String(value).length;
                    var output = String(value);
                    for (var i = 0; i < padLength; i++) {
                        output = "0" + output;
                    }
                    return output;
                }
                return value;
            };

            Countdown.prototype.separateDigits = function (value) {
                if (this.options.separateDigits && String(value).length) {
                    var _value = String(value).split("");
                    var output = "";
                    for (var i = _value.length - 1; i >= 0; i--) {
                        var digit = parseInt(_value[i], 10);
                        output = '<span class="digit digit-' + Math.pow(10, _value.length - 1 - i) + '"' + (this.options.nextDigits ? ' data-countdown-next-digit="' + ((digit + 1) % 10) + '"' : "") + ">" + digit + "</span>" + output;
                    }
                    return output;
                } else {
                    return value;
                }
            };

            Countdown.prototype.update = function () {
                var now = new Date();

                var diffSeconds = Math.floor((this.endDate.getTime() - now.getTime()) / 1000);
                var diffMinutes = Math.floor(diffSeconds / 60);
                var diffHours = Math.floor(diffSeconds / 3600);
                var diffDays = Math.floor(diffSeconds / 86400);

                var days = 0;
                var hours = 0;
                var minutes = 0;
                var seconds = 0;

                if (this.startDate <= now && this.endDate > now) {
                    seconds = diffSeconds % 60;
                    minutes = diffMinutes % 60;
                    hours = diffHours % 24;
                    days = diffDays;
                }

                // Update title/aria label
                var ariaLabel = this.options.ariaLabels.time
                    .replace("%days", this.getLabel("ariaLabels", "days", days))
                    .replace("%hours", this.getLabel("ariaLabels", "hours", hours))
                    .replace("%minutes", this.getLabel("ariaLabels", "minutes", minutes))
                    .replace("%seconds", this.getLabel("ariaLabels", "seconds", seconds));
                this.$elem.setAttribute("title", ariaLabel);
                this.$elem.setAttribute("aria-label", ariaLabel);

                // Update visible amounts
                this.$elem.querySelector(".seconds .amount").innerHTML = this.separateDigits(this.leadingZero(seconds, 2));
                this.$elem.querySelector(".minutes .amount").innerHTML = this.separateDigits(this.leadingZero(minutes, 2));
                this.$elem.querySelector(".hours .amount").innerHTML = this.separateDigits(this.leadingZero(hours, 2));
                this.$elem.querySelector(".days .amount").innerHTML = this.separateDigits(this.leadingZero(days, 2));

                // Next digits
                if (this.options.nextDigits) {
                    this.$elem.querySelector(".seconds .amount").setAttribute("data-countdown-next-digits", (seconds + 1) % 60);
                    this.$elem.querySelector(".minutes .amount").setAttribute("data-countdown-next-digits", (minutes + 1) % 60);
                    this.$elem.querySelector(".hours .amount").setAttribute("data-countdown-next-digits", (hours + 1) % 24);
                    this.$elem.querySelector(".days .amount").setAttribute("data-countdown-next-digits", days + 1);
                }

                // Update CSS properties
                if (this.options.setCssProperties) {
                    var maxDiffSeconds = Math.floor((this.endDate.getTime() - this.startDate.getTime()) / 1000);
                    var maxDiffMinutes = Math.floor(maxDiffSeconds / 60);
                    var maxDiffHours = Math.floor(maxDiffSeconds / 3600);
                    var maxDiffDays = Math.floor(maxDiffSeconds / 86400);

                    this.$elem.style.setProperty("--countdown-percent", maxDiffSeconds > 0 ? diffSeconds / maxDiffSeconds : 0);
                    this.$elem.style.setProperty("--countdown-percent-seconds", maxDiffSeconds > 0 ? diffSeconds / maxDiffSeconds : 0);
                    this.$elem.style.setProperty("--countdown-percent-minutes", maxDiffMinutes > 0 ? diffMinutes / maxDiffMinutes : 0);
                    this.$elem.style.setProperty("--countdown-percent-hours", maxDiffHours > 0 ? diffHours / maxDiffHours : 0);
                    this.$elem.style.setProperty("--countdown-percent-days", maxDiffDays > 0 ? diffDays / maxDiffDays : 0);
                }
            };

            Countdown.prototype.run = function () {
                var self = this;
                var now = new Date();

                self.update();

                if (now < this.endDate) {
                    self.ticker = setTimeout(function () {
                        self.run();
                    }, 1000);
                } else {
                    clearTimeout(self.ticker);
                    self.$elem.setAttribute("data-countdown-ended", true);
                }
            };

            /**
             * Initialise countdowns on HTML elements
             */
            var countdowns = document.querySelectorAll("[data-countdown]");
            if (countdowns.length > 0) {
                for (var i = 0; i < countdowns.length; i++) {
                    var leadingZero = countdowns[i].getAttribute("data-countdown-option-leadingzero");
                    var setCssProperties = countdowns[i].getAttribute("data-countdown-option-setcssproperties");
                    var separateDigits = countdowns[i].getAttribute("data-countdown-option-separatedigits");
                    var nextDigits = countdowns[i].getAttribute("data-countdown-option-nextdigits");

                    leadingZero = leadingZero === true || leadingZero === "true" || leadingZero === "1" || leadingZero === 1 ? true : false;

                    setCssProperties = setCssProperties === true || setCssProperties === "true" || setCssProperties === "1" || setCssProperties === 1 ? true : false;

                    separateDigits = separateDigits === true || separateDigits === "true" || separateDigits === "1" || separateDigits === 1 ? true : false;

                    nextDigits = nextDigits === true || nextDigits === "true" || nextDigits === "1" || nextDigits === 1 ? true : false;

                    new Countdown({
                        $elem: countdowns[i],
                        startDate: countdowns[i].getAttribute("data-countdown-option-startdate"),
                        endDate: countdowns[i].getAttribute("data-countdown"),
                        leadingZero: leadingZero,
                        setCssProperties: setCssProperties,
                        separateDigits: separateDigits,
                        nextDigits: nextDigits,
                    });
                }
            }
        </script>
        <!-- SCRIPT VIEW MORE -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var moreButton = document.getElementById("viewMoreButton");
                var hiddenBoxes = document.querySelectorAll(".hidden");
                var isExpanded = false;

                moreButton.addEventListener("click", function () {
                    if (!isExpanded) {
                        for (var i = 0; i < hiddenBoxes.length; i++) {
                            hiddenBoxes[i].classList.remove("hidden");
                        }
                        this.textContent = "View Less";
                    } else {
                        for (var i = 0; i < hiddenBoxes.length; i++) {
                            hiddenBoxes[i].classList.add("hidden");
                        }
                        this.textContent = "View More";
                    }
                    isExpanded = !isExpanded;
                });
            });
        </script>
        <!-- SCRIPT CUST SERVICE -->
        <script>
            document.getElementById("closeButton").addEventListener("click", function () {
                document.getElementById("chatRoom").style.display = "none";
            });

            document.getElementById("customerServiceIcon").addEventListener("click", function () {
                document.getElementById("chatRoom").style.display = "block";
            });

            document.addEventListener("click", function (e) {
                if (!document.getElementById("chatRoom").contains(e.target) && e.target !== document.getElementById("customerServiceIcon")) {
                    document.getElementById("chatRoom").style.display = "none";
                }
            });
        </script>
        <!-- SCRIPT SCROLL ON TOP -->
        <script>
            window.addEventListener("scroll", function () {
                var scrollToTopButton = document.getElementById("scrollToTopButton");
                if (window.pageYOffset > 100) {
                    scrollToTopButton.style.display = "block";
                } else {
                    scrollToTopButton.style.display = "none";
                }
            });

            document.getElementById("scrollToTopButton").addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth", // Animasi scroll
                });
            });
        </script>
        <!-- SCRIPT COUNT -->
        <script>
            function isElementInViewport(elem) {
                var rect = elem.getBoundingClientRect();
                return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
            }

            function startCountAnimation() {
                $(".count").each(function () {
                    var $this = $(this);
                    if (isElementInViewport($this[0]) && !$this.data("counted")) {
                        $this.data("counted", true);
                        var countEnd = parseInt($this.text());
                        $this.text("0"); // Set initial count to 0

                        $({ count: 0 }).animate(
                            { count: countEnd },
                            {
                                duration: 4000,
                                easing: "swing",
                                step: function () {
                                    $this.text(Math.ceil(this.count));
                                },
                            }
                        );
                    }
                });
            }

            $(document).ready(function () {
                startCountAnimation();
            });

            $(window).on("scroll", function () {
                startCountAnimation();
            });
        </script>
    </body>
</html>
